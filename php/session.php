<?php
    error_reporting(0);  
      
    session_start();

    $usuario = $_SESSION['usuario'];
    $pass = $_SESSION['pass'];

    if($usuario == "" && $pass == ""){
        session_destroy();
        header("location: ../index.html");
        exit();
    }

?>