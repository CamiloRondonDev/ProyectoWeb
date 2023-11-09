<?php
include 'conexion.php';

$sql = "select UserName, UserPass , UserMail from usuarios where UserId = 1  ";

$resultado = $conn->query($sql);

if ($resultado) {
    // La consulta fue exitosa, procesar los resultados
    while ($fila = $resultado->fetch_assoc()) {
        // $fila contendrá una fila de resultados
        $userName = $fila['UserName'];
        $userEmail = $fila['UserMail'];
        $userPassword = $fila['UserPass'];
        
        // Haz lo que necesites con estos valores
        echo "Nombre de usuario: " . $userName . ", Email: " . $userEmail . ", Contraseña: " . $userPassword . "<br>";
    }
} else {
    // La consulta falló
    echo "Error al ejecutar la consulta: " . $conn->error;
}

// Cerrar la conexión
$conn->close();


?>