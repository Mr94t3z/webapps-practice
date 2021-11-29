<?php
session_start();

if(!isset($_SESSION['login']) && $_SESSION['login'] != true ){
    echo "Anda tidak berhak mengakses halaman ini. 
    Silahkan <a href='login.php'>login</a> terlebih dahulu";
} else {
    echo "Ini halaman admin!! Informasi/halaman sensitif diletakan disini";
}