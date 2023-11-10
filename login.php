<?php
include 'conexion.php';

$userPassword = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $mail = $_GET['Email_Login'];
    $pass = $_GET['Password_Login'];
   # echo "entro 222";
   
    if($mail == "" || $pass == "" ){
        exit();
    }

$sql = "select UserName, UserPass , UserMail from usuarios where UserMail = '$mail'";

$resultado = $conn->query($sql);

if ($resultado) {
    // La consulta fue exitosa, procesar los resultados
    while ($fila = $resultado->fetch_assoc()) {
        // $fila contendrá una fila de resultados
        $userName = $fila['UserName'];
        $userEmail = $fila['UserMail'];
        $userPassword = $fila['UserPass'];
        
        // Haz lo que necesites con estos valores
        
        #echo  "Nombre de usuario: " . $userName . ", Email: " . $userEmail . ", Contraseña: " . $userPassword ;
    }
    

    if($pass == $userPassword ){
        $respuesta = 1;
        $respuesta_json['estado'] = 1;     
    }else{
        $respuesta = 0;
        $respuesta_json['estado'] = 0;
    }

} else {
    // La consulta falló
   # echo "Error al ejecutar la consulta: " . $conn->error;
}

// Cerrar la conexión
echo $respuesta;
$conn->close();
}
