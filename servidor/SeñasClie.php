<?php
include '../servidor/conexion.php';
//Recivir los datos y alamacenarlos en variables

$tattos=$_POST['tattos'];
$esptatt=$_POST['esptat'];
$cicatri=$_POST['cica'];
$espcica=$_POST['espcica'];
$lunares=$_POST['lunar'];
$espluna=$_POST['esplun'];
$verruja =$_POST["verruja"]; //Recibe una string en formato dd-mm-yyyy 
 $espverru=$_POST['espverr']; 
 

//Consulta para insertar
$insertar="INSERT INTO señas(tattos,imgtat,cicatrices,imgcica,lunares,imglun,verrujas,imgver) VALUES('$tattos','$esptatt','$cicatri','$espcica','$lunares','$espluna','$verruja',' $espverru')";
//Ejecutar consulta
$resultado=mysqli_query($conn,$insertar);
echo '<script> window.location="../cliente/ClienteSeñales.php"; </script>';
if (!$resultado) {
	   echo 'Error al resgistrarse';
} else {
	   echo 'Usuario registrado exitosamente';
}
   
mysqli_close($conn);
?>