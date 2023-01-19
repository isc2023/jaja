<?php
require ('conexion.php');
require ('lib/PHPExcel.php');
//NOMBRE DEL  ARCHIVO  Y  EL  CHARSET
header('Content-Type:text/csv; charset=latin1');
header('Content-Disposition:attachment;filename="ReporteProductos.csv"');
//salida  del archivo
$salida=fopen('php://output','w');
//encabezados
fputcsv($salida,array('id',utf8_decode('Descripción'),'Precio'));
//realizar la consulta
$reporteCsv=mysqli_query($conexion,'select * from producto');
while($filaR=$reporteCsv->fetch_assoc()){
	fputcsv($salida, array($filaR['codproducto'],$filaR['descripcion'],$filaR['precio']));
}
?>