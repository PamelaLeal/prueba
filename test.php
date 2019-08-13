<?php
 include("conexion.php");
session_start();

if (!isset($_SESSION["usuario"])) {
    # code...
    header("location: index.php");
}


if (isset($_POST['siguiente']))//boton para datos generales
{
    //alumno
    $facu=$_POST["facu"];
    $carrera=$_POST["carrera"];
    $semestre=$_POST["semestre"];
    $edad=$_POST["edad"];
    $foraneo=$_POST["foraneo"];
    $civil=$_POST["civil"];
    $religion=$_POST["religion"];
    $otra=$_POST["otra"];

    $religion2=  implode(",", $religion);
    
    if ($facu !="0" && $foraneo!="" && $civil != "0" && $religion2 !="") {
        # code...
        if ($religion2=="1") {
            # code...
            $religion2= "otra";

            $sql1="INSERT INTO `student` (`id`, `faculty`, `career`, `age`, `foraneo`, `civil`, `semester`, `religion`, `other`) VALUES (NULL, '$facu', '$carrera', '$edad', '$foraneo', '$civil', '$semestre', '$religion2', '$otra');";
           $res1=mysqli_query($db,$sql1);


             if($res1)
             {
               
                echo("<script type='text/javascript'> window.alert('Datos guardados!'); </script>");
             } 
             else {
                 # code...
                echo "noooooooo";
             }
        }
        else{

             $sql1="INSERT INTO `student` (`id`, `faculty`, `career`, `age`, `foraneo`, `civil`, `semester`, `religion`, `other`) VALUES (NULL, '$facu', '$carrera', '$edad', '$foraneo', '$civil', '$semestre', '$religion2', '$otra');";
            $res1=mysqli_query($db,$sql1);


             if($res1)
             {
               
                echo("<script type='text/javascript'> window.alert('Datos guardados!'); </script>");
             } 
             else {
                 # code...
                echo "noooooooo";
             }

        }
        
    }
    else{
        echo " <script type='text/javascript'> window.alert('Ingrese todos los datos por favor'); </script>";
    }
 
    
     
   

}

if (isset($_POST['siguiente1']))//si apretamos el boton..
{

    //Busca valor maximo y lo ingresa como FK
    $sql2="SELECT MAX(id) as id FROM student";
    $respuesta=mysqli_query($db,$sql2);
    $row=mysqli_fetch_array($respuesta);
    $numero=$row["id"]; 
    
    //Agarra la facultad
    $sql3="SELECT faculty as faculty FROM student WHERE id='$numero'";
    $respuesta3=mysqli_query($db,$sql3);
    $row=mysqli_fetch_array($respuesta3);
    $faculty=$row["faculty"]; 

    
  //Antecedentes sexuales
    $edad2=$_POST["edad2"];
    $personas=$_POST["personas"];
    $circu=$_POST["circu"];
    $preser=$_POST["preser"];
    $frecuencia=$_POST["frecuencia"];
    $tipo=$_POST["tipo"];
    $orientacion=$_POST["orientacion"];
    $otra1=$_POST["otra1"];
    $con=$_POST["con"];
    $lesion=$_POST["lesion"];
    $f1=$_POST["f1"];
    $infeccion=$_POST["infeccion"];
    $f2=$_POST["f2"];
    $diagnosticado=$_POST["diagnosticado"];
    $f3=$_POST["f3"];
    $prostis=$_POST["prostis"];
    $f4=$_POST["f4"];


     $tipo2=  implode(",", $tipo); 
    $orientacion2=implode(",", $orientacion); 
    $f11=implode(",", $f1);
    $f22=implode(",", $f2);
    $f33=implode(",", $f3);
      

     if($circu != "" && $preser !="" && $tipo2 !="" && $orientacion2 !="0" && $con !="" && $lesion !="" && $infeccion !="" && $diagnosticado != "" &&  $prostis !="")
    {
        if ($orientacion2=="1") {
            # code...
            $orientacion2= "otra";

            $sql="INSERT INTO `data` (`id`, `student_id`, `faculty`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `r9`, `r10`, `r11`, `r12`, `r13`, `r14`, `r15`, `r16`, `r17`, `r18`, `r19`, `r20`, `r21`, `r22`, `r23`, `r24`, `r25`, `r26`, `r27`, `r28`, `r29`, `r30`, `r31`, `r32`, `r33`, `r34`) VALUES (NULL, '$numero', '$faculty', '$edad2', '$personas', '$circu', '$preser', '$frecuencia', '$tipo2', '$orientacion2', '$Otra1', '$con', '$lesion', '$f11', '$infeccion', '$f22', '$diagnosticado', '$f33', '$prostis', '$f4', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0','0')";
            $res=mysqli_query($db,$sql);
             if($res)
             {
               
                echo("<script type='text/javascript'> window.alert('Datos guardados!'); </script>");
             } 
             else {
                 # code...
                echo "nel";
             }

        }
        else{
            $sql="INSERT INTO `data` (`id`, `student_id`, `faculty`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `r9`, `r10`, `r11`, `r12`, `r13`, `r14`, `r15`, `r16`, `r17`, `r18`, `r19`, `r20`, `r21`, `r22`, `r23`, `r24`, `r25`, `r26`, `r27`, `r28`, `r29`, `r30`, `r31`, `r32`, `r33`, `r34`) VALUES (NULL, '$numero', '$faculty', '$edad2', '$personas', '$circu', '$preser', '$frecuencia', '$tipo2', '$orientacion2', '$Otra1', '$con', '$lesion', '$f11', '$infeccion', '$f22', '$diagnosticado', '$f33', '$prostis', '$f4', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0','0')";
            $res=mysqli_query($db,$sql);
             if($res)
             {
               
                echo("<script type='text/javascript'> window.alert('Datos guardados!'); </script>");
             } 
             else {
                 # code...
                echo "nel";
             }
        }

      
    }
      else{
        echo " <script type='text/javascript'> window.alert('Ingrese todos los datos por favor'); </script>";
    }
   
     
    
 
 }

if (isset($_POST['siguiente2']))//si apretamos el boton..
{
    $sql2="SELECT MAX(id) as id FROM data";
    $respuesta=mysqli_query($db,$sql2);
    $row=mysqli_fetch_array($respuesta);
    $numero=$row["id"]; 

    //its
    $salud=$_POST["salud"];
    $ind=$_POST["ind"];
    $temas=$_POST["temas"];
    $otro5=$_POST["otro5"];
    $conquien=$_POST["conquien"];
    $f5=$_POST["f5"];
    $lugar=$_POST["lugar"];
    $f6=$_POST["f6"];
    $pruebas=$_POST["pruebas"];
    $otro6=$_POST["otro6"];
    
    $ind2= implode(",", $ind);
    $f55= implode(",", $f5);
    $f66= implode(",", $f6);
    $temas2=  implode(",", $temas); 
    $pruebas2=  implode(",", $pruebas); 

    if ($salud != "" && $temas2 != "" && $conquien != "" ) {
        # code...
         $sql=" UPDATE `data` SET `r18` = '$salud', `r19` = '$ind2', `r20` = '$temas2', `r21` = '$otro5', `r22` = '$conquien', `r23` = '$f55', `r24` = '$lugar', `r25` = '$f66', `r26` = '$pruebas2' , `r27` = '$otro6' WHERE `data`.`id` = '$numero'";
         $res=mysqli_query($db,$sql);
         if($res)
         {
           
            echo("<script type='text/javascript'> window.alert('Datos guardados!'); </script>");
         } 
         else {
             # code...
            echo "aun no:(";
         }
    }
    else{
        echo " <script type='text/javascript'> window.alert('Ingrese todos los datos por favor'); </script>";
    }

  
}

