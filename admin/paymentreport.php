<?php
// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'database');

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// retrieve data from payments table
$sql = "SELECT id, cardnumber, cardname, expirydate, cvv, created_at FROM payments";
$result = mysqli_query($conn, $sql);

// check if there are any results
if (mysqli_num_rows($result) > 0) {
    // create a new file to store the data
    $filename = 'payment_data.csv';
    $file = fopen($filename, 'w');

    // write the headers to the file
    $headers = array('ID', 'Card Number', 'Card Name', 'Expiry Date', 'CVV', 'Created At');
    fputcsv($file, $headers);

    // loop through each row of the results and write them to the file
    while ($row = mysqli_fetch_assoc($result)) {
        fputcsv($file, $row);
    }

    // close the file
    fclose($file);

    // redirect the user to the new file
    header('Location: ' . $filename);
    exit();
} else {
    echo 'No data found.';
}

?>