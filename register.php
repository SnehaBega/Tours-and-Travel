<?php

@include 'connect.php' ;
if (!$db_conn) {
    die('Could not connect to database: ' . mysqli_connect_error());
}
 
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  
  // Hash the password for security
  $password = password_hash($password, PASSWORD_DEFAULT);
  
  // Create a new SQL query to insert the data into the database
  $sql = "INSERT INTO `admin`(`username`, `id`, `Email`, `password`, `code`) VALUES ('$username',' ','$email','$password','')";
  
  // Execute the query
  if (mysqli_query($db_conn, $sql)) {
    // Redirect the user to the dashboard page
    header("Location: dashboard.html");
    exit;
  } else {
    // Handle any errors that occurred during the database insert
    echo "Error: " . $sql . "<br>" . mysqli_error($db_conn);
  }
}

// Close the database connection
mysqli_close($db_conn);
?>
