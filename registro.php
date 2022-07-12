<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Regristro</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-light fixed-top">
                <div class="container-fluid">  <!-- Inicio del div contenedor principal-->
                    <a class="navbar-brand" href="#">
                        <img src="img/zapateria.png" alt="" width="40" height="28" class="d-inline-block align-text-top">
                        El Buen Paso</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent"> <!-- Contenedor para generar efecto menu -->
                        <u1 class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="venta.php">Venta</a></li>
                            <li class="nav-item"><a class="nav-link" href="registro.php">Alta</a></li>
                            <li class="nav-item"><a class="nav-link" href="catalogo.php">Catalago</a></li>
                            <li class="nav-item"><a class="nav-link" href="login.php">Cerrar Sesion</a></li>        
                        </u1>
                    </div> <!-- Cierre del div efecto menu -->
                </div> <!-- Cierre del div contenedor principal -->
            </nav>
        </header>

    
        <!-- Slide de imagenes -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"><!-- Contenedor principals de las imagenes -->
            <div class="carousel-inner"> <!-- Contenedor interno -->
                <div class="carousel-item active"> <!-- imagen 1 -->
                    <img src="img/foto1.png" class="d-block w-100">
                </div>
                <div class="carousel-item"> <!-- imagen 2 -->
                    <img src="img/foto2.png" class="d-block w-100">
                </div>
                <div class="carousel-item"> <!-- imagen 3 -->
                    <img src="img/foto3.png" class="d-block w-100">
                </div>
                <div class="carousel-item"> <!-- imagen 4 -->
                    <img src="img/foto4.png" class="d-block w-100">
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

            <!-- Fin del slide -->

        <section class="container m-5 bg-light"> 
            <div class="row">
                <div class="col-lg-8"> 
                    <h3 class="text-center text-muted">Regristro de Calzado</h3>
                    <form method="GET" action="recibir.php"> <!--vinculado con recibir.php con el metodo get y action-->
                        <div class="row mb-3">
                            <label class="col-sm-10">Codigo de calzado</label>
                            <div class="col-sm-10">
                                <input type="text" name="codigo_calzado" class="form-control" placeholder="Introduce el codigo del calzado">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Descripcion</label>
                            <div class="col-sm-10">
                                <input type="text" name="descripcion" class="form-control" placeholder="Escribe la descripcion del calzado">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Talla</label>
                            <div class="col-sm-10">
                                <input type="text" name="talla" class="form-control" placeholder="Introduce la talla del calzado">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Precio</label>
                            <div class="col-sm-10">
                                <input type="text" name="precio" class="form-control" placeholder="Introduce el precio del calzado">
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary btn-success">Registrar</button>
                            <button class="btn btn-secondary btn-danger">Descartar</button>
                        </div>
                    </form>
                </div>
                
                <div class="col-lg-4 d-flex justify-content-center">
                    <img src="img/zapateria.png" width="400">
                </div>
            </div>
        </section>

        <footer class="container-fluid bg-light text-center p-3">
            <p>Todos los derechos reservados 2022</p>
    
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    </body>
    
</html>