<!DOCTYPE html>
<html>
	<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="../css/estilo2.css" rel="stylesheet"/>

	<script
    	src="https://code.jquery.com/jquery-3.3.1.js"
    	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    	crossorigin="anonymous">
	</script>
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
		li a:hover{
			background-color: #ffffff;
		}
		div .col{
			background-color: #a0d3e6;
		}

	</style>


	<title>SISTEMA WEB</title>
	</head>

	<body>
	<!--ENCABEZADO    -->

	<header>
		<div>
			<div class="row" >

				<div class="col" style="background-color: #ffffff">
					<p><img src="../img/escudo.jpg" height="100"> Secretaría General de Gobierno de Puebla</p>
				</div>

				<div class="col" style="background-color: #ffffff">
					<img src="../img/logo.png" height="100">
				</div>
			</div>

			<ul style="background-color:  #20add8; color:#000000">
				<li>
					<a href="../Empleado/EmpleadoPersonales.php" style="color: #000000">
						DATOS PERSONALES</a> </li>
				<li>
					<a href="../Empleado/EmpleadoAntropometricos.php" style="color: #000000">
						DATOS ANTROPOMÉTRICOS</a> </li>
				<li>
					<a href="../Empleado/EmpleadoSeñales.php" style="color: #000000">
						SEÑALES PARTICULARES</a> </li>
				<li>
					<a href="../Empleado/EmpleadoEnfermedad.php" style="color: #000000">
						ENFERMEDADES</a> </li>
				<li>
					<a href="../Empleado/pEmpleado.php">
						REGRESAR</a> </li>

			</ul>
		</div>
	</header>

	<!--CUERPO INTERFAZ   -->
	<!-- CUERPO DEL Modal 1 -->
	<div class="container" style="text-align: center;padding: 40px; background-color:#a0d3e6">
		<h5 class="modal-title" id="exampleModalLabel">ENFERMEDADES</h5>
	<form class="form-horizontal" role="form" method="post" action="../servidor/EnfermedadesClie.php">

	<br>
	<div class="row g-3">
	
				<br>	
	<div class="col">
	<label for="exampleInputEmail1">Padece alguna enfermedad:</label>
	<input type="radio" name="enfermedad" value="Si"> Si
	<input type="radio" name="enfermedad" value="No"> No
	

	

<div class="col">
		<label for="exampleInputEmail1">Especifique:</label>
		<input type="text" class="form-control" id="espenfer" name="espenfer">
	</div>
	</div>
	</div>
	<br>
	<div class="row g-3" style="background-color: #ffffff">
		<div class="col">
			<button type="submit" class="btn btn-primary">GUARDAR INFORMACIÓN</button>
		</div>
		<div class="col">
			<button type="button" class="btn btn-danger">CANCELAR REGISTRO</button>
		</div>
	</div>
	</form>
	</div>
	<br>
	<br>
		<!--PIE DE  PÁGINA    -->
		<div class="container-fluid" style="background-color: #20add8; color: #000000" >
			<!-- DATOS DE CONTACTO-->
			<div class="row">


				<div class="col" style="background-color: #20add8; color: #000000">
					<h5>CONTACTO:</h5>
					<p>Directora:</p>
					<P>Dra. Elia Cristina Quiterio Montiel</P>
				</div>

				<div class="col" style="background-color: #20add8; color: #000000">
					<h5>Autores</h5>
					<P>Berenice Varela Vazquez</P>
					<p>Oscar Macuilt Primero</p>
					<p>Abigail Ramirez Pastrana</p>


				</div>

				<div class="col" style="background-color:#20add8; color: #000000">
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
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"> </script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"> </script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"> </script>
	</body>
</html>