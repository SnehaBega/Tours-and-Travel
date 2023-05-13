
<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// 	$name = $_POST['name'];
// 	$email = $_POST['email'];
// 	$subscription = $_POST['subscription'];

// 	// send email notification
// 	echo'Check your mail for further info';

// 	$to = $email;
// 	$subject = 'Subscription Confirmation';
// 	$message = "Dear $name,\n\nThank you for subscribing to our $subscription plan. Your payment of $10/$100 has been received and your subscription is now active.\n\nRegards,\nThe Subscription Team";
// 	$headers = "From: begasneha@gmail.com" . "\r\n" .
// 			   "Reply-To: begasneha@gmail.com" . "\r\n" .
// 			   "X-Mailer: PHP/" . phpversion();
	
// 	mail($to, $subject, $message, $headers);
	
// 	exit;
// }


// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$subscription = $_POST['subscription'];

// Create a MySQL connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert the subscription information into the database
$sql = "INSERT INTO subscription (name, email, subscription) VALUES ('$name', '$email', '$subscription')";
if ($conn->query($sql) === TRUE) {
  	echo "<script>
    alert('You are now a premium member of Travel Render.');
    window.location.href='Subscription.html';
	  </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();

?>




