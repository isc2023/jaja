<?php

include '../servidor/conexion.php';
//Recivir los datos y alamacenarlos en variables

$enfermedades=$_POST['enfermedad'];
$especificar=$_POST['espenfer'];

 

//Consulta para insertar
$insertar="INSERT INTO enfermedades(enferme,especif) VALUES('$enfermedades','$especificar')";
//Ejecutar consulta
$resultado=mysqli_query($conn,$insertar);
echo '<script> window.location="../cliente/ClienteEnfermedad.php"; </script>';
if (!$resultado) {
	   echo 'Error al resgistrarse';
} else {
	   echo 'Usuario registrado exitosamente';
}
   
mysqli_close($conn);

?>