if (isset($_POST['siguiente3']))//si apretamos el boton..
{

    $sql2="SELECT MAX(id) as id FROM data";
    $respuesta=mysqli_query($db,$sql2);
    $row=mysqli_fetch_array($respuesta);
    $numero=$row["id"]; 
   $bebidas=$_POST["bebidas"];
   $frecuencia=$_POST["frecuencia2"];
   $cigarros=$_POST["cigarros"];
   $fcigarros=$_POST["fcigarros"];
   $droga=$_POST["droga"];
   $cual=$_POST["cual"];
   $otro7=$_POST["otro7"];

   $cual2= implode(",", $cual);

   if ($bebidas != "" && $cigarros != "" && $droga != "") {
       # code...
         $sql=" UPDATE `data` SET `r28` = '$bebidas', `r29` = '$frecuencia', `r30` = '$cigarros', `r31` = '$fcigarros', `r32` = '$droga', `r33` = '$cual2', `r34` = '$otro7' WHERE `data`.`id` = '$numero'";
         $res=mysqli_query($db,$sql);
         if($res)
         {
           
            echo("<script type='text/javascript'> window.alert('Datos guardados!'); </script>");
           
           // header("location: index.php");
            session_destroy();

         } 
         else {
             # code...
            echo "te falta un poco bb";
         }
   }
   else{
        echo " <script type='text/javascript'> window.alert('Ingrese todos los datos por favor'); </script>";
    }
   

}

?>

<!DOCTYPE html>
<html style="background-image: url(&quot;assets/img/fresh.jpg&quot;);background-size: cover;background-repeat: no-repeat;background-position: bottom;" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Salud Sexual IIC</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/gradient-navbar.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    
</head>

