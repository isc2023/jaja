<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ajax SweetAlert</title>
<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="../assets/swal2/sweetalert2.min.css" type="text/css" />


<meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="../css/estilosAcordeon.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300&display=swap" rel="stylesheet">

<!-- Required meta tags -->
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="../css/estilo2.css" rel="stylesheet"/>
		

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
			div.col{
				text-align: center;
				align-content: center;
			}
			th{
				text-align: center;
			}
		</style>


		<title>SISTEMA WEB</title>

</head>
<body>
<header>
		<div >
				<div class="row">

					

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
						<a href="../cliente/Usu_Adm.php" style="color: #000000">USUARIOS</a> </li>
					






				</ul>
			</div>
	</header>
		
		
<!--CUERPO INTERFAZ   -->
<main>
 <section>

      <details>
         <summary>BUSCAR USUARIOS</summary>
         <br>
         <div class="container"> <!--columna 1-->
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
						<table class="table table-bordered table-condensed table-hover table-striped" cellspacing="0" width="100%" id="tabla1" >
							<thead>
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
      </details>

      <details>
         <summary>REGISTRAR USUARIOS</summary>
         <div class="container" style="text-align: center;padding: 40px; background-color:#a0d3e6">
<h5 class="modal-title" id="exampleModalLabel">REGISTRAR NUEVO USUARIO</h5>
<br>
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
			  		<option value=Encargado>Encargado</option>
			  		<option value=Empleado>Empleado</option>
			  	</select>
			  
  			</div>
      
      
      
	  <div class="col">
    			<label for="exampleInputEmail1">Correo electrónico:</label>
   				<input type="email" class="form-control" id="correo" placeholder="Por ejemplo: vimoza@hotmail.com" name="correo">
  			</div>
  			
			  <div class="col">
    			<label for="exampleInputPassword1">Contraseña:</label>
    			<input type="password" class="form-control" id="pass" name="pass">
  		   </div>
  		   </div>
  		   <br>
  		   
          <button type="submit" class="btn btn-primary">GUARDAR INFORMACIÓN</button>
		</form>	 
		</div>
		
		<!-- TERMINA PRIMER FORMULARIO-->
      </details>

      <details>
         <summary>USUARIOS REGISTRADOS</summary>
         <!-- SEGUNDO FORMULARIO ELIMINAR  -->	 
		
		<div class="container">
    	
        <div class="page-header">
        <!--<h1><a target="_blank" href="">Ajax SweetAlert </a></h1>-->
        </div>
        
        <div id="load-products"></div> 
    
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/swal2/sweetalert2.min.js"></script>


<script>
	$(document).ready(function(){
		
		readProducts(); /* it will load products when document loads */
		
		$(document).on('click', '#delete_product', function(e){
			
			var productId = $(this).data('id');
			SwalDelete(productId);
			e.preventDefault();
		});
		
	});
	
	function SwalDelete(productId){
		
		swal({
			title: 'Estas seguro?',
			text: "Se borrará de forma permanente!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Si, bórralo!',
			showLoaderOnConfirm: true,
			  
			preConfirm: function() {
			  return new Promise(function(resolve) {
			       
			     $.ajax({
			   		url: '../servidor/EliminaUsu.php',
			    	type: 'POST',
			       	data: 'delete='+productId,
			       	dataType: 'json'
			     })
			     .done(function(response){
			     	swal('Eliminado!', response.message, response.status);
					readProducts();
			     })
			     .fail(function(){
			     	swal('Oops...', 'Algo salió mal con ajax !', 'error');
			     });
			  });
		    },
			allowOutsideClick: false			  
		});	
		
	}
	
	function readProducts(){
		$('#load-products').load('../cliente/panel.php');	
	}
	
</script>


      </details>

   </section>



		
		

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

		
		
</body>
</html>