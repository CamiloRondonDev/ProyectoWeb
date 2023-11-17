console.log("entro_js_ventas")
var correo1 = document.getElementById('UserLogin');
var correoConsulta = correo1.textContent;
//alert(correoConsulta)

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
    // Cuando el documento esté listo, ejecuta el código

    // Define la función para la petición AJAX
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

    // Ejemplo de cómo llamar a la función con un correo específico
    realizarConsulta(correoConsulta);
});
