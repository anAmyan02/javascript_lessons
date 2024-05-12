<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);

    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'anahit.amyan1@gmail.com';
    $mail->Password   = 'sfbowxpvycgtpral';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;

    // Recipients
    $mail->setFrom($_POST["email"], 'YourJS');
    $mail->addAddress($_POST["email"]);
    $mail->addReplyTo($_POST["email"], $_POST["name"]);

    $name = $_POST["name"];
    $token = uniqid();
    
    $mail->isHTML(true);
    $mail->Subject = 'Unique ID for admin';
    $mail->Body    = "<div >Հարգելի $name, Ձեր unique IDն՝ <br> <span style = 'color:blue'> $token </span>  <br> Պահպանեք այն ադմինիստրատրի էջ մուտք գործելու համար։ Հարգանքներով YourJS։</div>";

    if ($mail->send()) {
        include_once '../config.php';
        $sql = "INSERT INTO `admin`(`username`, `token`, `email`) VALUES ('$name', '$token','$email')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        header("Location: get_token.php?token=" . urlencode($token));
        exit();
    } else {
        echo "Email could not be sent.";
    }
}
?>
