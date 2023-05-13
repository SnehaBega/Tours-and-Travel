<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head> 
<a href="../admin/dashboard.html" class="back-button"><i class="bi bi-arrow-left"></i></a>
	<title>Admin Notifications</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #f2f2f2;
		}
		.bi-arrow-left::before {
        margin: 10px;
        font-size: 30px;
    }
	</style>
</head>
<body>
		<h1>Admin Notifications</h1>
	<table>
		<thead>
			<tr>
				<th>Date</th>
				<th>Time</th>
				<th>Notification</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// Connect to the database
			$conn = mysqli_connect("localhost", "root", "", "database");
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			// Retrieve the notifications from the database
			$sql = "SELECT * FROM notifications";
			$result = mysqli_query($conn, $sql);

			// Output the notifications in a table
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row['date'] . "</td>";
				echo "<td>" . $row['time'] . "</td>";
				echo "<td>" . $row['message'] . "</td>";
				echo "</tr>";
			}

			// Close the database connection
			mysqli_close($conn);
			?>
		</tbody>
	</table>
</body>
</html>
