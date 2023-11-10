<?php
include 'conexion.php';



$userPassword = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $mail = $_GET['Email_Login'];
    $pass = $_GET['Password_Login'];
   
    if($mail == "" || $pass == "" ){

        echo "<script>alert('Ingrese todos los datos');</script>";
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
        echo "Nombre de usuario: " . $userName . ", Email: " . $userEmail . ", Contraseña: " . $userPassword . "<br>";
    }

    if($pass == $userPassword ){
        echo "Usuarios si esta registrado";
        header("Location: ventas.php");
        exit(); 
    }else{
        echo "Usuarios no esta registrado";
        echo "<script>alert('Contraseña incorrecta');</script>";
        header("Location: index.php");
        #exit(); 
    }


} else {
    // La consulta falló
    echo "Error al ejecutar la consulta: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
}
