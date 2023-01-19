<?php
require "../reportes/phpExcel/Classes/PHPExcel.php";
$objPHPExcel=new PHPExcel();
$objPHPExcel->getProperties()
->setCreator('VMZ')
->setTitle('Ejemplo 1 Excel')
->setDescription('Generación de Ejercicio de excel')
->setKeywords('excel php')
->setCategory('Reportes');

$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setTitle('ISC');
$objPHPExcel->getActiveSheet()->setCellValue('A1','EJEMPLO 1 DE EXCEL');
$objPHPExcel->getActiveSheet()->setCellValue('A2','CAMPOS');
$objPHPExcel->getActiveSheet()->setCellValue('A3','Vianney');
$objPHPExcel->getActiveSheet()->setCellValue('A4',12456.566);
$objPHPExcel->getActiveSheet()->setCellValue('A5',TRUE);
$objPHPExcel->getActiveSheet()->setCellValue('A6','=CONCATENATE(A3,"",A5)');


header('Content-Type:application/vnd.ms-excel');
header('Content-Disposition:attachment;filename="ITSSMT.xls"');
header('Cache-Control:max-age=0');

$objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel5');
$objWriter->save('php://output');
?>