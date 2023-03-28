<?php
@include 'connect.php' ;

if (!$db_conn) {
  die('Connection failed: ' . mysqli_connect_error());
}


header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 1000");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $username = $_POST['username'];
  $Email = $_POST['Email'];
  $password = $_POST['password'];

  // Check if the connection was successful


  // Hash the password
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // Insert the admin data into the database
  $sql = "INSERT INTO 'admin' (username, Email, password) VALUES ('$username', '$Email', '$password')";
  if (mysqli_query($db_conn, $sql)) {
    // Redirect the user to the dashboard
    header('Location: dashboard.html');
    exit();
  } else {
    echo 'Error: ' . $sql . '<br>' . mysqli_error($db_conn);
  }

  // Close the database connection
  mysqli_close($db_conn);
}
?>
