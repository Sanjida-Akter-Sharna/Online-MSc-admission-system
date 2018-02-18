<?php
include_once 'dbconfig.php';
if(isset($_POST['name'])){$name = $_POST['name'];}

if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['type'])){$type = $_POST['type'];}
if(isset($_POST['password'])){$password = md5($_POST['password']);}
if(isset($_POST['sub'])){$sub=$_POST['sub'];}



// ekhn a operation gula hbe 
// jemon $a = $nid +2; 
//  tkhn insert query te $nid er jay gay $a dibi



if(isset($_POST['sub'])){      
	
	
		
		$message = "The code is: " . www.proyojonm.netau.net/admin.php;
		$headers = "From: abcdef2014q@gmail.com" . "\r\n";;
		
		mail("almamunmistcse@gmail.com","Confirm mail",$message,$headers);
		
		echo "Mail send<bt/>";
		
	
		$insert= mysqli_query($connection,"INSERT INTO admin (username,password,type,email) VALUES ('$name','$password','$type','$email')");
		
		echo '<script language="javascript">';
        echo 'alert("Successfully Registered"); location.href="index.php"';
        echo '</script>';
	
}





?>