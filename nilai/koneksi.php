<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "prak_paw";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}