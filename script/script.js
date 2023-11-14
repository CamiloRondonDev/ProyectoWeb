console.log("entro js_f")

$(document).ready(function() {
    $('#loginForm').submit(function(e) {
        console.log("entro boton")
        e.preventDefault(); // Evitar el comportamiento predeterminado del formulario
        $.ajax({
            type: 'GET',
            url: 'modelo/login.php',
            data: $(this).serialize(),
            success: function(response) {
             console.log(response)
            if(response == 1){
                //alert("_Contraseña correcta_")
                window.location.href = 'Ventas.php';
            }else{
                alert("_Contraseña incorrecta_")
            }
            }
        });
    });
}); 