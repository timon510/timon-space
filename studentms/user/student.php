<?php 
include_once 'fpdf.php';
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'Student Details',0,1,'C');
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
				$pdf->Cell(40,10,"Student Email: ".$tblstudent['StudentEmail']);
				$pdf->Ln();$pdf->Ln();
				$pdf->Cell(40,10,"Student Adress: ".$tblstudent['Address']);
				$pdf->Ln();$pdf->Ln();
				$pdf->Cell(40,10,"Student Date Of Birth: ".$tblstudent['DOB']);
				$pdf->Ln();$pdf->Ln();
				$pdf->Cell(40,10,"Student Gender: ".$tblstudent['Gender']);
				$pdf->Ln();$pdf->Ln();
				$pdf->Cell(40,10,"Student Mobile Number: ".$tblstudent['ContactNumber']);
				$pdf->Ln();$pdf->Ln();
				$pdf->Cell(40,10,"Other Mobile Number: ".$tblstudent['AltenateNumber']);
				$pdf->Ln();$pdf->Ln();
				$pdf->Cell(40,10,"Name of Father: ".$tblstudent['FatherName']);
				$pdf->Ln();$pdf->Ln();
				$pdf->Cell(40,10,"Name of Mother: ".$tblstudent['MotherName']);
				$pdf->Ln();$pdf->Ln();
				$pdf->Cell(40,10,"Date Of Admission: ".$tblstudent['DateofAdmission']);
		}
	}

}
$pdf->Output();
?>