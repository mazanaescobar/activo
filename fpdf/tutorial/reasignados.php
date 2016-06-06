<?php
require('../fpdf.php');
require("connect_db.php");

$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->Cell(40, 8, '', 0);
$pdf->SetFont('Arial','B',16);
$pdf->Image('uls.jpg',15,8,30,20,'jpg');
$pdf->Cell(35, 8, '', 0);
$pdf->Cell(20,5,'UNIVERSIDAD LUTERANA SALVADOREÑA');
$pdf->SetFont('Arial','',10);
$pdf->Cell(10,20,'Informe de artículos reasignados');
$pdf->Ln(23);
$pdf->Cell(120, 8, '', 0);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20,10,'lista de reasignados');
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(5, 8, '', 0);
$pdf->Cell(7, 6, 'ID ', 1);
$pdf->Cell(24, 6, 'Nombre', 1);
$pdf->Cell(20, 6, 'Marca', 1);
$pdf->Cell(30, 6, 'Modelo', 1);
$pdf->Cell(20, 6, 'Ubicación', 1);
$pdf->Cell(16, 6, 'Correlativo', 1);
$pdf->Cell(40, 6, 'Antiguo encargado', 1);
$pdf->Cell(50, 6, 'Motivo', 1);
$pdf->Cell(40, 6, 'nuevo nuevo encargado', 1);
$pdf->Cell(18, 6, 'fecha', 1);

$pdf->Ln(6);
$pdf->SetFont('Arial', '', 8);

//$articulos= mysql_query("SELECT * FROM reasignaciones1");
$articulos= mysql_query("SELECT DISTINCT * FROM reasignaciones");
while($articulos2= mysql_fetch_array($articulos)){
	
	$pdf->Cell(5, 8, '', 0);
	
	$pdf->Cell(7, 8,$articulos2['idreasignado'], 1);
	$pdf->Cell(24, 8, $articulos2['nombre'], 1);
	$pdf->Cell(20, 8,$articulos2['marca'], 1);
	$pdf->Cell(30, 8,$articulos2['modelo'], 1);
	$pdf->Cell(20, 8,$articulos2['infra'], 1);
	$pdf->Cell(16, 8,$articulos2['correlativo'], 1);
	$pdf->Cell(40, 8,$articulos2['antiguo'], 1);
	$pdf->Cell(50, 8,$articulos2['asunto'], 1);
	$pdf->Cell(40, 8,$articulos2['nuevo'], 1);
	$pdf->Cell(18, 8,$articulos2['fecha'], 1);	
//$articulos3= mysql_query("SELECT * FROM reasignaciones2");
//while($articulos1 = mysql_fetch_array($articulos3)){
	//$pdf->Cell(40, 8,$articulos1['nuevo'], 1);
	//$pdf->Cell(18, 8,$articulos1['fecha'], 1);

//}
	
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
  