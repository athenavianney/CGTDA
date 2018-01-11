<?php
    include "datosConexionAdmin.php";

    $user = $_POST['user'];
    $password = $_POST['password'];
    $nombre = $_POST['nombre'];
    $estudio = $_POST['estudio'];
    $correo = $_POST['correo'];
    $info = $_POST['info'];
    
    $sql1 = "INSERT INTO login (user, password) VALUES ('$user', '$password')";
    
    if($conn->query($sql1)===TRUE){
        $path = "SELECT id FROM login WHERE user = '$user'";
        if($result=$conn->query($path) ){
            if($row=$result->fetch_assoc()){
                $id = $row['id'];
            }
        mysqli_free_result($result);
        }
        $sql2 = "INSERT INTO equipo (nombre, estudio, correo, informacion, id_login) VALUES ('$nombre', '$estudio', '$correo', '$info', '$id')";
        if($conn->query($sql2)===TRUE){
            echo "<meta http-equiv='refresh' content='2;url= modificarEquipo.php#' />";
            echo"Usuario registrado";
        }else{
        echo "Error: " . $sql2 . "<br>" . $conn->error;
    }
    }else{
        echo "Error: " . $sql1 . "<br>" . $conn->error;
    }
    $conn->close();
?>
