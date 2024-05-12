<?php
include '../../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $question = mysqli_real_escape_string($conn, $_POST["question"]);
    $option1 = mysqli_real_escape_string($conn, $_POST["option1"]);
    $option2 = mysqli_real_escape_string($conn, $_POST["option2"]);
    $option3 = mysqli_real_escape_string($conn, $_POST["option3"]);
    $option4 = mysqli_real_escape_string($conn, $_POST["option4"]);

    $correct_answers = array();
    $correct_answers[] = $_POST["correct_answer"];

    $correct_answer = "";
    foreach ($correct_answers as $answer) {
        $index = substr($answer, -1);
        $option_name = "option" . $index;
        $correct_answer .= $_POST[$option_name];
    }

    $check_level = isset($_POST["check_level"]) ? (int)$_POST["check_level"] : 1;

    $sql = "INSERT INTO questions (question, option1, option2, option3, option4, correct_answer, hard_level) 
            VALUES ('$question', '$option1', '$option2', '$option3', '$option4', '$correct_answer', '$check_level')";

    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
