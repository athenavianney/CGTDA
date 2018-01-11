<?php
  include "admin/datosConexionAdmin.php";

    $user = $_POST['user'];
    $password = $_POST['password'];

    $path = sprintf("SELECT user AND password FROM login WHERE user = '$user' AND password = '$password'");
    $query = mysqli_query($conn, $path);
    $result =  mysqli_num_rows( $query );

    if( $result == 1 ){
        $_SESSION["user"] = $user;
        header("Location: admin/menuAdmin.php#");
        exit();
    }else{
        session_destroy();
        header("Location: login.html");
        exit();
    }
?>
