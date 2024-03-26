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
            <a class="links" style="left: 550px;" href="../testing_rules/testing_rules.html ">Թեստեր</a href="">
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
            <form class="statistic_window" method="POST" action = "index.php" autocomplete="off">
                <div class="message_title">Խնդիրների դեպքում կարող եք տեղեկացնել մեզ <div class="statistic_window_close_btn">X</div></div><br>
                <textarea class="message" name="message" id="" cols="30" rows="6" placeholder="ինչն է ձեզ անհանգստացնում..."></textarea><br>        
                <input type="submit" value="Ուղակել" class="statistic_btn" name="statistic_btn">
            </form>
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
                            
                            header("Location: ../main/index.php");
                        } 
                    }
                }
            ?>
            
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
            <img class="main-image back-img" src="../images/main/figmabg2.jpg" alt="Background Image">
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
        <div id="first-part part"></div>
    <div  style="width: 100%; height: 100%; position: relative" >
        <div class="general-image-container">
            <img class="back-img"  style="width: 1570px; height: 887px; box-shadow: 7px 7px 7px; filter: blur(7px)" src="../images/main/figmabg2.jpg" />
        </div>

        <div class="first-box ">
            <div style="width: 1040px; height: 202px; left: 0px; top: 36px; position: absolute; opacity: 0.60">
                <div class="first-title-box-bground box"></div>
                <div class="first-title-box-title">
                    <span class="first-title">JavaScript լեզուն<br/></span><br>
                    <span class="first-text">Այստեղ մենք սովորելու ենք JavaScript-ը՝ սկսելով զրոյից և անցնելով OOP-ի նման առաջադեմ հասկացություններին:
                        <br/>Այստեղ մենք կենտրոնանում ենք հենց լեզվի վրա։</span>
                </div>
            </div>
        </div>

        <div class="image-container">
            <img class=" back-img" style="width: 1570px; height: 887px; box-shadow: 7px 7px 7px; filter: blur(7px)" src="../images/main/figmabg2.jpg" />
        </div>
        <div class="content-container">
       
       
       <?php
            include '../config.php';

            $containersPerRow = 4;
            $containerWidth = 300;
            $containerWidthForTitle = 315;
            $containerHeight = 520;
            $spacing = 20;
            $boxCount = 0;
            $titles1 = ['Ներածություն', 'JavaScript-ի հիմունքներ', 'Կոդի որակ', 'Օբյեկտներ՝ հիմունքներ', 'Տվյալների տիպեր', 'Աշխատանք ֆունկցիանների հետ', 'Օբյեկտի հատկություններ','Prototype, Ժառանգականություն','Class-եր','Սխալների մշակում','Promises, async/await','Մոդուլներ','Այլ'];
            $lessonBoxes = [];

            foreach ($titles1 as $index => $title) {
                $dynamicContainer = '<div>';
                $leftPosition = ($index % $containersPerRow) * ($containerWidth + $spacing);
                $topPosition = floor($index / $containersPerRow) * ($containerHeight + $spacing);

                $dynamicContainer .= '<div class="lesson-title" style="width: ' . $containerWidthForTitle . 'px;  left: ' . $leftPosition . 'px; top: ' . $topPosition . 'px; ">' . $title . '</div>';

                $dynamicContainer .= '</div>';
                echo $dynamicContainer;
            }

            $sql = "SELECT title, chapter FROM lessons_titles ORDER BY id"; 
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $titles = [];
                while ($row = $result->fetch_assoc()) {
                    $titles[] = $row;
                }

                $currentChapter = explode('.', $titles[0]['chapter'])[0];
                $lessonTitles = [];
                foreach ($titles as $titleInfo) {
                    $chapter = explode('.', $titleInfo['chapter'])[0]; 
                    if ($chapter !== $currentChapter) {
                        $lessonBoxes[] = ['chapter' => $currentChapter, 'titles' => $lessonTitles];
                        $lessonTitles = [];
                        $currentChapter = $chapter;
                    }
                    $lessonTitles[] = $titleInfo['title'];
                }
                $lessonBoxes[] = ['chapter' => $currentChapter, 'titles' => $lessonTitles];
                $topPositionForBox = 90;
                foreach ($lessonBoxes as $lessonBoxIndex => $lessonBox) {
                    if ($lessonBoxIndex % $containersPerRow === 0) {
                        echo "<div class='container' style='display:flex'>";
                    }
                    $dynamicContainer = '<div class="lesson-box" style="width: ' . $containerWidth . 'px; top:' . $topPositionForBox . 'px;">';
                    if (count($lessonBox['titles']) > 5) { 
                        $dynamicContainer .= '<div class="titles-container">'; 
                    }
                    $textTop = 60;
                    foreach ($lessonBox['titles'] as $lessonTitle) {
                        $lessonChapter = '';
                        foreach ($titles as $titleInfo) {
                            if ($titleInfo['title'] === $lessonTitle) {
                                $lessonChapter = $titleInfo['chapter'];
                                break;
                            }
                        }
                        $dynamicContainer .= '<div style="margin:20px; margin-top: 10px; ">' . $lessonChapter . ' ' .'<a href="../lessons/lesson_page.php" class = "lessonTitle">' . $lessonTitle . '</a>'. '</div>';
                        $dynamicContainer .= '<div style="width: 280px; height: 0px; left: 16.41px; border: 1px #FFE7AA solid"></div>'; 
                        $textTop += 50;
                    }
                    
                    
                    if (count($lessonBox['titles']) > 5) { 
                        $dynamicContainer .= '</div>';
                    }
                    $boxCount++;
                    $dynamicContainer .= '</div>';
                    echo $dynamicContainer;
                    if (($boxCount % $containersPerRow === 0) || ($lessonBoxIndex === count($lessonBoxes) - 1)) {
                        echo "</div>"; 
                    }
                }
            }

            $conn->close();
            ?>

        </div>          
    </div>
    <!-- first part end -->

    <!-- second part start-->
    <div  id="second-part"></div>
    <div class="second-box">
        <div class="second-title-box-bground box">
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
            <div class = "third-part box"></div>
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
        <!-- part 3 end -->
    </div>

    <div style="width: 100%; height: 100%; position: relative">
        <div style="width: 100%; height: 198.81px;top: 4000px; left:20%; position: absolute;">
            <div>
                <img src="../images/icons8-comments-80.png" alt="" srcset="" style="width: 30px; height: 30px;">
            </div>

            <div class = "comments-write-box">
                <form id="commentForm" method="POST" action="save_com.php">
                    <textarea name="comment"  class="comments-input" type="text" placeholder="Միացեք քննարկմանը․․․"></textarea>
                    <input type="submit" name="submit" class="com-btn" value="Ուղարկել">
                    <div class="user-icon">U</div>
                </form>
            </div>

        </div>
        
        <!-- <div class = "hover-div"></div> -->
        <p class="before-comments">Գրելուց առաջ...</p>
        
            <div class="comments-box">
                <div class="comments-title">Մեկնաբանություններ </div>
                <div class="comments"><span class="comment-count">
                <?php 
                        include '../config.php';

                        $sql = "SELECT COUNT(id) AS count FROM comments"; // Corrected SQL query
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<span>' . $row["count"] . '</span>';
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                    ?>
                </span> մեկնաբանություն</div>
            </div>
    </div>

    <div class="comm-container">
    <?php 
    include '../config.php';

    $sql = "SELECT * FROM comments ORDER BY id DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="comment-container">' .
            '<span class="com-username">' . $row["username"] . '</span>' . 
            '<div class="comment-details">' .
                '<div class="com-time">' . $row["com_time"] . '</div>' .
                '<div class="com-comment">' . $row["comment"] . '</div>' . 
            '</div>' . 
            '<div class="likes-box">' .
                '<div class="like-container" data-comment-id="' . $row["id"] . '">' .
                '<img class="likes like-button" src="../images/main/like.png" alt="" srcset="" data-liked="0">' .
                '<span class="like-count">' . $row["com_likes"] . '</span>' .
            '</div>' .
            '</div>' .
            '</div>' . 
            '<br>';
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</div>


