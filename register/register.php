<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
</head>
<body bgcolor="#1E1E1E">
<div class="centered login-container">
        <div class="bg">
                <div class="box-shadow">
                    <div class="top-left-yellow"></div>
                    <div class="top-left-gray"></div>
                    <div class="top-right-gray"></div>
                    <div class="top-right-yellow"></div>
                </div>
            </div>
            
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

        <div style="width: 556px; height: 541px; left: 443px; top: 40px; position: absolute">
            <div style="width: 556px; height: 740px; background: black; border-radius: 20px;"></div>
                <div style=" width: 356.71px; height: 441.22px; left: 99.64px; top: 39.07px; position: absolute; text-align: center;">

                    <div style="color: #c8cee6; font-size: 30px; font-family: Noto Sans Armenian; font-weight: 400; word-wrap: break-word">Գրանցվել</div>

                        <br>
                        <form method = "POST" action = "register.php">
                            <label><div>Անուն</div></label>
                            <input type="text" class="name-input" placeholder="Անուն" id="r_name" name="r_name" required>
                            <label><div>Ազգանուն</div></label>
                            <input type="text" class="name-input" placeholder="Ազգանուն" id="r_sname" name="r_sname" required>
                            <label><div>Օգտանուն</div></label>
                            <input type="text" class="name-input" placeholder="Օգտանուն" id="r_username" name="r_username" required>
                            <label><div>Տարիք</div></label>
                            <input type="number" class="name-input" placeholder="Տարիք" id="r_age" name="r_age" required>
                            <label for="r_email"><div>Էլ․հասցե</div></label>
                            <input class="name-input" type="email" placeholder="Էլ․հասցե" id="r_email" name="r_email" required>
                            <label><div>Գաղտնաբառ</div></label>
                            <input type="password" class="name-input pass-input" placeholder="Գաղտնաբառ" id="r_password" name="r_password" required><br><br>
                            <img class="eye-image" src="../images/icons8-eyes-32.png" />
                            <div id="error_massage" style="display:none;color:red;">Մուտքագրե՛ք բոլոր դաշտերը</div>
                            <input type="submit" value="Գրանցվել" name="insert" class="btn">
                        </form>
                        <br>
                        <div class="go-to-login">Արդեն ունե՞ք <a href="../login/login.php">հաշիվ</a></div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"></script>
    <script src="../login/login.js"></script>

</body>
</html>
<?php
include '../config.php';

if(isset($_POST["insert"])) { 
    $data = array(
        'name' => isset($_POST['r_name']) ? $_POST['r_name'] : '',
        'sname' => isset($_POST['r_sname']) ? $_POST['r_sname'] : '',
        'username' => isset($_POST['r_username']) ? $_POST['r_username'] : '',
        'age' => isset($_POST['r_age']) ? $_POST['r_age'] : '',
        'email' => isset($_POST['r_email']) ? $_POST['r_email'] : '',
        'password' => isset($_POST['r_password']) ? $_POST['r_password'] : '',
    );

    insert($data); 
} 

function insert($data) {
    global $conn; 

    $name = mysqli_real_escape_string($conn, $data['name']);
    $sname = mysqli_real_escape_string($conn, $data['sname']);
    $username = mysqli_real_escape_string($conn, $data['username']);
    $age = mysqli_real_escape_string($conn, $data['age']);
    $email = mysqli_real_escape_string($conn, $data['email']);
    $password = mysqli_real_escape_string($conn, $data['password']);

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `users`
            (`name`, `sname`, `username`, `age`, `email`, `password`) 
            VALUES 
            ('$name', '$sname', '$username', '$age', '$email', '$hashedPassword')";

    if (mysqli_query($conn, $sql)) { 
        echo "Records inserted successfully"; 
        header("Location: ../login/login.php");

    } else { 
        echo "Error inserting records: " . mysqli_error($conn); 
    } 

    mysqli_close($conn); 
}  


?>
