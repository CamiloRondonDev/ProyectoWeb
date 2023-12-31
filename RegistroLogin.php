<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Registro</title>
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
            <h2 class="fw-bold mb-5">Registro Nuevo Usuario</h2>
            <form id="insertUsers">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input name="nombre_Registro" type="text" id="form3Example1" class="form-control" />
                    <label class="form-label" for="form3Example1">Nombre</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input name="cedula_Registro"  type="text" id="form3Example2" class="form-control" />
                    <label class="form-label" for="form3Example2">Cedula</label>
                  </div>
                </div>
              </div>
  
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input name="email_Registro" type="email" id="form3Example3" class="form-control" />
                <label  class="form-label" for="form3Example3">Email</label>
              </div>
  
              <!-- Password input -->
              <div class="form-outline mb-4">
                <input name="password_Registro" type="password" id="form3Example4" class="form-control" />
                <label  class="form-label" for="form3Example4">Password</label>
              </div>

                
              <!-- Password input -->
              <div class="form-outline mb-4">
                <input name="telefono_Registro" type="text" id="form3Example5" class="form-control" />
                <label  class="form-label" for="form3Example4">telefono</label>
              </div>
  
              <div class="mb-3">
                <select class="form-select" id="exampleFormControlSelect1" name="rol_seleccionado">
                  <option name="Rol_Registro" value="Cliente">Cliente</option>
                </select>
                <label for="exampleFormControlSelect1" class="form-label">Rol de Usuario</label>
              </div>
              <br>

  
              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
                Registrar
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
  <Script type="text/javascript" src="script/scriptRegistroUser.js"></Script>
</body>
</html>