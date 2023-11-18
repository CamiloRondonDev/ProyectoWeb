<?php
include 'conexion.php';
$idUser = $_POST['idUser'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "delete from usuarios WHERE UserId = '$idUser'";

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