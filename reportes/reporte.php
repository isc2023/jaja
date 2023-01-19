<?php
include ('../reportes/conexion.php');
if(isset($_POST['generar_reporte'])){
	//nombre del  archivo  y  charset
	header('Content-Type:text/csv; charset=latin1');
    header('Content-Disposition:attachment;filename="ReporteMarcas.csv"');
    //Salida del archivo
     $salida=fopen('php://output','w');
     //encabezados
     fputcsv($salida,array('ID','MARCA','DESCRIPCIÓN'));
     //consulta para  el  reporte
     $reporteCsv=$mysqli->query('select * from marca');
      while($filaR=$reporteCsv->fetch_assoc()){
      	fputcsv($salida,array($filaR['idmarca'],
      	                      $filaR['nmarca'],
      	                      $filaR['descripcionm']));
      }
}
	
?>