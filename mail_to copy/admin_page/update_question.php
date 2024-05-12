<?php
include '../../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Decode the JSON data sent from the client-side
    $requestData = json_decode(file_get_contents("php://input"), true);

    // Extract the question ID and updated data from the request
    $questionId = $requestData['questionId']; // Change 'id' to 'questionId'
    $updatedData = $requestData['data'];

    // Initialize an empty array to hold the SET clauses for the SQL query
    $setClauses = array();
    // Iterate through the updated data and construct the SET clauses
    foreach ($updatedData as $field => $value) {
        // Escape the value to prevent SQL injection
        $escapedValue = mysqli_real_escape_string($conn, $value);
        // Add the SET clause for the current field
        $setClauses[] = "$field = '$escapedValue'";
    }
    // Join the SET clauses into a single string
    $setClauseString = implode(", ", $setClauses);

    // Construct the SQL query to update the question
    $sql = "UPDATE questions SET $setClauseString WHERE id = '$questionId'";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        echo "Question updated successfully";
    } else {
        echo "Error updating question: " . $conn->error;
    }
} else {
    echo "Invalid request method";
}

// Close the database connection
$conn->close();
?>
