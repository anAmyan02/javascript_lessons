<?php
include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['like_button']) && isset($_POST['comment_id'])) {
    $commentId = $_POST['comment_id'];
    $increment = $_POST['increment']; // Add increment parameter

    // Update the like count based on the increment value
    $sql = "UPDATE lessons_comm SET com_likes = com_likes + ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $increment, $commentId);
    $stmt->execute();
    $stmt->close();

    // Fetch updated likes count
    $sql = "SELECT com_likes FROM lessons_comm WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $commentId);
    $stmt->execute();
    $stmt->bind_result($comLikes);
    $stmt->fetch();
    $stmt->close();

    // Return updated likes count
    echo $comLikes;

    $conn->close();
} else {
    echo "Invalid request";
}
?>
