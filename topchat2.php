<?php
session_start();


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
<style>

.hide-bullets {
list-style:none;
margin-left: -40px;
margin-top:20px;
}
</style>
</head>

<body class="">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">MIST_CareerPedia</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Student</a></li>
      <li><a href="#">Teacher</a></li>
      <li><a href="#">Latest News</a></li>
    </ul>
  </div>
</nav>
<div class="row" style="height:200px; background:hsla(116,73%,72%,1.00); position: relative; top:55px">


<h1 style="text-align:center">Your website's upper part</h1>


</div>
<div class="row">

<div class="col-lg-9" style="height:400px; background-color:hsla(0,16%,84%,1.00)"></div>
<div class="col-lg-3" style="height:400px;">

<div class="row" style="margin-left:-10%">
                <div class="col-md-12 ">
                    <div class="notice-board">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                             <h3 >  Active  Notice Panel </h3>
                                <div class="pull-right" >
                      
                                </div>
                            </div>
                            <div class="panel-body">
                               
                                <ul style="padding-left:0px;list-style:none; margin-left:5%">


<?php

 $conn = oci_connect('mist','mist','localhost/XE');

 $query = "SELECT * FROM 
    (SELECT username, rank FROM weight_calc order by rank desc) 
where rownum <= 5";
    $st=  oci_parse($conn, $query);
    oci_execute($st);
    //$row= oci_fetch_array($st); 
	while($row= oci_fetch_array($st)) {
		
	
    $name=$row[0];
    $rank=$row[1];
	
	
	
	echo' 
                                    <li style="padding:2%; font-size:16px">
                                        
                                        <span class="glyphicon glyphicon-map-marker text-danger" ></span>';
                                 echo $name;
								 echo' Rank ponit :';
                                 echo $rank;
                                       $_SESSION["name"]=$name;
										   
                                      echo'<a href="profile.php"> <input type="button" class=" btn btn-success btn-sm " value="View Profile"></a>
                                      <span class="label label-danger" > Top most </span>
                                           
                                    </li>';
                                     
                               
           
		  
	}
  



?> 
</ul>
                            </div>





                            <div class="panel-footer">
                                <a href="#" class="btn btn-default btn-block"> <i class="glyphicon glyphicon-repeat"></i> Click here to know more</a>
                            </div>
                        </div>
                    </div>
                    <!-- END BOARD PANEL-->
                </div>
            </div>


</div>


</div>














<script src="Bootstrap/js/jquery-2.2.1.min.js" > </script>
<script>

</script>
<script src="Bootstrap/js/bootstrap.min.js"> </script>
</body>
</html>