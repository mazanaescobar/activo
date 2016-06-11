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
$pdf->Cell(10,20,'Informe de Proveedores');
$pdf->Ln(23);
$pdf->Cell(80, 8, '', 0);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20,10,'lista de proveedores');
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(10, 8, '', 0);
$pdf->Cell(10, 6, 'ID', 1);
$pdf->Cell(30, 6, 'nombre', 1);
$pdf->Cell(30, 6, 'apellido', 1);
$pdf->Cell(20, 6, 'telefono', 1);
$pdf->Cell(40, 6, 'empresa', 1);
$pdf->Cell(40, 6, 'email', 1);
$pdf->Ln(6);
$pdf->SetFont('Arial', '', 8);

$articulos= mysql_query("SELECT * FROM proveedores");


while($articulos2 = mysql_fetch_array($articulos)){
	
	$pdf->Cell(10, 8, '', 0);
	
	$pdf->Cell(10, 8,$articulos2['idproveedores'], 1);
	$pdf->Cell(30, 8,utf8_decode($articulos2['nombre']), 1);
	$pdf->Cell(30, 8,utf8_decode($articulos2['apellido']), 1);
	$pdf->Cell(20, 8, $articulos2['telefono'], 1);
	$pdf->Cell(40, 8,utf8_decode($articulos2['empresa']), 1);
	$pdf->Cell(40, 8,utf8_decode($articulos2['email']), 1);
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
