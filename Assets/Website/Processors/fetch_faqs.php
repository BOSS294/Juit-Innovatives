<?php
/**
 * fetch_faqs.php
 *
 * Version: 1.0.0
 * Last Updated: 2025-03-24
 *
 * Description:
 * This script connects to the database and retrieves all FAQ records from the 'faqs' table.
 * It selects the columns 'faqID', 'question', and 'answer', orders the results by 'faqID' in ascending order,
 * and returns the data as a JSON array. In case of an error, it returns a JSON object containing the error message
 * and logs the error using Database::logToTable().
 *
 */

header('Content-Type: application/json');
require_once '../../Connectors/main.php'; // Adjust the path as needed

try {
    $db = new Database();
    $pdo = $db->getConnection();

    $stmt = $pdo->prepare("SELECT faqID, question, answer FROM faqs ORDER BY faqID ASC");
    $stmt->execute();
    $faqs = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($faqs);
} catch (PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
    Database::logToTable("Error fetching FAQs: " . $e->getMessage());
}
?>