<body style="background-color: rgba(255,255,255,0);background-image: url(&quot;assets/img/azul.jpg&quot;);background-size: cover;background-repeat: no-repeat;">
    <nav class="navbar navbar-dark navbar-expand-md" id="app-navbar" style="background-color: #ffffff;">
        <div class="container-fluid"><a class="navbar-brand" href="#" style="background-image: url(&quot;assets/img/ujed.png&quot;);background-size: contain;background-repeat: no-repeat;width: 180px;height: 77px;"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto"></ul><span class="navbar-text" style="color: #000000;font-size: 29px;">CUESTIONARIO DE SALUD SEXUAL EN UNIVERSITARIOS &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></div><a class="navbar-brand" href="#" style="background-image: url(&quot;assets/img/iic.png&quot;);background-size: contain;background-repeat: no-repeat;width: 180px;height: 77px;"></a></div>
    </nav>
    <div class="card" style="background-color: rgba(255,255,255,0);">
        <div class="card-header" style="background-color: #ffffff;">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="item-1-1-tab" data-toggle="tab" role="tab" aria-controls="item-1-1" aria-selected="true" href="#item-1-1" style="font-weight: bold;">DATOS DE IDENTIFICACION</a></li>
                <li class="nav-item"><a class="nav-link" id="item-1-2-tab" data-toggle="tab" role="tab" aria-controls="item-1-2" aria-selected="false" href="#item-1-2" style="font-weight: bold;">ANTECEDENTES SEXUALES</a></li>
                <li class="nav-item"><a class="nav-link" id="item-1-3-tab" data-toggle="tab" role="tab" aria-controls="item-1-3" aria-selected="false" href="#item-1-3" style="font-weight: bold;">CONOCIMIENTOS ACERCA DE LA SALUD SEXUAL MASCULINA</a></li>
                <li class="nav-item"><a class="nav-link" id="item-1-3-tab" data-toggle="tab" role="tab" aria-controls="item-1-4" aria-selected="false" href="#item-1-4" style="font-weight: bold;">TOXICOMANIAS</a></li>
            </ul>
        </div>
        <div class="card-body">
            <div id="nav-tabContent" class="tab-content">
                <div id="item-1-1" class="tab-pane fade show active" role="tabpanel" aria-labelledby="item-1-1-tab">
                    <div class="container" style="margin-top: 25px;">
                        <div>
                            <form  method="post" id="test" name="test" enctype="multipart/form-data" action="test.php" target="pp">
                                <div class="form-group">
                                    <div class="border rounded" id="formdiv" style="background-color: #ffffff;">
                                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                                            <div class="col-md-8 offset-md-1">
                                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Unidad académica</strong></p>
                                            </div>
                                            <div class="col-md-10 offset-md-1"><select name="facu" onchange="cambia()" class="form-control" style="font-family:Roboto, sans-serif;" required=""><option value="0" selected="">Seleccione una opción</option><optgroup label="Escuelas"><option value="ELe">Escuela de Lenguas</option><option value="EPEA">Escuela de Pintura, Escultura y Artesanías</option><option value="ESM">Escuela Superior de Música</option></optgroup><optgroup label="Facultades"><option value="FADERYCIPOL">Facultad de Derecho y Ciencias PolíticasL</option><option value="FAEO">Facultad de Enfermería y Obstetricia</option><option value="FAMEN">Facultad de Medicina y Nutrición</option><option value="FAOD">Facultad de Odontología</option><option value="FAPyTCH">Facultad de Psicología y Terapia de la Comunicación Humana</option><option value="FCCFyD">Facultad de Ciencias de la Cultura Física y Deporte</option><option value="FCE">Facultad de Ciencias Exactas</option><option value="FCF">Facultad de Ciencias Forestales</option><option value="FCQ">Facultad de Ciencias Químicas</option><option value="FECA">Facultad de Economía, Contaduría y Administración</option><option value="FMVZ">Facultad de Medicina Veterinaria y Zootecnia</option><option value="FTS">Facultad de Trabajo Social</option></optgroup></select></div>
                                        </div>
                                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                                            <div class="col-md-8 offset-md-1">
                                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Carrera que está cursando</strong></p>
                                            </div>
                                            <div class="col-md-10 offset-md-1">
                                                <select name="carrera" class="form-control" style="font-family:Roboto, sans-serif;" required=""><option value="0" selected="">Seleccione una opción</option></select>
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                            <div class="col-md-8 offset-md-1">
                                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Semestre</strong></p>
                                            </div>
                                            <div class="col-md-10 offset-md-1"><input name="semestre" class="form-control" type="number" style="font-family:Roboto, sans-serif;" placeholder="1" required=""></div>
                                        </div>
                                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                            <div class="col-md-8 offset-md-1">
                                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Edad</strong></p>
                                            </div>
                                            <div class="col-md-10 offset-md-1"><input name="edad" class="form-control" type="number" style="font-family:Roboto, sans-serif;" placeholder="1" required=""></div>
                                        </div>
                                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                                            <div class="col-md-8 offset-md-1">
                                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Foráneo</strong></p>
                                            </div>
                                            <div class="col-md-10 offset-md-1">
                                                <fieldset>
                                                    <div class="custom-control custom-radio"><input type="radio" id="customRadioP1" class="custom-control-input" name="foraneo" value="Sí"><label class="custom-control-label" for="customRadioP1" style="font-family: Roboto, sans-serif;">Sí</label></div>
                                                    <div
                                                        class="custom-control custom-radio"><input type="radio" id="customRadioP2" class="custom-control-input" name="foraneo" value="No"><label class="custom-control-label" for="customRadioP2" style="font-family: Roboto, sans-serif;">No</label></div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                                        <div class="col-md-8 offset-md-1">
                                            <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Estado civil</strong></p>
                                        </div>
                                        <div class="col-md-10 offset-md-1"><select name="civil" class="form-control" style="font-family:Roboto, sans-serif;" required=""><option value="0" selected="">Seleccione una opción</option><option value="Soltero" selected="">Soltero</option><option value="Casado">Casado</option><option value="Union libre">Union libre</option><option value="Separado">Separado</option><option value="Divorciado">Divorciado</option><option value="Viudo">Viudo</option></select></div>
                                    </div>
                                    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                                        <div class="col-md-8 offset-md-1">
                                            <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Religión</strong></p>
                                        </div>
                                        <div class="col-md-10 offset-md-1"><select name="religion[]" class="form-control" style="font-family:Roboto, sans-serif;" required=""><option value="0" selected="">Seleccione una opción</option><option  value="Catolico">Católico</option><option  value="Cristiano">Cristiano</option><option  value="Testigo de Jehova">Testigo de Jehová</option><option  value="Ateo">Ateo</option><option value="1" onclick="ejecutar_funcion()">Otra</option></select>

                                            <input name="otra" style="display:none" id="otra"  class='form-control' type='text' style='margin-left:0px;font-family:Roboto, sans-serif;' placeholder="Especifique">
                                            </div>

                                           <script type="text/javascript">
                                               var opciones = document.getElementsByName("religion[]")[0],
                                                otro = document.getElementById("otra"),
                                                s = []; //Valores seleccionados
                                             
                                            opciones.addEventListener("click", function(e){
                                                var valor = e.target.value, //Valor seleccionado
                                                    i = s.indexOf(valor); //Posición del valor en el array, si es que está
                                                
                                                if (i > -1) //Cuando un valor no está en el array, la función indexOf devuelve -1
                                                    s.splice(i, 1); //Retiramos el valor seleccionado
                                                else
                                                    s.push(valor); //Añadimos el valor seleccionado
                                                
                                                otro.style.display = s.indexOf("1") > -1 ? "block" : "none";
                                            }, false);
                                           </script>
                                            
                                    </div>
                                    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                         <div   class="col-12 col-md-4 col-xl-4 offset-md-4 offset-xl-5"><button name="siguiente" class="btn btn-light btn-lg" style="margin-left:16px;" type="submit">GUARDAR</button>
                                             <button     class="btn btn-light btn-lg" style="margin-left:16px;" type="submit">SIGUIENTE</button></div>
                                    </div>
                                </div>
                        </div>
                        </form>
                        <iframe name="pp" style="position:absolute; top:-1500px;"></iframe> 
                    </div>
                </div>
            </div>
            <div id="item-1-2" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-2-tab">
                <div class="container" style="margin-top: 25px;">
                    <div>
                        <form  method="post" enctype="multipart/form-data" action="test.php" target="pp">
                            <div class="form-group">
                                <div class="border rounded" id="formdiv" style="background-color: #ffffff;">
                                    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                        <div class="col-md-8 offset-md-1">
                                            <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿A qué edad tuviste tu primer relación sexual?</strong></p>
                                        </div>
                                        <div class="col-md-10 offset-md-1"><input name="edad2" class="form-control" type="number" style="font-family:Roboto, sans-serif;" placeholder="1" required=""></div>
                                    </div>
                                    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                        <div class="col-md-8 offset-md-1">
                                            <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿Con cuántas personas has tenido relaciones sexuales?</strong></p>
                                        </div>
                                        <div class="col-md-10 offset-md-1"><input name="personas" class="form-control" type="number" style="font-family:Roboto, sans-serif;" placeholder="1" required="" min="1"></div>
                                    </div>
                                    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                                        <div class="col-md-8 offset-md-1">
                                            <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿Tienes circuncisión?</strong></p>
                                        </div>
                                        <div class="col-md-10 offset-md-1">
                                            <fieldset>
                                                <div class="custom-control custom-radio"><input type="radio" id="customRadio1" class="custom-control-input" name="circu" value="Sí"><label class="custom-control-label" for="customRadio1" style="font-family: Roboto, sans-serif;">Sí</label></div>
                                                <div
                                                    class="custom-control custom-radio"><input type="radio" id="customRadio2" class="custom-control-input" name="circu" value="No"><label class="custom-control-label" for="customRadio2" style="font-family: Roboto, sans-serif;">No</label></div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                                    <div class="col-md-8 offset-md-1">
                                        <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿Usas preservativo durante tus relaciones sexuales?</strong></p>
                                    </div>
                                    <div class="col-md-10 offset-md-1">
                                        <fieldset>
                                            <div class="custom-control custom-radio"><input onclick="mostrar90(0)"  type="radio" id="customRadio3" class="custom-control-input" name="preser" value="Sí"><label class="custom-control-label" for="customRadio3" style="font-family: Roboto, sans-serif;">Sí</label></div>
                                            <div
                                                class="custom-control custom-radio"><input onclick="mostrar90(1)"  type="radio" id="customRadio4" class="custom-control-input" name="preser" value="No"><label class="custom-control-label" for="customRadio4" style="font-family: Roboto, sans-serif;">No</label></div>
                                    </fieldset>
                                </div>
                            </div>
                            <div id="frecu2" style="display:none" class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                                <div class="col-md-8 offset-md-1">
                                    <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿Con qué frecuencia?</strong></p>
                                </div>
                                <div class="col-md-10 offset-md-1"><select name="frecuencia" class="form-control" style="font-family:Roboto, sans-serif;" required=""><option value="0">Seleccione una opción</option><option value="Siempre (100%)">Siempre (100%)</option><option value="Casi siempre (60%-99%)">Casi siempre (60%-99%)</option><option value="Ocasionalmente (1%-59%)">Ocasionalmente (1%-59%)</option></select></div>
                                 <script type="text/javascript">
                                    function mostrar90(num) { 
                                      if(num==0) { 
                                        document.getElementById('frecu2').style.display = ''; 
                                       
                                      } 
                                      else{
                                        document.getElementById('frecu2').style.display = 'none'; 
                                      }
                                      
                                    }  
                                </script>
                            </div>
                            <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                                <div class="col-md-8 offset-md-1">
                                    <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Indica el tipo o los tipos de relación sexual que hás tenido</strong></p>
                                </div>
                                <div class="col-md-10 offset-md-1">
                                    <fieldset>
                                        <div
                                            class="custom-control custom-checkbox"><input name="tipo[]" type="checkbox" id="customCheck1" class="custom-control-input" value="Vaginal"><label class="custom-control-label" for="customCheck1" style="font-family: Roboto, sans-serif;">Vaginal</label></div>
                                        <div
                                            class="custom-control custom-checkbox"><input name="tipo[]" type="checkbox" id="customCheck2" class="custom-control-input" value="Anal"><label class="custom-control-label" for="customCheck2" style="font-family: Roboto, sans-serif;">Anal</label></div>
                                <div class="custom-control custom-checkbox"><input name="tipo[]" type="checkbox" id="customCheck3" class="custom-control-input" value="Oral"><label class="custom-control-label" for="customCheck3" style="font-family: Roboto, sans-serif;">Oral</label></div>
                                </fieldset>
                            </div>
                    </div>
                    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                        <div class="col-md-8 offset-md-1">
                            <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿Cuál de las siguientes consideras que es tu orientación sexual?</strong></p>
                        </div>
                        <div class="col-md-10 offset-md-1"><select name="orientacion[]" class="form-control" style="font-family:Roboto, sans-serif;" required=""><option value="0" selected="">Seleccione una opción</option><option value="Heterosexual">Heterosexual</option><option value="Homosexual">Homosexual</option><option value="Bisexual">Bisexual</option><option value="Transgenero">Transgenero</option><option value="1" onclick="ejecutar_funcion()">Otra</option></select>
                             <div
                    class="custom-control custom-checkbox"><input name="otra1" style="display:none" id="otra1" class="form-control" type="text" style='margin-left:0px;font-family:Roboto, sans-serif;font-size:24px;' for="customCheck18" placeholder="Especifique"></div>

                </div>
               
                     <script type="text/javascript">
                                   var opciones1 = document.getElementsByName("orientacion[]")[0],
                                    otro1 = document.getElementById("otra1"),
                                    s1 = []; //Valores seleccionados
                                 
                                opciones1.addEventListener("click", function(e){
                                    var valor = e.target.value, //Valor seleccionado
                                        i = s1.indexOf(valor); //Posición del valor en el array, si es que está
                                    
                                    if (i > -1) //Cuando un valor no está en el array, la función indexOf devuelve -1
                                        s1.splice(i, 1); //Retiramos el valor seleccionado
                                    else
                                        s1.push(valor); //Añadimos el valor seleccionado
                                    
                                    otro1.style.display = s1.indexOf("1") > -1 ? "block" : "none";
                                }, false);
                               </script>
                    </div>
                <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                    <div class="col-md-8 offset-md-1">
                        <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Las relaciones sexuales que has tenido han sido con:</strong></p>
                    </div>
                    <div class="col-md-10 offset-md-1">
                        <fieldset>
                            <div class="custom-control custom-radio"><input type="radio" id="customRadio5" class="custom-control-input" name="con" value="Hombres"><label id="customRadio5" class="custom-control-label" for="customRadio5" style="font-family: Roboto, sans-serif;">Hombres</label></div>
                            <div
                                class="custom-control custom-radio"><input type="radio" id="customRadio6" class="custom-control-input" name="con" value="Mujeres"><label class="custom-control-label" for="customRadio6" style="font-family: Roboto, sans-serif;">Mujeres</label></div>
                    <div
                        class="custom-control custom-radio"><input type="radio" id="customRadio7" class="custom-control-input" name="con" value="Ambos"><label id="customRadio7" class="custom-control-label" for="customRadio7" style="font-family: Roboto, sans-serif;">Ambos</label></div>
                </fieldset>
            </div>
        </div>
     <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
        <div class="col-md-8 offset-md-1">
            <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿Has tenido alguna lesión genital?</strong></p>
        </div>
        <div class="col-md-10 offset-md-1">
            <fieldset>
                <div class="custom-control custom-radio"><input onclick="mostrar(0)" type="radio" id="customRadio8" class="custom-control-input" name="lesion" value="Sí"><label class="custom-control-label" for="customRadio8" style="font-family: Roboto, sans-serif;">Sí</label></div>
                <div class="custom-control custom-radio"><input onclick="mostrar(1)" type="radio" id="customRadio9" class="custom-control-input" name="lesion" value="No"><label class="custom-control-label" for="customRadio9" style="font-family: Roboto, sans-serif;">No</label></div>
            </fieldset>
            
