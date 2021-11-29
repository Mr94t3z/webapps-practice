<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi Database MySQL</title>
</head>
<body>
    <h1>Koneksi database dengan mysqli_fetch_array</h1>
    <?php

    $conn = mysqli_connect ("localhost", "root", "")
    or die ("koneksi gagal");

    mysqli_select_db($conn, "prak_paw");

    $hasil = mysqli_query($conn, "SELECT * FROM liga");
    WHILE 
    ($row = mysqli_fetch_array($hasil)) {
        echo " Liga " . $row["negara"];
    }

    ?> 
</body>
</html>