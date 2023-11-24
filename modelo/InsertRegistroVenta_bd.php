<?php
include "conexion.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idCarro = $_POST['idCarro'];
    $NombreCarro = $_POST['NombreCarro'];
    $colorCarro = $_POST['colorCarro'];
    $nameClientes = $_POST['nameClientes'];
    $valTotal = $_POST['valTotal'];


    #if ($nombre == "" || $dni == "" || $password == "" || $email == "" || $tel == "" || $rol == "") {
    #    echo 2;
    #} else {

        $sql = "INSERT INTO registrocompra (NameCliente, fechaVenta, carroCompra, colorCarro, idCarro , valTotal) 
        VALUES ('$nameClientes', NOW() , '$NombreCarro' , '$colorCarro' , '$idCarro' , $valTotal)";

        if ($conn->query($sql) === TRUE) {
            echo 1;
        } else {
            echo "Error al crear el registro: " . $conn->error;
        }
    #}

    // Cerrar la conexión
    $conn->close();
    exit(); 
}

?>
