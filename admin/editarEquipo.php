<?php
    include "datosConexionAdmin.php";

    $id = $_GET['id'];

    $path = "SELECT id_login FROM equipo WHERE id='$id'";
    if($result=$conn->query($path) ){
        if($row=$result->fetch_assoc()){
            $id_l = $row['id_login'];
        }
        mysqli_free_result($result);
    }
    $sql1 = "DELETE FROM equipo WHERE id='$id'";
    if($conn->query($sql1)===TRUE){
        $sql2 = "DELETE FROM login WHERE id='$id_l'";
        if($conn->query($sql2)===TRUE){
            echo "<meta http-equiv='refresh' content='2;url= modificarEquipo.php#' />";
            echo"Artículo eliminado";
        }else{
            echo "Error: " . $sql1 . "<br>" . $sql2 . "<br>" . $conn->error;
        }        
    }else{
        echo "Error: " . $sql1 . "<br>" . $sql2 . "<br>" . $conn->error;
    }
    $conn->close();