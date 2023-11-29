<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'your_mother_username') {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit();
}

// Include the database connection
include 'connect.php';

// Fetch all rows from the database
$sql = "SELECT * FROM aboutmemain";
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Check if data is fetched successfully
    if ($result->num_rows > 0) {
        // Output data of the first row
        $row = $result->fetch_assoc();
        $existingContent = isset($row['content']) ? $row['content'] : '';
    } else {
        echo "Error: No data found.";
        $existingContent = ''; // Set a default value if no data is found
    }
} else {
    echo "Error executing query: " . $conn->error;
    $existingContent = ''; // Set a default value in case of an error
}

// Close the database connection
$conn->close();
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
