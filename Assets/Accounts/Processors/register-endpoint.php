<?php
/**
 * Database Connection and Registration Processor
 * 
 * Version: 1.0.0
 * Last Updated: 2025-03-23
 * 
 * Description:
 * This endpoint processes user registration requests. It validates incoming form data:
 * - All fields are required.
 * - Password must be at least 8 characters.
 * - Phone number must be exactly 10 digits.
 * - Password and confirm password must match.
 * 
 * On successful validation, it checks for duplicate email registration and inserts the new user record into the `users` table.
 * If any error occurs or validation fails, a JSON response is returned with an error status and a user-friendly message.
 * 
 * Usage:
 * Send a POST request with the following parameters:
 * - firstname, lastname, phone, reg-email, address, reg-password, confirm-password
 * 
 * The endpoint returns a JSON object:
 * { "status": "success", "message": "Registration successful." }
 * or
 * { "status": "error", "message": "Detailed error message." }
 * 
 * Additionally, this script logs events using Database::logToTable("Your log message").
 */

header('Content-Type: application/json');

require_once '../../Connectors/main.php';

function sendResponse($status, $message) {
    Database::logToTable("Registration response: $status - $message");
    echo json_encode(['status' => $status, 'message' => $message]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendResponse('error', 'Invalid request method.');
}

$firstName = trim($_POST['firstname'] ?? '');
$lastName = trim($_POST['lastname'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$email = trim($_POST['reg-email'] ?? '');
$address = trim($_POST['address'] ?? '');
$password = $_POST['reg-password'] ?? '';
$confirmPassword = $_POST['confirm-password'] ?? '';

if (!$firstName || !$lastName || !$phone || !$email || !$address || !$password || !$confirmPassword) {
    sendResponse('error', 'All fields are required.');
}

if (strlen($password) < 8) {
    sendResponse('error', 'Password must be at least 8 characters long.');
}

if (!preg_match('/^\d{10}$/', $phone)) {
    sendResponse('error', 'Phone number must be exactly 10 digits.');
}

if ($password !== $confirmPassword) {
    sendResponse('error', 'Passwords do not match.');
}

try {
    $db = new Database();
    $pdo = $db->getConnection();

    $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = :email");
    $stmt->execute([':email' => $email]);
    if ($stmt->fetchColumn() > 0) {
        sendResponse('error', 'Email already registered.');
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $userId = uniqid('user_', true);

    $stmt = $pdo->prepare("INSERT INTO users (userId, firstName, lastName, phone, email, address, password, status) VALUES (:userId, :firstName, :lastName, :phone, :email, :address, :password, 'Offline')");
    $stmt->execute([
        ':userId'    => $userId,
        ':firstName' => $firstName,
        ':lastName'  => $lastName,
        ':phone'     => $phone,
        ':email'     => $email,
        ':address'   => $address,
        ':password'  => $hashedPassword
    ]);

    sendResponse('success', 'Registration successful.');
} catch (PDOException $e) {
    Database::logToTable("Registration exception: " . $e->getMessage());
    sendResponse('error', 'Registration failed. Please try again later.');
}
?>
