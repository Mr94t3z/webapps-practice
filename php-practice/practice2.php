<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman PHP dengan Array</title>
</head>
    <style>
        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
    </style>
<body>
    <?php
    
    //data array nama
    $nama[] = "Handsome";
    $nama[] = "Muhamad";
    $nama[] = "Taopik";
    
    echo $nama[1] . $nama[2] . $nama[0] ;
    echo "<br>";

    //menghitung jumlah elemen array
    $jum_array = count($nama);
    echo "jumlah elemen array = ". $jum_array;

    ?>
</body>
</html>