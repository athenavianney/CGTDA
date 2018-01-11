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
      </ul>
    </nav>

    <br> 
    <div class="container">
      <div class="row">
        <?php
          $id = $_GET['id'];
          if($id=="todos"){
            $path = "SELECT * FROM articulo";
          }else{   
            $path = "SELECT * FROM articulo WHERE id_categoria='$id'";
          }
          $result = $conn->query($path);
          while ($row = $result->fetch_assoc()) {
            echo "
            <div class='col-md-7'>
              <h4>$row[titulo]</h4>
                <p>$row[introduccion]</p>
            </div>";

            echo "
            <div class='col-md-2'>
              <p class='font-weight-normal'>Autor/Autores</p>
            <p class='font-weight-light'>$row[colaboradores]</p>        
            </div>";

            echo "
            <div class='col-md-2'>
              <p class='font-weight-normal'>Fecha de publicación</p>
            <p class='font-weight-light'>$row[fecha]</p>        
            </div>";

            echo"
            <div class='col-md-0'>
              <p class='font-weight-normal'>Descargar</p>
            </div>";
          }
        ?>
    </div>		

	</body>
</html>

