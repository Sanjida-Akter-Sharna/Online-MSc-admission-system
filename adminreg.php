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
        <li><a href="#" style="color:hsla(0,7%,97%,1.00)">Registration</a></li>
         <?php if(!empty($_SESSION)) { ?>
          <li><a href="adminlogout.php" style="color:hsla(0,7%,97%,1.00)">Admin logout</a></li>
        <?php } ?>
       
      </ul>
    
    </div>
  </div>
</nav>

<div class="container jumbotron" style="position:relative; top:80px;">
<h2>Admin Registration</h2>
<form>
  <div class="form-group">
    <label for="email">Username</label>
    <input type="email" class="form-control" id="email" style="width:30%">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" style="width:30%">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" style="width:30%">
  </div>
    <div class="form-group">
      <label for="sel1">Type</label>
                <select name="bg" class="form-control" id="sel1" style="width:30%">
                <option value="1">Admission</option>
                <option value="2">Account</option>
                <option value="3">Database manage</option>
             
                </select>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>


</div>






















<script src="Bootstrap/js/jquery-2.2.1.min.js" > </script>
<script src="Bootstrap/js/bootstrap.min.js"> </script>
</body>
</html>