<?php include("../request/header.php"); ?>
<?php
require 'conexion.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $area = $_POST['group1'];

    // AREA DE CARGA DE DATOS
    $directorio = "../archivos/";
    $archivo_= $directorio. time() . basename($_FILES["archivo"]["name"]);
    $tipoArchivo = strtolower(pathinfo($archivo_, PATHINFO_EXTENSION));
    $tamanioArchivo = $_FILES["archivo"]["size"];

    if($tipoArchivo == "pdf"){
        if($tamanioArchivo < 12000000){
           if(move_uploaded_file($_FILES["archivo"]["tmp_name"],$archivo_)){               

                $query = "INSERT INTO dbempleos.aspirantes
                (nombre,
                apellido,
                correo,
                area,
                ruta)
                VALUES
                ('$nombre','$apellido','$correo','$area','$archivo_');";

                $resultado = mysqli_query($conexion,$query);
                
                if($resultado == 1){
                    header("Refresh: 3; URL=../index.html");
                    echo '<h1 class="alert alert-success agileits" role="alert">Envio realizado correctamente!</h1>';
                    exit();
                }else{
                    header("Refresh: 3; URL= ../index.html");
                    echo '<h1 class="alert alert-danger agileits" role="alert">El envio no fue realizado!</h1>';
                    exit();
                }
            }else{
                header("Refresh: 3; URL= ../index.html");
                echo '<h1 class="alert alert-danger agileits" role="alert">Hubo un error!</h1>';
                exit();
            }
        }else{
            header("Refresh: 3; URL= ../index.html");
            echo '<h1 class="alert alert-danger agileits" role="alert">El envio no fue realizado, el archivo sobrepasa el tamaño aceptado 12MB!</h1>';
            exit();
        }
    }else{
        header("Refresh: 3; URL= ../index.html");
        echo '<h1 class="alert alert-danger agileits" role="alert">El envio no fue realizado, el archivo debe ser pdf!</h1>';
        exit();
    }
?>
<?php include("../request/footer.php"); ?>