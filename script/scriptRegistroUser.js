//alert("entro_js_R_user");

$(document).ready(function () {

    $('#insertUsers').submit(function (e) {
        e.preventDefault(); // Evitar el comportamiento predeterminado del formulario
        $.ajax({
            type: 'POST',
            url: 'modelo/Insert_User.php',
            data: $(this).serialize(),
            success: function (response) {
                console.log(response)
                if (response == 1) {
                    alert("Usuario Creado Correctamente");
                    window.location.href = 'index.php';
                    Limpiar();
                } else if (response == 2) {
                    alert("Todos los campos son obligatorios");
                } else {
                    alert("Correo ya registrado");
                }
            },
            error: function (error) {
                // Maneja los errores de la petición AJAX
                console.error('Error en la petición AJAX:', error);
            }
        });

    });

});

function Limpiar(){
    document.getElementById("form3Example5").value = "";
    document.getElementById("form3Example1").value = "";
    document.getElementById("form3Example2").value = "";
    document.getElementById("form3Example4").value = "";
    document.getElementById("form3Example3").value = "";
    document.getElementById("form3Example5").value = "";
}