// Función para mostrar los usuarios en la lista
document.getElementById("nombreCarro").setAttribute("disabled", "disabled");
console.log("entro edit carros_")
$(document).ready(function () {

    function RealizarConsultaClientes() {
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: 'modelo/consultaCarros_db.php', // Archivo PHP para manejar la consulta
            data: { id: "-", accion: "no-Id" }, // Datos que se enviarán al servidor
            success: function (respuesta) {
                // Maneja la respuesta del servidor
                console.log("Respuesta del servidor:", respuesta);
                mostrarUsuarios(respuesta);

            },
            error: function (error) {
                // Maneja los errores de la petición AJAX
                console.error('Error en la petición AJAX:', error);
            }
        });
    }

    // Ejemplo de cómo llamar a la función con un correo específico
    RealizarConsultaClientes();

    function mostrarUsuarios(usuarios) {
        var selectUsuarios = $('#selectUsuarios');

        usuarios.forEach(function (usuario) {
            // Crear una opción para cada usuario con Bootstrap
            var nuevaOpcion = $('<option>')
                .val(usuario.id)
                .text(usuario.nombreItem + ' - ' + usuario.id);
            selectUsuarios.append(nuevaOpcion);
        });

        // Agrega un evento de cambio al combobox para capturar el ID del usuario seleccionado
        selectUsuarios.change(function () {
            usuarioId = $(this).val();
            console.log('ID del usuario seleccionado:', usuarioId);
            ConsultarUsuariosID(usuarioId);
        });
    }

    function ConsultarUsuariosID(userId) {
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: 'modelo/consultaCarros_db.php', // Archivo PHP para manejar la consulta
            data: { id: userId, accion:"si-id"}, // Datos que se enviarán al servidor
            success: function (respuestaU) {
                // Maneja la respuesta del servidor
                console.log("Respuesta del servidor2:", respuestaU);
                MostarUserForm(respuestaU);
            },
            error: function (error) {
                // Maneja los errores de la petición AJAX
                console.error('Error en la petición AJAX:', error);
            }
        });
    }

    function MostarUserForm(res){

        $('#nombreCarro').val(res[0].nombreItem);
        $('#descCarro').val(res[0].descripcionItem);
        $('#marcaCarro').val(res[0].marcaItem);
        $('#colorCarro').val(res[0].colorItem);
        $('#catCarro').val(res[0].categoriaItem);
        $('#stockCarro').val(res[0].stockItem);
        $('#precioCompra').val(res[0].costoItem);
        $('#precioVenta').val(res[0].precioItem);
    }


        $('#ActualizarCarros').submit(function(e) {
            document.getElementById("nombreCarro").removeAttribute("disabled");
            e.preventDefault(); 
    
            // Realizar la petición AJAX
            $.ajax({
                type: 'POST',
                url: 'modelo/ActualizarCarro_bd.php',
                data: $(this).serialize(),
                success: function(response) {
                    console.log(response);
    
                    // Manejar la respuesta de la petición AJAX
                    if(response == 1) {
                        alert("Usuario Actualizado Correctamente");
                        Limpiar();
                    } else if(response == 2) {
                        alert("Todos los campos son obligatorios");
                    } else {
                        alert("Error interno");
                    }
                },
                error: function (error) {
                    // Manejar los errores de la petición AJAX
                    console.error('Error en la petición AJAX:', error);
                }
            });
    
             document.getElementById("nombreCarro").setAttribute("disabled", "disabled");
        });

});

function Limpiar(){
    document.getElementById("nombreCarro").value = "";
    document.getElementById("descCarro").value = "";
    document.getElementById("marcaCarro").value = "";
    document.getElementById("colorCarro").value = "";
    document.getElementById("catCarro").value = "";
    document.getElementById("stockCarro").value = "";
    document.getElementById("precioCompra").value = "";
    document.getElementById("precioVenta").value = "";

}
