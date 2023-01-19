<?php
require('../reportes/fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();  //agregar  una  pagina
$pdf->SetFont('Arial','B',16);  //edición al formato
$pdf->Cell(40,10,utf8_decode('¡Hola, Mundo!')); //agregar  una linea ancho  40 y alto 10
$pdf->ln(10);
$pdf->SetFont('Arial','I',12);
$pdf->Cell(40,10,utf8_decode('Cristian Ramos Sanchez'));
$pdf->ln(20);
$pdf->Cell(40,10,utf8_decode('Carlos Alberto Martinez'));
$pdf->AddPage();
$pdf->Cell(40,10,utf8_decode('Vianney Morales Zamora'));
$pdf->AddPage();
$pdf->Cell(40,10,utf8_decode('Cristian Ramos Sanchez'));
$pdf->Output();  //nos permite la  salida 

?>