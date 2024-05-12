<?php
// include '../config.php';
// session_start();

// if (isset($_POST['profile_img'])) {
//     $imageSrc = $_POST['profile_img'];

//     // Validate session and image source
//     if (isset($_SESSION['username']) && !empty($imageSrc)) {
//         // Prepare SQL statement
//         $sql = "UPDATE users SET profile_img = ? WHERE username = ?";
//         $stmt = $conn->prepare($sql);

//         // Bind parameters and execute query
//         $stmt->bind_param("ss", $imageSrc, $_SESSION['username']);
//         if ($stmt->execute()) {
//             echo "Image inserted successfully!";
//         } else {
//             echo "Error updating image: " . $stmt->error;
//         }

//         // Close statement and connection
//         $stmt->close();
//     } else {
//         echo "Invalid session or image source!";
//     }
// } else {
//     echo "No image source provided!";
// }

// $conn->close();
?>
