<?php
include "conexion.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idCarro = $_POST['idCarro'];
    $NombreCarro = $_POST['NombreCarro'];
    $colorCarro = $_POST['colorCarro'];
    $dniClientes = $_POST['dniClientes'];
    $valTotal = $_POST['valTotal'];


    #if ($nombre == "" || $dni == "" || $password == "" || $email == "" || $tel == "" || $rol == "") {
    #    echo 2;
    #} else {

        $sql = "INSERT INTO registrocompra (dniCliente, fechaVenta, carroCompra, colorCarro, idCarro , valTotal) 
        VALUES ('$dniClientes', NOW() , '$NombreCarro' , '$colorCarro' , '$idCarro' , $valTotal)";

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
