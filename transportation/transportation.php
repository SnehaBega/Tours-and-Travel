<?php

   // Connect to the database
   $db_hostname = 'localhost:3306';
   $db_username = 'root';
   $db_password = '';
   $db_database = 'database';
   
   $db_conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

// retrieve form data and sanitize input
$destination = mysqli_real_escape_string($db_conn, $_POST['destination']);
$route = mysqli_real_escape_string($db_conn, $_POST['route']);
$arrival_time = mysqli_real_escape_string($db_conn, $_POST['arrival-time']);
$departure_time = mysqli_real_escape_string($db_conn, $_POST['departure-time']);
$flight_type = mysqli_real_escape_string($db_conn, $_POST['Flight-type']);


// insert data into database
$query = "INSERT INTO transportation (destination, route, arrival_time, departure_time, flight_type) 
          VALUES ('$destination', '$route', '$arrival_time', '$departure_time', '$flight_type')";

if (mysqli_query($db_conn, $query)) {
   // Assuming the database insertion is successful
echo "<script>alert('Data stored successfully');
window.location.href='read.html';
</script>";


} else {
  echo "Error storing data: " . mysqli_error($db_conn);
}

// close the db_conn
mysqli_close($db_conn);

?>