<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<a href="./dashboard.html" class="back-button"><i class="bi bi-arrow-left"></i></a>

</html>
<?php
// Connect to the database
$db_hostname = 'localhost:3306';
$db_username = 'root';
$db_password = '';
$db_database = 'database';

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

// Select all feedback from the database
$sql = "SELECT * FROM feedback";
$result = mysqli_query($conn, $sql);

// Check if any feedback was found
if (mysqli_num_rows($result) > 0) {
    // Start building the table HTML
    $table_html = '<table>';
    $table_html .= '<thead><tr><th>Name</th><th>Email</th><th>Rating</th><th>Feedback</th></tr></thead>';
    $table_html .= '<tbody>';

    // Loop through each feedback and add a row to the table
    while ($row = mysqli_fetch_assoc($result)) {
        $table_html .= '<tr>';
        $table_html .= '<td>' . $row['name'] . '</td>';
        $table_html .= '<td>' . $row['email'] . '</td>';
        $table_html .= '<td>' . $row['rating'] . '</td>';
        $table_html .= '<td>' . $row['feedback'] . '</td>';
        $table_html .= '</tr>';
    }

    $table_html .= '</tbody></table>';

    // Output the table
    echo $table_html;
} else {
    echo 'No feedback found.';
}

mysqli_close($conn);
?>


<style>
    .bi-arrow-left::before {
        margin: 10px;
        font-size: 30px;
    }
    
    table {
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
        font-family: Arial, sans-serif;
    }

    thead {
        background-color: #6C9BCF;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
        border: 1px solid #ddd;
    }

    th {
        font-weight: bold;
        text-transform: uppercase;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

  
</style>