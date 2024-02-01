<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa; /* Background color similar to existing theme */
            color: #333; /* Text color similar to existing theme */
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #343a40; /* Dark background color for the header */
            color: white;
            padding: 10px;
            text-align: center;
        }

        .contact-container {
            width: 80%;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: white;
            color: #333;
        }

        .contact-container h2 {
            font-size: 24px;
            color: #007bff; /* Highlight color similar to existing theme */
            margin-bottom: 20px;
        }

        .contact-info {
            margin-bottom: 20px;
        }

        .contact-info p {
            margin-bottom: 8px;
        }

        .contact-info i {
            margin-right: 10px;
            font-size: 18px;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
        }

        .contact-form label {
            margin-bottom: 8px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .contact-form button {
            background-color: #007bff;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-out;
        }

        .contact-form button:hover {
            background-color: #0056b3;
        }

        .offcanvas-body {
    text-align: left;
}

/* Add this style to align text to the left */
.navbar-nav {
    margin: 0;
    padding: 0;
}

.navbar-nav .nav-item {
    text-align: left;
}

    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Rocky Mountain Revivers</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
                    aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                    aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">DETAILING</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">CONTACT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="serviceArea.html">SERVICE AREA</a>
                            </li>
                            </li>
                        </ul>
                        <form class="d-flex flex-column mt-3" id="nav-booking-form">
                            <select id="service" name="service" class="form-control mb-3">
                                <option value="" selected disabled>Select a Service</option>
                                <option value="interior">Perfect Interior Package</option>
                                <option value="exterior">Premium Interior Package</option>
                                <option value="full">Interior and Exterior Revival</option>
                                <option value="full">Premium Interior and Exterior Revival</option>
                                <option value="full">Other</option>
                            </select>
    
                            <label for="date-nav">Select Date:</label>
                            <input type="text" id="date-nav" name="date-nav" class="form-control mb-3" readonly>
    
                            <label for="name">Your Name:</label>
                            <input type="text" id="name" name="name" class="form-control mb-3" required>
    
                            <label for="email">Your Email:</label>
                            <input type="email" id="email" name="email" class="form-control mb-3" required>
    
                            <label for="phone">Your Phone:</label>
                            <input type="tel" id="phone" name="phone" class="form-control mb-3" required>
    
                            <label for="message">Leave a Message: (optional)</label>
                            <textarea id="message" name="message" class="form-control mb-3" rows="5" maxlength="250"></textarea>
    
                            <button type="button" onclick="submitBookingNav()" class="btn btn-primary">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="contact-container">
        <h2>Get in Touch</h2>

        <div class="contact-info">
            <p><i class="fas fa-map-marker-alt"></i>Colorado Springs (80903-80924) </p>
            <p><i class="fas fa-phone"></i>(719)-235-2255</p>
            <p><i class="fas fa-envelope"></i>pikespeakrevivers@gmail.com</p>
        </div>

        <form class="contact-form" id="contact-form">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="button" onclick="submitContactForm()">Send Message</button>
        </form> 
</div>

<!-- Include jQuery first -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Then include Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="js/bootstrap.js"></script>

<!-- Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<!-- Flatpickr JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
    function scrollToBookingContainer() {
        var container = document.getElementById('booking-container');
        container.scrollIntoView({ behavior: 'smooth' });
    }
    
    function submitContactForm() {
    console.log("Submitting contact form...");
    $.ajax({
        type: "POST",
        url: "process_contact.php",
        data: $("#contact-form").serialize(),
        success: function (response) {
            alert(response); // Display the response from the server
        },
        error: function (error) {
            console.error("Error submitting form:", error);
        }
    });
}
    </script>

</body>

</html>
