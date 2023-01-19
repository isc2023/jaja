<?php
include '../servidor/conexion.php';
//Recivir los datos y alamacenarlos en variables

$altura=$_POST['altura'];
$peso=$_POST['peso'];
$imc=$_POST['imc'];
$talla=$_POST['talla'];


//Consulta para insertar
$insertar="INSERT INTO atropologicos(altura,peso,imc,talla) VALUES('$altura','$peso','$imc','$talla')";
//Ejecutar consulta
$resultado=mysqli_query($conn,$insertar);
echo '<script> alert("Datos registrados");window.location="../cliente/ClienteAntropometricos.php"; </script>';
if (!$resultado) {
	   echo 'Error al resgistrarse';
} else {
	   echo 'Usuario registrado exitosamente';
}
   
mysqli_close($conn);

?>