<?php
// Include database connection code
include_once('../config.php');

// Get user ID and coins from the request
$userID = $_POST['id'];
$coins = $_POST['coins'];

// Update user's coins
$sql = "UPDATE users SET coins = $coins WHERE id = $userID";

// Execute the SQL statement
if ($pdo->exec($sql)) {
    // Coins updated successfully
    http_response_code(200);
    echo json_encode(array("message" => "Coins updated successfully"));
} else {
    // Failed to update coins
    http_response_code(500);
    echo json_encode(array("message" => "Failed to update coins"));
}
?>
