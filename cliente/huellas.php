<?php
     $conexion=mysqli_connect("localhost", "root", "", "registros");
     if(!empty($_POST['nom'])){
     	$nombre=$_POST['nom'];
     	$sql=mysqli_query($conexion, "SELECT id FROM huellas WHERE nom='$nombre'");
     	if($row=mysqli_fetch_array($sql)){
     		echo 'NO SE EMITEN DATOS DUPLICADOS EN LA BASE DE DATOS<BR><BR>';
     	}else{
     		mysqli_query($conexion, "INSERT INTO huellas (nom) VALUES ('$nombre')");
     		$ss=mysqli_query($conexion, "SELECT MAX(id) as id_maximo FROM huellas");
     		if($rr=mysqli_fetch_array($ss)){
     			$id_maximo=$rr['id_maximo'];
     		}
     		$nameimagen=$_FILES['imagen']['name'];
     		$tmpimagen=$_FILES['imagen']['tmp_name'];
     		$urlnueva="imagen/pulgar_".$id_maximo.".jpg";
     		if(is_uploaded_file($tmpimagen)){
     			copy($tmpimagen,$urlnueva);
     			
     			
     			echo 'IMAGEN CARGADA CON EXITO';
     		}else{
     			echo 'ERROR AL CARGAR LA IMAGEN';
     		}
     	}
     	
     }

?>

<form name="form" action="" method="post" enctype="multipart/form-data">
	<strong>Nombre</strong><br>
	<input type="text" name="nombre" autocomplete="off" required value=""><br><br>
	<strong>Seleccionar Imagen</strong><br>
	<input type="file" name="imagen" id="imagen"><br><br>
	<button type="submit"><strong>Aceptar</strong></button>
</form><br><br>

<table width="100%" border="1" rules="all">
    <tr>
    	<td>PULGAR </td>
    	<td>INDICE </td>
    	<td>MEDIO DERECHO</td>
    	<td>ANULAR DERECHO</td>
    	<td>MENIQUE DERECHO</td>
    </tr>
    <?php
       $ss=mysqli_query($conexion,"SELECT * FROM huellas ORDER BY nom");
       while($rr=mysqli_fetch_array($ss)){
    
     ?>
     <tr>
     	<td>
     	    <center>
     	    <img src="imagen/ <?php echo $rr['id']; ?>.jpg" width="200px" height="200px">
     	    
     	    	
     	    </center>
     	</td>
     	<td><?php echo $rr['nombre']; ?></td>
     	
     	
     </tr>
     <?php } ?>
</table>