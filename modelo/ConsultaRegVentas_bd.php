<?php
include 'conexion.php';
$carros = array();
$respuestaJson = "";
$sql = "";



if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $sql = "select idCompra, NameCliente, fechaVenta, carroCompra, colorCarro, idCarro, valTotal from registrocompra";

    $resultado = $conn->query($sql);


    if ($resultado) {
        // La consulta fue exitosa, procesar los resultados
        while ($fila = $resultado->fetch_assoc()) {
            // Convertir el resultado a un array asociativo
            $carros[] = $fila;
        }
        $respuestaJson = json_encode($carros);
    } else {
        // La consulta falló
        # echo "Error al ejecutar la consulta: " . $conn->error;
    }
}
// Cerrar la conexión
echo $respuestaJson;
$conn->close();

?>