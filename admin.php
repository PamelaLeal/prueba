<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">    
</head>

<body style="background-color: rgb(241,247,252);">
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean">
            <div class="container"><a class="navbar-brand" href="#">Administrador</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="test.php">Ir al cuestionario</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="resultados.php">Ver resultados</a></li>
                        <li class="nav-item" role="presentation"><button class="btn btn-primary" name="salir">Cerrar sesión</button></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder" style="background-image: url(&quot;assets/img/iic.jpg&quot;);background-repeat: no-repeat;background-size: contain;background-position: center;background-color: #ffffff;"></div>
            <form method="post">
                <h2 class="text-center"><strong>Información de usuarios</strong></h2>
                <div class="form-group"><select class="form-control" name="username"><option value="" selected="">Selecciona una escuela o facultad</option>
                    <optgroup label="Escuelas"><option value="ELe">ELe</option><option value="EPEA">EPEA</option><option value="ESM">ESM</option></optgroup><optgroup label="Facultades"><option value="FADER Y CIPOL">FADER Y CIPOL</option><option value="FAEO">FAEO</option><option value="FAMEN">FAMEN</option><option value="FAO">FAO</option><option value="FAPyTCH">FAPyTCH</option><option value="FCCFyD">FCCFyD</option><option value="FCE">FCE</option><option value="FCF">FCF</option><option value="FCQ">FCQ</option><option value="FECA">FECA</option><option value="FMVZ">FMVZ</option><option value="FTS">FTS</option></optgroup></select></div>
                <div class="form-group"><input class="form-control" type="password" name="contrasena" placeholder="Contraseña"></div>
                <div class="form-group"><select class="form-control" name="privilegio"><option value="" selected="">Prvilegio</option><option value="admin">Administrador</option><option value=standar">Estandar</option><option value="pasante">Pasante</option></select></div>
                <div class="form-group"><button class="btn btn-success btn-block" name="enviar"">Guardar</button></div>
                <div class="form-group"><button class="btn btn-warning btn-block" name="todo"">Ver Usuarios</button></div>

           
            </form>
        </div>
    </div>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <?php
                require('conexion.php');
                if(isset($_POST['enviar']))
                {
                    $usern=$_POST['username'];
                    $pass=$_POST['contrasena'];
                    $priv=$_POST['privilegio'];

                    if($usern!=""||$pass!=""||$priv!="")
                    {
                        $sql="INSERT INTO users (username, password, privilege) VALUES ('$usern', '$pass', '$priv')";
                        $res=mysqli_query($db,$sql);
                        if($res)
                            {
                                echo '<script type="text/javascript">alert("USUARIO AGREGADO CORRECTAMENTE.");</script>';
                    
                            }
                        else
                            {
                                echo '<script type="text/javascript">alert("EL USUARIO NO SE HA AGREGADO.");</script>';
                            }
                    }
                    else
                    {
                        echo '<script type="text/javascript">alert("NO SE INGRESARON TODOS LOS DATOS.");</script>';

                    }

                        
                }   
                
                if(isset($_POST['todo']))
                        {
                            $sql="SELECT * FROM users ORDER BY username";
                            $res=mysqli_query($db,$sql);
                            if($res)
                            {
                                
                                echo "<table border='1' align='center'";
                                    echo "<tr> <td>USERNAME</td><td>CONTRASEÑA</td><td>PRIVILEGIO</td><td>ELIMINAR</td><td>EDITAR</td></tr>";
                                    echo "<br>";
                                    while($row=mysqli_fetch_row($res))
                                    {
                                        echo "<tr>";
                                        echo "<td>$row[2]</td>";
                                        echo "<td>$row[3]</td>";
                                        echo "<td>$row[1]</td>";
                                        echo "<td><button name='eliminar' class='btn btn-danger btn-block'>ELIMINAR</button></td>";
                                        echo "<td><button name='editar' class='btn btn-warning btn-block'>EDITAR</button></td>";

                                        echo "</tr>";
                                    }
                            }
                            else
                            {
                                echo '<script type="text/javascript" charset="utf-8">alert("NO SE PUEDE ACCEDER A LA BIBLIOTECA.");</script>';
                            }
                        }


                        if(isset($_POST['eliminar']))
                        {
                            $usern=$_POST['username'];
                            $sql="DELETE FROM usuarios WHERE username='$row[2]'";
                            $res=mysqli_query($link,$sql);
                            if($res)
                                {
                                    echo '<script type="text/javascript">alert("USUARIO ELIMIANDO CORRECTAMENTE.");</script>';
                                }
                            else
                                {
                                    echo '<script type="text/javascript">alert("NO SE ELIMINO EL USUARIO.");</script>';
                                }
                        } 


                        if(isset($_POST['salir']))//si apretamos el boton..
                        {                     
                            header("location: index.php");
                            session_destroy();
                        }
                ?>
</body>

</html>