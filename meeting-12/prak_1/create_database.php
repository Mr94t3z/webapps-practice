<?php
$username = "root";

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
$servername = "localhost";
$password = "password";
// Create connection
// Check connection
die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
echo "Database created successfully";
} else {
echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);

?>