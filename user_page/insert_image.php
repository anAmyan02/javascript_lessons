<?php
include '../config.php'; 
session_start();

if (isset($_POST['profile_img'])) {
    $imageSrc = $_POST['profile_img'];
    
    $sql = "UPDATE `users` SET `profile_img` = '$imageSrc' WHERE `username` = '".$_SESSION['username']."' "; 
    if ($conn->query($sql) === TRUE) {
        echo "Image inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
