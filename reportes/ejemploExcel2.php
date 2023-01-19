<?php
include ('../reportes/conexion.php');
$marcas="select * from marca";
$resultado=$mysqli->query($marcas);
?>
<html lang="es">
	<head>
			<title>Descarga de  reportes en excel</title>	
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
			<link rel="stylesheet" href="../reportes/estilo1.css">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	</head>
	<body>
		<header>
			<div class="alert alert-info">
				<h2>Descargar Reportes en excel desde  una BD</h2>
			</div>
		</header>
		<div class="container">
		<section>
			<table class="table" border="1">
					<tr>
						<th>ID</th>
						<th>MARCA</th>
						<th>DESCRIPCION</th>
					</tr>
					<?php
						while($registrosMarcas=$resultado->fetch_array(MYSQLI_BOTH))
						{
							echo '<tr>
							       <td>'.$registrosMarcas['idmarca'].'</td>
								   <td>'.$registrosMarcas['nmarca'].'</td>
								   <td>'.$registrosMarcas['descripcionm'].'</td>
								   </tr>';
						}
					?>
			</table>
		</section>
	
			 <form method="post" class="form" action="../reportes/reporte.php">
			 <input type="submit" name="generar_reporte">
			 </form>
	    </div>
	</body>
</html>