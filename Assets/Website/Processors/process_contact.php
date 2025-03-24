<?php
/**
 * process_contact.php
 *
 * Handles both fetching contact info and posting new messages.
 * 
 * - GET Request: Returns contact info from the `contact_info` table.
 *   (The table is expected to have records with an `info_type` of 'phone', 'email', or 'social', plus
 *    additional columns like `value` (for phone/email URL) and for social links an `icon` column for the icon class.)
 *
 * - POST Request: Inserts a new message into the `messages` table.
 *   The `messages` table contains columns: 
 *      msgid (VARCHAR primary key), full_name, subject, message, email, phone,
 *      created_at, updated_at, status, and responded_via.
 *   New messages are inserted with a status of "Pending" and responded_via as "NOT RESPONDED".
 *
 * Uses a Database connector for connection and logging.
 */

header('Content-Type: application/json');
require_once '../../Connectors/main.php'; 

try {
    $db = new Database();
    $pdo = $db->getConnection();
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    try {
        $stmt = $pdo->prepare("SELECT * FROM contact_info WHERE info_type = 'phone' ORDER BY id ASC");
        $stmt->execute();
        $phones = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt = $pdo->prepare("SELECT * FROM contact_info WHERE info_type = 'email' ORDER BY id ASC");
        $stmt->execute();
        $emails = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt = $pdo->prepare("SELECT * FROM contact_info WHERE info_type = 'social' ORDER BY id ASC");
        $stmt->execute();
        $socials = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode(['phones' => $phones, 'emails' => $emails, 'socials' => $socials]);
    } catch (PDOException $e) {
        echo json_encode(['error' => $e->getMessage()]);
        Database::logToTable("Error fetching contact info: " . $e->getMessage());
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            echo json_encode(['error' => 'Invalid input']);
            exit;
        }
        $msgid = uniqid('msg_');
        $full_name = $data['full_name'];
        $subject   = $data['subject'];
        $message   = $data['message'];
        $email     = $data['email'];
        $phone     = $data['phone'];
        $created_at = date('Y-m-d H:i:s');
        $updated_at = $created_at;
        $status = 'Pending';
        $responded_via = 'NOT RESPONDED';

        $stmt = $pdo->prepare("INSERT INTO messages (msgid, full_name, subject, message, email, phone, created_at, updated_at, status, responded_via) VALUES (:msgid, :full_name, :subject, :message, :email, :phone, :created_at, :updated_at, :status, :responded_via)");
        $stmt->execute([
            ':msgid'        => $msgid,
            ':full_name'    => $full_name,
            ':subject'      => $subject,
            ':message'      => $message,
            ':email'        => $email,
            ':phone'        => $phone,
            ':created_at'   => $created_at,
            ':updated_at'   => $updated_at,
            ':status'       => $status,
            ':responded_via'=> $responded_via
        ]);

        echo json_encode(['success' => true, 'msgid' => $msgid]);
    } catch (PDOException $e) {
        echo json_encode(['error' => $e->getMessage()]);
        Database::logToTable("Error inserting message: " . $e->getMessage());
    }
}
?>