</div>
</div>
<div  id="le" style="display:none" class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                    <div class="col-md-8 offset-md-1">
                        <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿Cuál?</strong></p>
                    </div>
                    <div class="col-md-10 offset-md-1">
                        <fieldset>
                            <div
                                class="custom-control custom-checkbox"><input name="f1[]" type="checkbox" id="customCheck144" class="custom-control-input" value="Ampollas"><label class="custom-control-label" for="customCheck144" style="font-family: Roboto, sans-serif;">Ampollas</label></div>
                            <div
                                class="custom-control custom-checkbox"><input name="f1[]" type="checkbox" id="customCheck244" class="custom-control-input" value="Ulceras"><label class="custom-control-label" for="customCheck244" style="font-family: Roboto, sans-serif;">Ulceras</label></div>
                    <div class="custom-control custom-checkbox"><input name="f1[]" type="checkbox" id="customCheck344" class="custom-control-input" value="Verrugas"><label class="custom-control-label" for="customCheck344" style="font-family: Roboto, sans-serif;">Verrugas</label>
                    </div>
                     <div
                         class="custom-control custom-checkbox"><input name="f1[]" type="checkbox" id="customCheck944" class="custom-control-input" value="Inframaciones"><label class="custom-control-label" for="customCheck944" style="font-family: Roboto, sans-serif;">Inflamaciones</label></div>
                          <div
                                class="custom-control custom-checkbox"><input name="f1[]" type="checkbox" id="customCheck444" class="custom-control-input" value="Tumores"><label class="custom-control-label" for="customCheck444" style="font-family: Roboto, sans-serif;">Tumores</label></div>
                    </fieldset>
                         <script type="text/javascript">
                function mostrar(num) { 
                  if(num==0) { 
                    document.getElementById('le').style.display = ''; 
                   
                  } 
                  else{
                    document.getElementById('le').style.display = 'none'; 
                  }
                  
                }  
            </script>  
                </div>
           </div>
        
    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
        <div class="col-md-8 offset-md-1">
            <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿Se te ha diagnosticado alguna infección de transmisión sexual?</strong></p>
        </div>
        <div class="col-md-10 offset-md-1">
            <fieldset>
                <div class="custom-control custom-radio"><input onclick="mostrar1(0)" type="radio" id="customRadio81" class="custom-control-input" name="infeccion" value="Sí"><label class="custom-control-label" for="customRadio81" style="font-family: Roboto, sans-serif;">Sí</label></div>
                <div class="custom-control custom-radio"><input onclick="mostrar1(1)" type="radio" id="customRadio91" class="custom-control-input" name="infeccion" value="No"><label class="custom-control-label" for="customRadio91" style="font-family: Roboto, sans-serif;">No</label></div>
            </fieldset>
        
        
</div>
</div>
 <div id="dia" style="display:none" class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                    <div class="col-md-8 offset-md-1">
                        <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿Cuál?</strong></p>
                    </div>
                    <div class="col-md-10 offset-md-1">
                        <fieldset>
                            <div
                                class="custom-control custom-checkbox"><input name="f2[]" type="checkbox" id="customCheck34" class="custom-control-input" value="Sida (VIH)"><label class="custom-control-label" for="customCheck34" style="font-family: Roboto, sans-serif;">Sida (VIH)</label></div>
                            <div
                                class="custom-control custom-checkbox"><input name="f2[]" type="checkbox" id="customCheck44" class="custom-control-input" value="Virus del papiloma humano (VPH)"><label class="custom-control-label" for="customCheck44" style="font-family: Roboto, sans-serif;">Virus del papiloma humano (VPH)</label></div>
                    <div class="custom-control custom-checkbox"><input name="f2[]" type="checkbox" id="customCheck54" class="custom-control-input" value="Gonorrea"><label class="custom-control-label" for="customCheck54" style="font-family: Roboto, sans-serif;">Gonorrea</label>
                    </div>
                     <div
                         class="custom-control custom-checkbox"><input name="f2[]" type="checkbox" id="customCheck264" class="custom-control-input" value="Sifilis"><label class="custom-control-label" for="customCheck264" style="font-family: Roboto, sans-serif;">Sifilis</label></div>
                          <div
                                class="custom-control custom-checkbox"><input name="f2[]" type="checkbox" id="customCheck74" class="custom-control-input" value="Clamidia"><label class="custom-control-label" for="customCheck74" style="font-family: Roboto, sans-serif;">Clamidia</label></div>
                          <div
                                class="custom-control custom-checkbox"><input name="f2[]" type="checkbox" id="customCheck84" class="custom-control-input" value="Candidiasis (Hongo)"><label class="custom-control-label" for="customCheck84" style="font-family: Roboto, sans-serif;">Candidiasis (Hongo)</label></div>
                            <div
                                class="custom-control custom-checkbox"><input name="f2[]" type="checkbox" id="customCheck94" class="custom-control-input" value="Tricomoniasis"><label class="custom-control-label" for="customCheck94" style="font-family: Roboto, sans-serif;">Tricomoniasis</label></div>
                                <div
                                class="custom-control custom-checkbox"><input name="f2[]" type="checkbox" id="customCheck404" class="custom-control-input" value="Pediculosis en pubis (Piojos en genitales)"><label class="custom-control-label" for="customCheck404" style="font-family: Roboto, sans-serif;">Pediculosis en pubis (Piojos en genitales)</label></div>
                    </fieldset>
                      <script type="text/javascript">
                function mostrar1(num) { 
                  if(num==0) { 
                    document.getElementById('dia').style.display = ''; 
                   
                  } 
                  else{
                    document.getElementById('dia').style.display = 'none'; 
                  }
                  
                }  
            </script>
                </div>
           </div>
         
<div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
    <div class="col-md-8 offset-md-1">
        <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿Se le ha diagnosticado una infección de transmisión sexual a alguna de tus parejas sexuales ?</strong></p>
    </div>
    <div class="col-md-10 offset-md-1">
        <fieldset>
            <div class="custom-control custom-radio"><input onclick="mostrar2(0)" type="radio" id="customRadio11" class="custom-control-input" name="diagnosticado" value="Sí"><label class="custom-control-label" for="customRadio11" style="font-family: Roboto, sans-serif;">Sí</label></div>
            <div class="custom-control custom-radio"><input onclick="mostrar2(1)" type="radio" id="customRadio12" class="custom-control-input" name="diagnosticado" value="No"><label class="custom-control-label" for="customRadio12" style="font-family: Roboto, sans-serif;">No</label></div>
             <div class="custom-control custom-radio"><input onclick="mostrar2(1)" type="radio" id="customRadio13" class="custom-control-input" name="diagnosticado" value="No sé"><label class="custom-control-label" for="customRadio13" style="font-family: Roboto, sans-serif;">No sé</label></div>

        </fieldset>
          
