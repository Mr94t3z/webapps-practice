<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi Database MySQL</title>
</head>
<body>
    <h1>Demo Koneksi</h1>
    <?php

    $conn = mysqli_connect ("localhost", "root", "", "prak_paw");

    if ($conn) {
        echo "OK";
    } else {
        echo "Server not connected";
    }

    ?>
</body>
</html>