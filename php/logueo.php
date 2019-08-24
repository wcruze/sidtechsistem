<?php
    require 'conexion.php';

    session_start();

    $usuario = $_POST['usuario'];
    $clave = $_POST['pass'];
    echo $usuario;
    echo $clave;

    $query = "SELECT COUNT(*) as admins FROM  dbempleos.usadministradores where nombre ='$usuario' and pass=MD5('$clave');";

    $consulta = mysqli_query($conexion,$query);
    $array = mysqli_fetch_array($consulta);

    if($array['admins']>0){
        $_SESSION['usuario'] = $usuario;
        $_SESSION['pass'] = $clave;
        $_SESSION['estado'] = "V@L1D@D0";
        header("location: ../pags/administrador.php");
    }else{
        echo "No se encuentra registrado";
    }

?>