
<h5 style="background-color: #13b7c6" class="modal-title" id="exampleModalLabel"> USUARIOS REGISTRADOS</h5>
<br>
<div class="table-responsive">
	<table class="table table-bordered table-condensed table-hover table-striped" cellspacing="0" width="100%">
        <thead style="background-color: #47ced0">
            <tr>
            	<th>ID</th>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                <th>NOMBRE(S)</th>
                <th>ACCIÓN</th>
            </tr>
        </thead>
        
        <tbody>
	
		<?php 
		require_once '../servidor/dbcon.php';
		$query="SELECT * FROM datosgen";
		$stmt = $DBcon->prepare($query);
			$stmt->execute();
			
			if($stmt->rowCount() > 0) {
				
				while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
				extract($row);
				?>
				<tr>
		        <td><?php echo $id; ?></td>
                <td><?php echo $apaterno; ?></td>
                <td><?php echo $amaterno; ?></td>
                <td><?php echo $nombres; ?></td>
		        <td> 
		        <a href="editar_usuario.php?id=<?php echo $id; ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i>Editar</a> 
		        <a class="btn btn-sm btn-danger" id="delete_registro" data-id="<?php echo $id; ?>" href="javascript:void(0)"><i class="glyphicon glyphicon-trash"></i>Eliminar</a>
		        </td>
		        </tr>
				<?php
				}	
				
			} else {
				
				?>
		        <tr>
		        <td colspan="3">No hay productos en lista</td>
		        </tr>
		        <?php
				
			}
			?>
		</tbody>
	</table>
    
</div>
