<?php
@include 'connect.php' ;
if (!$db_conn) {
    die('Could not connect to database: ' . mysqli_connect_error());
}


$sql = "SELECT * FROM customers";
$result = mysqli_query($db_conn, $sql);

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>" . $row["id"] . "</td>";
		echo "<td>" . $row["name"] . "</td>";
		echo "<td>" . $row["email"] . "</td>";
		echo "<td>" . $row["phone"] . "</td>";
		echo "<td><button type='button' onclick='deleteCustomer(" . $row["id"] . ")'>Delete</button></td>";
		echo "</tr>";
	}
} else {
	echo "<tr><td colspan='5'>No customers found</td></tr>";
}

mysqli_close($db_conn);
?>
