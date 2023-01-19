<?php

     $conexion=mysqli_connect('localhost','root','','registros');
     

 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="../css/estilo2.css" rel="stylesheet"/>
		<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
		<script
    	src="https://code.jquery.com/jquery-3.3.1.js"
    	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    	crossorigin="anonymous">
	   </script>
	   
	   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


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
						<a href="../cliente/registros.php" style="color: #000000">REGISTROS</a> </li>
					<li>
						<a href="../cliente/dactilares.php" style="color: #000000">TOMA DE HUELLAS DACTILARES</a> </li>
					<li>
						<a href="../cliente/fotos.php" style="color: #000000">FOTOGRAFIAS</a> </li>
					<li>
						<a href="../cliente/Usuarios_Administrador.php" style="color: #000000">NUEVO REGISTRO</a> </li>
					<li>
						<a href="../cliente/Usu_Adm.php" style="color: #000000">USUARIOS</a> </li>
					






				</ul>
			</div>


		</header>
		
		
<!--CUERPO INTERFAZ   -->
<main>
<div class="col"> <!--columna 1-->
					<form class="row g-3" method="post">
						<div class="col-auto">			
							<label class="visually-hidden">Buscar Usuario:</label>
							<input type="text" readonly class="form-control-plaintext" id="" value="Buscar Usuario">                
						</div>
						<div class="col-auto">
							<label  class="visually-hidden"> </label>
							<input type="text" class="form-control" id="busca"  name="busca" placeholder="Ejemplo: Berenice">
						</div>
						<div class="col-auto">
							<button type="submit" class="btn btn-outline-info mb-3">Buscar</button>
						</div>
					</form>
					<div class="col">
						<table class="table" id="tabla1" >
							<thead class="thead-dark">
								<tr>
									<th scope="col">ID</th>
									<th scope="col">NOMBRE</th>
									<th scope="col">CORREO</th>
									<th scope="col">TIPO USUARIO</th>
									
								</tr>
							</thead>
							<tbody>
								<?php
						include("../servidor/conectar.php");
						$b=$_POST['busca'];
						$q = mysqli_query($conexion, "SELECT * FROM usuarios where nombrec like '%$b%' || correo like '%$b%' || tusu like '%$b%' ");
						$resul=mysqli_num_rows($q);
						if ($resul>0) {
							while ($dat=mysqli_fetch_assoc($q)) {
						?>
								<tr>
									<td><?php echo $dat['id']; ?></td>
									<td><?php echo $dat['nombrec']; ?></td>
									<td><?php echo $dat['correo']; ?></td>
									<td><?php echo $dat['tusu']; ?></td>
									
								</tr>
								<?php	
								}
				          }
						?>
							</tbody>
						</table>
					</div>
					
				</div> <!--cierra columna 1-->
<div class="container" style="text-align: center;padding: 40px; background-color:#a0d3e6">
<h5 class="modal-title" id="exampleModalLabel">REGISTRAR</h5>
<!--AGREGAR  LOS  FORMULARIOS EN UN ELEMNTO TIPO COLLAPSED  AGREGAR AL PRIMER BOTON INSERTAR  Y AL SEGUNDO BOTON ELIMINAR -->

<!--PRIMER FORMULARIO INSERTAR-->
	
  <form class="form-horizontal" role="form" method="post" action="../servidor/RegistraUsuAdm.php">
      
	  <div class="row g-3">
	
			  <div class="col">
    			<label for="exampleInputEmail1">Nombre Completo:</label>
   				<input type="text" class="form-control" id="nombre" placeholder="Por ejemplo: Vianney Morales Zamora" name="nombre">
  			</div>
       
	   <div class="col">
    			<label for="exampleInputEmail1">Dirección:</label>
   				<input type="text" class="form-control" id="dir" placeholder="Por ejemplo: Privada Niños Heroes # 16 Belen " name="dir">
  			</div>
      
	  <div class="col">
    			<label for="exampleInputEmail1">Telefono:</label>
   				<input type="text" class="form-control" id="tel" placeholder="Por ejemplo: 2461782234" name="tel">
  			</div>
  			</div>
         <br>
		 <div class="row g-3">
		 <div class="col">
    			 
			  	<select class="form-select" id="tusu" name="tusu">
			  		<option selected>Tipo de Usuario:</option>
			  		<option value=Administrador>Administrador</option>
			  		<option value=Cliente>Cliente</option>
			  	</select>
			  
  			</div>
      
      
      
	  <div class="col">
    			<label for="exampleInputEmail1">Correo electrónico:</label>
   				<input type="email" class="form-control" id="correo" placeholder="Por ejemplo: vimoza@hotmail.com" name="correo">
  			</div>
  			
			  <div class="col">
    			<label for="exampleInputPassword1">Contraseña:</label>
    			<input type="text" class="form-control" id="pass" name="pass">
  		   </div>
  		   </div>
  		   <br>
  		   
          <button type="submit" class="btn btn-primary">GUARDAR INFORMACIÓN</button>
		</form>	 
		</div>
		
		<br>
		<br>
		
		<!-- TERMINA PRIMER FORMULARIO-->
		
		
		<!-- SEGUNDO FORMULARIO ELIMINAR -->	
		<div class="container" style="text-align: center;padding: 40px; background-color:#a0d3e6">
		<h5 class="modal-title" id="exampleModalLabel">ELIMINAR USUARIOS</h5>
		<form method="post" action="../servidor/EliminaUsu.php">
			<div class="row g-3">
			<div class="col">
    			<label for="exampleInputEmail1">Nombre Completo de  usuario:</label>
   				<input type="text" class="form-control"  id="nombrec" placeholder="Por ejemplo: Claudio Diaz Lopez" name="nombrec">
  			</div>
  			</div>
			  <button type="submit"  class="btn btn-danger">ELIMINAR USUARIO</button>
		</form> 
		
		
<!--TERMINA SEGUNDO FORMULARIO-->	
	

</div>
<div class="container" style="text-align: center;padding: 40px; background-color:#a0d3e6">
<h5 class="modal-title" id="exampleModalLabel">USUARIOS REGISTRADOS</h5>
	<table class="table" border="1" align="center">
	<thead class="thead-dark" style="background-color:#a0d3e6">
		<tr>
			<td><p style="color: #000000">id</p></td>
			<td><p style="color: #000000">nombres</p></td>
			<td><p style="color: #000000">correo</p></td>
			
		</tr>
		</thead>
	<tbody style="background-color:#ffffff">
	
	
		<?php 
		include "../servidor/conectar.php";
		$sql="SELECT * FROM usuarios";
		$result=mysqli_query($conexion, $sql);
		while($mostrar=mysqli_fetch_array($result)){ 
			
			
		
		?>
		
		
		<tr>
		    <td><label><?php echo $mostrar['id'] ?></label></td>
		    <td><label><?php echo $mostrar['nombrec'] ?></label></td>
		    <td><label><?php echo $mostrar['correo'] ?></label></td>
		    
		   
		    <td>
		   <div class="table__item">
		     <a href="editar_usuario.php?id=<?php echo $data['id']; ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i>Editar</a> 
		     
		    <form action="../servidor/EliminaUsu.php?id=<?php echo $mostrar['nombrec']; ?>" method="post" class="confirmar d-inline">
                                            <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'>Eliminar</i> </button>
                                        </form>
        
                                        
		    
		    	
		    </div>
		    
		    </td>
		   
		    </tr>
		    
		<?php 
		
		}
		
		?>
		
		</tbody>
	</table>

</div>
</main>

		<br>
		
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
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"> </script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"> </script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"> </script>
		
	
</body>

</html>