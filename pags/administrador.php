<?php 
  include("../request/headeradmin.php");  
  include("../php/crud.php"); 
  $crudd = new crud();
  $array = $crudd->consultarAspirantes();
  if(sizeof($array)>0){
    foreach ($array as $value) {    
?>
    <tr>
        <td><?php echo $value-> getNombre()?></td>
        <td><?php echo $value-> getApellido()?></td>
        <td><?php echo $value-> getCorreo()?></td>
        <td><?php echo $value-> getArea()?></td>
        <td><?php echo $value-> getFecha()?></td>
        <td><button type="submit" class="btn btn-info" name="btn_PDF" id="btn_PDF" value="<?php echo $value-> getRuta()?>">VER</button></td>
        <td><button type="submit" class="btn btn-danger" name="btn_PDF" id="btn_PDF" value="<?php echo $value-> getID()?>">ELIMINAR</button></td>
    </tr>
<?php 
    }
  }else{?>
    <tr>
        <td colspan="7">NO SE ENCONTRARON ASPIRANTES</td>
    </tr>
<?php 
  } 
  include("../request/footeradmin.php");  
?>
  
      