<?php
session_start();
header('Content-Type: application/json');

/**
 * Login Processor
 * 
 * Version: 1.0.0
 * Last Updated: 2025-03-23
 * 
 * Description:
 * This script processes user login requests. It accepts POST requests with 'email' and 'password'.
 * It validates the credentials against the 'users' table in the database using PDO.
 * 
 * Security & Features:
 * - Limits login attempts to 3 within 10 minutes. If the limit is reached, further attempts are blocked for 10 minutes.
 * - Uses password_verify() to securely verify the user's password against the stored hash.
 * - On successful login, resets the attempt counter and sets a user session.
 * - Returns a JSON response with a status ('success' or 'error') and a user-friendly message.
 * - Logs events (if desired, you can integrate with Database::logToTable()).
 * 
 * Usage:
 * Send a POST request with the following parameters:
 * - email, password
 * 
 * Example JSON response on success:
 * { "status": "success", "message": "Login successful." }
 * 
 * Example JSON response on error:
 * { "status": "error", "message": "Invalid email or password." }
 */

function sendResponse($status, $message) {
    echo json_encode(['status' => $status, 'message' => $message]);
    Database::logToTable("Login response: $status - $message");

    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendResponse('error', 'Invalid request method.');
}

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if (!$email || !$password) {
    sendResponse('error', 'Email and Password are required.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    sendResponse('error', 'Invalid email format.');
}

if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
    $_SESSION['first_attempt_time'] = time();
}

$attempts = $_SESSION['login_attempts'];
$firstAttemptTime = $_SESSION['first_attempt_time'];

if ($attempts >= 3 && (time() - $firstAttemptTime) < (10 * 60)) {
    sendResponse('error', 'Too many login attempts. Please try again after 10 minutes.');
}

require_once '../../Connectors/main.php';

try {
    $db = new Database();
    $pdo = $db->getConnection();

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute([':email' => $email]);
    $user = $stmt->fetch();

    if (!$user || !password_verify($password, $user['password'])) {
        $_SESSION['login_attempts']++;
        sendResponse('error', 'Invalid email or password.');
    }

    $_SESSION['login_attempts'] = 0;
    $_SESSION['first_attempt_time'] = time();
    $_SESSION['user'] = $user;
    sendResponse('success', 'Login successful.');
} catch (PDOException $e) {
    sendResponse('error', 'An error occurred. Please try again later.');
}
?>
