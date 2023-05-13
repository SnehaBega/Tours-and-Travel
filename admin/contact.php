<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the table
$sql = "SELECT * FROM contact_us";
$result = $conn->query($sql);

// Output the table with data
if ($result->num_rows > 0) {
  echo "<table style='border: 1px solid black; border-collapse: collapse;'>";
  echo "<tr><th style='background-color: #f2f2f2; text-align: left; padding: 10px;'>Name</th><th style='background-color: #f2f2f2; text-align: left; padding: 10px;'>Email</th><th style='background-color: #f2f2f2; text-align: left; padding: 10px;'>Message</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td style='border: 1px solid black; padding: 10px;'>".$row["name"]."</td><td style='border: 1px solid black; padding: 10px;'>".$row["email"]."</td><td style='border: 1px solid black; padding: 10px;'>".$row["message"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

$conn->close();
?>

<style>
	table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 12px;
}

th {
  background-color: #f2f2f2;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}

td {
  border: 1px solid #ddd;
}

</style>