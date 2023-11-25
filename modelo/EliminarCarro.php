<?php
include 'conexion.php';
$idUser = $_POST['idUser'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "delete from itemscars WHERE id = '$idUser'";

$resultado = $conn->query($sql);

if ($resultado) {
    echo 1;
} else {
    echo "Error al ejecutar la consulta: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
}
?>