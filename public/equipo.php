<?php
	include "../datosConexion.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CGTDA</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
	</head>
	<body>
    <!-- Nav bar -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
      <!-- Brand -->
      <a class="navbar-brand" href="../index.php">CGTDA</a>
      <!-- Links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Inicio</a>
        </li>    
        <!-- Dropdown Algoritmos -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="algoritmos.php" id="navbardrop" data-toggle="dropdown">Algoritmos </a>
          <div class="dropdown-menu">
            <?php
              $path = "SELECT * FROM categoria";
              $result = $conn->query($path);
              echo "<a class='dropdown-item' href=algoritmos.php?id=todos>Todos</a>";
              while ($row = $result->fetch_assoc()) {
                $idc = $row["Id"];
                $cat = $row["nombre"];
                  echo "<a class='dropdown-item' href=algoritmos.php?id=$idc>".$cat."</a>";
              }
            ?>
          </div>
        </li>
        <!-- Dropdown Artículos -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="articulos.php" id="navbardrop" data-toggle="dropdown"> Artículos </a>
          <div class="dropdown-menu">
            <?php
              $path = "SELECT * FROM categoria";
              $result = $conn->query($path);
              echo "<a class='dropdown-item' href=articulos.php?id=todos>Todos</a>";
              while ($row = $result->fetch_assoc()) {
                $idc = $row["Id"];
                $cat = $row["nombre"];
                  echo "<a class='dropdown-item' href=articulos.php?id=$idc>".$cat."</a>";
              }
            ?>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="equipo.php">Equipo</a>
        </li>
        <!-- Iniciar sesión -->
        <li class="nav-item">
          <a class="nav-link" href="../login.html">Iniciar sesión</a>
        </li>  
      </ul>
    </nav>

    <br>
    <div class="container">
      <div class="row">
        <?php
          $path = "SELECT * FROM equipo";
          $result = $conn->query($path);
          while ($row = $result->fetch_assoc()) {
            echo "<br> ". $row["nombre"]. " <br> " . $row["estudio"]. " <br> " . $row["correo"]." <br> " . $row["informacion"]. "<br>";
          }
        ?>
    </div>		

	</body>
</html>

