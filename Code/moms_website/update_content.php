<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'your_mother_username') {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit();
}

// Include the database connection
include 'connect.php';

// Function to update content in the database
function updateContent($tableName, $updatedContent, $redirectUrl) {
    global $conn;

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("UPDATE $tableName SET content = ?");
    $stmt->bind_param("s", $updatedContent);
    $result = $stmt->execute();

    if ($result) {
        // Redirect to the page where the update was made
        header('Location: ' . $redirectUrl);
        exit();
    } else {
        // Handle the case where the update fails
        echo "Error updating content for table $tableName: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the updated content from the form
    $updatedContent = $_POST['updated_content'];
    $redirectUrl = $_POST['redirect_url'];
    $tableName = $_POST['table_name'];

    // Update content for the specified table
    updateContent($tableName, $updatedContent, $redirectUrl);
} else {
    // Redirect to the login page if not submitted through a form
    header('Location: login.php');
    exit();
}

// Close the database connection
$conn->close();
?>
