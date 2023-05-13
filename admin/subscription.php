<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Perform a SELECT query
$sql = "SELECT `id`, `name`, `email`, `subscription` FROM `subscription` WHERE 1";
$result = mysqli_query($conn, $sql);

// Check if any records were returned
if (mysqli_num_rows($result) > 0) {
    // Output data of each row in a table
    echo '<table class="subscription-table">';
    echo '<tr><th>ID</th><th>Name</th><th>Email</th><th>Subscription</th></tr>';
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["subscription"]. "</td></tr>";
    }
    echo '</table>';
} else {
    echo "No records found.";
}

// Close the database connection
mysqli_close($conn);
?>

<style>
    .subscription-table {
    border-collapse: collapse;
    width: 100%;
}

.subscription-table th, .subscription-table td {
    text-align: left;
    padding: 8px;
}

.subscription-table th {
    background-color: #8294C4;
    color: #333;
}

.subscription-table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.subscription-table tr:hover {
    background-color: #ddd;
}

</style>