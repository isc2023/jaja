<?php
require_once "../servidor/conectar.php";

$nombre=$_POST['nombre'];
$dir=$_POST['dir'];
$tel=$_POST['tel'];
$tusu=$_POST['tusu'];
$correo=$_POST['correo1'];
$pass=md5($_POST['pass1']);



$insertar="INSERT INTO usuarios(nombrec,direccion,telefono,tusu,correo,contra) VALUES('$nombre','$dir','$tel','$tusu','$correo','$pass')";

$resultado=mysqli_query($conexion,$insertar);
   echo '<script> window.location="../index.php"; </script>';
   
if (!$resultado) {
	   echo 'Error al resgistrarse';
} else {
	   echo 'Usuario registrado exitosamente';
}
   
mysqli_close($conexion);
?>