console.log("entro js_f")

$(document).ready(function() {
    $('#loginForm').submit(function(e) {
        console.log("entro boton login")
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

    $('#RegistroItemsForm').submit(function(e) {
        console.log("entro boton items")
        e.preventDefault(); // Evitar el comportamiento predeterminado del formulario
        $.ajax({
            type: 'POST',
            url: 'modelo/insertItems.php',
            data: $(this).serialize(),
            success: function(response) {
             console.log(response)
            if(response == 1){
                alert("_Registro insertado_")
                //window.location.href = 'Ventas.php';
            }else{
                alert("_registro no insertado_")
            }
            }
        });
    });

}); 

