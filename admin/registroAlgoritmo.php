<?php
    include "datosConexionAdmin.php";

    $titulo = $_POST['titulo'];
    $autores = $_POST['autores'];
    $lenguaje = $_POST['lenguaje'];
    $introduccion = $_POST['introduccion'];
    $id_categoria = $_POST['categorias'];
    
    $sql = "INSERT INTO algoritmo (titulo, autores, lenguaje, introduccion, id_categoria)
    VALUES ('$titulo', '$autores', '$lenguaje', '$introduccion', '$id_categoria')";
    if($conn->query($sql)===TRUE){
        echo "<meta http-equiv='refresh' content='2;url= menuAdmin.php#' />";
        echo"Algoritmo subido";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>
