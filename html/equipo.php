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
		<style>
			html {
			  box-sizing: border-box;
			}

			*, *:before, *:after {
			  box-sizing: inherit;
			}

			.column {
			  float: left;
			  width: 33.3%;
			  margin-bottom: 16px;
			  padding: 0 8px;
			}

			@media (max-width: 650px) {
			  .column {
			    width: 100%;
			    display: block;
			  }
			}

			.card {
			  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			}

			.container {
			  padding: 0 16px;
			}

			.container::after, .row::after {
			  content: "";
			  clear: both;
			  display: table;
			}

			.title {
			  color: grey;
			}

			.button {
			  border: none;
			  outline: 0;
			  display: inline-block;
			  padding: 8px;
			  color: white;
			  background-color: #000;
			  text-align: center;
			  cursor: pointer;
			  width: 100%;
			}

			.button:hover {
			  background-color: #555;
			}
			</style>
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


	<!-- Equipo -->
	<br>
	<div class="row">
		<!-- POR CADA INTEGRANTE-->
	  <div class="column">
	    <div class="card">
	      <img src="../img/icon.ico" alt="Jane" style="width:70%">
	      <div class="container">
	        <h2>Jane Doe</h2>
	        <p class="title">CEO & Founder</p>
	        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
	        <p>example@example.com</p>
	        <p><button class="button">Contact</button></p>
	      </div>
	    </div>
	  </div>
	   
	</div>




	</body>
</html>