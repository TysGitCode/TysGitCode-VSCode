<?php
// Assuming you have a MySQL database connection
$servername = "localhost";
$username = "root";
$password = "Slidefire556556";
$dbname = "momsWebsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to retrieve data from a specific table
function getDataFromTable($conn, $tableName) {
    $sql = "SELECT * FROM $tableName";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo '<label for="' . $tableName . '">' . $tableName . ':</label>';
            echo '<textarea name="' . $tableName . '" id="' . $tableName . '" rows="8" cols="80">' . $row['aboutMeMainText'] . '</textarea>';
        }
    } else {
        echo "0 results for table $tableName";
    }
}

// Close connection
$conn->close();
?>
