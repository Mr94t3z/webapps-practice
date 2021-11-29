<?php
session_start();

if($_POST['username'] == 'taopik' && $_POST['password'] == '1q2w3e4r'){
    // Login process is by assining session variable
    $_SESSION['login'] = true;
    $_SESSION['username'] = $_POST['username'];
    echo "Login berhasil klik
    <a href='admin.php'>Halaman Admin</a> untuk melihat data sensitif
    atau <a href='logout.php'>logout</a> untuk keluar";
} else {
    echo "Kombinasi username dan password salah. Silahkan login lagi!";
}