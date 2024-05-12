<?php
include '../config.php';
session_start(); 

if(!isset($_SESSION['username'])) {
    header("Location: ../login/login.php");
    exit;
}

$name = $sname = $email = $profile_img = '';

if ($conn) {
    $sql = "SELECT name, sname, email, profile_img FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $_SESSION['username']);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $sname = $row['sname'];
        $email = $row['email'];
        $profile_img = $row['profile_img']; 
    }
    $stmt->close();
    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="user_page.css">

</head>
<body>
<div class="nav">
        <img class="js-logo" src="../images/JS_logo.png" />
            <a class="links" href="../main/index.php">Գլխավոր</a href=""> 
            <a class="links" style="left: 550px;" href="../testing_rules/testing_rules.php ">Թեստեր</a href="">
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
              

            <div class="open-user">
                <?php 
                if ($profile_img): 
                    echo "<img class='upload-icon' src='$profile_img' alt='Profile Image'>";
                else:
                    echo "<i class='fa-regular fa-user' style='color: #fcfcfc;'></i>";
                endif; 
                ?>
            </div>

            <!-- user window open -->
            <div class="user-window" style = "display: none">
                <img class="tringle-icon" src="../images/icons8-triangle-40.png" alt="" srcset="">
                <div class ="user"><i class="fa-regular fa-user" style="color: #fcfcfc;"></i></div>

                <p class="user-name"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?></p>
                <span>120 <img src="../images/icons8-star-96.png" alt="" srcset=""></span>
                <button class="log-out-user">Դուրս գալ</button>
                <i class="fa-solid fa-gears settings-icon" style="color: #ffffff;"></i>
            </div>
                   
    </div>  

    <div class="content">
        <div class="min-navbar">
            <span id="comments">Մեկնաբանություններ</span>
            <span id="friends">Ընկերներ</span>
        </div>

        <div class="card">
            <h2 class="change"><?php echo $name . ' ' . $sname; ?> 
                <i class="fa-solid fa-pen pencil change" style="color: #050505;"></i>
            </h2>
            <p><?php echo $email; ?></p>
            <div class="drag-area">
                <?php if ($profile_img): ?>
                    <img class="upload-img" src="<?php echo $profile_img; ?>" alt="" srcset="">
                <?php else: ?>
                    <!-- <img class="upload-img" src="" alt="" srcset=""> -->
                    <div class="profile-img"><i class="fa-regular fa-user prof-user-img" style="color: #000000;"></i></div>
                <?php endif; ?>
                <button id="select-button">ընտրել նկար</button>
                <input type="file" hidden>
            </div>
        </div>



        <div class="comments">
            <?php
            function fetchAllComments() {
                include '../config.php';
                session_start(); 

                $sql = "SELECT comment, com_time, com_likes FROM comments WHERE username = '".$_SESSION['username']."'" ;
                $result = $conn->query($sql);

                $html = ''; 

                if ($result->num_rows > 0) {
                    $count = 0;
                    while ($row = $result->fetch_assoc()) {
                        if ($count < 3) {
                            $html .= "<div class='comment'>";
                            $html .= "<p>".$row['comment']."</p><hr>";
                            $html .= "<p class='comment-info'>Հրապարակվել է՝  ".$row['com_time']." | Հավանել են՝ ".$row['com_likes']."</p>";
                            $html .= "</div>";
                        } else {
                            $html .= "<button id='showAllComments' class = 'show-com-btn'>Տեսնել բոլոր մեկնաբանությունները</button>";
                            break;
                        }
                        $count++;
                    }
                } else {
                    $html .= "<div class='comment'>";
                    $html .= "<p>Դուք դեռ չեք գրել մեկնաբանություններ</p>";
                    $html .= "</div>";
                }
                $conn->close();

                return $html;
            }

            echo fetchAllComments();
            ?>
        </div>
        <div class="changeContainer" style = "display:none">
            <form method = "post" action="">

                <div class="form-group">
                    <label for="name"><b>Անուն</b></label>
                    <input type="text" placeholder="Ներմուծեք նոր անուն" name="name" id="name" >
                </div>

                <div class="form-group">
                    <label for="sname"><b>Ազգանուն</b></label>
                    <input type="text" placeholder="Ներմուծեք նոր ազգանուն" name="sname" id="sname" >
                </div>

                <div class="form-group">
                    <label for="username"><b>Օգտանուն</b></label>
                    <input type="text" placeholder="Ներմուծեք նոր օգտանուն" name="username" id="username" >
                </div>

                <div class="form-group">
                    <label for="email"><b>Էլ. հասցե</b></label>
                    <input type="email" placeholder="Ներմուծեք նոր Էլ. հասցե" name="email" id="email" >
                </div>


                <hr>
                <div class = "btns">
                    <button type="submit" class="registerbtn">Փոխել</button>
                    <button type="submit" class="changepassbtn" >Փոխել գաղտնաբառը</button>
                </div>
            </form>
        </div>



    <script src="user_page.js"></script>
    <script src="../functions.js"></script>
    <script src="../main/light-mode.js"></script>
</body>
</html>