</div>
</div>
 <div   id="pare" style="display:none" class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                    <div class="col-md-8 offset-md-1">
                        <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿Cuál?</strong></p>
                    </div>
                    <div class="col-md-10 offset-md-1">
                        <fieldset>
                            <div
                                class="custom-control custom-checkbox"><input name="f3[]" type="checkbox" id="customCheck340" class="custom-control-input" value="Sida (VIH)"><label class="custom-control-label" for="customCheck340" style="font-family: Roboto, sans-serif;">Sida (VIH)</label></div>
                            <div
                                class="custom-control custom-checkbox"><input name="f3[]" type="checkbox" id="customCheck440" class="custom-control-input" value="Virus del papiloma humano (VPH)"><label class="custom-control-label" for="customCheck440" style="font-family: Roboto, sans-serif;">Virus del papiloma humano (VPH)</label></div>
                    <div class="custom-control custom-checkbox"><input name="f3[]" type="checkbox" id="customCheck540" class="custom-control-input" value="Gonorrea"><label class="custom-control-label" for="customCheck540" style="font-family: Roboto, sans-serif;">Gonorrea</label>
                    </div>
                     <div
                         class="custom-control custom-checkbox"><input name="f3[]" type="checkbox" id="customCheck2640" class="custom-control-input" value="Sifilis"><label class="custom-control-label" for="customCheck2640" style="font-family: Roboto, sans-serif;">Sifilis</label></div>
                          <div
                                class="custom-control custom-checkbox"><input name="f3[]" type="checkbox" id="customCheck740" class="custom-control-input" value="Clamidia"><label class="custom-control-label" for="customCheck740" style="font-family: Roboto, sans-serif;">Clamidia</label></div>
                          <div
                                class="custom-control custom-checkbox"><input name="f3[]" type="checkbox" id="customCheck840" class="custom-control-input" value="Candidiasis (Hongo)"><label class="custom-control-label" for="customCheck840" style="font-family: Roboto, sans-serif;">Candidiasis (Hongo)</label></div>
                            <div
                                class="custom-control custom-checkbox"><input name="f3[]" type="checkbox" id="customCheck940" class="custom-control-input" value="Tricomoniasis"><label class="custom-control-label" for="customCheck940" style="font-family: Roboto, sans-serif;">Tricomoniasis</label></div>
                                <div
                                class="custom-control custom-checkbox"><input name="f3[]" type="checkbox" id="customCheck4040" class="custom-control-input" value="Pediculosis en pubis (Piojos en genitales)"><label class="custom-control-label" for="customCheck4040" style="font-family: Roboto, sans-serif;">Pediculosis en pubis (Piojos en genitales)</label></div>
                    </fieldset>
                    <script type="text/javascript">
                function mostrar2(num) { 
                  if(num==0) { 
                    document.getElementById('pare').style.display = ''; 
                   
                  } 
                  else{
                    document.getElementById('pare').style.display = 'none'; 
                  }
                  
                }  
            </script>
                </div>
           </div>
           
<div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
    <div class="col-md-8 offset-md-1">
        <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿Has tenido relaciones sexuales con personas sexoservidoras?</strong></p>
    </div>
    <div class="col-md-10 offset-md-1">
        <fieldset>
            <div class="custom-control custom-radio"><input onclick="mostrar3(0)" type="radio" id="customRadioS1" class="custom-control-input" name="prostis" value="Sí"><label class="custom-control-label" for="customRadioS1" style="font-family: Roboto, sans-serif;">Sí</label></div>
            <div class="custom-control custom-radio"><input onclick="mostrar3(1)" type="radio" id="customRadioS2" class="custom-control-input" name="prostis" value="No"><label class="custom-control-label" for="customRadioS2" style="font-family: Roboto, sans-serif;">No</label></div>
        </fieldset>
           
        <input name="f4" id="f4" style="display:none" class="form-control" type="text" style="margin-left:0px;font-family:Roboto, sans-serif;" for="customCheck18" placeholder="¿Cuantas?">
        <script type="text/javascript">
                function mostrar3(num) { 
                  if(num==0) { 
                    document.getElementById('f4').style.display = ''; 
                   
                  } 
                  else{
                    document.getElementById('f4').style.display = 'none'; 
                  }
                  
                }  
            </script>

        
    </div>
</div>
 
<div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
    <div   class="col-12 col-md-4 col-xl-4 offset-md-4 offset-xl-5"><button name="siguiente1" class="btn btn-light btn-lg" style="margin-left:16px;" type="submit">GUARDAR</button>
        <button     class="btn btn-light btn-lg" style="margin-left:16px;" type="submit">SIGUIENTE</button></div>

</div>
</div>
</div>


