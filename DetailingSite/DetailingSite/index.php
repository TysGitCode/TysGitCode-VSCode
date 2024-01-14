<?php include_once 'process_booking.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pikes Peak Revivers</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <!-- Correct Flatpickr JavaScript Import -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>

<body>

<script>
        // Format phone number as xxx-xxx-xxxx
        function formatPhoneNumber(input) {
            // Remove non-numeric characters
            var numericValue = input.value.replace(/\D/g, '');

            // Limit input to only numeric characters
            input.value = numericValue;

            // Check if the input is empty or not a valid number
            if (!numericValue || isNaN(numericValue)) {
                return;
            }

            // Format the phone number
            var formattedPhoneNumber = numericValue.replace(/(\d{3})(\d{3})(\d{4})/, '$1-$2-$3');

            // Update the input value with the formatted number
            input.value = formattedPhoneNumber;
        }

        document.addEventListener('DOMContentLoaded', function () {
            // Attach the formatPhoneNumber function to phone input elements
            var phoneInputs = document.querySelectorAll('input[type="tel"]');
            phoneInputs.forEach(function (input) {
                input.addEventListener('input', function () {
                    formatPhoneNumber(input);
                });
            });

            // ... (your existing script content) ...
        });

        // ... (your existing functions and scripts) ...
    </script>

    <header>
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Pikes Peak Revivers</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
                    aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                    aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Pikes Peak Revivers</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">CONTACT</a>
                        </li>
                        <li class="nav-item"> <!-- This li was not closed -->
                            <a class="nav-link" href="serviceArea.html">SERVICE AREA</a>
                        </li>
                    </ul>
                        <form class="d-flex flex-column mt-3" id="nav-booking-form">
                            <select id="service-nav" name="service" class="form-control mb-3">
                                <option value="" selected disabled>Select a Service</option>
                                <option value="interior">Perfect Interior Package</option>
                                <option value="exterior">Premium Interior Package</option>
                                <option value="full">Interior and Exterior Revival</option>
                                <option value="full">Premium Interior and Exterior Revival</option>
                                <option value="full">Other</option>
                            </select>

                            <label for="date-nav">Select Date:</label>
                            <input type="text" id="date-nav" name="date-nav" class="form-control mb-3" readonly>

                            <label for="name-nav">Your Name:</label>
                            <input type="text" id="name-nav" name="name-nav" class="form-control mb-3" required>

                            <label for="email-nav">Your Email:</label>
                            <input type="email" id="email-nav" name="email-nav" class="form-control mb-3" required>

                            <label for="phone-nav">Your Phone:</label>
                            <input type="tel" id="phone-nav" name="phone-nav" class="form-control mb-3" required>

                            <label for="message-nav">Leave a Message: (optional)</label>
                            <textarea id="message-nav" name="message-nav" class="form-control mb-3" rows="5" maxlength="250"></textarea>

                            <button type="button" onclick="submitBookingNav()" class="btn btn-primary">Book Now</button>

                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="landingBackground">
        <div class="landingContent">
            <h1 class="mainTitle">Pikes Peak Revivers</h1>
            <h2 class="subHeader">Mobile Detailing</h2>
            <a href="#booking-container" class="btn bookOnlineButton">Book Online!</a>
        </div>
        <h3 class="phoneNumber phoneContent">719-235-2255</h3>
    </div>
    <div class="landingPageTransition"></div>

    <div class="descriptionPageBackground">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-sm-12 col-md-4">
                    <div class="card">
                        <img src="Photos/mobileDetailing.jpeg" class="card-img-top img-fluid" alt="Image 1">
                        <div class="card-body">
                            <p class="card-text card-title">We Come to You!</p>
                            <p class="card-text">We bring the spa to your car! Our mobile detailing service ensures that
                                your vehicle receives top-notch care and attention at your convenience. With a commitment to
                                quality and precision, we come to you, making car care effortless and stress-free.
                                Experience the ultimate in convenience and excellence with our on-the-go detailing
                                solutions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-md-4">
                    <div class="card">
                        <img src="Photos/products.jpg" class="card-img-top img-fluid" alt="Image 2">
                        <div class="card-body">
                            <p class="card-text card-title">Quality Products</p>
                            <p class="card-text">Experience excellence with our premium detailing products. We believe in
                                using only the finest quality products for your vehicle, ensuring a superior finish and
                                long-lasting protection. Our commitment to excellence extends to the products we choose,
                                providing your car with the care it deserves. Discover the difference of top-tier detailing
                                with our quality product selection.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-md-4">
                    <div class="card">
                        <img src="Photos/customerService.jpg" class="card-img-top img-fluid" alt="Image 3">
                        <div class="card-body">
                            <p class="card-text card-title">Extraordinary Service</p>
                            <p class="card-text">Our commitment goes beyond detailing; it extends to your satisfaction. We
                                take pride in providing a customer-centric experience, ensuring your needs are met with
                                precision and care. Your satisfaction is our priority, and we strive to exceed
                                expectations with every service.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="landingPageTransition"></div>

    <div class="packagesBackground">
        <div class="container card-container">
            <div class="row">
                <!-- Perfect Interior Package Card -->
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="packageCardBackground card mb-4">
                        <div class="card-body card-content">
                            <h3 class="card-title-package">Express Interior</h3>
                            <h4 class="card-subtitle">$175</h4>
                            <p class="card-text">A quick refresh for the interior of your vehicle</p>
                            <ul>
                                <li>Vacuum carpets, floor, mats, trunk</li>
                                <li>Wipe down dashboard, doors</li>
                                <li>Cleaning of interior windows</li>
                                <li>Odor neutralizer</li>
                                <li>Shine & UV protect interior surfaces with 303 Aerospace Protectant</li>
                              </ul>
                            <button class="btn bookOnlineButton" onclick="scrollToBookingContainer()">SCHEDULE DETAIL</button>

                        </div>
                    </div>
                </div>

                <!-- Premier Detail Package Card -->
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="packageCardBackground card mb-4">
                        <div class="card-body card-content">
                            <h3 class="card-title-package">Premium Interior</h3>
                            <h4 class="card-subtitle">$249</h4>
                            <p class="card-text">A solution to get rid of deeper dirt and grime <br> to get your car looking brand new</p>
                            <ul>
                                <li>Vacuum carpets, floor, mats, trunk</li>
                                <li>Wipe down dashboard, doors</li>
                                <li>Cleaning of interior windows</li>
                                <li>Odor neutralizer</li>
                                <li>Shine & UV protect interior surfaces with 303 Aerospace Protectant</li>
                                <li><strong>Deep clean & scrub interior surfaces <br>
                                of dashboard, doors, cup holders, center consoles, compartments, air vents, leather</strong></li>
                                <li><strong>Fine detailing of buttons, dials, switches with boars hair brushes</strong></li>
                                <li><strong>Shampoo carpets, floor, mats, seats</strong></li>
                                <li><strong>High powered air compressor to blow grime out of edges, nooks, crannies, crevices </strong></li>
                              </ul>
                            <button class="btn bookOnlineButton" onclick="scrollToBookingContainer()">SCHEDULE DETAIL</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Super Gloss Package Card -->
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="packageCardBackground card mb-4">
                        <div class="card-body card-content">
                            <h3 class="card-title-package">Express Exterior</h3>
                            <h4 class="card-subtitle">$125</h4>
                            <p class="card-text">A quick refresh for the exterior of your vehicle</p>
                            <ul>
                                <li>Hand Wash/Dry</li>
                                <li>Foam Cannon Soap</li>
                                <li>Tires Scrubbed and Cleaned</li>
                                <li>Tires Shined</li>
                                <li>Tires and wheel wells dressed</li>
                                <li>Exterior Windows Cleaned</li>
                            </ul>
                            <button class="btn bookOnlineButton" onclick="scrollToBookingContainer()">SCHEDULE DETAIL</button>
                        </div>
                    </div>
                </div>

                <!-- Ceramic Protection Package Card -->
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="packageCardBackground card mb-4">
                        <div class="card-body card-content">
                            <h3 class="card-title-package">Premium Interior and Exterior Revival</h3>
                            <h4 class="card-subtitle">$399</h4>
                            <p class="card-text">A showroom quality detail <br> to get your car looking brand new!</p>
                            <ul>
                                <li>Vacuum carpets, floor, mats, trunk</li>
                                <li>Wipe down dashboard, doors</li>
                                <li>Cleaning of interior windows</li>
                                <li>Odor neutralizer</li>
                                <li>Shine & UV protect interior surfaces with 303 Aerospace Protectant</li>
                                <li>Deep clean & scrub interior surfaces <br>
                                of dashboard, doors, cup holders, center consoles, compartments, air vents, leather</li>
                                <li>Fine detailing of buttons, dials, switches with boars hair brushes</li>
                                <li>Shampoo carpets, floor, mats, seats</li>
                                <li>High powered air compressor to blow grime out of edges, nooks, crannies, crevices</li>
                                <li>Hand Wash/Dry</li>
                                <li>Foam Cannon Soap</li>
                                <li>Tires Scrubbed and Cleaned</li>
                                <li>Tires and wheel wells dressed</li>
                                <li>Exterior Windows Cleaned</li>
                                <li>Wheels Shined and deep cleaned</li>
                                <li><strong>Windshield Polished with a water-resistant coating</strong></li>
                                <li><strong>Clay bar cleaning to remove paint contaminants</strong></li>
                                <li><strong>Water-resistant coating and sealant</strong></li>
                                <li><strong>Long-lasting air freshener spray</strong></li>
                            </ul>
                            <button class="btn bookOnlineButton" onclick="scrollToBookingContainer()">SCHEDULE DETAIL</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="landingPageTransition"></div>


    <div class="booking-container" id="booking-container">
    <h2>Book Your Detailing Service</h2>
    <h5>OR contact me at 719-235-2255</h5>
    <form id="booking-form-container">
            <label for="service">Select Service:</label>
            <select id="service" name="service">
                <option value="" selected disabled>Select a Service</option>
                <option value="interior">Perfect Interior Package</option>
                <option value="exterior">Premium Interior Package</option>
                <option value="full">Interior and Exterior Revival</option>
                <option value="full">Premium Interior and Exterior Revival</option>
                <option value="full">Other</option>
            </select>

            <label for="date-container">Select Date:</label>
            <input type="date" id="date-container" name="date-container" required>

            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Your Phone:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="message">Leave a Message: (optional)</label>
            <textarea id="message" name="message" rows="5" maxlength="250"></textarea>
            

            <button type="button" onclick="submitBookingContainer()" class="btn btn-primary">Book Now</button>
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
document.addEventListener('DOMContentLoaded', function () {
    var disabledDates = ['01-10-2024', '01-15-2024', '01-20-2024'];

    flatpickr('#date-nav', {
        dateFormat: 'm-d-Y',
        minDate: '01-21-2024',
        maxDate: '12-31-2024',
        disable: disabledDates,
        onClose: function (selectedDates, dateStr, instance) {
            // Handle the datepicker closing event if needed
        }
    });

    flatpickr('#date-container', {
        dateFormat: 'm-d-Y',
        minDate: '01-21-2024',
        maxDate: '12-31-2024',
        disable: disabledDates,
        onClose: function (selectedDates, dateStr, instance) {
            // Handle the datepicker closing event if needed
        }
    });
});

