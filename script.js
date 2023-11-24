console.log("entro_carros_");

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
                var correo1 = document.getElementById('correo_enviar');
                var correo = correo1.value;
                window.miVariableGlobal = correo;
                window.location.href = 'Ventas.php?correo=' + encodeURIComponent(correo);//enviar correo a la vista 
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
               // window.location.href = 'Ventas.php?correo=' + encodeURIComponent(miVariableGlobal);//enviar correo a la vista 
                Limpiar();
            }else if(response == 2){
                alert("Ingresa todos los valores")
            }else if(response == 3){
                alert("Hay datos que solo pueden ser numericos")
            }else{
                alert("El carro ya existe")
            }
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
    document.getElementById("form3Examplec").value = "";
    document.getElementById("form3Examplem").value = "";
    document.getElementById("form3Exampler").value = "";

}

