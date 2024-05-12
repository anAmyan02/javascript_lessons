<?php
include '../../config.php';

// Check if the question ID is provided in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Sanitize the question ID to prevent SQL injection
    $questionId = mysqli_real_escape_string($conn, $_GET['id']);

    // SQL query to delete the question with the provided ID
    $sql = "DELETE FROM questions WHERE id = '$questionId'";

    // Execute the delete query
    if ($conn->query($sql) === TRUE) {
        // If the deletion was successful, redirect back to the page where the user came from
        header("Location: previous_page.php");
        // Replace "previous_page.php" with the actual page where you want to redirect the user after deletion
        exit; // Stop executing further code
    } else {
        // If there was an error with the query, display an error message
        echo "Error deleting question: " . $conn->error;
    }
} else {
    // If the question ID is not provided or empty, display an error message
    echo "Invalid question ID";
}

// Close the database connection
$conn->close();
?>
