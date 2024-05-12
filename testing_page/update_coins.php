<?php
include_once('../config.php');

$userID = $_POST['id'];
$coins = $_POST['coins'];

$sql = "UPDATE users SET coins = $coins WHERE id = $userID";

if ($pdo->exec($sql)) {
    http_response_code(200);
    echo json_encode(array("message" => "Coins updated successfully"));
} else {
    http_response_code(500);
    echo json_encode(array("message" => "Failed to update coins"));
}
?>
