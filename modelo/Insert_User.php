<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdcarros";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

echo "Conexión exitosa\n";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre_Registro'];
    $dni = $_POST['cedula_Registro'];
    $password = $_POST['password_Registro'];
    $email = $_POST['email_Registro'];
    $tel = $_POST['telefono_Registro'];
    $rol = $_POST['rol_seleccionado'];
    
    echo $nombre;
    echo $dni;
    echo $password;
    echo $email;
    echo $tel;
    echo $rol;

    $sql = "INSERT INTO usuarios (UserName, UserDNI, UserPass, UserMail, UserTel , userRol) 
            VALUES ('$nombre', '$dni' , '$password' , '$email' , '$tel' , '$rol')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro creado correctamente.";
    } else {
        echo "Error al crear el registro: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
    header("Location: ../index.php");
    exit(); 
}

?>
