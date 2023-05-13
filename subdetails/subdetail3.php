<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $hotel = $_POST["hotel"];
  $checkin = $_POST["checkin"];
  $checkout = $_POST["checkout"];
  $price = $_POST["price"];
  $name = $_POST["name"];
  $card = $_POST["card"];
  $expiration = $_POST["expiration"];
  // Save reservation and payment details to database or file
  // Redirect to receipt page
   exit;
}
?>
