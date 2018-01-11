<?php
    include "datosConexionAdmin.php";

    $user = $_SESSION['user'];
    $passwordA = $_POST['password_ant'];
    $passwordN = $_POST['password_nuevo'];
    
    $path = "SELECT password FROM login WHERE user = '$user'";

    if($result=$conn->query($path) ){
        if($row=$result->fetch_assoc()){
            $pass = $row['password'];
        }
        mysqli_free_result($result);
    }

    if($passwordA === $pass){
        $sql = "UPDATE login SET password = '$passwordN' WHERE user = '$user'"; 
        if($conn->query($sql)===TRUE){
            echo "<meta http-equiv='refresh' content='2;url= menuAdmin.php#' />";
            echo"Cambio de contraseña exitoso";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }else{
        echo "usuario= " . $user . $pass;
        echo "<meta http-equiv='refresh' content='5;url= cambiarContrasena.php#' />";
            echo"El cambio de contraseña no pudo ser realizado, la contraseña anterior no coincide con la que ingresó";
    }

    
