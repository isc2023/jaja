<?php
require('../reportes/fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    //$this->Image('logo.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(60,10,'REPORTE DE MARCAS',0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','B',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$pdf = new PDF();
$pdf->AddPage();  //agregar  una  pagina
$pdf->SetFont('Arial','B',16);  //edición al formato
$pdf->Cell(40,10,utf8_decode('¡Hola, Mundo!')); //agregar  una linea ancho  40 y alto 10
$pdf->Output();  //nos permite la  salida 

?>