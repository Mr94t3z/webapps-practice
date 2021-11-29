<?php
session_start();

unset($_SESSION['login']);
unset($_SESSION['username']);

echo "Sukses logout. Silahkan <a href='login.php'>login</a> untuk masuk kehalaman admin";