<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $vNombreCarro = $_POST['nombre_Carro'];
    $vDescCarro = $_POST['Descripcion_Carro'];
    $vMarcaCarro = $_POST['Marca_Carro'];
    $vColorCarro = $_POST['Color_Carro'];
    $vCatCarro = $_POST['Categoria_Carro'];
    $vStockCarro = $_POST['Stock_Carro'];
    $vPreCompraCarro = $_POST['PrecioCompra_Carro'];
    $vPreVentaCarro = $_POST['PrecioVenta_Carro'];

    if($vNombreCarro == "" || $vDescCarro == "" || $vMarcaCarro == "" || $vColorCarro == "" || $vCatCarro == "" || $vStockCarro == "" || $vPreCompraCarro =="" || $vPreVentaCarro == ""){
        echo 2;
    }else{

        $sql = "update itemscars SET nombreItem = '$vNombreCarro',  descripcionItem = '$vDescCarro', precioItem = '$vPreVentaCarro', colorItem = '$vColorCarro',  marcaItem = '$vMarcaCarro',  costoItem = '$vPreCompraCarro',
        stockItem ='$vStockCarro' ,categoriaItem = '$vCatCarro'  where nombreItem = '$vNombreCarro'";
    
        if ($conn->query($sql) === TRUE) {
            echo 1;
        } else {
            echo "Error al actualizar: " . $conn->error;
        }
    }

    // Cerrar la conexión
    $conn->close();
    exit(); 
}
?>