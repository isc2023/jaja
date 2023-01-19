<?php

include "../Servidor/conectar.php";
if (!empty($_POST)) {
  $alert = "";
  if (empty($_POST['nombrec']) || empty($_POST['correo']) || empty($_POST['direccion']) || empty($_POST['tusu'])) {
    $alert = '<p class"error">Todo los campos son requeridos</p>';
  } else {
    
    $nombre = $_POST['nombrec'];
    $correo= $_POST['correo'];
    $direccion = $_POST['direccion'];
    $tel = $_POST['telefono'];
    $tusu = $_POST['tusu'];
    $password = $_POST['contra'];
   

    $result = 0;
    if (is_numeric($dni) and $dni != 0) {

      $query = mysqli_query($conexion, "SELECT * FROM usuarios where id = '$id'");
      $result = mysqli_fetch_array($query);
      $resul = mysqli_num_rows($query);
    }

    if ($resul >= 1) {
      $alert = '<p class"error">El dni ya existe</p>';
    } else {
      if ($id == '') {
        $id = 0;
      }
      $sql_update = mysqli_query($conexion, "UPDATE usuarios SET  nombrec = '$nombre' , correo = '$correo', direccion = '$direccion', tusu = '$tusu', telefono ='$tel', contra = '$password' WHERE id = $id");

      if ($sql_update) {
        $alert = '<p class"exito">Cliente Actualizado correctamente</p>';
      } else {
        $alert = '<p class"error">Error al Actualizar el Cliente</p>';
      }
    }
  }
}
// Mostrar Datos

if (empty($_REQUEST['id'])) {
  header("Location: ../usuariosAdm.php");
}
$idcliente = $_REQUEST['id'];
$sql = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id = $id");
$result_sql = mysqli_num_rows($sql);
if ($result_sql == 0) {
  header("Location: ../usuariosAdm.php");
} else {
  while ($data = mysqli_fetch_array($sql)) {
    $idcliente = $data['id'];
    $nombre = $data['nombrec'];
    $correo = $data['correo'];
    $direccion = $data['direccion'];
    $tel = $_POST['telefono'];
    $tusu = $_POST['tusu'];
    $password = $_POST['contra'];
   

    
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
                <?php echo isset($alert) ? $alert : ''; ?>
                <input type="hidden" name="id" value="<?php echo $idcliente; ?>">
               
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" placeholder="Ingrese Nombre" name="nombre" class="form-control" id="nombre" value="<?php echo $nombre; ?>">
                </div>
                <div class="form-group">
                  <label for="correo">Correo</label>
                  <input type="text" placeholder="Ingrese Correo" name="correo" class="form-control" id="correo" value="<?php echo $correo; ?>">
                </div>
                <div class="form-group">
                  <label for="direccion">Dirección</label>
                  <input type="text" placeholder="Ingrese Direccion" name="direccion" class="form-control" id="direccion" value="<?php echo $direccion; ?>">
                </div>
                <div class="form-group">
                  <label for="tel">Telefono</label>
                  <input type="text" placeholder="Ingrese Direccion" name="tel" class="form-control" id="tel" value="<?php echo $tel; ?>">
                </div>
                <div class="form-group">
                  <select class="form-select" id="tusu" name="tusu">
			  		<option selected>Tipo de Usuario:</option>
			  		<option value=Administrador>Administrador</option>
			  		<option value=Encargado>Encargado</option>
			  		<option value=Empleado>Empleado</option>
			  	</select>
                </div>
                 <div class="form-group">
                 <label for="pasword">Contraseña</label>
                  <input type="password" placeholder="Ingrese contraseña" name="password" class="form-control" id="password" value="<?php echo $password; ?>">
                 </div>
                
                <button type="submit" class="btn btn-primary"><i class="fas fa-user-edit"></i> Actualizar Usario</button>
              </form>
            </div>
          </div>


        </div>
        <!-- /.container-fluid -->

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