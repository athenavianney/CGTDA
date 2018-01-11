<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cgtda";
	$conn = mysqli_connect($servername,$username,$password) or die("No se pudo autentificar con la Base de Datos. ");
	mysqli_select_db($conn,$dbname)  or die ("No se pudo conectar a la Base de Datos. ");

	if($conn){
		echo"Conectado";
	}
?>