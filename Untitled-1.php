<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YourName_FINAL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<!-- Page header -->
<div class="container mt-3">
    <h1>Your Name_FINAL</h1>
</div>

<!-- Display database information in a table -->
<div class="container mt-3">
    <table class="table">
        <thead>
        <tr>
            <th>ProdID</th>
            <th>ProdName</th>
            <th>ProdDesc</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // Database connection details
        $servername = "127.0.0.1";  // Update with your database server
        $username = "infs3800";
        $password = "webclass";
        $dbname = "FINAL-3800";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch data from the database
        $sql = "SELECT ProdID, ProdName, ProdDesc, Total FROM yourUsername_FINAL";
        $result = $conn->query($sql);

        // Display data in the table
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['ProdID']}</td>
                        <td>{$row['ProdName']}</td>
                        <td>{$row['ProdDesc']}</td>
                        <td>{$row['Total']}</td>
                        <td><button class='btn btn-danger'>Delete</button></td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No records found</td></tr>";
        }

        // Close connection
        $conn->close();
        ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS CDN -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
