<!DOCTYPE html>
<html>

<head>
    <title>Update</title>
</head>

<body>
    <h1>Update Nilai Mahasiswa</h1>
    <form action="proses_update.php" method="POST">
        <?php
        $nim = $_GET['nim'];
        include 'koneksi.php';     
        $query = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim = $nim");
        WHILE ($data = mysqli_fetch_array($query)) {
        ?>
        <table>
            <input type="hidden" name="nim" value="<?php echo $data['nim']; ?>">
            <tr>
                <td>Nama</td>
                <td><input disabled name="nama_mahasiswa" value="<?php echo $data['nama_mahasiswa']; ?>"></td>
            </tr>
            <tr>
                <td>Tugas Terstruktur</td>
                <td><input type="number" name="t_terstruktur" value="<?php echo $data['t_terstruktur']; ?>"></td>
            </tr>
            <tr>
                <td>Tugas Mandiri</td>
                <td><input type="number" name="t_mandiri" value="<?php echo $data['t_mandiri'];  ?>"></td>
            </tr>
            <tr>
                <td>UTS</td>
                <td><input type="number" name="uts" value="<?php echo $data['uts'];  ?>"></td>
            </tr>
            <tr>
                <td>UAS</td>
                <td><input type="number" name="uas" value="<?php echo $data['uas'];  ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Simpan"></td>
            </tr>
        </table>
        <?php } ?>
    </form>
</body>

</html>