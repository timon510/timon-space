<?php 
include_once 'fpdf.php';
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'Academic Details',0,1,'C');
$pdf->SetFont('Arial','',12);

$conn= new PDO("mysql:host=localhost; dbname=studentmsdb","root","");
if(isset($_GET['ID']))
{
	$ID = $_GET['ID'];
	
	$query = "SELECT * FROM tblstudent WHERE ID='$ID'";
	$result = $conn->prepare($query);
	$result->execute();
	if($result->rowCount()!=0)
	{
		while($tblstudent = $result->fetch())
		{
			$pdf->Ln();$pdf->Ln();
				$pdf->Cell(20,10,'Student ID: '.$tblstudent['StuID']);
				$pdf->Ln();$pdf->Ln();
				$pdf->Cell(40,10,"Student Name: ".$tblstudent['StudentName']);
				$pdf->Ln();$pdf->Ln();
				$pdf->Cell(40,10,"Student Class: ".$tblstudent['StudentClass']);
				$pdf->Ln();$pdf->Ln();
				$pdf->Cell(40,10,"Student Financial Status: ".$tblstudent['financialStatus']);
				$pdf->Ln();$pdf->Ln();
				$pdf->Cell(40,10,"Date Of Admission: ".$tblstudent['DateofAdmission']);
		}
	}
	else{
		echo 'not found';
	}
}
$pdf->Output();
?>