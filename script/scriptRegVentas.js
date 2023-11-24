var datos2 = ""; 
$(document).ready(function() {

    function ConsultaRegVentas() {
        //var nCarro = $('#nCarro');
        console.log("ewntro")
        $.ajax({
            type: 'GET',
            url: 'modelo/ConsultaRegVentas_bd.php', // Archivo PHP para manejar la consulta
            dataType: 'json',
            //data: $(this).serialize(),
            success: function(respuesta) { 
                console.log("Respuesta del servidor2:", respuesta);
                listar(respuesta)
            },
            error: function(error) {
                // Maneja los errores de la petición AJAX
                console.error('Error en la petición AJAX:', error);
            }
        });
    }
    ConsultaRegVentas();

});



document.getElementById('downloadPdfBtn').addEventListener('click', function () {
    const element = document.getElementById('pdf');  // ID de la tabla o contenedor HTML
    html2pdf(element);
});

function generarExcel() {
    // Obtener la tabla y el cuerpo de la tabla
    const tabla = document.getElementById("listaVentas");
    const cuerpoTabla = tabla.getElementsByTagName('tbody')[0];

    // Crear una matriz para almacenar los datos
    const datos = [];

    // Agregar títulos de columna como la primera fila
    const titulosColumnas = [];
    for (let i = 0; i < tabla.rows[0].cells.length; i++) {
        titulosColumnas.push(tabla.rows[0].cells[i].textContent);
    }
    datos.push(titulosColumnas);

    // Iterar sobre las filas de la tabla y almacenar los datos en la matriz
    for (let i = 0; i < cuerpoTabla.rows.length; i++) {
        const fila = cuerpoTabla.rows[i];
        const filaDatos = [];
        for (let j = 0; j < fila.cells.length; j++) {
            filaDatos.push(fila.cells[j].textContent);
        }
        datos.push(filaDatos);
    }

    // Crear un objeto de trabajo de Excel
    const wb = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(wb, XLSX.utils.aoa_to_sheet(datos), 'ListaVentas');

    // Guardar el archivo Excel
    XLSX.writeFile(wb, 'ListaVentas.xlsx');
}
document.getElementById('botonGenerarExcel').addEventListener('click', generarExcel);


function listar(data){
    // Obtener la tabla y el cuerpo de la tabla
    const tabla = document.getElementById("listaVentas").getElementsByTagName('tbody')[0];

    // Llenar la tabla con los datos
    data.forEach((venta) => {
        const fila = tabla.insertRow();
        const celdaIdVenta = fila.insertCell(0);
        const celdaComprador = fila.insertCell(1);
        const celdaCarros = fila.insertCell(2);
        const celdaValorTotal = fila.insertCell(3);
        const Color_Carro = fila.insertCell(4);
        const Fecha_Venta = fila.insertCell(5);

        // Llenar celdas con valores
        celdaIdVenta.textContent = venta.idCompra;
        celdaComprador.textContent = venta.dniCliente;
        celdaCarros.textContent = venta.carroCompra;
        celdaValorTotal.textContent = venta.valTotal;
        Color_Carro.textContent = venta.colorCarro;
        Fecha_Venta.textContent = venta.fechaVenta;
    });

}