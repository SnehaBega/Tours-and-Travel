<?php
   // Connect to the database
   $db_hostname = 'localhost:3306';
   $db_username = 'root';
   $db_password = '';
   $db_database = 'database';
   
   $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
      

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$rating = $_POST['rating'];
$feedback = $_POST['feedback'];

// Insert the feedback into the database
$sql = "INSERT INTO feedback (name, email, rating, feedback) VALUES ('$name', '$email', '$rating', '$feedback')";



if (mysqli_query($conn, $sql)) {
    echo "<script>
    alert('Feedback submitted successfully!');
    window.location.href='Feedback.html';
  </script>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
