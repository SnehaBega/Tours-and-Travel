<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the customer ID from the form data
  $id = $_POST['id'];

  // Connect to the database
  include 'connect.php';
  if (!$db_conn) {
      die('Could not connect to database: ' . mysqli_connect_error());
  }

  // Prepare the DELETE statement and execute it
  $stmt = mysqli_prepare($db_conn, 'DELETE FROM customers WHERE id = ?');
  mysqli_stmt_bind_param($stmt, 'i', $id);
  $result = mysqli_stmt_execute($stmt);

  // Check if the deletion was successful
  if ($result) {
    echo 'Customer record deleted successfully';
  } else {
    echo 'Error deleting customer record: ' . mysqli_error($db_conn);
  }

  // Close the database connection
  mysqli_close($db_conn);
}
?>
