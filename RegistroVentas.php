<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/Style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>


    <div class="container mt-5" id="pdf">
        <h2 class="mb-4" style="color: rgb(0, 0, 0);">Lista de Ventas</h2>

        <table  id="listaVentas" class="table table-striped table-bordered">
            <thead class="thead-light">
                <tr>
                    <th id="titulo">Venta</th>
                    <th id="titulo" >Comprador</th>
                    <th id="titulo" >Carro</th>
                    <th id="titulo" >Valor Total</th>
                    <th id="titulo" >Color</th>
                    <th id="titulo" >Fecha Venta</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

    <div class="container mt-5" >
        <button id="downloadPdfBtn" class="btn btn-primary mt-3">Descargar PDF</button> 
        <button id="botonGenerarExcel" class="btn btn-primary mt-3" >Generar Excel</button>
    </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
  <Script type="text/javascript" src="script/scriptRegVentas.js"></Script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>