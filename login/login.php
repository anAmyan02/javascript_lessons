<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">

    <title>Գրանցվել</title>

</head>
<body>
    <div class="main">
        <div class="bg">
            <div class="box-shadow">
                <div class="top-left-yellow"></div>
                <div class="top-left-gray"></div>
                <div class="top-right-gray"></div>
                <div class="top-right-yellow"></div>
            </div>
        </div>

        <!-- form -->
        <form method="POST" action="login.php">
        <div class="form">
            <div style="width: 354.26px; height: 336.71px; left: 100.86px; top: 78.59px; position: absolute">
                <input type="submit" value="Մուտք" name="insert" class="btn">

                <div class="title" >Մուտք գործել</div>
                <div style="width: 150px; height: 21px; left: 98.37px; top: 315.71px; position: absolute">
                    <div style="width: 76px; height: 21px; left: 0px; top: 0px; position: absolute"><span style="color: white; font-size: 20px; font-family: Noto Sans Armenian; font-weight: 400; word-wrap: break-word">Չունե՞ք</span></div>
                    <a href="../register/register.php" class="go-to-register">հաշիվ</a>
                </div>

                <div style="width: 354.26px; height: 136.38px; left: -0px; top: 66.71px; position: absolute">
                    <div style="width: 164px; height: 27px; left: 6.37px; top: 0px; position: absolute; color: #c8cee6; font-size: 26px; font-family: Noto Sans Armenian; font-weight: 400; word-wrap: break-word">Օգտանուն</div>
                    <input class="mail-input" type="text" class="input-1" placeholder="Ներմուծեք ձեր Օգտանուն" id="l_username" name="l_username" required> <br>
                    <div style="width: 201.38px; height: 26.87px; left: 6.24px; top: 70.97px; position: absolute; color: #c8cee6; font-size: 26px; font-family: Noto Sans Armenian; font-weight: 400; word-wrap: break-word">Գաղտնաբառ</div>
                    <input class="pass-input" placeholder="Ներմուծեք ձեր գաղտնաբառը" type="password" id="l_password" name="l_password" required>
                </div>
                <h5 style = "color:red;"></h5>
            </div>
        </div>
        </form> 
        <!-- form end -->
        <div class="right-button-rounds" >
            <div class="oval"></div>
            <div class="circle"></div>
        </div>

        <div class="left-middle-rounds">
            <div class="oval"></div>
            <div class="circle"></div>
        </div>

        <div class="left-buttom-rounds">
            <div class="oval"></div>
            <div class="circle"></div>
        </div>

        <div class="left-top-rounds">
            <div class="oval"></div>
            <div class="circle"></div>
        </div>
        <div class="right-top-rounds">
            <div class="oval"></div>
            <div class="circle"></div>
        </div>
        
        <img class="eye-image" src="images/icons8-closed-eye-64.png" />
    </div>

        <script>
        if(localStorage.getItem("id")){
            localStorage.removeItem("id")
            localStorage.removeItem("name")
        }
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"></script>
    <script src="login.js"></script>
    
    <?php
        session_start(); // Start the session
        include '../config.php';

        if(isset($_POST["insert"])) { 
            $data = array(
                'username' => isset($_POST['l_username']) ? $_POST['l_username'] : '',
                'password' => isset($_POST['l_password']) ? $_POST['l_password'] : '',
            );
            signIn($data); 
        } 

        function signIn($data) {
            global $conn; 

            $username = mysqli_real_escape_string($conn, $data['username']);
            $password = mysqli_real_escape_string($conn, $data['password']);

            $sql = "SELECT * FROM `users` WHERE `username` = '$username'";

            $result = mysqli_query($conn, $sql);
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $hashedPassword = $row['password'];

                if (password_verify($password, $hashedPassword)) { 
                    $_SESSION['username'] = $username; 
                    header("Location: ../main/index.php");
                    exit;
                } else {
                    echo "Invalid username or password";
                }
            } else { 
                echo "Error signing in: " . mysqli_error($conn); 
            } 

            mysqli_close($conn); 
        }
?>

<!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Check if the statistic window should be shown
        <?php
        // if($showStatisticWindow):
             ?>
        const statisticWindow = document.querySelector('.statistic_window');
        statisticWindow.classList.add('show');

        // Close the statistic window after 5 seconds
        setTimeout(() => {
            statisticWindow.style.display = 'none';
        }, 5000);
        <?php
        //  endif; 
        ?>
    });
    </script> -->


</body>
</html>




