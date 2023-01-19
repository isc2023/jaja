<h5 class="modal-title" id="exampleModalLabel">USUARIOS REGISTRADOS</h5>
<br>
<div class="table-responsive">
	<table class="table table-bordered table-condensed table-hover table-striped" cellspacing="0" width="100%">
        <thead>
            <tr>
            	<th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Dirección</th>
                <th>Telefono</th>
                <th>Tipo Usuario</th>
                
                <th>Acción</th>
            </tr>
        </thead>
        
        <tbody>
            
            <?php
			
			require_once '../servidor/dbcon.php';
			$query = "SELECT * FROM usuarios";
			$stmt = $DBcon->prepare($query);
			$stmt->execute();
			
			if($stmt->rowCount() > 0) {
				
				while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
				extract($row);
				?>
				<tr>
		        <td><?php echo $id; ?></td>
                <td><?php echo $nombrec; ?></td>
                <td><?php echo $correo; ?></td>
                <td><?php echo $direccion; ?></td>
                <td><?php echo $telefono; ?></td>
                <td><?php echo $tusu; ?></td>
                
                
		        <td> 
		        
		        <a href="editar_usuario.php?id=<?php echo $id; ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i>Editar</a> 

		        <a class="btn btn-sm btn-danger" id="delete_product" data-id="<?php echo $id; ?>" href="javascript:void(0)"><i class="glyphicon glyphicon-trash"></i>Eliminar</a>
		        </td>
		        </tr>
				<?php
				}	
				
			} else {
				
				?>
		        <tr>
		        <td colspan="3">No hay Usuarios en lista</td>
		        </tr>
		        <?php
				
			}
			?>
             
        </tbody>
    </table>
    
</div>
