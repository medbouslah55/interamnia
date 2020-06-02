<?Php
require "connection.php";//connection to database
//SQL to get 10 records
$count="select * from blog";
require('fpdf.php');
$pdf = new FPDF(); 
$pdf->AddPage();

$width_cell=array(20,50,40,40,40);
$pdf->SetFont('Arial','B',16);

//Background color of header//
$pdf->SetFillColor(193,229,252);

// Header starts /// 
//First header column //
$pdf->Cell($width_cell[0],10,'ID',1,0,C,true);
//Second header column//
$pdf->Cell($width_cell[1],10,'NAME',1,0,C,true);
//Third header column//
$pdf->Cell($width_cell[2],10,'CLASS',1,0,C,true); 
//Fourth header column//
$pdf->Cell($width_cell[3],10,'MARK',1,0,C,true);
//Third header column//
$pdf->Cell($width_cell[4],10,'SEX',1,1,C,true); 
//// header ends ///////

$pdf->SetFont('Arial','',14);
//Background color of header//
$pdf->SetFillColor(235,236,236); 
//to give alternate background fill color to rows// 
$fill=false;

/// each record is one row  ///
foreach ($conn->query($count) as $row) {
$pdf->Cell($width_cell[0],10,$row['id'],1,0,C,$fill);
$pdf->Cell($width_cell[1],10,$row['name'],1,0,L,$fill);
$pdf->Cell($width_cell[2],10,$row['class'],1,0,C,$fill);
$pdf->Cell($width_cell[3],10,$row['mark'],1,0,C,$fill);
$pdf->Cell($width_cell[4],10,$row['sex'],1,1,C,$fill);
//to give alternate background fill  color to rows//
$fill = !$fill;
}
/// end of records /// 

$pdf->Output();
?>