<script>
   document.addEventListener('DOMContentLoaded', function() {
    const likeButtons = document.querySelectorAll('.like-button');
    const modeImg = document.querySelector('.sun-icon');
    const blueSrc = "../images/main/like_blue.png";
    const whiteSrc = "../images/main/like.png";
    const blackSrc = "../images/light-mode/black-like.png";

    likeButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            const commentId = this.closest('.like-container').dataset.commentId;
            const isLiked = parseInt(this.dataset.liked);
            let comLikes = localStorage.getItem('comLikes') ? JSON.parse(localStorage.getItem('comLikes')) : {};

            if (isLiked === 0) {
                this.src = blueSrc;
                this.dataset.liked = "1";
                comLikes[commentId] = { liked: true, src: blueSrc };
                updateLikeCount(commentId, 1);
            } else {
                if (modeImg.src.includes("sun.png")) {
                    this.src = blackSrc;
                } else if (modeImg.src.includes("moon.png")) {
                    this.src = whiteSrc;
                }
                this.dataset.liked = "0";
                comLikes[commentId] = { liked: false, src: this.src };
                updateLikeCount(commentId, -1);
            }

            localStorage.setItem('comLikes', JSON.stringify(comLikes));
        });
    });

    function updateLikeCount(commentId, increment) {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'update_likes.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                const likeCount = this.responseText;
                const likeCountElement = document.querySelector('.like-container[data-comment-id="' + commentId + '"] .like-count');
                if (likeCountElement) {
                    likeCountElement.textContent = likeCount;
                }
            } else {
                console.error('Request failed. Error: ' + xhr.statusText);
            }
        };
        xhr.send('like_button=true&comment_id=' + encodeURIComponent(commentId) + '&increment=' + increment);
    }

    // Restore like status from localStorage
    function restoreLikes() {
        let comLikes = localStorage.getItem('comLikes') ? JSON.parse(localStorage.getItem('comLikes')) : {};
        Object.keys(comLikes).forEach(function(commentId) {
            const { liked, src } = comLikes[commentId];
            const likeButton = document.querySelector('.like-container[data-comment-id="' + commentId + '"] .like-button');
            if (likeButton) {
                if (likeButton.src !== blueSrc) {
                    likeButton.src = src;
                }
                likeButton.dataset.liked = liked ? "1" : "0";
            }
        });
    }

    restoreLikes(); 
});

</script>





    
    <script src="main.js"></script>
    <script src="../functions.js"></script>
    <script src="light-mode.js"></script>

</body>
</html>



    