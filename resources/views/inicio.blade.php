<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="resources/assets/images/logo.png">
    <title>Inicio</title>
    <link rel="stylesheet" href="resources/css/bootstrap/bootstrap.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="inicio">EDUTEC</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarCollapse" style="">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="conocenos">Conocenos</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <button type="button" id="abrir_login" class="btn btn-info" data-toggle="modal" data-target="#modal_login">Iniciar sesión</button>
                    <button type="button" id="abrir_registro" class="btn btn-light" data-toggle="modal" data-target="#modal_register">Registrarse</button>
                </form>
            </div>
        </nav>
    </header>
    <main role="main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="350px" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                        <rect width="100%" height="100%" fill="#235390"></rect>
                    </svg>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Prueba de la pagina en laravel</h1>
                            <p>
                                Esto es una prueba de la pagina EduTec en Laravel 8
                            </p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
        <div class="container marketing">
            <hr>
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Paquete de prueba</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>
                                <img src="resources/assets/images/paquetes/3-meses.png" width="35%" dy=".3em">
                            </li>
                            <li>
                                <p>Costo: $1,000,000</p>
                            </li>
                        </ul>
                        <button class="btn btn-lg btn-block btn-outline-secondary" onclick="ir_a('3-meses.png')">Ver paquete
                        </button>
                    </div>

                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Paquete de prueba</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>
                                <img src="resources/assets/images/paquetes/3-meses.png" width="35%" dy=".3em">
                            </li>
                            <li>
                                <p>Costo: $1,000,000</p>
                            </li>
                        </ul>
                        <button class="btn btn-lg btn-block btn-outline-secondary" onclick="ir_a('3-meses.png')">Ver paquete
                        </button>
                    </div>

                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Paquete de prueba</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>
                                <img src="resources/assets/images/paquetes/3-meses.png" width="35%" dy=".3em">
                            </li>
                            <li>
                                <p>Costo: $1,000,000</p>
                            </li>
                        </ul>
                        <button class="btn btn-lg btn-block btn-outline-secondary" onclick="ir_a('3-meses.png')">Ver paquete
                        </button>
                    </div>

                </div>
            </div>
            <hr class="featurette-divider">
            <div id="3-meses.png">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Paquete de prueba</h2>
                        <p class="lead">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
                    </div>
                    <div class="col-md-5">
                        <center>
                            <img src="resources/assets/images/paquetes/3-meses.png" width="75%" dy=".3em">
                        </center>
                    </div>
                </div>
            </div>
            <hr class="featurette-divider">
            <hr class="featurette-divider">
        </div>
        <footer class="container">
            <p class="float-right"><a href="#" id="top">Regresar arriba</a></p>
            <p>© 2020-2021 EDUTEC, Inc. · <a href="#">Policitas de privacidad</a> y <a href="#">Terminos de uso</a></p>
        </footer>
    </main>
</body>
<script src="resources/js/jquery/jquery-3.5.1.js"></script>
<script src="resources/js/popper/popper.min.js"></script>
<script src="resources/js/bootstrap/bootstrap.min.js"></script>
<script src="resources/js/visitor/registro_login.js"></script>
<script src="resources/js/sweetalert/sweetalert.min.js"></script>

</html>