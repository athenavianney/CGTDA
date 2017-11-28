<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CGTDA</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
	</head>
	<body>

<!-- Nav bar -->
	
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
	  <!-- Brand -->
	  <a class="navbar-brand" href="#">CGTDA</a>

	  <!-- Links -->
	  <ul class="navbar-nav ml-auto">
	    <li class="nav-item">
	      <a class="nav-link" href="index.php">Inicio</a>
	    </li>

	   <!-- Dropdown Algoritmos -->
	    <li class="nav-item dropdown">
	      <a class="nav-link dropdown-toggle" href="algoritmos.php" id="navbardrop" data-toggle="dropdown">
	        Algoritmos
	      </a>
	      <div class="dropdown-menu">
	        <a class="dropdown-item" href="algoritmos.php">Todos</a>
	        <a class="dropdown-item" href="#">B</a>
	        <a class="dropdown-item" href="#">C</a>
	      </div>
	    </li>

	    <!-- Dropdown Articulos-->
	    <li class="nav-item dropdown">
	      <a class="nav-link dropdown-toggle" href="articulos.php" id="navbardrop" data-toggle="dropdown">
	        Artículos
	      </a>
	      <div class="dropdown-menu">
	        <a class="dropdown-item" href="articulos.php">Todos</a>
	        <a class="dropdown-item" href="#">B</a>
	        <a class="dropdown-item" href="#">C</a>
	      </div>
	    </li>

	    <li class="nav-item">
	      <a class="nav-link" href="equipo.php">Equipo</a>
	    </li>
	  </ul>
	</nav>


	<!-- PARA TODOS LOS ALGORITMOS DE LA BASE DE DATOS BLA BLA -->
	<br>
	<div class="container">
    <div class="row">
        <div class="col-md-7">
        	<h4>Título</h4>
            <p>Breve introducción sobre lo que hablará el algoritmo, bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
        </div>
        <div class="col-md-2">
        	<p class="font-weight-normal">Autor/Autores</p>
  			<p class="font-weight-light">Nombres</p>  			
        </div>
        <div class="col-md-2">
  			<p class="font-weight-normal">Fecha de publicación</p>
  			<p class="font-weight-light">00/00/0000</p>
        </div>
        <div class="col-md-0">
        	<p class="font-weight-normal">Descargar</p>
  			<a href="index.php"> <i class="fa fa-download" aria-hidden="true"></i>
        </div>
    </div>
</div>


	</body>
</html>