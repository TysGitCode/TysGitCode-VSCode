<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'your_mother_username') {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit();
}

// Include the database connection
include 'connect.php';

// Define an array of tables
$tables = array(
    'aboutmemain',
    'curriculum3',
    'curriculum4',
    'curriculum5',
    'education',
    'experience',
    'family',
    'hobbies',
    'homework1',
    'homework2',
    'management1',
    'management2',
    'management3',
    'managementcont1',
    'managementcont2',
    'managementcont3',
    'note1',
    'note2',
    'note3',
    'recognition'
);

// Loop through the tables
foreach ($tables as $table) {
    // Fetch content from each table
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);

    // Check if the query was successful
    if ($result) {
        // Check if data is fetched successfully
        if ($result->num_rows > 0) {
            // Output data of the first row
            $row = $result->fetch_assoc();
            $existingContent = isset($row['content']) ? $row['content'] : '';
        } else {
            echo "Error: No data found for table $table.";
            $existingContent = ''; // Set a default value if no data is found
        }
    } else {
        echo "Error executing query: " . $conn->error;
        $existingContent = ''; // Set a default value in case of an error
    }

    // Display a form for each table
    echo "<h3>$table</h3>";
    echo "<form method='post' action='update_content.php'>";
    echo "<textarea name='updated_content'>$existingContent</textarea>";
    echo "<input type='hidden' name='table_name' value='$table'>";
    echo "<input type='hidden' name='redirect_url' value='$_SERVER[REQUEST_URI]'>";
    echo "<button type='submit'>Update Content</button>";
    echo "</form><br>";
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
    <a href="logout.php">Logout</a>
</body>

</html>
