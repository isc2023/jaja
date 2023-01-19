<?php
require('lib/fpdf/fpdf.php');
class PDF extends FPDF{
//CABECERA DE  LA PAGINA
	function Header(){
		//logo
		$this->Image('../img/logo.png',10,8,33);
		//tipo dde fuente 
		$this->SetFont('Arial','B',12);
		//movernos a  la  derecha
		$this->Cell(60);
		//titulo
		$this->Cell(60,10,'REPORTE DE REGISTROS DE CADÁVERES',0,0,'C');
		//SALTO DE  LINEA
		$this->Ln(20);
		$this->Cell(15,10,'ID',1,0,'C',0);
		$this->Cell(45,10,utf8_decode('APATERNO'),1,0,'C',0);   
		$this->Cell(45,10,'AMATERNO',1,0,'C',0);  
		$this->Cell(55,10,'NOMBRE(S)',1,0,'C',0);
		//SALTO DE  LINEA
		$this->Ln(10);
	}

//PIE DE PAGINA
	function Footer(){
		//posicion : a  1.5 cm del final
		$this->setY(-15);
		//Tipo letra
		$this->SetFont('Arial','B',8);
		//NUMERO DE  PAGINA
		$this->Cell(0,10,'pagina '.$this->PageNo().' OMP & BVV',0,0,'C');
	}
}

require ('../servidor/conectar.php');
$consulta="select * from datosgen";
$resultado=mysqli_query($conexion,$consulta);
$pdf =new PDF();
$pdf->AddPage(); //se agrega  una pagina
$pdf->SetFont('Arial','B',10); //formato del texto
while($row=$resultado->fetch_assoc())
{
	$pdf->Cell(15,10,$row['id'],1,0,'C',0);
	$pdf->Cell(45,10,$row['apaterno'],1,0,'C',0);
	$pdf->Cell(45,10,$row['amaterno'],1,0,'C',0);
	$pdf->Cell(55,10,$row['nombres'],1,0,'C',0);
	
	$pdf->Ln(10);
}
$pdf->Output(); //permite la  salida de  datos

?>