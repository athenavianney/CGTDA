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
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
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

    <form action="registroUsuario.php"  method="post">
      <div class="card rounded-0">
        <div class="card-header">
            <h3 class="mb-0">Nuevo Usuario</h3>
        </div>
        <div class="card-body">    
          <div class="form-group">
            <label for= "user">Usuario:</label>
            <input class="form-control" type="text" name="user">
            <label for="password">Contraseña:</label>
            <input class="form-control" type="password" name="password">
            <label for="nombre">Nombre Completo:</label>
            <input class="form-control" type="text" name="nombre">
            <label for="estudio">Estudios:</label>
            <input class="form-control" type="text" name="estudio">
            <label for="correo">Correo Electrónico:</label>
            <input class="form-control" type="text" name="correo">
            <label for="info">Información extra:</label>
            <textarea class="form-control" type="text" rows="4" name="info"></textarea>     
          </div>
          <!-- Submit-->
          <div class="form-group">
            <input type="submit" value="Registrar"/>
          </div>
        </div>
      </div>
    </form>
  </body>
</html>