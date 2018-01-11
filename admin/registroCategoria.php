<?php
    include "datosConexionAdmin.php";

    $categoria = $_POST['categoria'];

    $sql = "INSERT INTO categoria (nombre)
    VALUES ('$categoria')";
    if($conn->query($sql)===TRUE){
        echo "<meta http-equiv='refresh' content='2;url= menuAdmin.php#' />";
        echo"Categoría agregada";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>
