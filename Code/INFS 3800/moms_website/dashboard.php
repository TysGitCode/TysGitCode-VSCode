<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'your_mother_username') {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit();
}

// Read the content from the text file (e.g., content.txt)
$existingContent = file_get_contents('content.txt');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h2>Dashboard</h2>
    <form method="post" action="update_content.php">
        <textarea name="updated_content"><?php echo $existingContent; ?></textarea>
        <input type="hidden" name="redirect_url" value="<?php echo $_SERVER['REQUEST_URI']; ?>">
        <button type="submit">Update Content</button>
    </form>
    <br>
    <a href="logout.php">Logout</a>
</body>

</html>
