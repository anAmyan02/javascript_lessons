<?php
include '../config.php';
session_start();

if(isset($_SESSION['username']) && !empty($_POST['comment'])) {
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);
    $username = $_SESSION['username'];
    $comment_time = date('Y-m-d H:i:s');
    $comment_likes = 0;

    $sql = "INSERT INTO lessons_comm (username, comment, com_time, com_likes) VALUES ('$username', '$comment', '$comment_time', $comment_likes)";

    if(mysqli_query($conn, $sql)) {
        header("Location: ".$_SERVER['HTTP_REFERER']);
        exit();
    }
} else {
    if(empty($_POST['comment'])) {
        header('lessons_page.php');
    }
}
?>
