<?php
 include_once "includes/encabezado.php";
//session_start();
?>
<div class="container" style="text-align: center">
	<h1> Bienvenido</h1>
	<h3> <?php echo $_SESSION['nombre']; ?></h3>
</div>
<div class="container" style="background-color: #C70039; color: #F7EAE7; text-align: center">


<?php if( $_SESSION['rol']==1) {?>
<nav class="nav">  <!--Menu de  administrador-->
  	<a style=" color: #F7EAE7" class="nav-link" href="registro_usuario.php">Usuarios</a>
  	<a style=" color: #F7EAE7" class="nav-link" href="#">Proveedores</a>
  	<a style=" color: #F7EAE7" class="nav-link" href="#">Productos</a>
 	<a style=" color: #F7EAE7" class="nav-link" href="#">Clientes</a>
 	<a  style=" color: #F7EAE7" class="nav-link" href="#">Ventas</a>
  	<a  style=" color: #F7EAE7" class="nav-link" href="#">Reportes</a>
  	<a style=" color: #F7EAE7" class="nav-link" href="salir.php">Salir</a>
  </nav>
<?php } else if($_SESSION['rol']==2 || $_SESSION['rol']==3){ ?>
  <nav class="nav"> <!--Menu Encargado y vendedor -->
  	<a style=" color: #F7EAE7" class="nav-link" href="#">Proveedores</a>
  	<a style=" color: #F7EAE7"class="nav-link" href="#">Productos</a>
  	<a style=" color: #F7EAE7" class="nav-link" href="#">Clientes</a>
 	 <a style=" color: #F7EAE7" class="nav-link" href="#">Ventas</a>
  	<a style=" color: #F7EAE7" class="nav-link" href="#">Reportes</a>
 	<a style=" color: #F7EAE7" class="nav-link" href="salir.php">Salir</a>
  </nav>
 <?php } else if($_SESSION['rol']==4){ ?>
  <nav class="nav"> <!--Menu  Cliente -->
 	 <a style=" color: #F7EAE7" class="nav-link" href="#">Productos</a>
 	 <a style=" color: #F7EAE7" class="nav-link" href="salir.php">Salir</a>
 </nav>
 <?php }?>
</div>

