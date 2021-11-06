<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Tipe</title>
</head>
    <style>
        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
    </style>
<body>
    <?php

    $a = 300.4;

    echo $a;
    echo "<br>";

    echo "tipe Double : ", doubleval($a), "<br>";
    echo "tipe Interger : ", intval($a), "<br>";
    echo "tipe String : ", strval($a);

    ?>
</body>
</html>