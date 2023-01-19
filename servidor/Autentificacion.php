<?php
require_once "../servidor/conectar.php";
$correo=$_POST['correo'];
$passw=md5($_POST['pass']);
$buscar="SELECT * FROM usuarios WHERE correo='$correo' and contra='$passw'";
$resultado=mysqli_query($conexion,$buscar);
if($resultado->num_rows>0){
	while($datos=$resultado->fetch_assoc()){
		if($datos['tusu']=='Administrador'){
			header("Location:../cliente/pAdministrador.php");
			session_start();
			$_SESSION['nombre']=$datos['nombrec'];
		}
		else if($datos['tusu']=='Encargado'){
			header("Location:../cliente/pCliente.php");
			session_start();
			$_SESSION['nombreC']=$datos['nombrec'];
		}
		else if($datos['tusu']=='Empleado'){
			header("Location:../Empleado/pEmpleado.php");
			session_start();
			$_SESSION['nombreC']=$datos['nombrec'];
		}
		
	}
	
}
else{
	echo '<script>
		alert("EL USUARIO NO EXISTE");
		window.location=" ../index.php";
		
	</script>';
}



?>