function scrollToBookingContainer() {
    var container = document.getElementById('booking-container');
    container.scrollIntoView({ behavior: 'smooth' });
}

function submitBookingNav() {
    // Retrieve form data for navigation form
    var form = document.getElementById('nav-booking-form');
    submitBookingForm(form);
}

function submitBookingContainer() {
    // Retrieve form data for booking container form
    var form = document.getElementById('booking-form-container');
    submitBookingForm(form);
}

function submitBookingForm(form) {
    // Retrieve form data
    var service = form.querySelector('#service').value;
    var date = form.querySelector('#date-container').value;
    var name = form.querySelector('#name').value;
    var email = form.querySelector('#email').value;
    var phone = form.querySelector('#phone').value;
    var message = form.querySelector('#message').value;

    // Create a FormData object to send data
    var formData = new FormData();
    formData.append('service', service);
    formData.append('date-container', date);
    formData.append('name', name);
    formData.append('email', email);
    formData.append('phone', phone);
    formData.append('message', message);

    // Make an AJAX request
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'process_booking.php', true);
    xhr.onload = function () {
        if (xhr.status == 200) {
            // Display the response from the server
            alert(xhr.responseText);
        } else {
            alert('Error: ' + xhr.status);
        }
    };
    xhr.send(formData);
}
</script>


<script>
function submitBookingNav() {
    // Collect form data
    var service = $('#service-nav').val();
    var date = $('#date-nav').val();
    var name = $('#name-nav').val();
    var email = $('#email-nav').val();
    var phone = $('#phone-nav').val();
    var message = $('#message-nav').val();

    // Validate form data (add your validation logic here)

    // Send data to the server
    $.ajax({
        type: 'POST',
        url: 'process_booking.php', // Use the original PHP file
        data: {
            service: service,
            date_container: date, // Match the original PHP variable name
            name: name,
            email: email,
            phone: phone,
            message: message
        },
        success: function (response) {
            alert(response); // Display the server response
            // You can also redirect or perform other actions based on the response
        },
        error: function () {
            alert('Error submitting booking'); // Handle errors
        }
    });
}
</script>
</html>