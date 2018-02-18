<?php 

include_once 'dbconfig.php';


if (mysqli_connect_errno()){
	die("Database connection failed: ".mysqli_connect_errno()."(".mysqli_connect_errno().")");
}
?>
<?php
$query= "select * from ip";             
$result= mysqli_query($connection,$query);   
if(!$result){die("Database query failed");}  



?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css"> 
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
         <li><a href="written.php"  style="color:hsla(0,7%,97%,1.00)">Written marks Fillup</a></li>
          <li><a href="viva.php"  style="color:hsla(0,7%,97%,1.00)">Viva Marks Fillup</a></li>
        <li><a href="adminreg2.php" style="color:hsla(0,7%,97%,1.00)">Registration</a></li>
         <?php if(!empty($_SESSION)) { ?>
          <li><a href="adminlogout.php" style="color:hsla(0,7%,97%,1.00)">Admin logout</a></li>
        <?php } ?>
       
      </ul>
    
    </div>
  </div>
</nav>



                <?php
        // custlog page er variable ta ei page onno akta variable a nilam 
 $a=1;
while($subject=mysqli_fetch_assoc($result)){ 

               // jdi row theke je name ta paisi r jeta form a disi aki hoy
?>
                  
                  
                  
                  <table class="table container">
    <thead>
      <tr>
        <th>ID</th>
        <th>IP address</th>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> <?php	 echo $subject["id"];?></td>
        <td> <?php	 echo $subject["ip"];?></td>
    
      </tr>
  
    </tbody>
  </table>
                  
                    
                  <?php
$a++;
	  
};                                            

?>








<script src="Bootstrap/js/jquery-2.2.1.min.js" > </script>
<script src="Bootstrap/js/bootstrap.min.js"> </script>
</body>
</html>