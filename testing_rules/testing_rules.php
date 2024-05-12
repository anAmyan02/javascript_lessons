<?php
include '../config.php';
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Testing</title>
    <link rel="stylesheet" href="testing_rules.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="nav">
        <img class="js-logo" src="../images/JS_logo.png" />
            <a class="links" href="../main/index.php">Գլխավոր</a href=""> 
            <a class="links main-page" style="left: 550px;" href="../testing_rules/testing_rules.php ">Թեստեր</a href="">
            <a class="links" style="left: 750px;" href="../about_us/about_us.php">Մեր մասին</a href="">
            <img class="earth-icon" src="../images/icons8-earth-50.png" />
            <div class="earth-text">AM</div>
            <div class="nav-line"></div>
            <div style="width: 36px; height: 39px; left: 1130px; top: 24px; position: absolute">
                <i class="fa-solid fa-magnifying-glass search-icon" style="color: #fafafa;"></i>
            </div>
            <div class = "mode">
                <img src="../images/moon.png" class="sun-icon" alt="">
            </div>            
            <div class = "open-user"><i class="fa-regular fa-user" style="color: #fcfcfc;"></i></div>
            <!-- user window open -->
            <div class="user-window" style = "display: none">
                <img class="tringle-icon" src="../images/icons8-triangle-40.png" alt="" srcset="">
                <div class = "user"><i class="fa-regular fa-user" style="color: #fcfcfc;"></i></div>

                <p class="user-name"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?></p>
                <span>120 <img src="../images/icons8-star-96.png" alt="" srcset=""></span>
                <button class="log-out-user">Դուրս գալ</button>
                <i class="fa-solid fa-gears settings-icon" style="color: #ffffff;"></i>
            </div>
                   
    </div>  
    
    <div class="content">

        <div class="test-title">Եկեք պատրաստվենք հարցազրույցի :)</div>

        <hr class="first-hr">

        <div class="rules-box">
            <ol>
                <li>Դուք ունեք սահմանված ժամանակ յուրաքանչյուր հարցի համար,</li>
                <li>Պատասխանն ընտրելուց հետո, պատասխանը փոխել հնարավոր չէ,</li>
                <li><<Հաջորդը>> կոճակը կարող եք ընտրել միայն մեկ անգամ,</li>
                <li>Դուք չէք կարող միարժամանակ ընտրել մի քանի ճիշտ պատասխան,</li>
                <li>Յուրաքանչյուր հարցի համար ստանում եք միավոր,</li>
                <li>Թեստավորման ընթացքում դուրս գալու դեպքում՝ միավորները կզրոյացվեն</li>

            </ol>
        </div>
        
        <button class="go">Առաջ</button>

        <script>
            let goButton = document.querySelector('.go')

            goButton.addEventListener('click',()=>{
                window.location.href = '../testing_page/testing_level.php'
            })
        </script>
    </div>
    
    <script src="../functions.js"></script>
    <script src="../main/light-mode.js"></script>

</body>
</html>