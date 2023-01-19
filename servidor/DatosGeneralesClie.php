<?php

include '../servidor/conexion.php';
//Recivir los datos y alamacenarlos en variables

$apaterno=$_POST['apaterno'];
$amaterno=$_POST['amaterno'];
$nombres=$_POST['nombres'];
$dom=$_POST['dom'];
$telp=$_POST['telp'];
$telm=$_POST['telm'];
$fecha =$_POST["naci"]; //Recibe una string en formato dd-mm-yyyy 
 $sexo=$_POST['genero']; 
 
	$naci = strtotime($fecha); //Convierte el string a formato de fecha en php
 
	$naci = date('Y-m-d',$naci); //Lo comvierte a formato de fecha en MySQL


//Consulta para insertar
$insertar="INSERT INTO datosgen(apaterno,amaterno,nombres,dom,telp,telm,naci,sexo) VALUES('$apaterno','$amaterno','$nombres','$dom','$telp','$telm','$naci','$sexo')";
//Ejecutar consulta
$resultado=mysqli_query($conn,$insertar);
echo '<script>  alert("Usuario Registrado"); window.location="../cliente/ClientePersonales.php"; </script>';
if (!$resultado) {
	   echo 'Error al resgistrarse';
} else {
	   echo 'Usuario registrado exitosamente';
}
   
mysqli_close($conn);

?>