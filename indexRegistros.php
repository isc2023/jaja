<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script
    	src="https://code.jquery.com/jquery-3.3.1.js"
    	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    	crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="../SistemaPruebaWeb/Cliente/css/estilo2.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <!-- hoja  de  estilo en la carpeta del proyecto  se  habilitan cuando  no haya  internet
     <link rel="stylesheet" href="css/bootstrap.min.css"/>-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<style>
    div{
         text-align: center;
         
       }
      body{
		  
		  background-repeat: no-repeat;
		  background-attachment: fixed;
		  background-size: cover;
      	
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
							<p><img src="img/escudo.jpg" height="100"> Secretaría General de Gobierno de Puebla</p>
						</div>

						<div class="col">
							<img src="img/logo.png" height="100">
						</div>
					</div>

                    <ul style="background-color:  #20add8; color:#000000">
						<li>
							<a href="../ja/index.php"  style="color: #000000">REGRESAR</a> </li>	
						<li>	
							<a href=""  data-toggle="modal" data-target="#exampleModal2" style="color: #000000;">BUSCAR</a> </li>
							
					</ul>
				</div>
			</header>



<!--CUERPO INTERFAZ   -->
<main>
<div class="container">
	<div class="container-fluid" style="background-color:#ffffff">
			<H4>BÚSQUEDA POR NOMBRE</H4>
			<br>
			<H6>POR FAVOR Ingresa el NOMBRE, APELLIDO PATERNO O APELLIDO MATERNO para su búsqueda.</H6>
			<br>
	
	
<div class="container"> <!--columna 1-->
					<form class="row g-3" method="post">
						<div class="col-auto">			
							<label class="visually-hidden"></label>
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
						<table class="table table-bordered table-condensed table-hover table-striped" cellspacing="0" width="100%" id="tabla1" >
							<thead>
								<tr>
									<th scope="col">ID</th>
									<th scope="col">APELLIDO PATERNO</th>
									<th scope="col">APELLIDO MATERNO</th>
									<th scope="col">NOMBRE(S)</th>
									
								</tr>
							</thead>
							<tbody>
								<?php
						include("../ja/servidor/conectar.php");
						$b=$_POST['busca'];
						
						$q = mysqli_query($conexion, "SELECT * FROM datosgen where apaterno like '%$b%' || amaterno like '%$b%' || nombres like '%$b%' ");
						$resul=mysqli_num_rows($q);
						if ($resul>0) {
							while ($dat=mysqli_fetch_assoc($q)) {
						?>
								<tr>
									<td><?php echo $dat['id']; ?></td>
									<td><?php echo $dat['apaterno']; ?></td>
									<td><?php echo $dat['amaterno']; ?></td>
									<td><?php echo $dat['nombres']; ?></td>
									
								</tr>
								<?php	
								}
				          }
						?>
							</tbody>
						</table>
					</div>
					
				
				</div>
			
		
		</div>
       </div>
      
				
<br>
<!-- /.container-fluid -->       

    
</main>


<!--PIE DE  PÁGINA    -->
<div class="container-fluid" style="background-color: #20add8; color: #000000" >
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
						<button type="button" class="btn btn-link" style="color: #000000"><img src="img/face.png" width="30" height="30">
				    Facebook
			        </button>
                    </p>
					<p align="lower-right">
						<button type="button" class="btn btn-link" style="color: #000000"><img src="img/twiter (1).png" width="30" height="30">
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
   
   <!-- Option 2: jQuery, Popper.js, and Bootstrap JS    -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"> </script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"> </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"> </script>
   
</body>
</html>