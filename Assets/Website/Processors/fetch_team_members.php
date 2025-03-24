<?php
/**
 * fetch_team.php
 *
 * Version: 1.0.0
 * Last Updated: 2025-03-24
 *
 * Description:
 * This script connects to the database and fetches all team member records
 * from the 'team_members' table. It selects the columns 'icon', 'memberName',
 * 'memberRole', and 'memberTask', orders the results by 'id' in ascending order,
 * and returns the data as a JSON object.
 *
 * Backend Integration:
 * - The data is retrieved using a PDO connection (via the Database class).
 * - If the data is successfully fetched, it is encoded in JSON format and sent to the client.
 * - In case of a PDOException, an error message is returned in JSON and the error is logged using Database::logToTable().
 *
 * Requirements:
 * - The 'team_members' table must exist in the database.
 * - The Database class (included from '../../Connectors/main.php') must be properly configured.
 */
header('Content-Type: application/json');
require_once '../../Connectors/main.php'; 
try {
    $db = new Database();
    $pdo = $db->getConnection();

    $stmt = $pdo->prepare("SELECT icon, memberName, memberRole, memberTask FROM team_members ORDER BY id ASC");
    $stmt->execute();
    $teamMembers = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($teamMembers);
} catch (PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
    Database::logToTable("Error while fetching team members: " . $e->getMessage());

}
?>
