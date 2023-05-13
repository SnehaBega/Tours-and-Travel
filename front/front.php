<!DOCTYPE html>
<html>

<head>
    <title>Nepal Beauty</title>
    <link rel="stylesheet" type="text/css" href="front1.css">
</head>

<body>
    <div class="container">
        <img src="https://plus.unsplash.com/premium_photo-1670761685613-e5176b7e5e6e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTV8fE1vdW50YWlufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Nepal Beauty" class="left-image">
        <div class="right-side">
            <img src="../logo.jpg" alt="Logo" class="logo">
            <h1>Hello, "Let the Nepal Beauty inspire your next adventure."</h1>
            <br>
            <br>
            <h2>Choose your mode to continue!</h2>
            <form method="post" action="">
                <div class="mode-dropdown">
                    <button class="mode-button">Mode</button>
                    <div class="mode-content">
                        <a href="../admin/login.html" name="mode" value="admin">Admin</a>
                        <a href="../Login/login.html" name="mode" value="user">User</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<?php
if (isset($_POST['mode'])) {
    $mode = $_POST['mode'];
    if ($mode == 'admin') {
        header('Location: /tour&travel/admin/login.html');
        exit();
    } elseif ($mode == 'user') {
        header('Location: /tour&travel/Login/login.html');
        exit();
    }
}
?>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #ffff;
    }

    .container {
        display: flex;
        align-items: center;
        height: 100vh;
    }

    .left-image {
        flex: 1;
        height: 100%;
        object-fit: cover;
    }

    .right-side {
        flex: 1;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .logo {
        width: 150px;
        height: 150px;
        margin-bottom: 20px;
    }

    h1 {
        font-size: 30px;
        font-weight: bold;
        margin-bottom: 40px;
    }

    .mode-dropdown {
        position: relative;
        display: inline-block;
        margin-bottom: 20px;
    }

    .mode-button {
        background-color: #0066cc;
        color: white;
        padding: 12px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .mode-content {
        display: none;
        position: absolute;
        z-index: 1;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        right: 0;
    }

    .mode-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        cursor: pointer;
    }

    .mode-content a:hover {
        background-color: #ddd;
    }

    .mode-dropdown:hover .mode-content {
        display: block;
    }

    .login-buttons {
        display: flex;
    }

    .login-button,
    .signup-button {
        background-color: #0066cc;
        color: white;
        padding: 12px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        margin-right: 10px;
    }

    .signup-button {
        background-color: #0066cc;
    }

    .login-button:hover,
    .signup-button:hover {
        background-color: #0066cc;
    }
</style>