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
    
    $this->Cell(15,10,'ID',1,0,'C',0);
    $this->Cell(50,10,'MARCA',1,0,'C',0);
    $this->Cell(120,10,'DESCRIPCION',1,0,'C',0);
    $this->Ln(10);
    
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

require('../reportes/conexion.php');
$consulta="select * from marca";
$resultado=$mysqli->query($consulta);


$pdf = new PDF();
$pdf->AddPage();  //agregar  una  pagina
$pdf->SetFont('Arial','B',12);  //edición al formato

while($row=$resultado->fetch_assoc()){
	$pdf->Cell(15,10,$row['idmarca'],1,0,'C',0);
	$pdf->Cell(50,10,$row['nmarca'],1,0,'C',0);
	$pdf->Cell(120,10,$row['descripcionm'],1,0,'C',0);
	$pdf->Ln(10);
}



$pdf->Output();  //nos permite la  salida 

?>