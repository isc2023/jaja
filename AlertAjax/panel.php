<div class="table-responsive">
	<table class="table table-bordered table-condensed table-hover table-striped" cellspacing="0" width="100%">
        <thead>
            <tr>
            	<th>ID</th>
                <th>Codigo</th>
                <th>Nombre producto</th>
                <th>Fecha</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody>
            
            <?php
			
			require_once 'dbcon.php';
			$query = "SELECT * FROM tbl_productos";
			$stmt = $DBcon->prepare($query);
			$stmt->execute();
			
			if($stmt->rowCount() > 0) {
				
				while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
				extract($row);
				?>
				<tr>
		        <td><?php echo $pro_id; ?></td>
                <td><?php echo $codigo; ?></td>
                <td><?php echo $producto_nombre; ?></td>
                <td><?php echo $fecha; ?></td>
		        <td> 
		        <a class="btn btn-sm btn-danger" id="delete_product" data-id="<?php echo $pro_id; ?>" href="javascript:void(0)"><i class="glyphicon glyphicon-trash"></i>Eliminar</a>
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