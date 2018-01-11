<?php
    include "datosConexionAdmin.php";

    $id = $_GET['id'];
    
    $sql = "DELETE FROM algoritmo WHERE id='$id'";
    if($conn->query($sql)===TRUE){
        echo "<meta http-equiv='refresh' content='2;url= algoritmos.php#' />";
        echo"Algoritmo eliminado";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>
