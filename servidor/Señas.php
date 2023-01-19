<?php
include '../servidor/conexion.php';
//Recivir los datos y alamacenarlos en variables

echo $tatto=$_POST['tattos'];
echo $cantattos=$_POST['canttatto'];
echo $cica=$_POST['cicatriz'];
echo $cantcica=$_POST['canticica'];
echo $luna=$_POST['lunar'];
echo $cantluna=$_POST['cantlunar']; 
echo $verru=$_POST['verruga'];
echo $cantverr=$_POST['cantver']; 
echo $comple=$_POST['comp'];
echo $colojos=$_POST['colojo'];
echo $colpiel=$_POST['colpie'];
echo $tcabello=$_POST['tcabel'];
echo $colcabello=$_POST['colcabe'];
echo $bigbarb=$_POST['bigbar'];

//Consulta para insertar
$insertar2="INSERT INTO señas(tattos,cantidadtatto,cicatrices,cantidadcicatriz,lunares,cantidadlun,verrujas,cantidadver,complexion,colorojos,colorpiel,tipocabello,colorcabello,bigotebarba) VALUES('$tatto',$cantattos,'$cica',$cantcica,'$luna',$cantluna,'$verru',$cantverr,'$comple','$colojos','$colpiel','$tcabello','$colcabello','$bigbarb')";
//Ejecutar consulta
$resultado=mysqli_query($conn,$insertar2);
//echo '<script> window.location="../cliente/Señales.php"; </script>';

echo $resultado;

if (!$resultado) {
	   echo 'Error al resgistrarse';
} else {
	   echo 'Usuario registrado exitosamente';
}
   
mysqli_close($conn);
?>