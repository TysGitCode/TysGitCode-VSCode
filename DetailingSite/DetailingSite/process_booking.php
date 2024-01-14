<?php
include_once 'db_config.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $service_type = mysqli_real_escape_string($conn, $_POST['service']);
    $booking_date = mysqli_real_escape_string($conn, $_POST['date-container']);
    $customer_name = mysqli_real_escape_string($conn, $_POST['name']);
    $customer_email = mysqli_real_escape_string($conn, $_POST['email']);
    $customer_phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $additional_message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO booking_info (service_type, booking_date, customer_name, customer_email, customer_phone, additional_message)
            VALUES ('$service_type', '$booking_date', '$customer_name', '$customer_email', '$customer_phone', '$additional_message')";

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo "Error: " . $conn->error;
    } else {
        $stmt->execute();
        $stmt->close();
        echo "Booking submitted successfully";
    }

    $conn->close();
}
?>
