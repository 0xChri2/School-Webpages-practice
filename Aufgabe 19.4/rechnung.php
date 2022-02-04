<?php

session_start();


/*require_once 'lib/fpdf.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(130,1,'CD Verkaufs AG',20,20);
$pdf->SetFont('Arial','B',13);
$pdf->Cell(1,10,'Muster Strasse 3',20,0);
$pdf->Cell(1,20,'40724, Hilden',0,0);
$pdf->Cell(1,30,'Telefon: 123456789');
$pdf->Cell(130,5,$_SESSION['address'],0,0);
$pdf->Output();*/
?>

<?php
/*call the FPDF library*/
require('lib/rotation.php');
class PDF extends PDF_Rotate
{
	/*function Header()
	{
		$this->SetFont('Arial','B',50);
		$this->SetTextColor(255,192,203);
		$this->RotatedText(35,190,'Students Tutorial Invoice',45);
	}*/

	function RotatedText($x, $y, $txt, $angle)
	{
		/* Text rotated around its origin */
		$this->Rotate($angle,$x,$y);
		$this->Text($x,$y,$txt);
		$this->Rotate(0);
	}
}
	
$pdf=new PDF('P','mm','A4');
$pdf->AddPage();
/*output the result*/
$pdf->SetFont('Arial','B',20);
$pdf->Cell(55,10,'',0,0);
$pdf->Cell(59 ,5,'Mustermann CD Shop',0,0);
$pdf->Cell(59 ,10,'',0,1);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(71 ,5,'Musterstrasse 2',0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->Cell(59 ,5,$_SESSION["address"],0,1);
/*set font to arial, regular, 12pt*/
$pdf->SetFont('Arial','',10);
$pdf->Cell(130 ,5,'40723 Hilden',0,0);
$pdf->Cell(25 ,5,$_SESSION["vname"],0,0);
$pdf->Cell(34 ,5,' '.$_SESSION["nname"],0,1);/*end of line*/
$pdf->Cell(130 ,5,' '.$_SESSION[""].' ',0,0);
$pdf->Cell(25 ,5,'Invoice Date:',0,0);
$pdf->Cell(34 ,5,'12th Jan 2019',0,1);
$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Invoice No:',0,0);
$pdf->Cell(34 ,5,'ORD001',0,1);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(130 ,5,'Bill To',0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->SetFont('Arial','B',10);
/*make a dummy empty cell as a vertical spacer*/
$pdf->Cell(189 ,10,'',0,1);
/*make a dummy empty cell as a vertical spacer*/
$pdf->Cell(50 ,10,'',0,1);

$pdf->SetFont('Arial','B',10);

$pdf->Cell(10 ,6,'Sl',1,0,'C');
$pdf->Cell(80 ,6,'Description',1,0,'C');
$pdf->Cell(23 ,6,'Qty',1,0,'C');
$pdf->Cell(30 ,6,'Unit Price',1,0,'C');
$pdf->Cell(20 ,6,'Sales Tax',1,0,'C');
$pdf->Cell(25 ,6,'Total',1,1,'C');
/*Heading Of the table end*/
$pdf->SetFont('Arial','',10);
    for ($i = 0; $i <= 10; $i++) {
		$pdf->Cell(10 ,6,$i,1,0);
		$pdf->Cell(80 ,6,'HP Laptop',1,0);
		$pdf->Cell(23 ,6,'1',1,0,'R');
		$pdf->Cell(30 ,6,'15000.00',1,0,'R');
		$pdf->Cell(20 ,6,'100.00',1,0,'R');
		$pdf->Cell(25 ,6,'15100.00',1,1,'R');
	}
		

$pdf->Cell(118 ,6,'',0,0);
$pdf->Cell(25 ,6,'Subtotal',0,0);
$pdf->Cell(45 ,6,'151000.00',1,1,'R');


$pdf->Output();

?>
        