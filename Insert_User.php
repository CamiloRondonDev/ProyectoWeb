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
    $nombre = "Camilo Rondon";
    $dni = "1007331225";
    $password = $_POST['Password'];
    $email = $_POST['Email'];
    $tel = "3219255328";

    $sql = "INSERT INTO usuarios (UserName, UserDNI, UserPass, UserMail, UserTel) 
            VALUES ('$nombre', '$dni' , '$password' , '$email' , '$tel')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro creado correctamente.";
    } else {
        echo "Error al crear el registro: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}

?>
