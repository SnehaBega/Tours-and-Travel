<?php
   // Connect to the database
$db_hostname = 'localhost:3306';
$db_username = 'root';
$db_password = '';
$db_database = 'database';

$db_conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
   
// if($conn->connect_error){
    //     die("Connection failed: ".$conn->connect_error);
    // }
    // else{
    //     echo "Connected successfully";
    // }


// Get payment details from form
$cardnumber = $_POST['cardnumber'];
$cardname = $_POST['cardname'];
$expirydate = $_POST['expirydate'];
$cvv = $_POST['cvv'];

// Prepare SQL statement to insert payment details
$sql = "INSERT INTO payments (cardnumber, cardname, expirydate, cvv) VALUES ('$cardnumber', '$cardname', '$expirydate', '$cvv')";

if ($db_conn->query($sql) === TRUE) {
  echo "<script>
      if (confirm('Payment details saved successfully. Do you want to receive the payment receipt?')) {
          window.location.href = 'http://localhost/tour&travel/subdetails/subdetail.html';
      } else {
          window.location.href = 'http://localhost/tour&travel/Login/dashboard.html';
      }
  </script>";
} else {
  echo "Error: " . $sql . "<br>" . $db_conn->error;
}

$db_conn->close();

?>


