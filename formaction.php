<?php
include_once 'dbconfig.php';

if(isset($_POST['name'])){$name = $_POST['name'];}

if(isset($_POST['gender'])){$gender = $_POST['gender'];}
if(isset($_POST['religion'])){$religion = $_POST['religion'];}
if(isset($_POST['bg'])){$bg = $_POST['bg'];}
if(isset($_POST['nid'])){$nid = $_POST['nid'];}
if(isset($_POST['bc'])){$bc = $_POST['bc'];}
if(isset($_POST['bk'])){$bk=$_POST['bk'];}
if(isset($_POST['ac'])){$ac=$_POST['ac'];}
if(isset($_POST['remarks'])){$remarks=$_POST['remarks'];}
if(isset($_POST['fn'])){$fn=$_POST['fn'];}
if(isset($_POST['fno'])){$fno=$_POST['fno'];}
if(isset($_POST['mn'])){$mn=$_POST['mn'];}
if(isset($_POST['dob'])){$dob=$_POST['dob'];}
if(isset($_POST['bp'])){$bp=$_POST['bp'];}
if(isset($_POST['bcon'])){$bcon=$_POST['bcon'];}
if(isset($_POST['ms'])){$ms=$_POST['ms'];}
if(isset($_POST['spouse'])){$spouse=$_POST['spouse'];}
if(isset($_POST['ht'])){$ht=$_POST['ht'];}
if(isset($_POST['wt'])){$wt=$_POST['wt'];}

if(isset($_POST['hdt'])){$hdt=$_POST['hdt'];}
if(isset($_POST['hgp'])){$hgp=$_POST['hgp'];}
if(isset($_POST['hin'])){$hin=$_POST['hin'];}
if(isset($_POST['hbd'])){$hbd=$_POST['hbd'];}
if(isset($_POST['hyp'])){$hyp=$_POST['hyp'];}
if(isset($_POST['hss'])){$hss=$_POST['hss'];}
if(isset($_POST['hcg'])){$hcg=$_POST['hcg'];}
if(isset($_POST['sdt'])){$sdt=$_POST['sdt'];}
if(isset($_POST['sgp'])){$sgp=$_POST['sgp'];}
if(isset($_POST['sin'])){$sin=$_POST['sin'];}
if(isset($_POST['sbd'])){$sbd=$_POST['sbd'];}
if(isset($_POST['syp'])){$syp=$_POST['syp'];}
if(isset($_POST['sss'])){$sss=$_POST['sss'];}
if(isset($_POST['scg'])){$scg=$_POST['scg'];}
if(isset($_POST['sub'])){$sub=$_POST['sub'];}


if(isset($_POST['sub'])){      
	
		$insert= mysqli_query($connection,"INSERT INTO admissionreq (name,gender,religion,bgrp,nid,bcert,bank,accno,remark,fname,fno,mname,dob,bplace,bcountry,mstatus,spouse,height,weight,hsc,hgrp,hins,hboard,hyear,hsession,hgpa,ssc,sgrp,sins,sboard,syear,ssession,sgpa) VALUES ('$name','$gender','$religion','$bg','$nid','$bc','$bk','$ac','$remarks','$fn','$fno','$mn','$dob','$bp','$bcon','$ms','$spouse','$ht','$wt','$hdt','$hgp','$hin','$hbd','$hyp','$hss','$hcg','$sdt','$sgp','$sin','$sbd','$syp','$sss','$scg')");
		
		//echo "<h1>SUCCESSFULLY REGISTERED</h1>";
	
}

 
?>

<?php
require("fpdf.php");
$pdf= new FPDF();
$pdf->AddPage();  
$pdf->SetFont("Arial","B",16);
$pdf->Cell(0,10,'REGISTRATION FORM',1,1,'C');
$pdf->Cell(0,10,'PERSONAL INFORMATION',1,1);
$pdf->SetFont("Arial","",14);
$pdf->Cell(50,10,'NAME: ',0,0);
$pdf->Cell(50,10,$name,0,1);
$pdf->Cell(50,10,'FATHER NAME: ',0,0);
$pdf->Cell(50,10,$fn,0,1);
$pdf->Cell(50,10,'MOTHER NAME: ',0,0);
$pdf->Cell(50,10,$mn,0,1);
$pdf->Cell(50,10,'DATE OF BIRTH: ',0,0);
$pdf->Cell(50,10,$dob,0,1);
$pdf->Cell(50,10,'RELIGION: ',0,0);
$pdf->Cell(50,10,$religion,0,1);
$pdf->Cell(50,10,'NATIONAL ID: ',0,0);
$pdf->Cell(50,10,$nid,0,1);
$pdf->Cell(50,10,'COUNTRY: ',0,0);
$pdf->Cell(50,10,$bcon,0,1);
$pdf->Cell(0,10,'BSc INFORMATION',1,1);
$pdf->Cell(50,10,'DEGREE TITLE: ',0,0);
$pdf->Cell(50,10,$sdt,0,1);
$pdf->Cell(50,10,'DEPERTMENT: ',0,0);
$pdf->Cell(50,10,$sgp,0,1);
$pdf->Cell(50,10,'INSTITUTION NAME: ',0,0);
$pdf->Cell(50,10,$sin,0,1);
$pdf->Cell(50,10,'SUBJECT CHOICE: ',0,0);
$pdf->Cell(50,10,$sbd,0,1);
$pdf->Cell(50,10,'YEAR OF PASSING: ',0,0);
$pdf->Cell(50,10,$syp,0,1);
$pdf->Cell(50,10,'CGPA: ',0,0);
$pdf->Cell(50,10,$scg,0,1);
$pdf->Output();





?>



