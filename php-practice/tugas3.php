<?php

    $nama = "Muhamad Taopik";
    $nim = 1197050081;
    $tanggal_lahir = "22 Agustus 2000";
    $alamat = "Lemahsugih - Majalengka 46465 Jawa Barat";
    $email = "1197050081@student.uinsgd.ac.id";
    $github = "https://github.com/Mr94t3z/webapps-practice";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3</title>
</head>
    <style>
        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
    </style>
<body>
    <strong>
        <h2>BIODATA</h2>
    </strong>
    <table>
        <tr>
            <td>Nama</td>
            <td> : <?php echo $nama; ?> </td>
        </tr>
        <tr>
            <td>NIM</td>
            <td> : <?php echo $nim; ?> </td>
        </tr>
        <tr>
            <td>Tanggal lahir </td>
            <td> : <?php echo $tanggal_lahir; ?> </td>
        </tr>
        <tr>
            <td>Alamat </td>
            <td> : <?php echo $alamat; ?> </td>
        </tr>
        <tr>
            <td>Email</td>
            <td> : <?php echo $email; ?> </td>
        </tr>
        <tr>
            <td>GitHub</td>
            <td> : 
            <a href="<?php echo $github; ?>">Profile GitHub</a>
        </td>
        </tr>
    </table>
</body>

</html>