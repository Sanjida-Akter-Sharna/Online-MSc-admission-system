<?php
session_start();
?>
<?php
include_once 'dbconfig.php';
if(isset($_POST['em'])){$em = $_POST['em']; echo $em;}

if(isset($_POST['ps'])){
	
          $password = mysqli_real_escape_string($connection,$_POST["ps"]);
		  
		$enc_password = md5($password);
		echo "$enc_password";
}

if(isset($_POST['sb'])){$sb = $_POST['sb'];}

?>
<?php
			
			if(isset($_POST["sb"]) ) { // jkhn submit button a press korbo
			$query = "SELECT username,password FROM admin";   // ei operation ta chalabo  
			$result = mysqli_query($connection,$query);
			
				while ($row = mysqli_fetch_assoc($result)) {           // akta akta kore row porbe
					if($em == $row["username"] && $row["password"] == $enc_password) {  // jdi daoua name and password table er name ar password er shate match  
					    
				          $_SESSION["name1"] = $username;
						//header("location:admin.php"); // tahole ei page a jabo 
						echo '<script language="javascript">';
        echo 'alert("Welcome to admin panel"); location.href="admin.php"';
        echo '</script>';
						
						exit; // o break korlam	
					}
				}
				
				$message = "Username and Password doesn't match!"; // jdi na kore akta meggase print korbo (niche function disi)
			}
			
?>
<?php
                if(isset($_POST["sb"]) && isset($message)) {
					
					?>
                   <h2 style="color:#FC0339"><br><br><br><br> <?php
                    echo $message;	
                }
				
				
				
				
        ?></h2>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>form</title>
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css"> 
<script type="text/javascript">

</script>
</head>

<body style="background:url(background-1134468_960_720.jpg) fixed;">



<div class="row jumbotron img-rounded" style=" margin:10%">
<h1 style="text-align:center; font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif">AUTHORITY LOGIN</h1>
<center><form action="adminlogin.php" method="post" style="margin-left:2%">
  <div class="form-group">
    <label for="email">User name:</label>
    <input type="text" class="form-control" id="email" name="em" style="width:40%">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="ps"  style="width:40%">
  </div>
 
  <button type="submit" class="btn btn-default" name="sb">Submit</button>
</form></center>
  </div>
     
<script src="Bootstrap/js/jquery-2.2.1.min.js" > </script>
<script src="Bootstrap/js/bootstrap.min.js"> </script>

</body>
</html>