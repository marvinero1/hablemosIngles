<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
    
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" version="XHTML+RDFa 1.0" xmlns:og="http://ogp.me/nsindex.html" xml:lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="background"><br>
  <div style="float: right; " class=" ">
    <!-- <a href="reset-password.php" class="btn btn-warning" style="color: white;">Cambia tu
    contraseña</a> -->
    <?php if ($_SESSION["id"] == '4'): ?>
    <a href="crud/index.php" class="btn btn-success" style="color: white;display: inline-block;">Ver Usuarios</a>
    <a href="register.php" class="btn btn-warning" style="color: white;display: inline-block;">Registrar</a>
    <?php endif; ?>

    <!-- <a href="reset-password.php" class="btn btn-warning" style="color: white;">Cambia tu
    contraseña</a> -->
  </div><br><br>
  <div class="container p-4">
    <div class="row">
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="caratula.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro Basico A</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="bookBasic_B/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro Basico B</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="bookBasic_B/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="bookStudent_1A/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 1-A</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="bookStudent_1A/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
       <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="bookStudent_1B/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 1-B</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="bookStudent_1B/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div><br>
    </div><hr>
    <div class="row">
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="bookStudent_2A/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 2-A</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="bookStudent_2A/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="bookStudent_2B/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 2-B</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="bookStudent_2B/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="bookStudent_3A/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 3-A</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="bookStudent_3A/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="bookStudent_3B/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 3-B</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="bookStudent_3B/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div><br>
      </div>
    </div><hr>
    <div class="row">
      <div class="col-md-4 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="bookStudent_4A/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 4-A</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="bookStudent_4A/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="bookStudent_4B/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 4-B</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="bookStudent_4B/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div><br>
      </div>
    </div>
    <hr>
  </div>
</body>

</html><style>
  .background{
        background-size: cover;
        /* height: 100% !important; */
        background-image: url("files/extfiles/background.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
</style>