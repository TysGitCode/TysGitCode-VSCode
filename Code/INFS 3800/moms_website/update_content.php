<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'your_mother_username') {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the updated content from the form
    $updatedContent = $_POST['updated_content'];

    // Write the content to a text file (e.g., content.txt)
    file_put_contents('content.txt', $updatedContent);

    // Redirect to the page where the update was made
    header('Location: ' . $_POST['redirect_url']);
    exit();
} else {
    // Redirect to the login page if not submitted through a form
    header('Location: login.php');
    exit();
}
?>
