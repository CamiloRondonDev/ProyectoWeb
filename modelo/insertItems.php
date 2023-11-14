<?php
include 'conexion.php';
$resul;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vNombreCarro = $_POST['nombre_Carro'];
    $vDescCarro = $_POST['Descripcion_Carro'];
    $vMarcaCarro = $_POST['Marca_Carro'];
    $vColorCarro = $_POST['Color_Carro'];
    $vCatCarro = $_POST['Categoria_Carro'];
    $vStockCarro = $_POST['Stock_Carro'];
    $vPreCompraCarro = $_POST['PrecioCompra_Carro'];
    $vPreVentaCarro = $_POST['PrecioVenta_Carro'];


    $sql = "INSERT INTO itemscars (	nombreItem, descripcionItem, precioItem, colorItem,
            marcaItem,costoItem,stockItem,categoriaItem) 
            VALUES ('$vNombreCarro', '$vDescCarro' , $vPreVentaCarro , '$vColorCarro' , '$vMarcaCarro' ,
             $vPreCompraCarro , $vStockCarro , '$vCatCarro')";

    if ($conn->query($sql) === TRUE) {
        #echo "Registro creado correctamente.";
        $resul = 1;
    } else {
        echo "Error al crear el registro: " . $conn->error;
        $resul = 0;
    }

    // Cerrar la conexión

    $conn->close();
    #header("Location: ../index.php");
    #exit(); 
    #echo $resul;
    echo $resul;
}
?>