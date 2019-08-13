<?php
        $DBHost="saludsexual.proyectosutd.com";
        $DBUser="proyec23_ussex";
        $DBPass="31852963";
        $DBNom="proyec23_saludsexual";
        //$DBHost="localhost";
        //$DBUser="root";
        //$DBPass="admin";
        //$DBNom="saludsexual";
 
       $db=mysqli_connect($DBHost, $DBUser, $DBPass, $DBNom) or die ("Sin establecer conexion!!");
       $acentos = $db->query("SET NAMES 'utf8'");
?>