<?php
session_start();

// Include the database connection
include 'connect.php';

// Check if the user is logged in
if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'your_mother_username') {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the updated content from the form
    $updatedContent = $_POST['updated_content'];

    // Update all rows in the database
    $sql = "UPDATE aboutmemain SET content = '$updatedContent'";
    $result = $conn->query($sql);

    if ($result) {
        // Redirect to the page where the update was made
        header('Location: ' . $_POST['redirect_url']);
        exit();
    } else {
        // Handle the case where the update fails
        echo "Error updating content: " . $conn->error;
    }
} else {
    // Redirect to the login page if not submitted through a form
    header('Location: login.php');
    exit();
}

// Close the database connection
$conn->close();
?>


