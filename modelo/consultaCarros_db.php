<?php
include 'conexion.php';
$usuarios = array();
$respuestaJson = "";
$idUser = $_GET['id'];
$accion = $_GET['accion'];
$sql = "";

#echo $idUser;
#echo $accion;

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    if($accion == "no-Id"){
        $sql = "select 	id, nombreItem, descripcionItem, precioItem, colorItem, marcaItem, costoItem, stockItem,estadoItem, categoriaItem from itemscars";
    }else{
        $sql = "select 	id, nombreItem, descripcionItem, precioItem, colorItem, marcaItem, costoItem, stockItem,estadoItem, categoriaItem from itemscars where id = '$idUser'";
    }

    $resultado = $conn->query($sql);


    if ($resultado) {
        // La consulta fue exitosa, procesar los resultados
        while ($fila = $resultado->fetch_assoc()) {
            // Convertir el resultado a un array asociativo
                $usuarios[] = $fila;
        }
        $respuestaJson = json_encode($usuarios);
    } else {
        // La consulta falló
        # echo "Error al ejecutar la consulta: " . $conn->error;
    }

    // Cerrar la conexión
    echo $respuestaJson;
    $conn->close();
}
#echo "entro consulta user";
