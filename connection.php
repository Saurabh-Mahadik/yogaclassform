<?php
$host = 'localhost';
$user = 'root';
$password = 'saurabh@123'; 
$database = 'saurabh';

// Create a connection to the MySQL database
$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";


mysqli_close($conn)
?>
