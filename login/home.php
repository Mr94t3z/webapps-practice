<?php
session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Email'])){
    header("location:login.php");
exit;
}

$user = array(
    'nama' => 'Muhamad Taopik',
    'email' => 'muhamadtaopik007@gmail.com'
);

date_default_timezone_set("Asia/Jakarta"); // waktu indonesia

echo "Nama : " . $user['nama']. "<br>";
echo "Email : " . $user['email'] . "<br>";
echo "Jam : " .  date("h:i:s A") . "<br>";
echo "Hari : " .  date("D") . "<br>";
echo "Tanggal : " .  date("Y-m-d") . "<br>";

?>

<br>
<input type="submit" value="Logout" <a href="logout.php" onclick="history.back();"></a>