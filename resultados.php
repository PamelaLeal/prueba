<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script>
        function mostrarOcultarTablas(id) {
            mostrado = 0;
            if (elem.style.display == 'block') mostrado = 1;
            elem.style.display = 'none';
            if (mostrado != 1) elem.style.display = 'block';
        }
    </script>
</head>

<body>
<div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container-fluid"><a class="navbar-brand" href="#" style="background-image: url(&quot;assets/img/iic.jpg&quot;);background-size: contain;background-repeat: no-repeat;width: 80px;height: 50px;"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">/span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="test.php">Ir al cuestionario</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="admin.php">Usuarios</a></li>
                        <li class="nav-item" role="presentation"><button class="btn btn-primary" name="salir">Cerrar sesión</button></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div id="wrapper">
        <div class="text-nowrap" id="sidebar-wrapper" style="color: #46a1fc;background-color: rgb(37,40,80);">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> <label style="font-weight: bold;color: rgb(255,255,255);">MENÚ</label></li>
                <li data-bs-hover-animate="pulse" style="height: 45px;"> <a class="fa fa-language" href="resultadosELE.php" style="font-size:18px"
                        style="color: rgb(255,255,255);"> Escuela de Lenguas</a></li>
                <li data-bs-hover-animate="pulse" style="height: 45px;"> <a class="fa fa-paint-brush" href= href="resultadosEPEA.php" style="font-size:18px"
                        style="color: rgb(255,255,255);"> Escuela de Pintura</a></li>
                <li data-bs-hover-animate="pulse" style="height: 45px;"> <a class="fa fa-music" href="resultadosESM.php" style="font-size:18px"
                        style="color: rgb(255,255,255);"> Escuela Superior de Música</a></li>
                <li data-bs-hover-animate="pulse" style="height: 45px;"> <a class="fa fa-balance-scale" href="resultadosFADERyCIPOL.php" style="font-size:18px"
                        style="color: rgb(255,255,255);"> Facultad de Derecho y <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ciencias Políticas</a></li><br>
                <li data-bs-hover-animate="pulse" style="height: 45px;"> <a class="fa fa-medkit" href="resultadosFAEO.php" style="font-size:18px"
                        style="color: rgb(255,255,255);"> Facultad de Enfermería y <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Obstetricia</a></li><br>
                <li data-bs-hover-animate="pulse" style="height: 45px;"> <a class="fa fa-heartbeat" href="resultadosFAMEN.php"   style="font-size:18px"
                        style="color: rgb(255,255,255);"> Facultad de Medicina y<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nutrición</a></li><br>
                <li data-bs-hover-animate="pulse" style="height: 45px;"> <a class="fa fa-user-md" href="resultadosFAOD.php" style="font-size:18px"
                        style="color: rgb(255,255,255);"> Facultad de Odontología</a></li>
                <li data-bs-hover-animate="pulse" style="height: 45px;"> <a class="fa fa-street-view" href="resultadosFAPyTCH.php" style="font-size:18px"
                        style="color: rgb(255,255,255);"> Facultad de Psicología y <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terapia de la Comunicación Humana</a></li><br>
                <li data-bs-hover-animate="pulse" style="height: 45px;"> <a class="fa fa-futbol-o" href="resultadosFCCFyD.php" style="font-size:18px"
                        style="color: rgb(255,255,255);"> Facultad de Ciencias de<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;la Cultura Física y Deporte</a></li><br>
                <li data-bs-hover-animate="pulse" style="height: 45px;"> <a class="fa fa-cubes" href="resultadosFCE.php" style="font-size:18px"
                        style="color: rgb(255,255,255);"> Facultad de Ciencias<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Exactas</a></li><br>
                <li data-bs-hover-animate="pulse" style="height: 45px;"> <a class="fa fa-tree" href="resultadosFCF.php" style="font-size:18px"
                        style="color: rgb(255,255,255);"> Facultad de Ciencias<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Forestales</a></li><br>
                <li data-bs-hover-animate="pulse" style="height: 45px;"> <a class="fa fa-flask" href="resultadosFCQ.php" style="font-size:18px"
                        style="color: rgb(255,255,255);"> Facultad de Ciencias<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Químicas</a></li><br>
                <li data-bs-hover-animate="pulse" style="height: 45px;"> <a class="fa fa-bar-chart" href="resultadosFECA.php" style="font-size:18px"
                        style="color: rgb(255,255,255);"> Facultad de Economía,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Contaduría y Administración</a></li><br>
                <li data-bs-hover-animate="pulse" style="height: 45px;"> <a class="fa fa-paw" href="resultadosFMVZ.php" style="font-size:18px"
                        style="color: rgb(255,255,255);"> Facultad de Medicina<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Veterinaria y Zootecnia</a></li><br>
                <li data-bs-hover-animate="pulse" style="height: 45px;"> <a class="fa fa-users" href="resultadosFTS.php" style="font-size:18px"
                        style="color: rgb(255,255,255);"> Facultad de<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trabajo Social</a></li><br>
                <li data-bs-hover-animate="pulse" style="height: 45px;"> <a class="fa fa-music" href="resultadosFMVZ.php" style="font-size:18px"
                        style="color: rgb(255,255,255);"> Facultad de Medicina Veterinaria y Zootecnia</a></li> 
            </ul>
        </div>
        <div class="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <h1 style="font-size: 47px;letter-spacing: 4px;font-weight: bold;color: #282550;"><a
                                    class="btn btn-link" role="button" data-bs-hover-animate="rubberBand"
                                    id="menu-toggle" href="#menu-toggle" style="color: #282550;"><i
                                        class="fa fa-bars"></i></a>PANEL DE CONTROL</h1>
                            <div class="carousel slide" data-ride="carousel" id="carousel-1">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item"><img class="w-100 d-block" src="assets/img/ujed.png"
                                            alt="Slide Image"></div>
                                    <div class="carousel-item"><img class="w-100 d-block" src="assets/img/iic.jpg"
                                            alt="Slide Image"></div>
                                    <div class="carousel-item"><img class="w-100 d-block"
                                            src="assets/img/1.png"
                                            alt="Slide Image"></div>
                                    <div class="carousel-item active"><img class="w-100 d-block"
                                            src="assets/img/2.png"
                                            alt="Slide Image"></div>
                                    <div class="carousel-item"><img class="w-100 d-block"
                                            src="assets/img/3.png"
                                            alt="Slide Image"></div>
                                    <div class="carousel-item"><img class="w-100 d-block"
                                            src="assets/img/4.png"
                                            alt="Slide Image"></div>
                                </div>
                                <div><a class="carousel-control-prev" href="#carousel-1" role="button"
                                        data-slide="prev"><span class="carousel-control-prev-icon"></span><span
                                            class="sr-only">Previous</span></a><a class="carousel-control-next"
                                        href="#carousel-1" role="button" data-slide="next"><span
                                            class="carousel-control-next-icon"></span><span
                                            class="sr-only">Next</span></a></div>
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-1" data-slide-to="0"></li>
                                    <li data-target="#carousel-1" data-slide-to="1"></li>
                                    <li data-target="#carousel-1" data-slide-to="2"></li>
                                    <li data-target="#carousel-1" data-slide-to="3" class="active"></li>
                                    <li data-target="#carousel-1" data-slide-to="4"></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>
</html>