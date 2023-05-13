<?php

// Establish database connection
$db_conn = mysqli_connect("localhost", "root", "", "database");

// Check if connection was successful
if (!$db_conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $name = mysqli_real_escape_string($db_conn, $_POST["name"]);
    $email = mysqli_real_escape_string($db_conn, $_POST["email"]);
    $address = mysqli_real_escape_string($db_conn, $_POST["Address"]);
    $subject = mysqli_real_escape_string($db_conn, $_POST["subject"]);
    $message = mysqli_real_escape_string($db_conn, $_POST["message"]);

    // Insert data into database
    $sql = "INSERT INTO contact_us (name, email, address, subject, message) 
            VALUES ('$name', '$email', '$address', '$subject', '$message')";
    if (mysqli_query($db_conn, $sql)) {
        // Display success message
        echo "<script>alert('Your message has been sent successfully.');</script>";
    } else {
        // Display error message
        echo "<script>alert('Error: " . mysqli_error($db_conn) . "');</script>";
    }
}

// Close database connection
mysqli_close($db_conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="ContactUs1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>
<a href="../Login/dashboard.html" class="back-button"><i class="bi bi-arrow-left"></i></a>

<body>
    <div class="container">

        <div class="contact-form-container">
            <div class="contact-container">
                <h1>Contact Us</h1>
                <form id="contact-form" method="post" action="contact.php">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="Address">Address</label>
                        <input type="text" name="Address" id="Address" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" required></textarea>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
        <div class="website-details-container">
            <h2>Info</h2>
            <ul>
                <li><i class="bi bi-envelope-fill"></i> <strong>Email:</strong> TravelRender@.com</li>
                <li><i class="bi bi-phone-fill"></i> <strong>Phone:</strong> 9869000042</li>
                <li><i class="bi bi-geo-alt-fill"></i> <strong>Address:</strong> Newroad, Kathmandu, Nepal</li>
                <li><i class="bi bi-clock-fill"></i> <strong>Hours:</strong> Mon-Fri, 9am-5pm </li>
            </ul>
        </div>
    </div>
</body>

<script src="script.js"></script>
</body>

</html>
