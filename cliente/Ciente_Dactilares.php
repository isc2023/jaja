<?php 
include('Book/conn.php');
$query = "select * from huellas";
$resul = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<!-- hoja  de  estilo en la carpeta del proyecto  se  habilitan cuando  no haya  internet
		<link rel="stylesheet" href="css/bootstrap.min.css"/>-->
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

		<style>
			div{
				text-align: center;
				align-content: center;
				background-color: #ffffff
			}
			body{
				background-image: url('../img/menu.jpg');

			}

		<style>
			div{
				text-align: center;
				align-content: center;
				background-color: #ffffff
			}
			body{
				background-image: url('../img/menu.jpg');

			}

		</style>
		<title></title>
	</head>
	
	<body>
		<!--ENCABEZADO    -->
		<div class="container-fluid" style="background-color:#ffffff">
		<h1>HUELLAS</h1>
		<!-- DATOS DE CONTACTO-->
		<div class="row">

			<div class="col">
				<img src="../img/tec.png" height="100" width="500">
			</div>

			<div class="col">
				<img src="../img/logo.png" height="100">
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3">
					<h4 class="text-primary">Subir imagen</h4>
					<form action="Book/subir.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="my-input">Seleccione una Imagen</label>
							<input id="my-input" type="file" name="imagen">

						</div>
						<div class="form-group">
							<label for="my-input">Titulo</label>
							<input id="my-input" class="form-control" type="text" name="titulo">

						</div>
						<?php if(isset($_SESSION['mensaje'])){ ?>
						<div class="alert alert-<?php echo $_SESSION['tipo']; ?> alert-dismissible fade show" role="alert">
							<strong><?php echo $_SESSION['mensaje'];?></strong> 
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?php session_unset(); } ?>
						<input type="submit" value="Guardar" class="btn btn-primary" name="Guardar">
					</form>

				</div>
				<div class="col-lg-9">
					<h1 class="text-primary text-center">HUELLAS DACTILARES</h1>
					<hr>
					<div class="card-columns">
					<?php foreach($resul as $row){ ?>
					<div class="card">
				<img src="Book/imagen/<?php echo $row['imagen']; ?>" class="card-img-top" alt="...">
						<div class="card-body">
								<h5 class="card-title">
									<strong><?php echo $row['nom'] ?></strong></h5>
							
						</div>
							
					</div>
						<?php } ?>
					
						
					</div>

				</div>

			</div>

		</div>
		<!--MENU DE OPCIONES-->
	<a href="../cliente/pCliente.php"><button type="button" class="btn btn-primary btn-lg">REGRESAR</button></a>
		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"> </script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"> </script>
		
	</body>
</html>