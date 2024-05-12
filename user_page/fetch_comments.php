<?php
include '../config.php';
session_start(); 

$sql = "SELECT comment, com_time, com_likes FROM comments WHERE username = '".$_SESSION['username']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $count = 0;
    while ($row = $result->fetch_assoc()) {
        echo "<div class='comment'>";
        echo "<p>".$row['comment']."</p><hr>";
        echo "<p class='comment-info'>Հրապարակվել է՝  ".$row['com_time']." | Հավանել են՝ ".$row['com_likes']."</p>";
        echo "</div>";
        $count++;        
    }
    if($count > 3){
        echo "<button id='showLessComments' class = 'com-btn'>Տեսնել քիչ մեկնաբանություններ</button>";
    }
} else {
    echo "<div class='comment'>";
    echo "<p>Դուք դեռ չեք գրել մեկնաբանություններ</p>";
    echo "</div>";
}

$conn->close();
?>

<!-- this doesnt workkkkk -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#showLessComments').on('click', function() {
        window.location.href = "user_page.php"; // Redirect to user_page.php
    });
});
</script> -->
