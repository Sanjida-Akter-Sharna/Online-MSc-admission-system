<?php 
 session_start();
  $_SESSION["name1"] = NULL;
 
if(!$_SESSION["name1"]){
	
	
 header("location:index.php");	
	
	
	
}

session_destroy();


?>