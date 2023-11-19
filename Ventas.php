<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style/Style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style/Style.css">
  <title>Document</title>
</head>


<body style="background-color: #8470e7;">
  <!-- inicio menu -->
  <div class=container>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="img/SuperAutos.PNG" class="img-fluid"""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <div class="BannerVentas">
            <?php
            $correo = $_GET['correo'];
            echo "<p id='UserLogin'>$correo</p>"
            ?>
          </div>

          <form class="d-flex" role="search">
            <input class="form-control me-2 buscar" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success disabled ">Search</button>


            <div id="Banner" class="mb-3">
              <select onchange="funcion()" id="crear" class="form-select" id="exampleFormControlSelect1" name="rol_seleccionado">
                <option class="valNul" value="user">Admin</option>
                <option class="valNul" value="Clientes">Clientes</option>
                <option class="valNul" value="Carros">Carros</option>
              </select>
            </div>
            <br>

          </form>
        </div>
      </div>
    </nav>
  </div>
  <!-- final menu  -->
  <br>
  <!-- Mostrar vehiculos *********************-->
  <div class="container">
    <div class="row">
      
    </div>
    <!-- fin Mostrar vehiculos *****************-->

  </div>

  <Script type="text/javascript" src="script/scriptVentas.js"></Script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>