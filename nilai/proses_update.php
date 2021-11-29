<?php
include 'koneksi.php';
$nim                = $_POST['nim'];
$nama_mahasiswa     = $_POST['nama_mahasiswa'];
$t_terstruktur      = $_POST['t_terstruktur'];
$t_mandiri          = $_POST['t_mandiri'];
$uts                = $_POST['uts'];
$uas                = $_POST['uas'];

echo $nim, $nama_mahasiswa, $t_terstruktur, $t_mandiri, $uts, $uas;

mysqli_query($conn, "UPDATE mahasiswa SET t_terstruktur = '$t_terstruktur', t_mandiri = '$t_mandiri', uts = '$uts', uas = '$uas' WHERE nim = '$nim'");

header("location:data_nilai.php");
?>