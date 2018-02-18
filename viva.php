<?php
include_once 'dbconfig.php';
if(isset($_POST['name'])){$name = $_POST['name'];}

if(isset($_POST['nid'])){$nid = $_POST['nid'];}
if(isset($_POST['wmarks'])){$wmarks = $_POST['wmarks'];}

if(isset($_POST['sub'])){$sub=$_POST['sub'];}



// ekhn a operation gula hbe 
// jemon $a = $nid +2; 
//  tkhn insert query te $nid er jay gay $a dibi



if(isset($_POST['sub'])){      
	
		$insert= mysqli_query($connection,"INSERT INTO viva (name,nid,viva) VALUES ('$name','$nid','$wmarks')");
		
		echo '<script language="javascript">';
        echo 'alert("Successfully Registered"); location.href="written.php"';
        echo '</script>';
	
}





?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css"> 

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
        <style>
		
		

body, html{
     height: 100%;
 	background-repeat: no-repeat;
 	background-color: #d3d3d3;
 	font-family: 'Oxygen', sans-serif;
}

.main{
 	margin-top: 70px;
}

h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 330px;
    padding: 40px 40px;

}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}

		
		</style>
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top container" style="background: hsla(0,2%,26%,1.00) ; margin-bottom:0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
       
      </button>
   
       <img src="Military-Institute-of-Science-and-Technology-MIST-Logo.png" width="80">
    
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" style="margin-top:20px;">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="adminreg2.php" style="color:hsla(0,7%,97%,1.00)">Registration</a></li>
         <?php if(!empty($_SESSION)) { ?>
          <li><a href="adminlogout.php" style="color:hsla(0,7%,97%,1.00)">Admin logout</a></li>
        <?php } ?>
       
      </ul>
    
    </div>
  </div>
</nav>







<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Viva exam marks fillup</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
<form class="form-horizontal" action="viva.php" onsubmit="return checkEmail()" method="post" >
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Student Name</label>

							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="ft"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Student ID</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="nid" id="l"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>
                     

					

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Written Marks</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="wmarks" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

				
						<div class="form-group ">
							<input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Submit" name="sub">
						</div>
						
					</form>
				</div>
			</div>
		</div>








<script src="Bootstrap/js/jquery-2.2.1.min.js" > </script>
<script src="Bootstrap/js/bootstrap.min.js"> </script>
</body>
</html>