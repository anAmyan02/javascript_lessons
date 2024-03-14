
<?php 
    session_start();
    include '../config.php'; 

    global $conn; 

    if(isset($_POST['statistic_btn'])){
        $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
        $message = isset($_POST['message']) ? $_POST['message'] : "";

        if($message !== ""){
            $sql = "INSERT INTO `users_message`(`username`, `message`) VALUES ('$username','$message')";

            if (!mysqli_query($conn, $sql)) { 
                echo "Error inserting records: " . mysqli_error($conn); 
                exit;
            } else { 
                // header("Location: ../main/index.php");
            } 
        }
    }

    

?>