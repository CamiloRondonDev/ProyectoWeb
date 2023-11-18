console.log("entro_js_ventas")
var correo1 = document.getElementById('UserLogin');
var correoConsulta = correo1.textContent;
//alert(correoConsulta)

//TOMA EL VALOR DEL DESPLEGABLE DE VENTAS Y LLAMA A SY RESPECTIVA PANTALLA
function funcion() {
    var accion = document.getElementById("crear").value;
    //alert(accion);
    if (accion == "Carros") {
        document.getElementById("crear").value = "Admin";
        console.log("sdfsf")
        window.location.href = 'InsertarCarros.php'

    } else if (accion == "Clientes") {
        document.getElementById("crear").value = "Admin";
        window.location.href = 'EditClientes.php'
    }
}


$(document).ready(function() {
    // Define la función para la petición AJAX
    //REALIZA LA CONSULTA DEL USUARIO LOGEADO POR CORREO Y LO MUESTRA EN EL BANNER DE LA VISTA
    function realizarConsulta(correo) {
        $.ajax({
            type: 'GET',
            url: 'modelo/ConsultaUserCorreo_bd.php', // Archivo PHP para manejar la consulta
            dataType: 'json',
            data: { correo: correo }, // Datos que se enviarán al servidor
            success: function(respuesta) {
                // Maneja la respuesta del servidor
                console.log("Respuesta del servidor:", respuesta);
                document.getElementById('UserLogin').textContent = respuesta.nombre;
                if(respuesta.rol ==="Admin"){
                   // alert(respuesta.rol);
                    document.getElementById("crear").disabled  = false
                }else{
                    document.getElementById("crear").disabled  = true
                }

            },
            error: function(error) {
                // Maneja los errores de la petición AJAX
                console.error('Error en la petición AJAX:', error);
            }
        });
    }
    realizarConsulta(correoConsulta);

    //ESTA FUNCION SE ENCARGA DE REALIZAR LA CONSULTA DE LOS AUTOMOVILES DISPONIBLES PARA LA VENTA
    function ConsultaAutos() {
        var nCarro = $('#nCarro');
        $.ajax({
            type: 'GET',
            url: 'modelo/ConsultaCarros_bd.php', // Archivo PHP para manejar la consulta
            dataType: 'json',
            //data: $(this).serialize(),
            success: function(respuesta) {
                //Maneja la respuesta del servidor 
                
                console.log("Respuesta del servidor2:", respuesta[0].nombreItem);
                nuevaOpcion =  respuesta[0].nombreItem;
                nCarro.append(nuevaOpcion);
            },
            error: function(error) {
                // Maneja los errores de la petición AJAX
                console.error('Error en la petición AJAX:', error);
            }
        });
    }
    ConsultaAutos();


});
