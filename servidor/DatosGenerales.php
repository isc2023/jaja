<?php

include '../servidor/conexion.php';
//Recivir los datos y alamacenarlos en variables

$apaterno=$_POST['apaterno'];
$amaterno=$_POST['amaterno'];
$nombres=$_POST['nombres'];
$direccion=$_POST['dir'];
$codigopos=$_POST['cp_response'];
$colonias=$_POST['list_colonias'];
$asentamiento=$_POST['tipo_asentamiento'];
$municipio=$_POST['municipio'];
$estado=$_POST['estado'];
$ciudad=$_POST['ciudad'];
$pais=$_POST['pais'];
$telp=$_POST['telp'];
$telm=$_POST['telm'];
$fecha =$_POST["naci"]; //Recibe una string en formato dd-mm-yyyy 
 $sexo=$_POST['genero']; 
 
	$naci = strtotime($fecha); //Convierte el string a formato de fecha en php
 
	$naci = date('Y-m-d',$naci); //Lo comvierte a formato de fecha en MySQL


//Consulta para insertar
$insertar="INSERT INTO datosgen(apaterno,amaterno,nombres,direccion,codigopostal,colonia,tasentamiento,municipio,estado,ciudad,pais,telp,telm,naci,sexo) VALUES('$apaterno','$amaterno','$nombres','$direccion',$codigopos,'$colonias','$asentamiento','$municipio','$estado','$ciudad','$pais','$telp','$telm','$naci','$sexo')";

//Ejecutar consulta
$resultado=mysqli_query($conn,$insertar);
echo '<script> 
alert("Usuario Registrado Correctamente");
window.location="../cliente/Personales.php";
 </script>';
if (!$resultado) {
	   echo 'Error al resgistrarse';
} else {
	   echo 'Usuario registrado exitosamente';
}
   
mysqli_close($conn);

?>