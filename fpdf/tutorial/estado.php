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
$pdf->Cell(10,20,'Informe de reparaciones de artículos');
$pdf->Ln(23);
$pdf->Cell(80, 8, '', 0);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20,10,'lista de reparaciones');
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 8);
//$pdf->Cell(1, 8, '', 0);
$pdf->Cell(5, 6, 'ID', 1);
$pdf->Cell(13, 6, 'Artículo', 1);
$pdf->Cell(50, 6, 'Problema', 1);
$pdf->Cell(17, 6, 'Ingreso', 1);
$pdf->Cell(12, 6, 'Horas', 1);
$pdf->Cell(10, 6, 'costo', 1);
$pdf->Cell(17, 6, 'salida', 1);
$pdf->Cell(50, 6, 'problema', 1);
$pdf->Cell(15, 6, 'ID técnico', 1);
$pdf->Ln(6);
$pdf->SetFont('Arial', '', 8);

$articulos= mysql_query("SELECT * FROM estado");
$item = 0;
$totaluni = 0;
while($articulos2 = mysql_fetch_array($articulos)){
	$item = $item+1;
	$totaluni = $totaluni + $articulos2['costo'];
	//$pdf->Cell(1, 8, '', 0);
	
	$pdf->Cell(5, 8,$articulos2['idestado'], 1);
	$pdf->Cell(13, 8,$articulos2['articulo'], 1);
	$pdf->Cell(50, 8, utf8_decode($articulos2['asunto']), 1);
	$pdf->Cell(17, 8,$articulos2['fecha_in'], 1);
	$pdf->Cell(12, 8,$articulos2['horas'], 1);
	$pdf->Cell(10, 8,'$ '.$articulos2['costo'], 1);
	$pdf->Cell(17, 8,$articulos2['fecha_sal'], 1);
	$pdf->Cell(50, 8,utf8_decode($articulos2['problema']), 1);
	$pdf->Cell(15, 8,$articulos2['tecnico'], 1);
	$pdf->Ln(8);
}
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(80,8,'',0);
$pdf->Cell(18,8,'Costo total $ '.$totaluni,0);
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
