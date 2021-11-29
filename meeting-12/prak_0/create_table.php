<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "prak_paw";

function execute_query($query, $conn)
{
    $res = $conn->query($query);

    if (!$res) {
        echo "failed to execute query: $query <br>";
    } else {
        echo "Query: $query executed <br>";
    }

    if (is_object($res)) {

        $res->close();
    }
}

$conn = new mysqli($host, $user, $password, $db)
or die ("connection failed");

$query = "DROP TABLE IF EXISTS buku_tamu";
execute_query($query, $conn);

$query = "CREATE TABLE buku_tamu(id_bt INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(200), email VARCHAR(50), isi TEXT)";
execute_query($query, $conn);

$query = "INSERT INTO buku_tamu(nama, email, isi) VALUES('buku undangan', 'buku_undangan@gmail.com', 'ini adalah buku undangan')";
execute_query($query, $conn);

$conn->close();

?>