//alert("INGRESO CONSULTA")

$(document).ready(function () {
    // Define la función para la petición AJAX
    function RealizarConsultaClientes() {
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: 'modelo/consultaUser_bd.php', // Archivo PHP para manejar la consulta
            data: { id: "-", accion:"no-Id"}, // Datos que se enviarán al servidor
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

    function ConsultarUsuariosID(userId) {
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: 'modelo/consultaUser_bd.php', // Archivo PHP para manejar la consulta
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

        $('#NombreUsuario').val(res[0].UserName);
        $('#CedulaUsuario').val(res[0].UserDNI);
        $('#EmailUsuario').val(res[0].UserMail);
       // $('#EmailUsuario').val(res[0].UserEstatus);
        $('#PassUsuario').val(res[0].UserPass);
        $('#TelefonoUsuario').val(res[0].UserTel);
        $('#RolUsuario').val(res[0].userRol);
    }


    // Función para mostrar los usuarios en la lista
    function mostrarUsuarios(usuarios) {
        var selectUsuarios = $('#selectUsuarios');

        usuarios.forEach(function (usuario) {
            // Crear una opción para cada usuario con Bootstrap
            var nuevaOpcion = $('<option>')
                .val(usuario.UserId)
                .text(usuario.UserName + ' - ' + usuario.UserId);

            selectUsuarios.append(nuevaOpcion);
        });

        // Agrega un evento de cambio al combobox para capturar el ID del usuario seleccionado
        selectUsuarios.change(function () {
            var usuarioId = $(this).val();
            //console.log('ID del usuario seleccionado:', usuarioId);
            ConsultarUsuariosID(usuarioId);
        });
    }
    

});

