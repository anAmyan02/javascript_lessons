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
    <title>yourJS</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="main.css">

</head>
<body >
    <div class="nav">
        <img class="js-logo" src="../images/JS_logo.png" />
            <a class="links main-page" href="">Գլխավոր</a href=""> 
            <a class="links" style="left: 550px;" href="../testing_rules/testing_rules.html">Թեստեր</a href="">
            <a class="links" style="left: 750px;" href="../about_us/about_us.html">Մեր մասին</a href="">
            <img class="earth-icon" src="../images/icons8-earth-50.png" />
            <div class="earth-text">AM</div>
            <div class="nav-line"></div>
            <div style="width: 36px; height: 39px; left: 1130px; top: 24px; position: absolute">
                <img src="../images/icons8-search-30 (2).png" class="search-icon" alt="">
            </div>
             <!-- statistic -->
             <form class="statistic_window" method="POST" action = "main.php" autocomplete="off">
                <div class="message_title">Խնդիրների դեպքում կարող եք տեղեկացնել մեզ <div class="statistic_window_close_btn">X</div></div><br>
                <textarea class="message" name="message" id="" cols="30" rows="6" placeholder="ինչն է ձեզ անհանգստացնում..."></textarea><br>        
                <input type="submit" value="Ուղակել" class="statistic_btn" name="statistic_btn">
            </form>
            
            <div class="open-user"></div>
            <!-- user window open -->
            <div class="user-window">
                <img class="tringle-icon" src="../images/icons8-triangle-40.png" alt="" srcset="">
                <img class="user-icon" src="../images/male_user.png" alt="" srcset="">
                <p class="user-name"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?></p>
                <span>120 <img src="../images/icons8-star-96.png" alt="" srcset=""></span>
                <button class="log-out-user">Դուրս գալ</button>
                <img class="settings-icon" src="../images/icons8-settings-50.png" alt="" srcset="">
            </div>
           
    </div>  

    <div class="main-content">

        <div class="content">
            <img class="main-image" src="../images/main/figmabg2.jpg" alt="Background Image">
        </div>

        <div class="logo-container">
            <div class="logo-background">
                <div class="background-overlay"></div>
                <div class="logo-text"><start>JS</start></div>
            </div>
        </div>

        <div class="book-container">
            <div class="book-background">
                <div class="book-background-overlay"></div>
                <div class="book-image"></div>
                <div class="book-text">Your <br>JavaScript</div>
                <div class="vertical-line"></div>
            </div>
        </div>
        
        <div class="section-links">
            <div class="section-background">
                <div class="mini-navbar-background-overlay"></div>
                <div class="section-content">
                    <a class="section-link" href="#first-part">Մաս 1<br/>JavaScript լեզու</a>
                    <a class="part-two" href="#second-part">Մաս 2<br/>Browser: Documents, Events, Interfaces</a>
                    <a class="section-link" href="#third-part" style="left: 675px; ">Մաս 3<br/>Թեստեր</a>
                </div>
            </div>
        </div>
        
        <div class="open-box">
            <div class="open-box-bground"></div>
            <div class="open-box-title"> JavaScript-ի ժամանակակից ձեռնարկ</div>
            <div class="open-box-text">Ինչպես է դա արվում հիմա: Հիմնական գիտելիքներից մինչև առաջադեմ թեմաներ՝ պարզ, բայց մանրամասն բացատրություններով:</div>
        </div>
    </div>

        <!-- content -->
        <!-- first part start -->
        <div id="first-part"></div>
    <div  style="width: 100%; height: 100%; position: relative" >
        <div class="general-image-container">
            <img style="width: 1441px; height: 887px; box-shadow: 7px 7px 7px; filter: blur(7px)" src="../images/main/figmabg2.jpg" />
        </div>

        <div class="first-box">
            <div style="width: 1040px; height: 202px; left: 0px; top: 36px; position: absolute; opacity: 0.60">
                <div class="first-title-box-bground"></div>
                <div class="first-title-box-title">
                    <span class="first-title">JavaScript լեզուն<br/></span><br>
                    <span class="first-text">Այստեղ մենք սովորելու ենք JavaScript-ը՝ սկսելով զրոյից և անցնելով OOP-ի նման առաջադեմ հասկացություններին:
                        <br/>Այստեղ մենք կենտրոնանում ենք հենց լեզվի վրա։</span>
                </div>
            </div>
        </div>

        <div class="image-container">
            <img style="width: 1441px; height: 887px; box-shadow: 7px 7px 7px; filter: blur(7px)" src="../images/main/figmabg2.jpg" />
        </div>
        <div class="content-container" style="width: 1393px; height: 1832px; left: 46px; top: 336px; position: absolute; opacity: 0.70"></div>          
    </div>
    <!-- first part end -->

    <!-- second part start-->
    <div  id="second-part"></div>
    <div class="second-box">
        <div class="second-title-box-bground">
            <span class="second-title">Browser: Documents, Events, Interfaces<br/></span><br/>
            <span class="second-text">Այստեղ սովորելու ենք, թե ինչպես կառավարել բրաուզերի էջը. ավելացնել տարրեր, փոփոխել դրանց չափն ու դիրքը, դինամիկ կերպով 
                ստեղծել Interface և շփվել user-ի հետ:</span>
        </div>
    </div>
    
    <div style="width: 100%; height: 100%; position: relative; opacity: 0.70; top: 2500px;">
        <div class="second-content-container"></div>

        <!-- part 2 end -->

        <!-- parդ 3 start -->
        <div style="width: 1402px; height: 202px; left: 0px; top: 1207px; position: absolute" id="third-part">
            <div style="width: 1126px; height: 202px; left: 0px; top: 0px; position: absolute; opacity: 0.60; background: #5B0E12; 
            border-radius: 15px; border: 1px #FF0000 solid"></div>
            <div style="width: 824px; left: 28px; top: 40px; position: absolute">
                <span style="color: white; font-size: 32px; font-family: Noto Sans Armenian; font-weight: 400; word-wrap: break-word">Թեստեր<br/></span>
                <span style="color: white; font-size: 24px; font-family: Noto Sans Armenian; font-weight: 400; word-wrap: break-word">
                    Այս բաժնում դուք կարող եք ստուգել ձեր JavaScript-ի գիտելիքները:
                </span>
            </div>
            <div style="width: 259px; height: 52px; left: 1143px; top: 75px; position: absolute">
                <button class="part-three">Անցնել հղմամբ</button>
            </div>
        </div>
        <!-- pary 3 end -->
    </div>

    <div style="width: 100%; height: 100%; position: relative">
        <div class="good-new-old-box">
            <a class="good-com">Լավը</a>
            <a class="new-com">Նորը</a>
            <a class="old-com">Հինը</a>
        </div>

        <div style="width: 100%; height: 198.81px;top: 4000px; left:20%; position: absolute;">
            <div >
                <img src="../images/icons8-comments-80.png" alt="" srcset="" style="width: 30px; height: 30px;">
            </div>

            <div class = "comments-write-box">
                <textarea class="comments-input" type="text" placeholder="Միացեք քննարկմանը․․․"></textarea>
                    <div class="user-icon">U</div>
            </div>
        </div>

        <p class="before-comments">Գրելուց առաջ...</p>
        
        <div class="comments-box">
            <div class="comments-title">Մեկնաբանություններ </div>
            <div class="comments"><span class="comment-count">0</span> մեկնաբանություն</div>
        </div>
    </div>


    <script src="main.js"></script>
    <script src="../functions.js"></script>
</body>
</html>

