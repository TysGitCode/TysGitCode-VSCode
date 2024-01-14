<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a database connection, include it here
    include_once 'db_config.php';

    // Check the database connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO contact_entries (name, email, message) VALUES ('$name', '$email', '$message')";

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        echo "Error in preparing statement: " . $conn->error;
    } else {
        $stmt->execute();

        if ($stmt->errno) {
            echo "Error in execution: " . $stmt->error;
        } else {
            echo "Message submitted successfully";
        }

        $stmt->close();
    }

    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
