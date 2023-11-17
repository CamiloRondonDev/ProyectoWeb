<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Crear</title>
</head>
<body>

    <!-- Section: Design Block -->
<section class="text-center">
    <!-- Background image -->
    <div class="p-5 bg-image" style="
          background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
          height: 300px;
          "></div>
    <!-- Background image -->
  
    <div class="card mx-4 mx-md-5 shadow-5-strong" style="
          margin-top: -100px;
          background: hsla(0, 0%, 100%, 0.8);
          backdrop-filter: blur(30px);
          ">
      <div class="card-body py-5 px-md-5">
  
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h2 class="fw-bold mb-5">Insertar Carro</h2>
            <form id="RegistroItemsForm" >
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input name="nombre_Carro" type="text" id="form3Example1" class="form-control" />
                    <label class="form-label" for="form3Example1">Nombre</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input name="Descripcion_Carro"  type="text" id="form3Example2" class="form-control" />
                    <label class="form-label" for="form3Example2">Descripcion</label>
                  </div>
                </div>
              </div>
  
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input name="Marca_Carro" type="text" id="form3Example3" class="form-control" />
                <label  class="form-label" for="form3Example3">Marca</label>
              </div>
  
              <!-- Password input -->
              <div class="form-outline mb-4">
                <input name="Color_Carro" type="text" id="form3Example4" class="form-control" />
                <label  class="form-label" for="form3Example4">Color</label>
              </div>

                
              <!-- Password input -->
              <div class="form-outline mb-4">
                <input name="Categoria_Carro" type="text" id="form3Example5" class="form-control" />
                <label  class="form-label" for="form3Example4">Categoría</label>
              </div>

              <div class="form-outline mb-4">
                <input name="Stock_Carro" type="text" id="form3Example3" class="form-control" />
                <label  class="form-label" for="form3Example3">Stock</label>
              </div>

              <div class="form-outline mb-4">
                <input name="PrecioCompra_Carro" type="text" id="form3Example3" class="form-control" />
                <label  class="form-label" for="form3Example3">Precio Compra</label>
              </div>
  
              <div class="form-outline mb-4">
                <input name="PrecioVenta_Carro" type="text" id="form3Example3" class="form-control" />
                <label  class="form-label" for="form3Example3">Precio Venta</label>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">Crear</button>
  
              <!-- Register buttons -->
              <div class="text-center">
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>
  
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </button>
  
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>
  
                <button type="submit" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-github"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->

  <Script type="text/javascript" src="script.js"></Script>
    
</body>
</html>