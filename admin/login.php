<?php
@include 'connect.php' ;
if (!$db_conn) {
    die('Could not connect to database: ' . mysqli_connect_error());
}

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 1000");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");

// Check if the form was submitted
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email and password are correct
    $query = "SELECT * FROM `admin` WHERE email='$email' AND password='$password'";
    $result = mysqli_query($db_conn, $query);
    $row=mysqli_fetch_array($result);
    if($row['Email']==$email && $row['password']==$password){
        echo '<script>alert("Login successful"); window.location.href = "dashboard.html";</script>';
        // Redirect to the dashboard page
        // header("Location: Dash/dashboard.html"); 
        // exit();
    }
    else{
        echo'<script>alert("Invalid Username or Password");</script>';
        // echo"<script>location.replace('login.html')</script>";
    }

    // if (mysqli_num_rows($result) == 1) {
    //     // Login successful
    //     echo '{"message":"Login successful"}';
    // } else {
    //     // Login failed
    //     echo '{"message":"Invalid email or password"}';
    // }
}

mysqli_close($db_conn);
?>
