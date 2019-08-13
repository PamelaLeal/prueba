<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
        
        function eliminarD(){
            if (confirm("¿Deasea eliminar el dato?")==true) {
                return true;

            }
            else{
                return false;
            }
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
                <li data-bs-hover-animate="pulse" style="height: 45px;"> <a class="fa fa-paint-brush" href="resultadosEPEA.php" style="font-size:18px"
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
         <form  method="GET" enctype="multipart/form-data" action="resultadosFAOD.php" >
        <div class="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <h1 style="font-size: 35px;font-weight: bold;color: #282550;"><a 
                                    class="btn btn-link" role="button" data-bs-hover-animate="rubberBand"
                                    id="menu-toggle" href="#menu-toggle" style="color: #282550;"><i
                                        class="fa fa-bars"></i></a><a class="fa fa-user-md">&nbsp;&nbsp;Facultad de Odontología</a></h1>
                                        <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" id="item-1-1-tab"
                                                data-toggle="tab" role="tab" aria-controls="item-1-1"
                                                aria-selected="true" href="#item-1-1">Cirujano Dentista</a></li>
                                    </ul>
                                </div>
                                 <?php   
                                   
                                 include("conexion.php");
                                 $acentos = $db->query("SET NAMES 'utf8'");
                                    $sql=mysqli_query($db,"SELECT id,career,age,foraneo,civil,semester, religion from student where faculty='FAOD'") or die ("Sin establecer conexion!!");
                            
                                         
                                     ?>

                                <div class="card-body">
                              <table class="table table-hover table-condensed table-bordered">

                            <tr>
                                <td id="id">ID</td>
                                <td id="career">Carrera</td>
                                <td id="age">Edad</td>
                                <td id="foraneo">Foraneo</td>
                                <td id="civil">Estado civil</td>
                                <td id="semester">Semestre</td>
                                <td id="religion">Religión</td>
                                <td>Descargar</td>
                                <td>Eliminar</td>
                            </tr>

                               <?php 
                                while($ver=mysqli_fetch_array($sql)){ 
                                ?>
                                    <tr>
                                    <td> <?php echo $ver['id']; ?></td>
                                    <td> <?php echo $ver['career']; ?></td>
                                    <td> <?php echo $ver['age']; ?></td>
                                    <td><?php echo $ver['foraneo']; ?></td>
                                    <td><?php echo $ver['civil']; ?></td>
                                    <td><?php echo $ver['semester']; ?></td>
                                    <td><?php echo $ver['religion']; ?></td>
                                        

                                    <td>
                                    <button  class='btn-primary'><i class='fa fa-download'></i> Descargar</button>
                                    </td>
                                    <td>
                                    <a href="eliminarFAOD.php?id=<?php echo $ver['id']; ?>" class='btn-danger' onclick="return eliminarD()"><em class='fa fa-trash'></em> Eliminar</a>
                                    </td>
                                    </tr>
                                <?php
                                }

                             ?>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>
</html>