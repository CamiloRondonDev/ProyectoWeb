<?php
include "conexion.php";
$mail = $_GET['correo'];
#echo $correo

if ($_SERVER["REQUEST_METHOD"] == "GET") {

$sql = "select UserName, userRol from usuarios where UserMail = '$mail'";

$resultado = $conn->query($sql);

if ($resultado) {
    // La consulta fue exitosa, procesar los resultados
    while ($fila = $resultado->fetch_assoc()) {
        // $fila contendrá una fila de resultados
        $userName = $fila['UserName'];
        $userRol = $fila['userRol'];
        // Haz lo que necesites con estos valores
        $respuesta =  array(
            'nombre' => $userName,
            'rol'=> $userRol
        );
    }
    $respuestaJson = json_encode($respuesta);

} else {
    // La consulta falló
   # echo "Error al ejecutar la consulta: " . $conn->error;
}

// Cerrar la conexión
echo $respuestaJson;
$conn->close();
}





?>