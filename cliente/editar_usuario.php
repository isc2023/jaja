<?php

include "../Servidor/conectar.php";
if (!empty($_POST)) {
  $alert = "";
  if (empty($_POST['nombrec']) || empty($_POST['correo']) || empty($_POST['direccion']) || empty($_POST['tusu']) || empty($_POST['telefono']) || empty($_POST['contra'])) {
  	
    $alert = '<p class"error">Todo los campos son requeridos</p>';
  } else {
    $idusuario = $_GET['id'];
    $nombre=$_POST['nombre'];
$dir=$_POST['dir'];
$tel=$_POST['tel'];
$tusu=$_POST['tusu'];
$correo=$_POST['correo'];
$password=md5($_POST['pass']);

    $sql_update = mysqli_query($conexion, "UPDATE usuarios SET nombrec = '$nombre', correo = '$correo' , direccion = '$dir', tusu= '$tusu', telefono ='$tel', contra = '$password' WHERE id = $id");
    
    if ($sql_update) {
        $alert = '<p>Cliente Actualizado correctamente</p>';
      } else {
        $alert = '<p>Error al Actualizar el Cliente</p>';
      }
    ?>
    	<!--<script>
			Swal.fire(
			'¡Usuario Actualizado!',
			'success'
			);
    	</script>-->
    <?php
	header("Location:usuariosAdm.php");
  }
}

// Mostrar Datos

if (empty($_REQUEST['id'])) {
  header("Location:usuariosAdm.php");
}
$idusuario = $_REQUEST['id'];
$sql = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id = $idusuario");
$result_sql = mysqli_num_rows($sql);
if ($result_sql == 0) {
	header("Location:usuariosAdm.php");
} else {
  if ($data = mysqli_fetch_array($sql)) {
    $idCliente = $data['id'];
    $nombre = $data['nombrec'];
    $correo = $data['correo'];
    $dir = $data['direccion'];
    $tel = $data['telefono'];
    $tusu = $data['tusu'];
    $password = $data['contra'];
    /*$tusu = $data['tusu'];*/
     /*if($rol == 'Encargado'){
                $rol = `
                <select class="form-select" id="tusu" name="tusu">
			  		<option selected>Tipo de Usuario:</option>
			  		<option value=Administrador>Administrador</option>
			  		<option value=Encargado>Encargado</option>
			  		<option value=Cliente>Cliente</option>
			  	</select>
                `;
            }else if($rol == 'Empleado'){
                $rol = `
                <select class="form-select" id="tusu" name="tusu">
			  		<option selected>Tipo de Usuario:</option>
			  		<option value=Administrador>Administrador</option>
			  		<option value=Encargado>Encargado</option>
			  		<option value=Empleado>Empleado</option>
			  	</select>
                `;
            }else if($rol == 'Administrador'){
                $rol = `
                <select class="form-select" id="tusu" name="tusu">
			  		<option selected>Tipo de Usuario:</option>
			  		<option value=Administrador>Administrador</option>
			  		<option value=Encargado>Encargado</option>
			  		<option value=Empleado>Empleado</option>
			  	</select>
                `;
            }*/
            
        
  }
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="../css/estilo2.css" rel="stylesheet"/>
		
		
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
						<a href="../cliente/usuariosAdm.php" style="color: #000000">USUARIOS</a> </li>
					






				</ul>
			</div>


		</header>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"> </script>
<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 m-auto">
      <form class="" action="" method="post">
      <div class="container" style="text-align: center;padding: 40px; background-color:#a0d3e6">
<h5 class="modal-title" id="exampleModalLabel">EDITAR INFORMACIÓN DE USUARIO</h5>
        <?php echo isset($alert) ? $alert : ''; ?>
        <input type="hidden" name="id" value="<?php echo $idusuario; ?>">
        <div class="form-group">
          <label for="nombre">Nombre</label>
		  <input type="text" placeholder="Ingrese nombre" class="form-control" name="nombre" id="nombre" required="" pattern="[a-z A-Z]+" value="<?php echo $nombre; ?>">

        </div>
        <div class="form-group">
          <label for="correo">Correo</label>
          <input type="text" placeholder="Ingrese correo" class="form-control" name="correo" id="correo" required="" value="<?php echo $correo; ?>">

        </div>
        <div class="form-group">
          <label for="dir">Direccion</label>
		  <input type="text" placeholder="Ingrese usuario" class="form-control" name="dir" id="dir" required="" value="<?php echo $dir; ?>">

        </div>
       
        <div class="form-group">
                  <label for="tel">Telefono</label>
                  <input type="text" placeholder="Ingrese Direccion" name="tel" class="form-control" id="tel" value="<?php echo $tel; ?>">
                  </div>
                  <div class="form-group">
					<label for="tusu">Rol</label>
					<select name="tusu" id="tusu" class="form-control">
						<option value="Administrador" <?php
						if ($tusu == "Administrador") {
							echo "selected";
						}
						?>>Administrador</option>
						
						<option value="Encargado" <?php
						if ($tusu == "Encargado") {
							echo "selected";
						}
						?>>Encargado</option>
						
						<option value="Empleado" <?php
						if ($tusu == "Empleado") {
							echo "selected";
						}
						?>>Empleado</option>
					</select>
				</div>
                  
                  <div class="form-group">
                 <label for="pasword">Contraseña</label>
                  <input type="password" placeholder="Ingrese contraseña" name="password" class="form-control" id="password" value="<?php echo $password; ?>">
                 </div>
                 
		<!--<button type="submit" class="btn btn-outline-success" onclick="Swal.fire('Usuario Actualizado'")><i class="fas fa-user-edit"></i> Actualizar Usuario</button>-->
		
		<button type="submit" class="btn btn-outline-success"><i class="fas fa-user-edit"></i> Actualizar Usuario</button>
		<br>
      </form>
    </div>
  </div>
</div>

<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="assets/swal2/sweetalert2.min.css" type="text/css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
<script src="assets/bootstrap/js/bootstrap.min.js"> </script>
<script src="assets/swal2/sweetalert2.min.js"> </script>

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
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"> </script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"> </script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"> </script>
		
	
</body>

</html>