</form>
<iframe name="pp" style="position:absolute; top:-1500px;"></iframe> 
</div>
</div>
            </div>
            <div id="item-1-3" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-3-tab">
                <div class="container" style="margin-top: 25px;">
                    <div>
                        <form  method="post"  enctype="multipart/form-data" action="test.php" target="pp">
                            <div class="form-group">
                                <div class="border rounded" id="formdiv" style="background-color: #ffffff;">
                                    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                                        
                                        
                                </div>
                                <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                                    <div class="col-md-8 offset-md-1">
                                        <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿Conoces qué es la salud sexual masculina?</strong></p>
                                    </div>
                                    <div class="col-md-10 offset-md-1">
                                        <fieldset>
                                            <div class="custom-control custom-radio"><input onclick="mostrar9(0)"  type="radio" id="customRadio14" class="custom-control-input" name="salud" value="Sí"><label class="custom-control-label" for="customRadio14" style="font-family: Roboto, sans-serif;">Sí</label></div>
                                            <div
                                                class="custom-control custom-radio"><input onclick="mostrar9(1)"  type="radio" id="customRadio15" class="custom-control-input" name="salud" value="No"><label class="custom-control-label" for="customRadio15" style="font-family: Roboto, sans-serif;">No</label></div>
                                    
                                </fieldset>
                            </div>
                    </div>
                    <div id="con" style="display:none" class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                        <div   class="col-md-8 offset-md-1">
                            <p  class="text-justify" style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Indica cual o cuales opciones consideras que es la salud sexual masculina</strong></p>
                        </div>
                        <div  class="col-md-10 offset-md-1">
                            <fieldset>
                                <div  class="custom-control custom-checkbox"><input name="ind[]" type="checkbox" id="customCheck319" class="custom-control-input" value="Impotencia sexual"><label id="customCheck319" class="custom-control-label" for="customCheck319" style="font-family: Roboto, sans-serif;">Impotencia sexual</label></div>
                                <div
                                    class="custom-control custom-checkbox"><input name="ind[]" type="checkbox" id="customCheck316" class="custom-control-input" value="Eyaculación precoz"><label class="custom-control-label" for="customCheck316" style="font-family: Roboto, sans-serif;">Eyaculación precoz</label></div>
                                <div
                                    class="custom-control custom-checkbox"><input name="ind[]" type="checkbox" id="customCheck311" class="custom-control-input" value="Uso medicamentos o drogas para el mejor desempeño sexual"><label class="custom-control-label" for="customCheck311" style="font-family: Roboto, sans-serif;">Uso medicamentos o drogas para el mejor desempeño sexual</label></div>

                        <div class="custom-control custom-checkbox"><input name="ind[]" type="checkbox" id="customCheck312" class="custom-control-input" value="Cambios en el deseo sexual (Lívido)"><label class="custom-control-label" for="customCheck312" style="font-family: Roboto, sans-serif;">Cambios en el deseo sexual (Lívido)</label></div>
                        <div class="custom-control custom-checkbox"><input name="ind[]" type="checkbox" id="customCheck313" class="custom-control-input" value="Cáncer de tetículo"><label class="custom-control-label" for="customCheck313" style="font-family: Roboto, sans-serif;">Cáncer de testículo</label></div>
                        <div class="custom-control custom-checkbox"><input name="ind[]" type="checkbox" id="customCheck314" class="custom-control-input" value="Enfermedades de la próstata (hiperplasia postrática benigna, cáncer)"><label class="custom-control-label" for="customCheck314" style="font-family: Roboto, sans-serif;">Enfermedades de la próstata (Hiperplasia postrática benigna, cáncer)</label></div>
                            <div class="custom-control custom-checkbox"><input name="ind[]" type="checkbox" id="customCheck315" class="custom-control-input" value="Infecciones de transmisión sexual (sida, VIH,VPH)"><label class="custom-control-label" for="customCheck315" style="font-family: Roboto, sans-serif;">Infecciones de transmisión sexual (Sida, VIH,VPH)</label></div>
                             <div class="custom-control custom-checkbox"><input name="ind[]" type="checkbox" id="customCheck3190" class="custom-control-input" value="Uso del preservativo"><label class="custom-control-label" for="customCheck3190" style="font-family: Roboto, sans-serif;">Uso del preservativo</label></div>
                             <div class="custom-control custom-checkbox"><input name="ind[]" type="checkbox" id="customCheck317" class="custom-control-input" value="Infertilidad masculina"><label class="custom-control-label" for="customCheck317" style="font-family: Roboto, sans-serif;">Infertilidad masculina</label></div>
                             <div class="custom-control custom-checkbox"><input name="ind[]" type="checkbox" id="customCheck318" class="custom-control-input" value="Detección de niveles de la hormona testosterona"><label class="custom-control-label" for="customCheck318" style="font-family: Roboto, sans-serif;">Detección de niveles la de hormona testosterona</label></div>
                    </fieldset>

                    <script type="text/javascript">
                        function mostrar9(num) { 
                          if(num==0) { 
                            document.getElementById('con').style.display = ''; 
                           
                          } 
                          else{
                            document.getElementById('con').style.display = 'none'; 
                          }
                          
                        }  
                    </script>
                </div>
                </div>
                    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                        <div class="col-md-8 offset-md-1">
                            <p class="text-justify" style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿En donde has recibido información acerca de temas de salud sexual masculina?</strong></p>
                        </div>
                        <div class="col-md-10 offset-md-1">
                            <fieldset>
                                <div class="custom-control custom-checkbox"><input name="temas[]" type="checkbox" id="customCheck206" class="custom-control-input" value="Familia"><label id="customCheck206" class="custom-control-label" for="customCheck206" style="font-family: Roboto, sans-serif;">Familia</label></div>
                                <div
                                    class="custom-control custom-checkbox"><input name="temas[]" type="checkbox" id="customCheck27" class="custom-control-input" value="Amigos"><label class="custom-control-label" for="customCheck27" style="font-family: Roboto, sans-serif;">Amigos</label></div>
                        <div class="custom-control custom-checkbox"><input type="checkbox" id="customCheck28" class="custom-control-input" value="Profesores"><label class="custom-control-label" for="customCheck28" style="font-family: Roboto, sans-serif;">Profesores</label></div>
                        <div class="custom-control custom-checkbox"><input name="temas[]" type="checkbox" id="customCheck29" class="custom-control-input" value="Profesionales de la salud"><label class="custom-control-label" for="customCheck29" style="font-family: Roboto, sans-serif;">Profesionales de la salud</label></div>
                        <div
                            class="custom-control custom-checkbox"><input name="temas[]" type="checkbox" id="customCheck30" class="custom-control-input" value="Redes sociales"><label class="custom-control-label" for="customCheck30" style="font-family: Roboto, sans-serif;">Redes sociales</label></div>
                    <div
                        class="custom-control custom-checkbox"><input name="temas[]" type="checkbox" id="customCheck31" class="custom-control-input" value="Libros"><label class="custom-control-label" for="customCheck31" style="font-family: Roboto, sans-serif;">Libros</label></div>
                <div class="custom-control custom-checkbox"><input name="temas[]" type="checkbox" id="customCheck32" class="custom-control-input" value="Folletos"><label class="custom-control-label" for="customCheck32" style="font-family: Roboto, sans-serif;">Folletos</label></div>
                <div class="custom-control custom-checkbox"><input name="temas[]" type="checkbox" id="customCheck33" class="custom-control-input" value="Medios de comunicacion"><label class="custom-control-label" for="customCheck33" style="font-family: Roboto, sans-serif;">Medios de comunicación</label></div>
                <div
                    class="custom-control custom-checkbox"><input name="otro5" class="form-control" type="text" style="margin-left:0px;font-family:Roboto, sans-serif;" for="customCheck18" placeholder="Otro (Especifique)"></div>
            </fieldset>
        </div>
    </div>
    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
        
    </div>
    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
       
    </div>
    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
        <div class="col-md-8 offset-md-1">
            <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿Sabes con quién acudir si tienes una alteración de salud sexual masculina?</strong></p>
        </div>
        <div class="col-md-10 offset-md-1">
            <fieldset>
                <div class="custom-control custom-radio"><input onclick="mostrar4(0)" type="radio" id="customRadio151" class="custom-control-input" name="conquien" value="Sí"><label class="custom-control-label" for="customRadio151" style="font-family: Roboto, sans-serif;">Sí</label></div>
                <div class="custom-control custom-radio"><input onclick="mostrar4(1)" type="radio" id="customRadio152" class="custom-control-input" name="conquien" value="No"><label class="custom-control-label" for="customRadio152" style="font-family: Roboto, sans-serif;">No</label></div>
               
            </fieldset>

        </div>
    </div>
    <div id="acu" style="display:none" class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                        <div   class="col-md-8 offset-md-1">
                            <p  class="text-justify" style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿Con quién?</strong></p>
                        </div>
                        <div  class="col-md-10 offset-md-1">
                            <fieldset>
                                <div  class="custom-control custom-checkbox"><input name="f5[]" type="checkbox" id="customCheck4100" class="custom-control-input" value="Profesionales de la salud"><label id="customCheck4100" class="custom-control-label" for="customCheck4100" style="font-family: Roboto, sans-serif;">Profesionales de la salud</label></div>
                                <div
                                    class="custom-control custom-checkbox"><input name="f5[]" type="checkbox" id="customCheck416" class="custom-control-input" value="Familiares"><label class="custom-control-label" for="customCheck416" style="font-family: Roboto, sans-serif;">Familiares</label></div>
                                <div
                                    class="custom-control custom-checkbox"><input name="f5[]" type="checkbox" id="customCheck411" class="custom-control-input" value="Amigos"><label class="custom-control-label" for="customCheck411" style="font-family: Roboto, sans-serif;">Amigos</label></div>

                        <div class="custom-control custom-checkbox"><input name="f5[]" type="checkbox" id="customCheck412" class="custom-control-input" value="Profesores"><label class="custom-control-label" for="customCheck412" style="font-family: Roboto, sans-serif;">Profesores</label></div>
                        
                     
                    </fieldset>

                    <script type="text/javascript">
                        function mostrar4(num) { 
                          if(num==0) { 
                            document.getElementById('acu').style.display = ''; 
                           
                          } 
                          else{
                            document.getElementById('acu').style.display = 'none'; 
                          }
                          
                        }  
                    </script>
                </div>
                </div>
    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
        <div class="col-md-8 offset-md-1">
            <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿Conoces algún lugar donde te puedan orientar en tu salud sexual masculina?</strong></p>
        </div>
        <div class="col-md-10 offset-md-1">
            <fieldset>
                <div class="custom-control custom-radio"><input onclick="mostrar5(0)" type="radio" id="customRadio161" class="custom-control-input" name="lugar" value="Sí"><label class="custom-control-label" for="customRadio161" style="font-family: Roboto, sans-serif;">Sí</label></div>
                <div class="custom-control custom-radio"><input  onclick="mostrar5(1)" type="radio" id="customRadio162" class="custom-control-input" name="lugar" value="No"><label class="custom-control-label" for="customRadio162" style="font-family: Roboto, sans-serif;">No</label></div>
               
            </fieldset>

            
        </div>
    </div>
    <div id="lug" style="display:none" class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                        <div   class="col-md-8 offset-md-1">
                            <p  class="text-justify" style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿Dónde?</strong></p>
                        </div>
                        <div  class="col-md-10 offset-md-1">
                            <fieldset>
                                <div  class="custom-control custom-checkbox"><input name="f6[]" type="checkbox" id="customCheck519" class="custom-control-input" value="Centro de salid"><label id="customCheck519" class="custom-control-label" for="customCheck519" style="font-family: Roboto, sans-serif;">Centro de salud </label></div>
                                 <div  class="custom-control custom-checkbox"><input name="f6[]" type="checkbox" id="customCheck520" class="custom-control-input" value="Instituto de Seguridad y Servicios Sociales de los Trabajadores del Estado  (ISSSTE)"><label id="customCheck520" class="custom-control-label" for="customCheck520" style="font-family: Roboto, sans-serif;"> Instituto de Seguridad y Servicios Sociales de los Trabajadores del Estado (ISSSTE)</label></div>
                                <div
                                    class="custom-control custom-checkbox"><input name="f6[]" type="checkbox" id="customCheck516" class="custom-control-input" value="Instituto mexicano del seguro social (IMSS)"><label class="custom-control-label" for="customCheck516" style="font-family: Roboto, sans-serif;">Instituto Mexicano del Seguro Social (IMSS)</label></div>
                                <div
                                    class="custom-control custom-checkbox"><input name="f6[]" type="checkbox" id="customCheck511" class="custom-control-input" value="Médico particular"><label class="custom-control-label" for="customCheck511" style="font-family: Roboto, sans-serif;">Médico particular</label>
                               </div>
                                <div class="custom-control custom-checkbox"><input name="f6[]" type="checkbox" id="customCheck413" class="custom-control-input" value="Consulta por internet"><label class="custom-control-label" for="customCheck413" style="font-family: Roboto, sans-serif;">Consulta por internet</label>
                            </div>

                        <div class="custom-control custom-checkbox"><input name="f6[]" type="checkbox" id="customCheck512" class="custom-control-input" value="Clínica de intituto de investigación científica de la UJED"><label class="custom-control-label" for="customCheck512" style="font-family: Roboto, sans-serif;">Clínica de intituto de investigación científica de la UJED</label></div>
                       
                     
                    </fieldset>

                    <script type="text/javascript">
                        function mostrar5(num) { 
                          if(num==0) { 
                            document.getElementById('lug').style.display = ''; 
                           
                          } 
                          else{
                            document.getElementById('lug').style.display = 'none'; 
                          }
                          
                        }  
                    </script>
                </div>
                </div>
    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
        <div class="col-md-8 offset-md-1">
            <p class="text-justify" style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿Conoces alguna de estas pruebas que identifique infección de transmisión sexual?</strong></p>
        </div>
        <div class="col-md-10 offset-md-1">
            <fieldset>
                
                <div
                    class="custom-control custom-checkbox"><input name="pruebas[]" type="checkbox" id="customCheck201" class="custom-control-input" value="Prueba del sida (VIH)"><label class="custom-control-label" for="customCheck201" style="font-family: Roboto, sans-serif;">Prueba del sida (VIH)</label></div>
        <div class="custom-control custom-checkbox"><input name="pruebas[]" type="checkbox" id="customCheck202" class="custom-control-input" value="Prueba de sífilis (VDRL)"><label class="custom-control-label" for="customCheck202" style="font-family: Roboto, sans-serif;">Prueba de sífilis (VDRL)</label></div>
        <div class="custom-control custom-checkbox"><input name="pruebas[]" type="checkbox" id="customCheck200" class="custom-control-input" value="Androscopía"><label id="customCheck200" class="custom-control-label" for="customCheck200" style="font-family: Roboto, sans-serif;">Androscopía</label></div>
        <div class="custom-control custom-checkbox"><input name="pruebas[]" type="checkbox" id="customCheck203" class="custom-control-input" value="Cultivo uretral"><label class="custom-control-label" for="customCheck203" style="font-family: Roboto, sans-serif;">Cultivo uretral</label></div>
        <div class="custom-control custom-checkbox"><input name="pruebas[]" type="checkbox" id="customCheck204" class="custom-control-input" value="Pruebas moleculares"><label id="customCheck204" class="custom-control-label" for="customCheck204" style="font-family: Roboto, sans-serif;">Pruebas moleculares</label></div>

        <div class="custom-control custom-checkbox"><input name="pruebas[]" type="checkbox" id="customCheck204" class="custom-control-input" value="Ninguna"><label id="customCheck205" class="custom-control-label" for="customCheck205" style="font-family: Roboto, sans-serif;">Ninguna</label></div>
        
    <div class="custom-control custom-checkbox"><input name="otro6" class="form-control" type="text" style="margin-left:0px;font-family:Roboto, sans-serif;" for="customCheck18" placeholder="Otro (Especifique)"></div>
    </fieldset>
