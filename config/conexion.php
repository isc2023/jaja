<?php
include_once("global.php");
$conexion=mysqli_connect(BD_HOST,DB_USERNAME,DB_PASSWORD,BD_NAME);
if(mysqli_connect_errno()){
	echo "No se pudo conectar a la  base de  datos";
	exit();
}
mysqli_select_db($conexion,BD_NAME) or die("No se encuentra la  base de  datos");
mysqli_set_charset($conexion,"urf8");
?>