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
    <form action="registroNuevaContrasena.php"  method="post">
      <div class="card rounded-0">
        <div class="card-header">
            <h3 class="mb-0">Cambiar Contraseña</h3>
        </div>
        <div class="card-body">
          <!-- Usuario input-->
          <div class="form-group row">
            <div class="col-xs-3">
              <label for="user">Contraseña anterior:</label>
              <input class="form-control" type="password" name="password_ant">
            </div>
          </div>
          <!-- Password input-->
          <div class="form-group row">
            <div class="col-xs-2">
              <label for="password">Contraseña nueva:</label>
              <input class="form-control" type="password" name="password_nuevo">
            </div>
          </div>
          <!-- Submit-->
          <div class="form-group row">
            <input type="submit" value="Cambiar contraseña"/>
          </div>
        </div>
      </div>
    </form>

  </div> 
  </body>
</html>