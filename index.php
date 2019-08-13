<?php
include("conexion.php");


if(isset($_POST['entrar']))//si apretamos el boton..
{
 
    $facu=$_POST["facu"];


	if($facu=='0') {
		# code...
		echo "<center>Ingrese todos los datos por favor</center>";
	}
	else{

		$Contrasena=$_POST["pass"];

		 $sql="SELECT privilege FROM `users` WHERE password= '$Contrasena'";
	    $res=mysqli_query($db,$sql);

        if ($res) {
            # code...

             $priv=mysqli_fetch_row($res);
            //$priv=$row["privilege"]; 
             echo "$priv[0]";
              if($priv[0]==="standard")
            {
                session_start();
                $_SESSION["usuario"]=$Contrasena;

                header("location: test.php");
                echo "$priv";
            }
            else if ($priv[0]==="admin")
            {
                session_start();
                $_SESSION["usuario"]=$Contrasena;
                
                header("location: admin.php");
                echo "$priv[0]";
            }
            else if ($res) 
            {
                echo "$priv[0]";
            }
             
        }
         else
             {
                echo("<center>&iexcl;Contraseña incorrecta!</center>");

             }
	}
   
 
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Salud Sexual IIC</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/gradient-navbar.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background-color: #ffffff;">
    <nav class="navbar navbar-dark navbar-expand-md" id="app-navbar">
        <div class="container-fluid"><a class="navbar-brand" href="#" style="background-image: url(&quot;assets/img/ujed.png&quot;);background-size: contain;background-repeat: no-repeat;width: 180px;height: 77px;"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto"></ul><span class="navbar-text" style="color: #000000;font-size: 29px;">CUESTIONARIO DE SALUD SEXUAL EN UNIVERSITARIOS&nbsp;</span></div>
        </div>
    </nav>
    <div class="login-clean" style="background-image: url(&quot;assets/img/azul.jpg&quot;);background-size: cover;background-repeat: no-repeat;background-color: rgb(255,255,255);background-position: center;height: 600px;padding-top: 27px;">
        <form method="post" name="login" enctype="multipart/form-data" action="index.php">
            <div class="illustration" style="background-image: url(&quot;assets/img/iic.jpg&quot;);background-size: contain;background-repeat: no-repeat;background-position: center;height: 170px;margin: 25px;margin-top: 1px;margin-right: 0px;margin-left: 0px;"></div>

            <div class="form-group" style="width: 255px;">

            	<div >
            		<select name="facu" onchange="cambia()" class="btn btn-primary dropdown-toggle text-justify" style="width: 255px;background-color: rgb(255,255,255);color: rgb(0,0,0);margin-top: 0px;padding: 0px;" required="">
            			<option value="0" selected="">Selecciona tu escuela o facultad</option>
            			<optgroup label="Escuelas"><option value="ELe">Escuela de Lenguas</option><option value="EPEA">Escuela de Pintura, Escultura y Artesanías</option><option value="ESM">Escuela Superior de Música</option></optgroup><optgroup label="Facultades"><option value="FADER Y CIPOL">Facultad de Derecho y Ciencias PolíticasL</option><option value="FAEO">Facultad de Enfermería y Obstetricia</option><option value="FAMEN">Facultad de Medicina y Nutrición</option><option value="FAO">Facultad de Odontología</option><option value="FAPyTCH">Facultad de Psicología y Terapia de la Comunicación Humana</option><option value="FCCFyD">Facultad de Ciencias de la Cultura Física y Deporte</option><option value="FCE">Facultad de Ciencias Exactas</option><option value="FCF">Facultad de Ciencias Forestales</option><option value="FCQ">Facultad de Ciencias Químicas</option><option value="FECA">Facultad de Economía, Contaduría y Administración</option><option value="FMVZ">Facultad de Medicina Veterinaria y Zootecnia</option><option value="FTS">Facultad de Trabajo Social</option></optgroup>
            		</select>
            		</div>

            	
                
    </div>
    <div class="form-group" style="width: 255px;">
        <div class="dropdown"> 
        	<select name="carrera" class="btn btn-primary dropdown-toggle text-justify" style="width: 255px;background-color: rgb(255,255,255);color: rgb(0,0,0);margin-top: 0px;padding: 0px;">
                <option value="0">Selecciona tu carrera</option>
                            </select>
            
    </div>
    </div>
    <div class="form-group" style="width: 255px;"><input class="form-control" type="password" name="pass" placeholder="Contraseña"></div>
    <div class="form-group" style="width: 255px;">
    	<button name="entrar" class="btn btn-primary btn-block" type="submit" style="background-color: rgb(7,11,108);letter-spacing: 3px;font-family: ABeeZee, sans-serif;font-weight: bold;">ENTRAR</button>
    </div><a class="forgot" href="#">¿Olvidaste tu contraseña?</a></form>
    </div>
    <script type="text/javascript">
        //definir las variables correspondientes
        var opt_ELe=new Array("Licenciado en Docencia de Lengua Inglesa");
        var opt_EPEA=new Array("Técnico Superior Universitario en Diseño y Producción Artesanal","Licenciado en Artes Visuales y Plásticas");
        var opt_ESM=new Array("Licenciado en Educación Musical y Expresión Artística","Licenciado en Música con Orientación en Instrumento");
        var opt_FADERYCIPOL=new Array("Licenciado en Educación Musical y Expresión Artística","Licenciado en Música con Orientación en Instrumento");
        var opt_FAEO=new Array("Especialidad en Enfermería Quirúrgica","Especialidad en Enfermería en Salud Mental y Psiquiatría","Especialidad en Enfermería en Salud Pública","Especialidad en Enfermería Infantil");
        var opt_FAMEN=new Array("Licenciado en Nutrición","Médico Cirujano");
        var opt_FAO=new Array("Cirujano Dentista");
        var opt_FAPyTCH=new Array("Licenciado en Psicología","Licenciado en Psicología","Licenciado en Terapia de la Comunicación Humana");
        var opt_FCCFYD=new Array("Licenciado en Educación Física y Deporte");
        var opt_FCE=new Array("Licenciado en Matemáticas Aplicadas");
        var opt_FCQ=new Array("Ingeniero en Ciencia de los Materiales","Químico Biotecnólogo","Químico Farmacéutico Biólogo");
        var opt_FCF=new Array("Ingeniero en Ciencias Forestales","Ingeniero en Manejo Ambiental");
        var opt_FECA=new Array("Contador Público","Licenciado en Administración","Licenciado en Economía y Negocios Internacionales");
        var opt_FMVZ=new Array("Médico Veterinario Zootecnista");
        var opt_FTS=new Array("Licenciado en Trabajo Social");
        //crear una funcion que permita ejecitar el cambio
        function cambia(){
            var facu;
            //se toma el valor de los hijos seleccionados
            facu= document.login.facu[document.login.facu.selectedIndex].value;
            //se chequea si los "hijos" esta definido
            if (facu!=0) {
                //seleccionamos las cosas correctas
                mis_opts=eval("opt_"+ facu);
                //se calcula el numero de cosas 
                num_opts= mis_opts.length;
                //marco el numero de opt en el select
                document.login.carrera.length=num_opts;
                //para cada opt del array, la pongo en el select
                for(i=0;i<num_opts;i++){
                    document.login.carrera.options[i].value=mis_opts[i];
                    document.login.carrera.options[i].text=mis_opts[i];
                }
            } else {
                //si no havia ningun opt seleccionada, elimino las cosas del select
                document.login.carrera.length= 1;
                //ponemos un 0 en la unica opt que he dejado
                document.login.carrera.options[0].value= "0";
                document.login.carrera.options[0].text= "Selecciona tu carrera";
            }

            //hacer un reset de las opts
            document.login.carrera.options[0].selected= true;
        }
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>