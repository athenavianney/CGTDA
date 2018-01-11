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

    <div class="card rounded-0">
      <div class="card-header">
        <h3 class="mb-0">Editar Categorías</h3>
      </div>
      <div class="card-body">
      <div class="row">
<?php
        $path = "SELECT * FROM categoria";
        $result = $conn->query($path);
        while ($row = $result->fetch_assoc()) {
          $idc = $row["Id"];
          echo "
          <div class='col-md-2'>
          <p class='font-weight-light'>$row[nombre]</p>        
          </div>";
          echo"
          <div class='col-md-2'>
            <a href='editarCategoria.php?id=$idc' class='font-weight-normal'>Eliminar</a>
          </div>";
        }
      ?>
    </div>    

  </body>
</html>


