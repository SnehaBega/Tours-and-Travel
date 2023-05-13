<!DOCTYPE html>
<head lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="about.css">
    
    <!-- <link rel="stylesheeet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head> 
<a href="../admin/dashboard.html" class="back-button"><i class="bi bi-arrow-left"></i></a>

</html>
<?php

// Connect to the database
$db_hostname = 'localhost:3306';
$db_username = 'root';
$db_password = '';
$db_database = 'database';

$db_conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

// Retrieve data from the transportation table
$query = "SELECT * FROM transportation";
$result = mysqli_query($db_conn, $query);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
  // Create the HTML table
  echo '<table>';
  echo '<tr><th>Destination</th><th>Route</th><th>Arrival Time</th><th>Departure Time</th><th>Flight Type</th></tr>';

  // Loop through the results and output each row
  while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['destination'] . '</td>';
    echo '<td>' . $row['route'] . '</td>';
    echo '<td>' . $row['arrival_time'] . '</td>';
    echo '<td>' . $row['departure_time'] . '</td>';
    echo '<td>' . $row['flight_type'] . '</td>';
    echo '</tr>';
  }

  echo '</table>';
} else {
  echo 'No data found';
}

// Close the database connection
mysqli_close($db_conn);

?>
<style>
  .bi-arrow-left::before {
        margin: 10px;
        font-size: 30px;
    }
  table {
    border-collapse: collapse;
    width: 100%;
    margin-bottom: 20px;
  }

  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #ACB1D6;
  }

  tr:hover {
    background-color: #C7E8CA;
  }
  
</style>

