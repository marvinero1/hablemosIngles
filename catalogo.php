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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body><br>
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
            <div class="col-md-4 col-sm">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="caratula.jpg" 
                    alt="libro" style="width: 100%;">
                    <div class="card-body">
                      <h5 class="card-title">True Colors Basic</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="index.php" class="btn btn-primary">Ver Libro</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 col-sm">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="caratula.jpg" 
                    alt="libro" style="width: 100%;">
                    <div class="card-body">
                      <h5 class="card-title">True Colors Basic</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="index.php" class="btn btn-primary">Ver Libro</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 col-sm">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="caratula.jpg" 
                    alt="libro" style="width: 100%;">
                    <div class="card-body">
                      <h5 class="card-title">True Colors Basic</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="index.php" class="btn btn-primary">Ver Libro</a>
                    </div>
                  </div>
            </div>
        </div>
        <br><hr>
        <div class="row">
            <div class="col-md-4 col-sm">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="caratula.jpg" 
                    alt="libro" style="width: 100%;">
                    <div class="card-body">
                      <h5 class="card-title">True Colors Basic</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="index.php" class="btn btn-primary">Ver Libro</a>
                    </div>
                  </div> 
            </div>  
            <div class="col-md-4 col-sm">
              <div class="card" style="width: 14rem;">
                  <img class="card-img-top" src="caratula.jpg" 
                  alt="libro" style="width: 100%;">
                  <div class="card-body">
                    <h5 class="card-title">True Colors Basic</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="index.php" class="btn btn-primary">Ver Libro</a>
                  </div>
                </div> 
          </div> 
          <div class="col-md-4 col-sm">
            <div class="card" style="width: 14rem;">
                <img class="card-img-top" src="caratula.jpg" 
                alt="libro" style="width: 100%;">
                <div class="card-body">
                  <h5 class="card-title">True Colors Basic</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="index.php" class="btn btn-primary">Ver Libro</a>
                </div>
              </div> 
        </div> 
        </div> <br><hr>
        <div class="row">
            <div class="col-md-4 col-sm">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="caratula.jpg" 
                    alt="libro" style="width: 100%;">
                    <div class="card-body">
                      <h5 class="card-title">True Colors Basic</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="index.php" class="btn btn-primary">Ver Libro</a>
                    </div>
                  </div> 
            </div>
            <div class="col-md-4 col-sm">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="caratula.jpg" 
                    alt="libro" style="width: 100%;">
                    <div class="card-body">
                      <h5 class="card-title">True Colors Basic</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="index.php" class="btn btn-primary">Ver Libro</a>
                    </div>
                  </div> 
            </div>
            <div class="col-md-4 col-sm">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="caratula.jpg" 
                    alt="libro" style="width: 100%;">
                    <div class="card-body">
                      <h5 class="card-title">True Colors Basic</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="index.php" class="btn btn-primary">Ver Libro</a>
                    </div>
                  </div> 
            </div>
            <div class="col-md-4 col-sm">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="caratula.jpg" 
                    alt="libro" style="width: 100%;">
                    <div class="card-body">
                      <h5 class="card-title">True Colors Basic</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="index.php" class="btn btn-primary">Ver Libro</a>
                    </div>
                  </div> 
            </div>
        </div>
    </div>   
</body>
</html>
