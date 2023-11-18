<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre_Registro'];
    $dni = $_POST['cedula_Registro'];
    $password = $_POST['password_Registro'];
    $email = $_POST['email_Registro'];
    $tel = $_POST['telefono_Registro'];
    $rol = $_POST['rol_seleccionado'];
    #$UserId = $_POST['userId'];
    
    echo $nombre;
    echo $dni;
    echo $password;
    echo $email;
    echo $tel;
    echo $rol;
    #echo "#$UserId#";

   $sql = "update usuarios SET UserName = '$nombre',  UserDNI = '$dni', UserPass = '$password', UserMail = '$email',  UserTel = '$tel',  userRol = '$rol'
    where UserMail = '$email'";

    if ($conn->query($sql) === TRUE) {
    echo "ACTUALIZADO";
    } else {
        echo "Error al actualizar: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
    exit(); 
}
?>