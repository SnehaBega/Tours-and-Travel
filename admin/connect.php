<?php
   // Connect to the database
$db_hostname = 'localhost:3306';
$db_username = 'root';
$db_password = '';
$db_database = 'database';

$db_conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
   
if($db_conn->connect_error){
        die("Connection failed: ".$db_conn->connect_error);
    }
    else{
        echo "Connected successfully";
    }


    ?>

