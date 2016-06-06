
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
$pdf->Cell(10,20,'Informe de los tipos de bienes');
$pdf->Ln(23);
$pdf->Cell(80, 8, '', 0);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20,10,'lista de tipos de bienes');
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(40, 8, '', 0);
$pdf->Cell(17, 6, 'ID del bien', 1);
$pdf->Cell(40, 6, 'nombre', 1);
$pdf->Cell(55, 6, 'Tipo de bien', 1);
$pdf->Ln(6);
$pdf->SetFont('Arial', '', 8);

$articulos= mysql_query("SELECT * FROM bienes");


while($articulos2 = mysql_fetch_array($articulos)){
	
	$pdf->Cell(40, 8, '', 0);
	
	$pdf->Cell(17, 8,$articulos2['idbienes'], 1);
	$pdf->Cell(40, 8, $articulos2['nombre'], 1);
	$pdf->Cell(55, 8,$articulos2['tipo_de_bien'], 1);
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