</div>
</div>
<div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
    <div class="col-12 col-md-4 col-xl-4 offset-md-4 offset-xl-5"><button name="siguiente2" class="btn btn-light btn-lg" style="margin-left:16px;" type="submit">GUARDAR</button><button  class="btn btn-light btn-lg" style="margin-left:16px;" type="submit">SIGUIENTE</button></div>
</div>
</div>
</div>
</form>
<iframe name="pp" style="position:absolute; top:-1500px;"></iframe> 
</div>
</div>
            </div>
            <div id="item-1-4" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-3-tab">
                <div class="container" style="margin-top: 25px;">
                    <div>
                        <form  method="post"  enctype="multipart/form-data" action="test.php" target="pp">
                            <div class="form-group">
                                <div class="border rounded" id="formdiv" style="background-color: #ffffff;">
                                    <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                                        <div class="col-md-8 offset-md-1">
                                            <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿Consumes bebidas alcohólicas?</strong></p>
                                        </div>
                                        <div class="col-md-10 offset-md-1">
                                            <fieldset>
                                                <div class="custom-control custom-radio"><input onclick="mostrar6(0)" type="radio" id="Radio12" class="custom-control-input" name="bebidas" value="Sí"><label class="custom-control-label" for="Radio12" style="font-family: Roboto, sans-serif;">Sí</label></div>
                                                <div
                                                    class="custom-control custom-radio"><input onclick="mostrar6(1)" type="radio" id="customRadio139" class="custom-control-input" name="bebidas" value="No"><label class="custom-control-label" for="customRadio139" style="font-family: Roboto, sans-serif;">No</label></div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div id="fre" style="display:none" class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                                    <div class="col-md-8 offset-md-1">
                                        <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿Con qué frecuencia consumes bebidas alcohólicas?</strong></p>
                                    </div>
                                    <div class="col-md-10 offset-md-1"><select name="frecuencia2" class="form-control" style="font-family:Roboto, sans-serif;" required=""><option value="0">Seleccione una opción</option><option value="Diario">Diario</option><option value="Semanal">Semanal</option><option value="Mensual">Mensual</option><option value="Ocasional">Ocasional</option></select></div>
                                    <script type="text/javascript">
                                        function mostrar6(num) { 
                                          if(num==0) { 
                                            document.getElementById('fre').style.display = ''; 
                                           
                                          } 
                                          else{
                                            document.getElementById('fre').style.display = 'none'; 
                                          }
                                          
                                        }  
                                    </script>
                                </div>
                                <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                                    <div class="col-md-8 offset-md-1">
                                        <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿Consumes cigarros de tabaco?</strong></p>
                                    </div>
                                    <div class="col-md-10 offset-md-1">
                                        <fieldset>
                                            <div class="custom-control custom-radio"><input onclick="mostrar7(0)" type="radio" id="customRadio121" class="custom-control-input" name="cigarros" value="Sí"><label class="custom-control-label" for="customRadio121" style="font-family: Roboto, sans-serif;">Sí</label></div>
                                            <div
                                                class="custom-control custom-radio"><input onclick="mostrar7(1)" type="radio" id="customRadio131" class="custom-control-input" name="cigarros" value="No"><label class="custom-control-label" for="customRadio131" style="font-family: Roboto, sans-serif;">No</label></div>
                                    </fieldset>
                                </div>
                            </div>
                            <div id="tab" style="display:none" class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                                <div class="col-md-8 offset-md-1">
                                    <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿Con qué frecuencia consumes cigarros de tabaco?</strong></p>
                                </div>
                                <div class="col-md-10 offset-md-1"><select name="fcigarros" class="form-control" style="font-family:Roboto, sans-serif;" required=""><option value="0">Seleccione una opción</option><option value="Leve0 (1 a 5 cigarrillos diarios)">Leve (1 a 5 cigarrillos diarios)</option><option value="Moderado (6 a 9 cigarrillos diarios)" >Moderado (6 a 9 cigarrillos diarios)</option><option value="Intenso (10 o mas cigarrillos diarios)">Severo (10 o mas cigarrillos diarios)</option></select></div>
                                 <script type="text/javascript">
                                        function mostrar7(num) { 
                                          if(num==0) { 
                                            document.getElementById('tab').style.display = ''; 
                                           
                                          } 
                                          else{
                                            document.getElementById('tab').style.display = 'none'; 
                                          }
                                          
                                        }  
                                    </script>
                            </div>
                            <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                                <div class="col-md-8 offset-md-1">
                                    <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿Consumes alguna droga?</strong></p>
                                </div>
                                <div class="col-md-10 offset-md-1">
                                    <fieldset>
                                        <div class="custom-control custom-radio"><input onclick="mostrar8(0)" type="radio" id="customRadio142" class="custom-control-input" name="droga" value="Sí"><label class="custom-control-label" for="customRadio142" style="font-family: Roboto, sans-serif;">Sí</label></div>
                                        <div
                                            class="custom-control custom-radio"><input onclick="mostrar8(1)" type="radio" id="Radio152" class="custom-control-input" name="droga" value="No"><label class="custom-control-label" for="Radio152" style="font-family: Roboto, sans-serif;">No</label></div>
                                
                            </fieldset>
                    </div>
                </div>
                  <div id="dro" style="display:none" class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                        <div   class="col-md-8 offset-md-1">
                            <p  class="text-justify" style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>¿Cuál?</strong></p>
                        </div>
                        <div  class="col-md-10 offset-md-1">
                            <fieldset>
                                <div  class="custom-control custom-checkbox"><input name="cual[]" type="checkbox" id="customCheck210" class="custom-control-input" value="Marihuana"><label id="customCheck210" class="custom-control-label" for="customCheck210" style="font-family: Roboto, sans-serif;">Marihuana</label></div>
                                <div
                                    class="custom-control custom-checkbox"><input name="cual[]" type="checkbox" id="customCheck216" class="custom-control-input" value="Cocaína"><label class="custom-control-label" for="customCheck216" style="font-family: Roboto, sans-serif;">Cocaína</label></div>
                                <div
                                    class="custom-control custom-checkbox"><input name="cual[]" type="checkbox" id="customCheck211" class="custom-control-input" value="Éxtasis"><label class="custom-control-label" for="customCheck211" style="font-family: Roboto, sans-serif;">Éxtasis</label></div>

                        <div class="custom-control custom-checkbox"><input name="cual[]" type="checkbox" id="customCheck212" class="custom-control-input" value="Heroína"><label class="custom-control-label" for="customCheck212" style="font-family: Roboto, sans-serif;">Heroína</label></div>
                        <div class="custom-control custom-checkbox"><input name="cual[]" type="checkbox" id="customCheck213" class="custom-control-input" value="Anfetaminas"><label class="custom-control-label" for="customCheck213" style="font-family: Roboto, sans-serif;">Anfetaminas</label></div>
                        <div class="custom-control custom-checkbox"><input name="cual[]" type="checkbox" id="customCheck214" class="custom-control-input" value="LSD"><label class="custom-control-label" for="customCheck214" style="font-family: Roboto, sans-serif;">LSD</label></div>
                            <div class="custom-control custom-checkbox"><input name="cual[]" type="checkbox" id="customCheck215" class="custom-control-input" value="Cristal"><label class="custom-control-label" for="customCheck215" style="font-family: Roboto, sans-serif;">Cristal</label></div>
                             <div class="custom-control custom-checkbox"><input name="cual[]" type="checkbox" id="customCheck219" class="custom-control-input" value="Sildenafilo (Viagra)"><label class="custom-control-label" for="customCheck219" style="font-family: Roboto, sans-serif;">Sildenafilo (Viagra)</label></div>
                             <div class="custom-control custom-checkbox"><input name="cual[]" type="checkbox" id="customCheck217" class="custom-control-input" value="Vardenafilo (Levitra, Staxyn)"><label class="custom-control-label" for="customCheck217" style="font-family: Roboto, sans-serif;">Vardenafilo (Levitra, Staxyn)</label></div>
                             <div class="custom-control custom-checkbox"><input name="cual[]" type="checkbox" id="customCheck218" class="custom-control-input" value="Tadalafilo (Cialis)"><label class="custom-control-label" for="customCheck218" style="font-family: Roboto, sans-serif;">Tadalafilo (Cialis)</label></div>
                             <div class="custom-control custom-checkbox"><input name="cual[]" type="checkbox" id="customCheck221" class="custom-control-input" value="Poppers"><label class="custom-control-label" for="customCheck221" style="font-family: Roboto, sans-serif;">Poppers</label></div>
                        
                    <div class="custom-control custom-checkbox"><input name="otro7" class="form-control" type="text" style="margin-left:0px;font-family:Roboto, sans-serif;" for="customCheck19" placeholder="Otro (Especifique)"></div>
                    </fieldset>

                    <script type="text/javascript">
                        function mostrar8(num) { 
                          if(num==0) { 
                            document.getElementById('dro').style.display = ''; 
                           
                          } 
                          else{
                            document.getElementById('dro').style.display = 'none'; 
                          }
                          
                        }  
                    </script>
                </div>
                </div>
                <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                    <div class="col-12 col-md-4 col-xl-4 offset-md-4 offset-xl-5"><button  name="siguiente3" class="btn btn-light btn-lg" style="margin-left:16px;" type="submit">GUARDAR</button><button class="btn btn-light btn-lg" style="margin-left:16px;" type="submit">SIGUIENTE</button></div>
                </div>
            </div>
        </div>
        </form>
        <iframe name="pp" style="position:absolute; top:-1500px;"></iframe> 
    </div>
