<?php   
	include "datosConexionAdmin.php";
	
	if(empty($_SESSION['user'])){
	  header('Location: ../login.html');
	}
	
	session_destroy();
    header("Location: ../login.html");
    exit();
?>