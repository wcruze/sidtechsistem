<?php
include("../request/header.php"); 
?>
    <div class="container p-4">
    <div class="col-md-12">
        <?php             
            session_start();
            $ruta = $_POST['btn_PDF'];
            if(is_numeric($ruta)){              
              $_SESSION['id'] = $ruta;
              header("location: ./eliminaraspirante.php");
              exit();
            }
        ?>
        <div>
            <embed src="<?php echo $ruta?>#toolbar=0" type="application/pdf" width="100%" height="600/"/>
        </div>
        <a href ="../pags/administrador.php"><button>Regresar</button></a>
    </div>
    </div>  
<?php
include("../request/footer.php"); 
?>