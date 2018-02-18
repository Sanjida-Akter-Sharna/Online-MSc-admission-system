<?php session_start(); ?>
<?php




?>
<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>MIST MBA</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css"> 
<script type="text/javascript">
    setTimeout(function() { window.location.href = "adminlogout.php"; },500000000000);
</script>
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

<div class="container" style="position:relative; top:80px;">
<h2 style="text-align:center; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif">Admin panel</h2>

<div class="jumbotron">
<h2>Circular upload</h2>
 <form action="upload.php" method="post" enctype="multipart/form-data">
 <input type="file" name="file" /><br>
 <button class="btn alert-success" type="submit" name="btn-upload">upload</button>
 </form>
    <br /><br />
    <?php
 if(isset($_GET['success']))
 {
  ?>
        <label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
        <?php
 }
 else if(isset($_GET['fail']))
 {
  ?>
        <label>Problem While File Uploading !</label>
        <?php
 }
 else
 {
  ?>
        <label>Try to upload any files(PDF,DOC,JPG,IMG)</label>
        <?php
 }
 ?>
</div>


<div class="jumbotron">
<h2>Prospectus Upload</h2>
 <form action="upload2.php" method="post" enctype="multipart/form-data">
 <input type="file" name="file" /><br>
 <button class="btn alert-success" type="submit" name="btn-upload">upload</button>
 </form>
    <br /><br />
    <?php
 if(isset($_GET['success']))
 {
  ?>
        <label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
        <?php
 }
 else if(isset($_GET['fail']))
 {
  ?>
        <label>Problem While File Uploading !</label>
        <?php
 }
 else
 {
  ?>
        <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
        <?php
 }
 ?>
</div>


</div>
<div id="footer">

</div>

<script src="Bootstrap/js/jquery-2.2.1.min.js" > </script>
<script src="Bootstrap/js/bootstrap.min.js"> </script>
</body>
</html>