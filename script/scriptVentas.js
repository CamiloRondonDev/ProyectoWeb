console.log("entro_js_ventas_")
var correo1 = document.getElementById('UserLogin');
var correoConsulta = correo1.textContent;
var contadorCarros;
var dniUser;

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
    }else if(accion == "Ventas"){
      window.location.href = 'RegistroVentas.php'
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
                dniUser = respuesta.UserDNI;
                console.log("#####"+dniUser  + "###");
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
        //var nCarro = $('#nCarro');
        $.ajax({
            type: 'GET',
            url: 'modelo/ConsultaCarros_bd.php', // Archivo PHP para manejar la consulta
            dataType: 'json',
            //data: $(this).serialize(),
            success: function(respuesta) {
                //Maneja la respuesta del servidor 

                agregarVehiculosAlHTML(respuesta);
                
                console.log("Respuesta del servidor2:", respuesta[0].nombreItem);
                nuevaOpcion =  respuesta[0].nombreItem;
               // nCarro.append(nuevaOpcion);
            },
            error: function(error) {
                // Maneja los errores de la petición AJAX
                console.error('Error en la petición AJAX:', error);
            }
        });
    }
    ConsultaAutos();

    function agregarVehiculosAlHTML(vehiculos) {
        var container = document.querySelector(".row");
        var selectUsuarios = $('.row');
      
        for (var i = 0; i < vehiculos.length; i++) {
          var vehiculo = vehiculos[i];
          const cantidadFormateada = formatoPesoColombiano(vehiculo.precioItem);
      
    var html = `
      <div class="col-md-4 text-center">
        <div class="mb-4 text-bg-secondary p-3">
          <img src="img/ChevroletCamaroXL1.png" class="img-fluid">
          <h2 id="nCarro">${vehiculo.nombreItem}</h2>
          <p id="nCarro">${vehiculo.descripcionItem}</p>
          <p>${cantidadFormateada} color ${vehiculo.colorItem}</p>
          <a href="" class="btn btn-primary" data-id="${vehiculo.id}"> <!-- Cambiado a vehiculo.id -->
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
              <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z" />
            </svg>
          </a>
        </div>
      </div>
    `;
        selectUsuarios.append(html);
        }
      }

    // Agregar evento de clic al contenedor que envuelve los elementos de vehículos
  $('.row').on('click', '.btn-primary', function(e) {
    // Obtener el ID del vehículo desde el atributo data-id
    e.preventDefault();
    var idVehiculo = $(this).data('id');

    // Hacer algo con el ID, por ejemplo, imprimirlo en la consola
    console.log('ID del vehículo seleccionado:', idVehiculo);
    ConsultaAutosId(idVehiculo);
    
  });

  function ConsultaAutosId(idCarro) {
    $.ajax({
        type: 'GET',
        url: 'modelo/ConsultaCarros_id_bd.php', // Archivo PHP para manejar la consulta
        dataType: 'json',
        data: { id: idCarro, accion:"si-id"}, // Datos que se enviarán al servidor
        success: function(respuesta) {
            //Maneja la respuesta del servidor
            console.log(respuesta)
            console.log("Respuesta del servidor3:", respuesta[0].nombreItem);
            var idCarro = respuesta[0].id;
            var NombreCarro = respuesta[0].nombreItem;
            var colorCarro = respuesta[0].colorItem;
            var dniClientes = dniUser;
            var precioCarro = respuesta[0].precioItem;
            RegistroVentaCarro(idCarro,NombreCarro,colorCarro,dniClientes,precioCarro)
        },
        error: function(error) {
            // Maneja los errores de la petición AJAX
            console.error('Error en la petición AJAX:', error);
        }
    });
}

  function RegistroVentaCarro(idCarro, NombreCarro, colorCarro, dniClientes,precioCarro) {
    console.log(idCarro + NombreCarro + colorCarro + dniClientes + precioCarro )
    $.ajax({
      type: 'POST',
      url: 'modelo/InsertRegistroVenta_bd.php', // Archivo PHP para manejar la consulta
      //dataType: 'json',
      data: { idCarro: idCarro,
              NombreCarro: NombreCarro,
              colorCarro : colorCarro,
              dniClientes : dniClientes,
              valTotal : 	precioCarro
            }, // Datos que se enviarán al servidor
      success: function (respuesta) {
        console.log("Respuesta del servidor4:" , respuesta);
        if(respuesta == 1){
          alert("Venta exitosa")

        }
      },
      error: function (error) {
        console.error('Error en la petición AJAX:', error);
      }
    });
  }


});

function formatoPesoColombiano(cantidad) {
  const formato = new Intl.NumberFormat('es-CO', {
      style: 'currency',
      currency: 'COP',
      minimumFractionDigits: 0,  // Establecer el número mínimo de dígitos fraccionarios a 0
      maximumFractionDigits: 0 
  });

  return formato.format(cantidad);
}
