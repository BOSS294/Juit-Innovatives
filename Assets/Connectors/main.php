<?php
/**
 * Database Connection and Logger Script
 * 
 * Version: 1.0.0
 * Last Updated: 2025-03-23
 * 
 * Description:
 * This script defines a Database class that establishes a secure connection to a MySQL database using PHP PDO.
 * It is configured with error handling, secure options, and real prepared statements to prevent SQL injection.
 * The class includes a public static method, logToTable(), which logs messages along with the client's IP address into
 * a 'logs' table in the database. This method can be used globally across the application to record events, errors, or other information.
 * 
 * Security:
 * - Uses PDO with exceptions enabled and real prepared statements.
 * - Logs sensitive information securely into the database.
 * - Captures the client's IP address for detailed auditing.
 * 
 * Usage:
 * To connect to the database, create an instance of the Database class and call the getConnection() method:
 * 
 *     try {
 *         $db = new Database();
 *         $pdo = $db->getConnection();
 *         // Use $pdo to perform database operations, e.g., queries or updates.
 *     } catch (PDOException $e) {
 *         echo "Database connection error.";
 *         // Handle the error appropriately.
 *     }
 * 
 * To log a message to the database logs table, simply call:
 * 
 *     Database::logToTable("Your log message here.");
 * 
 * This will insert the log message along with the client's IP address into the 'logs' table.
 */
class Database {
    private $pdo;
    private $host = 'localhost';
    private $dbname = 'your_database';
    private $user = 'your_username';
    private $pass = 'your_password';
    private $charset = 'utf8mb4';
    private $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    public function __construct() {
        $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset={$this->charset}";
        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass, $this->options);
        } catch (PDOException $e) {
            error_log("Connection failed: " . $e->getMessage());
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function getConnection() {
        return $this->pdo;
    }

    public static function logToTable($message) {
        try {
            $db = new Database();
            $pdo = $db->getConnection();
            $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
            $stmt = $pdo->prepare("INSERT INTO logs (message, ip_address) VALUES (:message, :ip)");
            $stmt->execute([':message' => $message, ':ip' => $ip]);
        } catch (PDOException $e) {
            error_log("Failed to log to table: " . $e->getMessage());
        }
    }
}

?>
