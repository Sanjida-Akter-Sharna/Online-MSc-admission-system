<?php session_start(); ?>
<?php 

include_once 'dbconfig.php';


if (mysqli_connect_errno()){
	die("Database connection failed: ".mysqli_connect_errno()."(".mysqli_connect_errno().")");
}
?>
<?php
$query= "select * from eaxmmarks where written>=200 order by written limit 20";             
$result= mysqli_query($connection,$query);   
if(!$result){die("Database query failed");}  



?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css"> 
<link rel="stylesheet" type="text/css" href="css/c.css">
<style>
.filterable {
    margin-top: 15px;
}
.filterable .panel-heading .pull-right {
    margin-top: -20px;
}
.filterable .filters input[disabled] {
    background-color: transparent;
    border: none;
    cursor: auto;
    box-shadow: none;
    padding: 0;
    height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
    color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
    color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
    color: #333;
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
    
      <ul class="nav navbar-nav " style="margin-top:20px;">
         <li class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown" href="#">MENU<span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="form.php">Admisson Form</a></li>
          <li ><a href="#">Download Admit Card</a></li>
         
          <li><a href="download.php">Download Prospectus</a></li>
          <li><a href="download2.php">Download Circular</a></li>
          
        </ul>
      </li>
       <li ><a href="Admission1.php" style="color:hsla(0,7%,97%,1.00)">POST GRADUATE ADMISSSION SYSTEM</a></li> 
   
      </ul>
      <ul class="nav navbar-nav navbar-right" style="margin-top:20px;">
       <li class="active"><a href="index.php">Home</a></li>
        <li><a href="#notice" style="color:hsla(0,7%,97%,1.00)">Latest News</a></li> 
        <li><a href="#cont" style="color:hsla(0,7%,97%,1.00)">Contact Us</a></li> 
      </ul>
    
    </div>
  </div>
</nav>
<div class="container" style="position:relative; top:80px;">
    <h3 style="text-align:center; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif">Candidates For Written exam</h3>
    <hr>

    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Student List</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Student Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Father's Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="University Name" disabled></th>
                    </tr>
                </thead>
                <tbody>
                <?php
        // custlog page er variable ta ei page onno akta variable a nilam 
 $a=1;
while($subject=mysqli_fetch_assoc($result)){ 

               // jdi row theke je name ta paisi r jeta form a disi aki hoy
?>
                    <tr>
                        <td><?php	 echo $a;?></td>
                        <td> <?php	 echo $subject["name"];?></td>
                        <td> <?php	 echo $subject["nid"];?></td>
                        <td> <?php	 echo $subject["written"];?></td>
                    </tr>
                  <?php
$a++;
	  
};                                            

?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<script src="Bootstrap/js/jquery-2.2.1.min.js" > </script>
<script>
/*
Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
*/
$(document).ready(function(){
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        }
    });
});

</script>
<script src="Bootstrap/js/bootstrap.min.js"> </script>
</body>
</html>