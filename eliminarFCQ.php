<?php 

	 $DBHost="saludsexual.proyectosutd.com";
        $DBUser="proyec23_ussex";
        $DBPass="31852963";
        $DBNom="proyec23_saludsexual";
             

	// Create connection
	$conn = new mysqli($DBHost, $DBUser, $DBPass, $DBNom);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$id = $_REQUEST['id'];

	$query = "DELETE FROM `student` WHERE `student`.`id`=$id";
	$query2= "DELETE FROM `data` WHERE `student_id`=$id";
	
	$resultado2 = $conn->query($query2);
	$resultado = $conn->query($query);

	if ($resultado) {
			header("Location: resultadosFCQ.php");
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

	$conn->close();

 ?>