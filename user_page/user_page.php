<?php
session_start(); 

if(!isset($_SESSION['username'])) {
    header("Location: ../login/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="user_page.css">
</head>
<body>
    <div class="nav">
        <img class="js-logo" src="../images/JS_logo.png" />
            <a class="links" href="../main/index.php">Գլխավոր</a href="">
            <a class="links " style="left: 550px;" href="#">Թեստեր</a href="">
            <a class="links" style="left: 750px;" href="../about_us/about_us.html">Մեր մասին</a href="">
            <img class="earth-icon" src="../images/icons8-earth-50.png" />
            <div class="earth-text">AM</div>
            <div class="nav-line"></div>
            <div style="width: 36px; height: 39px; left: 1130px; top: 24px; position: absolute">
                <img src="../images/icons8-search-30 (2).png" class="search-icon" alt="">
            </div>
            <div class = "mode">
                <img src="../images/moon.png" class="sun-icon" alt="">
            </div>
            <div class="open-user"></div>
            <!-- user window open -->
            <div class="user-window">
                <img class="tringle-icon" src="../images/icons8-triangle-40.png" alt="" srcset="">
                <img class="user-icon" src="../images/male_user.png" alt="" srcset="">
                <p class="user-name"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'no'; ?></p>
                <span>120 <img class="user-img" src="../images/icons8-star-96.png" alt="" srcset=""></span>
                <button class="log-out-user">Դուրս գալ</button>
                <img class="settings-icon" src="../images/icons8-settings-50.png" alt="" srcset="">
            </div>
    </div>  

    <div class="content">
        <div class="user">
            <div class="img-box"><img src="../images/female_user.png" alt=""></div>
            <p class="user-name"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'no'; ?></p>
            <!-- <button class="write-user">Գրել</button> -->

        </div>
        
        <div class="min-navbar">
            <a href="">Մեկնաբանություններ</a>
            <a href="">Ընկերներ</a>
        </div>
        <div class="user-info">

        </div>
    </div>

    <script src="user_page.js"></script>
    <script src="../functions.js"></script>
    <script src="../main/light-mode.js"></script>
</body>
</html>