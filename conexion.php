<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdcarros";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

echo "Conexión exitosa";

?>