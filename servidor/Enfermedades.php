<?php

include '../servidor/conexion.php';
//Recivir los datos y alamacenarlos en variables

echo $enfermedades=$_POST['enfermedad'];
echo $especificar=$_POST['espenfer'];

 

//Consulta para insertar
$insertar="INSERT INTO enfermedades(enferme,especif) VALUES('$enfermedades','$especificar')";
//Ejecutar consulta
$resultado=mysqli_query($conn,$insertar);
echo '<script> window.location="../cliente/Enfermedad.php"; </script>';
if (!$resultado) {
	   echo 'Error al resgistrarse';
} else {
	   echo 'Usuario registrado exitosamente';
}
   
mysqli_close($conn);

?>