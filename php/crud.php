<?php

require 'aspirante.php';
session_start();

 class crud{      

    public function consultarAspirantes(){
        require 'conexion.php';
        $aspirantess = array();
        $query = "SELECT * FROM dbempleos.aspirantes";
        $consulta = mysqli_query($conexion,$query);
        $index = 0;

        while($array = mysqli_fetch_array($consulta)){    
            $id =       $array['id'];        
            $nombre =   $array['nombre'];
            $apellido = $array['apellido'];
            $correo =   $array['correo'];
            $area =     $array['area'];
            $fecha =    $array['fecha'];
            $ruta =     $array['ruta'];
            $aspirante = new aspirante();
            $aspirante -> constructor($id,$nombre,$apellido,$correo,$area,$fecha,$ruta);
            $aspirantess[$index]= $aspirante;
            $index += 1;
        }        
        return $aspirantess;
    }

    public function consultarAspirante($id){
        require 'conexion.php';
        $query = "SELECT * FROM dbempleos.aspirantes where id = $id";
        $consulta = mysqli_query($conexion,$query);

        $aspirante = new aspirante();

        while($asp = mysqli_fetch_array($consulta)){    
            $id =       $asp['id'];        
            $nombre =   $asp['nombre'];
            $apellido = $asp['apellido'];
            $correo =   $asp['correo'];
            $area =     $asp['area'];
            $fecha =    $asp['fecha'];
            $ruta =     $asp['ruta'];
            $aspirante -> constructor($id,$nombre,$apellido,$correo,$area,$fecha,$ruta);
        }        
        return $aspirante;
    }

    public function eliminarAspirante($id){
        require 'conexion.php';
        $query = "DELETE FROM dbempleos.aspirantes WHERE id = $id;";
        $rsl = mysqli_query($conexion,$query);
        return $rsl;
    }
    

    
 }

?>