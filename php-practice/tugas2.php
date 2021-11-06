<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
</head>
    <style>
        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
    </style>
<body>
    <?php

    echo "Menampilkan string tanggal:";
    echo "<br> <br>";

    // Output — Tahun
    echo date('Y');
    echo "<br>";

    // Output — Bulan dan Tahun
    echo date('F Y');
    echo "<br>";

    // Output — Tanggal, Bulan, dan Tahun
    echo date('d F, Y');
    echo "<br>";

    // Output — Tanggal, Bulan, dan Tahun (Hari)
    echo date('d F, Y (l)');
    echo "<br> <br>";

    echo "Menampilkan string time dan string tanggal:";
    echo "<br> <br>";

    // Output — Jam
    echo 'Jam : ' . date('h:i:s A');
    echo "<br>";

    // Output — Hari dan Jam
    echo date('l, h:i:s A');
    echo "<br>";

    // Output — Tanggal, Bulan, Tahun dan Jam
    echo date('d F Y, h:i:s A');
    echo "<br> <br>";

    $ten_days_later = time() + 10*60*60*24;
    // Output — Ini akan menjadi hari (l) 10 hari kemudian.
    echo 'Ini akan menjadi hari '.date('l', $ten_days_later).' 10 hari kemudian.';
    echo "<br> <br>";

    $ten_days_ago = time() - 10*60*60*24;
    // Output — Itu hari (l) 10 hari yang lalu.
    echo 'Itu hari '.date('l', $ten_days_ago).' 10 hari yang lalu.';

    ?>
</body>
</html>