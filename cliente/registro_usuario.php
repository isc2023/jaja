<?php
session_start();

require_once "../config/conexion.php";
if(!empty($_POST)){
	$alert="";
	if(empty($_POST['usuario']) || empty($_POST['clave']) || empty($_POST['rol'])){
		$alert='
		<div class="alert alert-primary" role="alert">
		  	Todos los datos son Obligatorios
	    </div>';
	}else{
		$user=$_POST['usuario'];
		$clave=$_POST['clave'];
		$rol=$_POST['rol'];
		$query=mysqli_query($conexion, "SELECT * FROM usuarios where nombreusu='$user'");
		$result=mysqli_fetch_array($query);
		if($result>0){
			$alert='<div class="alert alert-danger" role="alert">
		  				El usuario ya existe
	    			</div>';
		}else{
			$query_insert=mysqli_query($conexion,"INSERT INTO usuarios(nombreusu, pass,tipousu) values('$user', '$clave','$rol')");
			if($query_insert){
					$alert='
					<div class="alert alert-primary" role="alert">
		  					Usuario registrado
	    			</div>';
			}
			else{
				$alert='
				<div class="alert alert-danger" role="alert">
		  			   Error al insertar usuario
	   		 </div>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../css/estilo2.css" rel="stylesheet"/>
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
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
<!---div  general -->
<div class="container">
<!--empieza el acordeon-->
<div class="accordion accordion-flush" id="accordionFlushExample">
<!--primer acordeon -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      REGISTRAR USUARIOS
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
         <!-- Begin Page Content -->
<div class="container-fluid" >
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="text-align: center;">
        <h1 class="h3 mb-0 text-gray-800" style="text-align: center;padding-left: 800px; padding-top: 30px">Registro de Usuarios</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-6 m-auto">
            <form action="" method="post" autocomplete="off">
                <?php echo isset($alert) ? $alert : ''; ?>
                <div class="form-group">
                    <label for="usuario">Nombre de Usuario:</label>
                    <input type="text" class="form-control" placeholder="Ingrese Usuario" name="usuario" id="usuario">
                </div>
                <div class="form-group">
                    <label for="clave">Contraseña :</label>
                    <input type="password" class="form-control" placeholder="Ingrese Contraseña" name="clave" id="clave">
                </div>
                <div class="form-group">
                    <label>Rol</label>
                    <select name="rol" id="rol" class="form-control">
                        <?php
                        $query_rol = mysqli_query($conexion, " select  * from tiposusu");
                        mysqli_close($conexion);
                        $resultado_rol = mysqli_num_rows($query_rol);
                        if ($resultado_rol > 0) {
                            while ($rol = mysqli_fetch_array($query_rol)) {
                        ?>
                                <option value="<?php echo $rol['idtipousu']; ?>"><?php echo $rol['usuario']; ?></option>
                        <?php

                            }
                        }

                        ?>
                    </select></div>
                   <div style="text-align: center;"> 
                        <input type="submit" value="Guardar Usuario" class="btn btn-primary" >
                   </div>
            </form>
        </div>
    </div>
</div>
<br>
<!-- /.container-fluid -->       

      </div>
    </div>
  </div>

<!--segundo acordeon -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      BUSCAR USUARIOS
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
 <!--bloque  listar  usuarios -->

<!-- Begin Page Content -->
<div class="container">

    <!-- Page Heading -->
   

    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE USUARIO</th>
                            <th>CONTRASEÑA</th>
                            <th>TIPO DE  USUARIO</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../config/conexion.php";
                        $query = mysqli_query($conexion, "SELECT * FROM usuarios");
                        $result = mysqli_num_rows($query);
                        if ($result > 0) {
                            while ($data = mysqli_fetch_assoc($query)) { ?>
                                <tr>
                                    <td><?php echo $data['id']; ?></td>
                                    <td><?php echo $data['nombreusu']; ?></td>
                                    <td><?php echo $data['pass']; ?></td>
                                    <td><?php echo $data['tipousu']; ?></td>
                                    <?php if ($_SESSION['rol'] == 1) { ?>
                                    <td>
                                        <a href="editar_usuario.php?id=<?php echo $data['id']; ?>" class="btn btn-success"><i class='fas fa-edit'></i> Editar</a>
                                        <form action="eliminar_usuario.php?id=<?php echo $data['id']; ?>" method="post" class="confirmar d-inline">
                                            <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'>Eliminar</i> </button>
                                        </form>
                                    </td>
                                    <?php } ?>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>

                </table>
            </div>

        </div>
    </div>


</div>
<!-- /.container-fluid -->


<!-- fin  bloque  listar  usuarios -->

      </div>
    </div>
  </div>


<!--tercer acordeon -->
   <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
   ACTUALIZAR USUARIOS
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
    </div>
  </div>


<!--cuarto acordeon -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
      ELIMINAR USUARIOS
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>


</div>


</div><!--div  general -->








<?php
include_once("includes/pie.php");
?>