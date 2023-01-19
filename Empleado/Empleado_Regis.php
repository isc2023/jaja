<?php
     $conexion=mysqli_connect('localhost','root','','registros');

 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mostrar datos</title>
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
					<a href="../Empleado/Empleado_Regis.php" style="color: #000000">REGISTROS</a> </li>
				<li>
					<a href="../Empleado/dactilaresEmpleado.php" style="color: #000000">TOMA DE HUELLAS DACTILARES</a> </li>
				<li>
					<a href="../Empleado/fotos_Empleado.php" style="color: #000000">FOTOGRAFIAS</a> </li>
				<li>
					<a href="../Empleado/Regis_Empleado.php" style="color: #000000">NUEVO REGISTRO</a> </li>
				






			</ul>
		</div>


	</header>
			
		 <div class="container">
	<div class="container-fluid" style="background-color:#ffffff">
			<H3>REGISTROS</H3>
	<br>
	<table class="table" border="1" align="center">
	<thead class="thead-dark" style="background-color:#a0d3e6">
		<tr>
			<td><p style="color: #000000">ID</p></td>
			<td><p style="color: #000000">APELLIDO PATERNO</p></td>
			<td><p style="color: #000000">APELLIDO MATERNO</p></td>
			<td><p style="color: #000000">NOMBRE(S)</p></td>
			
		</tr>
		</thead>
	<tbody style="background-color:#ffffff">
		<?php 
		$sql="SELECT * FROM datosgen";
		$result=mysqli_query($conexion, $sql);
		while($mostrar=mysqli_fetch_array($result)){
		
		?>
		<tr>
		    <td><label><?php echo $mostrar['id'] ?></label></td>
		    <td><label><?php echo $mostrar['apaterno'] ?></label></td>
		    <td><label><?php echo $mostrar['amaterno'] ?></label></td>
		    <td><label><?php echo $mostrar['nombres'] ?></label></td>
		    
		    
		   
				
		
		</tr>
		<?php 
		}
		?>
		</tbody>
	</table>
	
	
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