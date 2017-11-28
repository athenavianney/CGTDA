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

	<!--LOGIN-->

	<div class="container py-5">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="row">
	                <div class="col-md-6 mx-auto">
	                    <span class="anchor" id="formLogin"></span>

	                    <!-- form card login -->
	                    <div class="card rounded-0">
	                        <div class="card-header">
	                            <h3 class="mb-0">Login</h3>
	                        </div>
	                        <div class="card-body">
	                            <form class="form" role="form" autocomplete="off" id="formLogin">
	                                <div class="form-group">
	                                    <label for="uname1">Username</label>
	                                    <input type="text" class="form-control form-control-lg rounded-0" name="uname1" id="uname1" required="">
	                                </div>
	                                <div class="form-group">
	                                    <label>Password</label>
	                                    <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" required="" autocomplete="new-password">
	                                </div>
	                                <button type="button" class="btn btn-success btn-lg float-right">Login</button>
	                            </form>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	</body>
</html>