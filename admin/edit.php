<?php
// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$database = "database";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the package ID from the URL parameter
$package_id = $_GET['id'];

// Retrieve the package data from the database
$sql = "SELECT * FROM packages WHERE id = $package_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    echo "Package not found.";
} else {
    $row = mysqli_fetch_assoc($result);

    // If the form is submitted, update the package in the database
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $duration = $_POST['duration'];
        $price = $_POST['price'];
        $description = $_POST['description'];

        // Check if a new image file is uploaded
        if ($_FILES['image']['name'] != "") {
            $image = $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $target_dir = "images/";
            $target_file = $target_dir . basename($image);
            move_uploaded_file($tmp_name, $target_file);

            // Delete the old image file
            unlink($row['image']);
        } else {
            // Keep the old image file if no new file is uploaded
            $image = $row['image'];
        }

        // Update the package data in the database
        $sql = "UPDATE packages SET name = '$name', duration = '$duration', price = '$price', description = '$description', image = '$image' WHERE id = $package_id";
        if (mysqli_query($conn, $sql)) {
            header("Location: view_package.php?id=$package_id");
            exit;
        } else {
            echo "Error updating package: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Package</title>
</head>
<body>
    <h1>Edit Package</h1>

    <?php if (mysqli_num_rows($result) > 0): ?>
        <form method="POST" enctype="multipart/form-data">
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>

            <label>Duration:</label>
            <input type="text" name="duration" value="<?php echo $row['duration']; ?>"><br>

            <label>Price:</label>
            <input type="text" name="price" value="<?php echo $row['price']; ?>"><br>

            <label>Description:</label><br>
            <textarea name="description"><?php echo $row['description']; ?></textarea><br>

            <label>Image:</label>
            <input type="file" name="image"><br>
            <img src="<?php echo $row['image']; ?>" width="200"><br>

            <input type="submit" name="submit" value="Save">
            <a href="view_package.php?id=<?php echo $package_id; ?>">Cancel</a>
        </form>
    <?php endif; ?>

</body>
</html>
