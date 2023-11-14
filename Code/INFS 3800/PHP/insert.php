<?php
# This only works because dbocnnect.php is in the same directory as the one we are using. otherwise it needs to be the full file path
require_once("dbconnect.php");

# Get data from form in contacts.html

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"]
$email = $_POST["email"]
$comment = $_POST["comment"]

# Create a query to insert our data into the database
$query = "INSERT INTO contacts (firstName, lastName, email, comment) VALUES ('$firstName', '$lastName', '$email', '$comment')";

# Execute the query
mysqli_query($conn,  $query);

# Redirect the user to the homepage
header("Location: ../index.html");
?>