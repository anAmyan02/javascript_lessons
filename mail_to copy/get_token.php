<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="box-shadow">
        <div class="top-left-yellow"></div>
        <div class="top-left-gray"></div>
        <div class="top-right-gray"></div>
        <div class="top-right-yellow"></div>
    </div>

    <div class="container">
        <form id="contact" action="" method="post">
            <h1>Contact Form</h1>

            <fieldset>
                <input placeholder="Enter token" name="token" type="text" tabindex="" autofocus>
            </fieldset>
            <fieldset>
                <button type="submit" name="send" id="contact-submit">Submit Now</button>
            </fieldset>
        </form>
    </div>
    <?php

    if(isset($_POST['send'])) {
        if(isset($_POST['token'])) {
            $token = $_POST['token']; 
            $inputToken = $_POST['token']; 

            if($inputToken == $token) { 
                header('Location: admin_page/index.php'); 
                exit(); 
            } else {
                echo 'Token is incorrect';
            }
        } else {
            echo 'Token not provided';
        } 
    }
    ?>
</body>

</html>
