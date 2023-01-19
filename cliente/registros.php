<?php
     $conexion=mysqli_connect('localhost','root','','registros');

 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mostrar datos</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="../css/estilo2.css" rel="stylesheet"/>
		
		<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="../assets/swal2/sweetalert2.min.css" type="text/css" />


    <!-- hoja  de  estilo en la carpeta del proyecto  se  habilitan cuando  no haya  internet
     <link rel="stylesheet" href="css/bootstrap.min.css"/>-->
    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">-->

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
			
			
			
	<!--CUERPO INTERFAZ   -->
	
	
      <div class="container">
	<div class="container-fluid" style="background-color:#ffffff">
			<H3>REGISTROS</H3>
	
	
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
									<th scope="col">APELLIDO PATERNO</th>
									<th scope="col">APELLIDO MATERNO</th>
									<th scope="col">NOMBRE(S)</th>
									
								</tr>
							</thead>
							<tbody>
								<?php
						include("../servidor/conectar.php");
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
					
				</div> <!--cierra columna 1-->
	
	<!--<table class="table" border="1" align="center">
	<thead class="thead-dark" style="background-color:#a0d3e6">
		<tr>
			<td><p style="color: #000000">id</p></td>
			<td><p style="color: #000000">apaterno</p></td>
			<td><p style="color: #000000">amaterno</p></td>
			<td><p style="color: #000000">nombres</p></td>
			<td><p style="color: #000000">OPERACION</p></td>
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
		    
		    
		    <td>
		    <div class="table__item">
		    <a href="editar_usuario.php?id=<?php echo $data['id']; ?>" class="btn btn-success"><i class='fas fa-edit'></i> Editar</a> |
		    <form action="../servidor/Eliminar.php?id=<?php echo $mostrar['id']; ?>" method="post" class="confirmar d-inline">
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
	</div>-->
	
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
		
		$(document).on('click', '#delete_registro', function(e){
			
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
			   		url: '../servidor/EliminaRegistro.php',
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
		$('#load-products').load('../cliente/panel2.php');	
	}
	
</script>

</div>
</div> <br>
	
		<!--PIE DE  PÁGINA -->   
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
 
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>-->
   
	</body>
</html>