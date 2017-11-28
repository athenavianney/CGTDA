<?php
  include "datosConexion.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CGTDA</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
	<!-- Nav bar -->
	
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
	  <!-- Brand -->
	  <a class="navbar-brand" href="#">CGTDA</a>

	  <!-- Links -->
	  <ul class="navbar-nav ml-auto">
	    <li class="nav-item">
	      <a class="nav-link" href="#">Inicio</a>
	    </li>

	   <!-- Dropdown Algoritmos -->
	    <li class="nav-item dropdown">
	      <a class="nav-link dropdown-toggle" href="html/algoritmos.html" id="navbardrop" data-toggle="dropdown">
	        Algoritmos
	      </a>
	      <div class="dropdown-menu">
	        <a class="dropdown-item" href="html/algoritmos.html">Todos</a>
	        <a class="dropdown-item" href="#">B</a>
	        <a class="dropdown-item" href="#">C</a>
	      </div>
	    </li>

	    <!-- Dropdown Articulos-->
	    <li class="nav-item dropdown">
	      <a class="nav-link dropdown-toggle" href="html/articulos.html" id="navbardrop" data-toggle="dropdown">
	        Artículos
	      </a>
	      <div class="dropdown-menu">
	        <a class="dropdown-item" href="html/articulos.html">Todos</a>
	        <a class="dropdown-item" href="#">B</a>
	        <a class="dropdown-item" href="#">C</a>
	      </div>
	    </li>

	    <li class="nav-item">
	      <a class="nav-link" href="html/equipo.html">Equipo</a>
	    </li>
	  </ul>
	</nav>


	<!--Carousel Images-->

	<div id="demo" class="carousel slide" data-ride="carousel">

	  <!-- Indicators -->
	  <ul class="carousel-indicators">
	    <li data-target="#demo" data-slide-to="0" class="active"></li>
	    <li data-target="#demo" data-slide-to="1"></li>
	    <li data-target="#demo" data-slide-to="2"></li>
	  </ul>
	  
	  <!-- The slideshow --> 
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="img/img1.jpg" width="100%" height="500">
	    </div>
	    <div class="carousel-item">
	      <img src="img/img2.jpg" width="100%" height="500">
	    </div>
	    <div class="carousel-item">
	      <img src="img/img3.jpg" width="100%" height="500">
	    </div>
	  </div>
	  
	  <!-- Left and right controls -->
	  <a class="carousel-control-prev" href="#demo" data-slide="prev">
	    <span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#demo" data-slide="next">
	    <span class="carousel-control-next-icon"></span>
	  </a>
	</div>


	<?php
        $id = $_GET['1'];
        if(! $conexion ) {
        die('no se pudo conectar a la base de datos');
    }
    $path = "SELECT * FROM index WHERE id='1'";
    if($result=$conexion->query($path) ){
        echo "<table> <tr> <th> NOMBRE </th> <th> FECHA DE NACIMIENTO </th> <th> TELÉFONO </th> <th> ANTECEDENTES </th></tr> ";
        if($row=$result->fetch_assoc()){
            echo "<tr> <td>" . $row['titulo'] . "</td>";
            echo "<td>" . $row['introduccion'] . "</td></tr>";
        }
        mysqli_free_result($result);
        }                                    
    ?>


	<div class="container">
		<p class="font-weight-normal">Sobre CGTDA</p>
  		<p class="font-weight-light">Informacion</p>
  	</div>
  	<br>
  	<br>
	</body>
</html>