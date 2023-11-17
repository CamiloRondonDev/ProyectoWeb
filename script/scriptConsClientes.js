//alert("INGRESO CONSULTA")

$(document).ready(function() {
    // Define la función para la petición AJAX
    function RealizarConsultaClientes() {
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: 'modelo/consultaUser_bd.php', // Archivo PHP para manejar la consulta
            //data: $(this).serialize(), // Datos que se enviarán al servidor
            success: function(respuesta) {
                // Maneja la respuesta del servidor
                console.log("Respuesta del servidor:", respuesta);
                mostrarUsuarios(respuesta);

            },
            error: function(error) {
                // Maneja los errores de la petición AJAX
                console.error('Error en la petición AJAX:', error);
            }
        });
    }

    // Ejemplo de cómo llamar a la función con un correo específico
    RealizarConsultaClientes();

    function mostar(){
        alert("funcion camilo");
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
    selectUsuarios.change(function() {
        var usuarioId = $(this).val();
        console.log('ID del usuario seleccionado:', usuarioId);
        mostar();
    });
}

});

