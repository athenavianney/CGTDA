<?php
    include "datosConexionAdmin.php";

    $titulo = $_POST['titulo'];
    $colaboradores = $_POST['colaboradores'];
    $fecha = $_POST['fecha'];
    $introduccion = $_POST['introduccion'];
    $id_categoria = $_POST['categorias'];
    
    $sql = "INSERT INTO articulo (titulo, colaboradores, fecha, introduccion, id_categoria)
    VALUES ('$titulo', '$colaboradores', '$fecha', '$introduccion', '$id_categoria')";
    if($conn->query($sql)===TRUE){
        echo "<meta http-equiv='refresh' content='2;url= menuAdmin.php#' />";
        echo"Artículo registrado";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>
