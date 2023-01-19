<?php
include '../servidor/conexion.php';
//Recivir los datos y alamacenarlos en variables
$altura=$_POST['altura'];
$peso=$_POST['peso'];
$imc=$_POST['resultado'];



//Consulta para insertar
$insertar="INSERT INTO atropologicos(altura,peso,imc) VALUES('$altura','$peso','$imc')";
//Ejecutar consulta
$resultado=mysqli_query($conn,$insertar);
echo '<script> window.location="../cliente/Usuarios_Administrador.php"; </script>';
if (!$resultado) {
	   echo 'Error al resgistrarse';
} else {
	   echo 'Usuario registrado exitosamente';
}
   
mysqli_close($conn);

?>