<?php
  include "datosConexionAdmin.php";
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
      <a class="navbar-brand" href="index.php">CGTDA</a>
      <!-- Links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="menuAdmin.php">Inicio</a>
        </li>
        <!-- Dropdown Algoritmos -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="algoritmos.php" id="navbardrop" data-toggle="dropdown"> Algoritmos </a>
          <div class="dropdown-menu">
            <a class='dropdown-item' href=subirAlgoritmo.php>Nuevo Algoritmo</a>
            <a class='dropdown-item' href=algoritmos.php>Editar Algoritmo</a>
          </div>
        </li>
        <!-- Dropdown Artículos -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="articulos.php" id="navbardrop" data-toggle="dropdown"> Artículos </a>
          <div class="dropdown-menu">
            <a class='dropdown-item' href=subirArticulo.php>Nuevo Artículo</a>
            <a class='dropdown-item' href=articulos.php>Editar Artículo</a>
          </div>
        </li>
        <!-- Dropdown Categorías -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="categorias.php" id="navbardrop" data-toggle="dropdown"> Categorías </a>
          <div class="dropdown-menu">
            <a class='dropdown-item' href=agregarCategoria.php>Nueva Categoría</a>
            <a class='dropdown-item' href=categorias.php>Editar Categoría</a>
          </div>
        </li>
        <!-- Dropdown Opciones -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="categorias.php" id="navbardrop" data-toggle="dropdown"> Opciones </a>
          <div class="dropdown-menu">
            <a class='dropdown-item' href=nuevoUsuario.php>Nuevo Usuario</a>
            <a class='dropdown-item' href=modificarEquipo.php>Modificar Equipo</a>
            <a class='dropdown-item' href=cambiarContrasena.php>Cambiar Contraseña</a>
          </div>
        </li>
        <!-- Cerrar sesión -->
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Cerrar sesión</a>
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
        <img src="../img/img1.jpg" width="100%" height="350">
      </div>
      <div class="carousel-item">
        <img src="../img/img2.jpg" width="100%" height="350px">
      </div>
      <div class="carousel-item">
        <img src="../img/img3.jpg" width="100%" height="350">
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

  <div class="container">
    <?php
    $sql = "SELECT * FROM inicio WHERE id='1'";
    $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<br> <tr> <td> <p class='font-weight-normal'>". $row["titulo"] . "</p></td>";
                echo " <tr> <td> <p class='font-weight-light'>". $row["introduccion"] . "</p></td> </tr>";
            }
        } else {
            echo "No disponible";
        }
        $conn->close();
        ?>
    </div>
  </body>
</html>
