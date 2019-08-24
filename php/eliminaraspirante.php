<?php 
    include("../request/header.php"); 
    include("crud.php"); 
?>
<?php  
    $id= $_SESSION['id']; 
    $_SESSION['id'] = 0;

    $crudd = new crud();  
    $aspirante = $crudd-> consultarAspirante($id);
    $pdfURI = $aspirante ->getRuta();

    if($crudd->eliminarAspirante($id) == 1){
       unlink($pdfURI);
       header("Refresh: 3; URL=../pags/administrador.php");
       echo '<h1 class="alert alert-success agileits" role="alert">Registro Eliminado!</h1>';
       exit();
    }else{
       header("Refresh: 3; URL=../pags/administrador.php");
       echo '<h1 class="alert alert-danger agileits" role="alert">No fue posible eliminar el registro!</h1>';
       exit();
    }
?>
<?php include("../request/footer.php"); ?>