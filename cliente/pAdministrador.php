<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    
	<!--incorporamos el  encabezado-->
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
				






			</ul>
		</div>


	</header>


<!--CUERPO INTERFAZ   -->
<div class="container-fluid">

<h2>¡¡BIENVENIDO ADMINISTRADOR !!</h2>
<?php
echo "<h3>".$_SESSION['nombre']."</h3>";	
			?>
<img src="../img/fondo.jpg" style="width: 1250px" height="600px">
   
   
</div>
<br>
<!-- CUERPO DEL Modal 1 -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">DATOS PERSONALES</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" role="form" method="post" action="../servidor/DatosGenerales.php">

					<div class="form-group">
						<label for="exampleInputPassword1">ID:</label>
						<input type="text" class="form-control" id="id" name="id">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Apellido Paterno:</label>
						<input type="text" class="form-control" id="apaterno" name="apaterno">
					</div>

					<div class="form-group">
						<label for="exampleInputPassword1">Apellido Materno:</label>
						<input type="text" class="form-control" id="amaterno" name="amaterno">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Nombre(s):</label>
						<input type="text" class="form-control" id="nombres" name="nombres">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Domicilio:</label>
						<input type="text" class="form-control" id="dom" name="dom">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Tel.Madre:</label>
						<input type="text" class="form-control" id="telm" name="telm">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Tel.Padre:</label>
						<input type="text" class="form-control" id="telp" name="telp">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Fecha de Nacimiento:</label>
						<input type="date" class="form-control" id="naci" name="naci">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Sexo:</label>
						<input type="radio" name="genero" value="hombre"> Hombre</input>
						<input type="radio" name="genero" value="mujer"> Mujer</input>
					</div>

					<button type="submit" class="btn btn-primary">GUARDAR INFORMACIÓN</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>

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
   
  
   
</body>
</html>