</div>
</div>
            </div>
        </div>
    </div>
    </div>
     <script type="text/javascript">
        //definir las variables correspondientes
        var opt_ELe=new Array("Licenciado en Docencia de Lengua Inglesa");
        var opt_EPEA=new Array("Técnico Superior Universitario en Diseño y Producción Artesanal","Licenciado en Artes Visuales y Plásticas");
        var opt_ESM=new Array("Licenciado en Educación Musical y Expresión Artística","Licenciado en Música con Orientación en Instrumento");
        var opt_FADERYCIPOL=new Array("Licenciado en Ciencias Políticas","Licenciado en Derecho");
        var opt_FAEO=new Array("Licenciatura en Enfermería");
        var opt_FAMEN=new Array("Licenciado en Nutrición","Médico Cirujano");
        var opt_FAOD=new Array("Cirujano Dentista");
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
            facu= document.test.facu[document.test.facu.selectedIndex].value;
            //se chequea si los "hijos" esta definido
            if (facu!=0) {
                //seleccionamos las cosas correctas
                mis_opts=eval("opt_"+ facu);
                //se calcula el numero de cosas 
                num_opts= mis_opts.length;
                //marco el numero de opt en el select
                document.test.carrera.length=num_opts;
                //para cada opt del array, la pongo en el select
                for(i=0;i<num_opts;i++){
                    document.test.carrera.options[i].value=mis_opts[i];
                    document.test.carrera.options[i].text=mis_opts[i];
                }
            } else {
                //si no havia ningun opt seleccionada, elimino las cosas del select
                document.test.carrera.length= 1;
                //ponemos un 0 en la unica opt que he dejado
                document.test.carrera.options[0].value= "0";
                document.test.carrera.options[0].text= "Selecciona tu carrera";
            }

            //hacer un reset de las opts
            document.test.carrera.options[0].selected= true;
        }



      
    </script>
   
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
     
</body>

</html>