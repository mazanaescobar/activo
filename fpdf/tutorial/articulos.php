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
$pdf->Cell(10,20,'Informe de reguistros de activo fijo');
$pdf->Ln(23);
$pdf->Cell(80, 8, '', 0);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20,10,'lista de artítulos');
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(6, 8, '', 0);
$pdf->Cell(23, 6, 'Ubicación', 1);
$pdf->Cell(25, 6, 'Artículo', 1);
$pdf->Cell(16, 6, 'Correlativo', 1);
$pdf->Cell(30, 6, 'Marca', 1);
$pdf->Cell(30, 6, 'Modelo', 1);
$pdf->Cell(25, 6, 'Encargado', 1);
$pdf->Cell(14, 6, 'Precio', 1);
$pdf->Cell(16, 6, 'FCompra', 1);
$pdf->Ln(6);
$pdf->SetFont('Arial', '', 8);

$articulos= mysql_query("SELECT * FROM activo_fojo");
$item = 0;
$totaluni = 0;
while($articulos2 = mysql_fetch_array($articulos)){
	$item = $item+1;
	$totaluni = $totaluni + $articulos2['precio'];
	$pdf->Cell(6, 8, '', 0);
	
	$pdf->Cell(23, 8,$articulos2['infra'], 1);
	$pdf->Cell(25, 8, $articulos2['bien'], 1);
	$pdf->Cell(16, 8,$articulos2['correlativo'], 1);
	$pdf->Cell(30, 8,$articulos2['marca'], 1);
	$pdf->Cell(30, 8,$articulos2['modelo'], 1);
	$pdf->Cell(25, 8,$articulos2['encargado'], 1);
	$pdf->Cell(14, 8,'$ '.$articulos2['precio'], 1);
	$pdf->Cell(16, 8,$articulos2['fecha_compra'], 1);
	$pdf->Ln(8);
}
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(149,8,'',0);
$pdf->Cell(18,8,'$ '.$totaluni,0);
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
