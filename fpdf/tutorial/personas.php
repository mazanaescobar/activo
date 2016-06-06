<?php
require('../fpdf.php');
require("connect_db.php");

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Image('uls.jpg',15,8,30,20,'jpg');
$pdf->Cell(35, 8, '', 0);
$pdf->Cell(20,5,'UNIVERSIDAD LUTERANA SALVADOREÑA');
$pdf->SetFont('Arial','',10);
$pdf->Cell(10,20,'Informe de encargados');
$pdf->Ln(23);
$pdf->Cell(80, 8, '', 0);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20,10,'lista de encargados');
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(10, 8, '', 0);
$pdf->Cell(25, 6, 'ID de encargado', 1);
$pdf->Cell(35, 6, 'Cargo', 1);
$pdf->Cell(30, 6, 'Nombre', 1);
$pdf->Cell(30, 6, 'Apellido', 1);
$pdf->Cell(20, 6, 'Teléfono', 1);
$pdf->Cell(30, 6, 'ID de infraestructura', 1);
$pdf->Ln(6);
$pdf->SetFont('Arial', '', 8);

$articulos= mysql_query("SELECT * FROM personas");


while($articulos2 = mysql_fetch_array($articulos)){
	
	$pdf->Cell(10, 8, '', 0);
	
	$pdf->Cell(25, 8,$articulos2['idpersonas'], 1);
	$pdf->Cell(35, 8, $articulos2['cargo'], 1);
	$pdf->Cell(30, 8,$articulos2['nombre'], 1);
	$pdf->Cell(30, 8,$articulos2['apellido'], 1);
	$pdf->Cell(20, 8,$articulos2['telefono'], 1);
	$pdf->Cell(30, 8,$articulos2['edificio'], 1);
		$pdf->Ln(8);
}
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(149,8,'',0);

$pdf->Ln(8);
$pdf->Cell(70, 40, 'F:_________________________', 0);
$pdf->Cell(70, 40, 'F:_________________________', 0);
$pdf->Cell(70, 40, 'F:_________________________', 0);
$pdf->Ln(8);
$pdf->Cell(70, 40, '                Contador', 0);
$pdf->Cell(70, 40, '                Reprecentante', 0);
$pdf->Cell(70, 40, '                Auditor', 0);


$pdf->Output();
?>
