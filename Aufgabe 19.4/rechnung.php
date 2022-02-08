<?php
session_start();
/*call the FPDF library*/
require('lib/rotation.php');
class PDF extends PDF_Rotate
{
	function RotatedText($x, $y, $txt, $angle)
	{
		$this->Rotate($angle,$x,$y);
		$this->Text($x,$y,$txt);
		$this->Rotate(0);
	}
}

$today = date("d.m.y", time());

$pdf=new PDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',20);
$pdf->Cell(55,10,'',0,0);
$pdf->Cell(59 ,5,'Mustermann CD Shop',0,0);
$pdf->Cell(59 ,10,'',0,1);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(71 ,5,'Musterstrasse 2',0,0);
$pdf->Ln(0.3);
$pdf->Cell(59 ,5,'',0,0);
$pdf->Cell(59 ,5,'',0,1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(130 ,5,$_SESSION['vname'],0,1);
$pdf->Cell(25 ,5,$_SESSION["nname"],0,2);
$pdf->Cell(34 ,5,$_SESSION["address"],0,2);/*end of line*/
$pdf->Cell(130 ,5,$_SESSION["plz"].'  '.$_SESSION['place'],0,0);
$pdf->Cell(25 ,5,'Datum:',0,0);
$pdf->Cell(34 ,5,$today,0,1);
$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Bestell Nr.:',0,0);
$pdf->Cell(34 ,5,'ORD001',0,1);
$pdf->SetFont('Arial','B',15);

$pdf->SetFont('Arial','B',10);
$tabellenbeginn = $pdf -> GetY() + 15 ;
	$pdf -> SetX(10);
	$pdf -> SetY($tabellenbeginn);
	$heading = array("Anzahl:", "Einzelpreis:", "Rabatt:", "Netto:", "Versand:", "MwSt:", "Gesamt:", "Skonto:");
	$content = array($_SESSION["cd"], "10€", $_SESSION["discounttxt"]."%", $_SESSION["netto"]."€", $_SESSION["sending"]."€", $_SESSION["MwSt"]."€", $_SESSION["brutto"]."€", $_SESSION["skonto"]."€");
	
	for ($i = 0; $i < count($heading); $i++)
	{
		$pdf -> SetFont('Arial', '', 12);
		$pdf -> setfillcolor(200);
		$pdf -> cell(25, 10, $heading[$i], 1, 0, "C", true);
		
		$pdf -> SetFont('Arial', '', 12);
		$pdf -> setfillcolor(255, 255, 255);
		$pdf -> cell(165, 10, $content[$i], 1, 0, "C", true);
		
		$pdf -> ln();
	}

$pdf->Output();

?>
        