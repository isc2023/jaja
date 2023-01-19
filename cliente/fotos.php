<?php 
include('Backend/conexion.php');
$query = "select * from imagenes";
$resultado = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link href="../css/estilo2.css" rel="stylesheet"/>
		<!-- hoja  de  estilo en la carpeta del proyecto  se  habilitan cuando  no haya  internet
		<link rel="stylesheet" href="css/bootstrap.min.css"/>-->
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

		<style>
    div{
         text-align: center;
         align-content: center;
       }
      body{
      	
      }
	  li a:hover{
	  	background-color: #ffffff;
	  }
</style>

  
    <title>SISTEMA WEB</title>
	</head>
	<body>
	<!--ENCABEZADO    -->
	
	<header>
		<div >
			<div class="row">

				<div class="col">
					<p><img src="../img/escudo.jpg" height="100"> Secretaría General de Gobierno de Puebla</p>
				</div>

				<div class="col">
					<img src="../img/logo.png" height="100">
				</div>
			</div>

           <ul style="background-color: #20add8">
				<li>
					<a href="../index.php" style="color: #000000">CERRAR SESIÓN</a> </li>
					<li>
					<a href="../reportes/reportepdf.php" style="color: #000000">GENERAR REPORTE PDF</a>
				</li>
				<li>
					<a href="../cliente/registros.php" style="color: #000000">REGISTROS</a> </li>
				<li>
					<a href="../cliente/dactilares.php" style="color: #000000">TOMA DE HUELLAS DACTILARES</a> </li>
				<li>
					<a href="../cliente/fotos.php" style="color: #000000">FOTOGRAFIAS</a> </li>
				<li>
					<a href="../cliente/Usuarios_Administrador.php" style="color: #000000">NUEVO REGISTRO</a> </li>
				<li>
					<a href="../cliente/usuariosAdm.php" style="color: #000000">USUARIOS</a> </li>
				<li>






			</ul>
		</div>


	</header>
			
		<!--ENCABEZADO    -->
		<div class="container-fluid" style="background-color:#ffffff">

			<div class="row">
				<div class="col-lg-3">
					<h4 class="text-primary">Subir imagen</h4>
					<form action="Backend/subir.php" method="post" enctype="multipart/form-data">
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
					<h1 class=" text-center" style="color: black;">FOTOGRAFÍAS</h1>
					<hr>
					<div class="card-columns">
					<?php foreach($resultado as $row){ ?>
					<div class="card">
							<img src="Backend/imagenes/<?php echo $row['imagen']; ?>" class="card-img-top" alt="...">
						<div class="card-body">
								<h5 class="card-title">
									<strong><?php echo $row['nombre'] ?></strong></h5>
							
						</div>
							
					</div>
						<?php } ?>
					
						
					</div>

				</div>

			</div>

		</div>
		
	<!--PIE DE  PÁGINA    -->
<div class="container-fluid" style="background-color:#20add8; color: #000000" >
	<!-- DATOS DE CONTACTO-->
	<div class="row">


		<div class="col">
			<h5>CONTACTO:</h5>
			<p>Directora:</p>
		    <P>Dra. Elia Cristina Quiterio Montiel</P>
		</div>

		<div class="col">
			<h5>Autores</h5>
			<P>Berenice Varela Vazquez</P>
			<p>Oscar Macuilt Primero</p>
			<p>Abigail Ramirez Pastrana</p>


		</div>

		<div class="col">
			<h5>REDES SOCIALES:</h5>
			<p align="lower-right">
				<button type="button" class="btn btn-link" style="color: #000000"><img src="../img/face.png" width="30" height="30">
					Facebook
				</button>
			</p>
			<p align="lower-right">
				<button type="button" class="btn btn-link" style="color: #000000"><img src="../img/twiter (1).png" width="30" height="30">
					Twitter
				</button>
			</p>

		</div>


	</div>
</div>


  <!--  este hace referencia  al  archivo  js del proyecto y se utiliza cuando  haya internet
 <script src="js/bootstrap.min.js"></script>
 -->
 
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS    -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"> </script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"> </script>
		
	</body>
</html>