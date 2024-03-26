<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "javascript_lessons";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM questions";
$result = $conn->query($sql);
$questions = array();
$questionCount = "SELECT COUNT(id) as count FROM questions";


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $question = array(
            'question' => $row['question'],
            'options' => array($row['option1'], $row['option2'], $row['option3'], $row['option4']),
            'correct_answer' => $row['correct_answer'],
        );
        array_push($questions, $question);
    }
}

echo json_encode($questions);
$conn->close();
?>
