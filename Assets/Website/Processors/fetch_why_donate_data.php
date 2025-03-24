<?php
/**
 * fetch_why_donate_data.php
 *
 * Version: 1.0.0
 * Last Updated: 2025-03-24
 *
 * Description:
 * This script connects to the database and retrieves data for the "Why Donate" section.
 * It fetches reason card details from the 'why_donate_cards' table—including the card ID,
 * icon, title, content, and AOS animation delay—and also retrieves the CTA button data
 * from the 'why_donate_cta' table for the specified CID ('cta1').
 *
 * The data is then encoded in JSON format and sent to the frontend for dynamic population
 * of the "Why Donate" section. In case of a database error, an error message is returned in JSON,
 * and the error is logged using the Database::logToTable() method.
 *
 */

header('Content-Type: application/json');
require_once '../../Connectors/main.php'; // Adjust the path as needed

try {
    $db = new Database();
    $pdo = $db->getConnection();

    // Fetch reason cards
    $stmt = $pdo->prepare("SELECT cid, icon, title, content, aos_delay FROM why_donate_cards ORDER BY cid ASC");
    $stmt->execute();
    $cards = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Fetch CTA buttons data
    $stmt2 = $pdo->prepare("SELECT cid, button1_text, button1_url, button2_text, button2_url FROM why_donate_cta WHERE cid = 'cta1'");
    $stmt2->execute();
    $cta = $stmt2->fetch(PDO::FETCH_ASSOC);

    echo json_encode(['cards' => $cards, 'cta' => $cta]);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
    Database::logToTable("Error fetching why_donate data: " . $e->getMessage());
}
?>
