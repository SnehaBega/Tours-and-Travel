<?php
@include 'connect.php' ;
if (!$db_conn) {
    die('Could not connect to database: ' . mysqli_connect_error());
}

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];

$sql = "INSERT INTO customers (name, email, phone) VALUES ('$name', '$email', '$phone')";
$result = mysqli_query($db_conn, $sql);

mysqli_close($db_conn);
?>
