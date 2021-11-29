<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Nilai Mahasiswa</title>
</head>
<body>
    <h1>Data Nilai Mahasiswa</h1>
    <?php

    include 'koneksi.php';

    $query = mysqli_query($conn, "SELECT * FROM mahasiswa");

    echo "<table border = '1'>

    <tr>

    <th>NIM</th>
    <th>Nama Mahasiswa</th>
    <th>Tugas Terstruktur</th>
    <th>Tugas Mandiri</th>
    <th>UTS</th>
    <th>UAS</th>
    <th>Nilai Akhir</th>
    <th>Action</th>

    </tr>";

    WHILE 
    ($row = mysqli_fetch_array($query)) {
        echo "<tr>";

        echo "<td>" . $row['nim'] . "</td>";
        echo "<td>" . $row['nama_mahasiswa'] . "</td>";
        echo "<td>" . $row['t_terstruktur'] . "</td>"; 
        echo "<td>" . $row['t_mandiri'] . "</td>";
        echo "<td>" . $row['uts'] . "</td>";
        echo "<td>" . $row['uas'] . "</td>";
        echo "<td>" . $row['nilai_akhir'] . "</td>";
        echo "<td>" . "<button onclick=\"location.href = 'update.php?nim=$row[nim]'\">update nilai</button>" . "</td>";

        echo "</tr>";
    }

    echo "</table>";

    ?>
</body>
</html>