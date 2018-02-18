
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css"> 


<title>form</title>
<script type="text/javascript">
//............... Javascript function to varify that all the option in the form is filled properly......................

 
  function checkname(){
	 
    var names = document.getElementById('asf');
    var filter = /^[a-zA-Z ]*$/;

    if (!filter.test(names.value)) {
    alert('Please provide a valid Name');
    names.focus;
    return false;
 }
	 
 }
 //....................................................................................................................
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
    
      <ul class="nav navbar-nav " style="margin-top:20px;">
         <li class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown" href="#">MENU<span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="#">Admisson Form</a></li>
          <li ><a href="#">Download Submitted Application</a></li>
          <li><a href="#">View Status Of Application</a></li>
          <li><a href="#">Download Prospectus</a></li>
          <li><a href="#">Download Circular</a></li>
          
        </ul>
      </li>
       <li ><a href="Admission1.php" style="color:hsla(0,7%,97%,1.00)">POST GRADUATE ADMISSSION SYSTEM</a></li> 
   
      </ul>
     
    
    </div>
  </div>
</nav>

<div class="container" style="position:relative; top:60px;">

<div class="row">
	<div class="col-md-6">
        <form action="formaction.php" method="post" onsubmit="return checkname()">
        	<h2>Basic Information</h2>
            <div class="form-group">
                <label for="name">Full Name:<span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span></label>
                <input name="name" type="text" class="form-control" id="asf" required>
                <p id="345" style="display:none; color:#F81216">HINTS: You must put your BSc certificate Name.</p>
            </div>
            <div class="form-group">
                <label for="pwd">Gender:<span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span></label>
                <select name="gender" class="form-control" id="se2"  required>
                <option value="MALE">Male</option>
                <option value="FEMALE">Female</option>

                </select>
            </div>
            <div class="form-group">
                <label for="sel1">Religion:<span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span></label>
                <select name="religion" class="form-control"  id="se1"  required>
                <option value="ISLAM">Islam</option>
                <option value="2">Hindu</option>
                <option value="3">Christian</option>
                <option value="4">Budhist</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sel1">Blood Group:<span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span></label>
                <select name="bg" class="form-control" id="se3"  required>
                <option value="A+">A+</option>
                <option value="2">B+</option>
                <option value="3">O+</option>
                <option value="4">AB+</option>
                <option value="5">A-</option>
                <option value="6">B-</option>
                <option value="7">O-</option>
                <option value="8">AB-</option>
                </select>
            </div>
            <div class="form-group">
                 <label for="pwd">National Id No:<span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span> </label>
                <input name="nid" value="" type="text" class="form-control" id="xkl" required>
                 
            </div>
            <div class="form-group">
                <label for="pwd">Birth Certificate No:</label>
                <input name="bc" value="" type="date" class="form-control" id="pwd">
            </div>
            <div class="form-group">
                <label for="sel1">Personnel Bank Name:</label>
                <select name="bk" class="form-control" id="se4">
                <option value="TRUST BANK">TrustBank</option>
                <option value="2">Sonali Bank</option>
                <option value="3">Dutch Bangla Bank</option>
                <option value="4">Islamic Bank</option>
                 </select>
                  </div>
            <div class="form-group">
                <label for="pwd">Account No: </label>
                <input name="ac" value="" type="text" class="form-control" id="pwd">
            </div>
            <div class="form-group">
            	<label>Remarks: </label>
            	<textarea name="remarks"  class="form-control" rows="5" id="comment"></textarea>
            </div>
        
        <!--</form>-->
    </div>
    
    <div class="col-md-6">
        <!--<form>-->
      
        	<h2>Individual Information</h2>
            <div class="form-group">
                <label for="name">Fathers Name:<span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span></label>
                <input name="fn" type="text" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="name">Fathers Mobile No:<span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span></label>
                <input name="fno" type="text" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="name">Mothers Name:<span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span></label>
                <input name="mn" type="text" class="form-control" id="email" required>
            </div>
            <div class="form-group">
             <label for="pwd">Date of Birth:<span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span></label>
                <input name="dob" value="" type="date" class="form-control" id="pwd" required>
                 </div>
            <div class="form-group">
                <label for="name">Birth Place:<span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span></label>
                <input name="bp" type="text" class="form-control" id="email" required>
             </div>
            <div class="form-group">
                <label for="name">Birth Country:<span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span></label>
                <input name="bcon" type="text" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="name">Marital status:<span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span></label>
                <input name="ms" type="text" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="name">Spouse Name:</label>
                <input name="spouse" type="text" class="form-control" id="email">
          </div>
            <div class="form-group">
                <label for="name">Height:(inch)</label>
                <input name="ht" type="text" class="form-control" id="email">
          </div>
            <div class="form-group">
                <label for="name">Weight:(kg)</label>
                <input name="wt" type="text" class="form-control" id="email">
             </div>
        <!--</form>-->    
    </div>
</div>

<div class="row">
	<div class="col-md-6">
        	<h2>Academic_Information</h2>
            <h3>Hsc_Equivalence</h3>
            <div class="form-group">
                <label for="name">Degree Title: <span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span></label>
                <input name="hdt" type="text" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="sel1">Group: <span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span></label>
                <select name="hgp" class="form-control" id="se5" required>
                <option value="1">Science</option>
                <option value="2">Commerce</option>
                <option value="3">Arts</option>
                 </select>
                  </div>
            <div class="form-group">
                <label for="name">Institution Name: <span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span></label>
                <input name="hin" type="text" class="form-control" id="email" required>
           </div>
            <div class="form-group">
                <label for="name">Board: <span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span></label>
                <input name="hbd" type="text" class="form-control" id="email" required>
           </div>
            <div class="form-group">
                <label for="pwd">Year of Passing:<span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span> </label>
               <input name="hyp" value="" type="date" class="form-control" id="pwd" required>
              </div>
            <div class="form-group">
                <label for="pwd">Session:<span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span> </label>
               <input name="hss" value="" type="date" class="form-control" id="pwd" required>
            </div>
             <div class="form-group">
                <label for="pwd">CGPA/Grade:<span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span> </label>
               <input name="hcg" value="" type="number" class="form-control" id="pwd" required>
            </div>
           
                    <!--</form>-->
    </div>
    
    <div class="col-md-6">
        <!--<form>-->
             <h3>BSc Information</h3>
             <div class="form-group">
                <label for="name">Degree Title:<span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span></label>
                <input name="sdt" type="text" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="sel1">Depertment:<span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span></label>
                <select name="sgp" class="form-control" id="se6" required>
                <option >CSE</option>
                <option >EECE</option>
                <option >MECHANICAL</option>
                 </select>
                  </div>
            <div class="form-group">
                <label for="name">Institution Name:<span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span></label>
                <input name="sin" type="text" class="form-control" id="email" required>
           </div>
            <div class="form-group">
                <label for="name">Subject Choice:<span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span> </label>
                <input name="sbd" type="text" class="form-control" id="email" required>
           </div>
            <div class="form-group">
                <label for="pwd">Year of Passing:<span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span> </label>
               <input name="syp" value="" type="date" class="form-control" id="pwd" required>
              </div>
            <div class="form-group">
                <label for="pwd">Session:<span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span> </label>
               <input name="sss" value="" type="date" class="form-control" id="pwd" required>
            </div>
             <div class="form-group">
                <label for="pwd">CGPA:<span style="color:hsla(359,86%,55%,1.00); font-size:24px">*</span> </label>
               <input name="scg" value="" type="number" class="form-control" id="pwd" required>
              </div>
         </div>
         
                <input class="btn btn-success btn-lg pull-right" type="submit" value="Submit" name="sub">
          
        </form>    	
    
    <div class="col-md-6"></div>

          



<script src="Bootstrap/js/jquery-2.2.1.min.js" > </script>
<script type="text/javascript">
$('#asf').mouseover(function(){
	
	$('#345').fadeIn(500);
	
	
	}).mouseout(function(){
		
		$('#345').fadeOut(500);
		
		});
$('#asf').mouseover(function(){
	
	$('#345').fadeIn(500);
	
	
	}).mouseout(function(){
		
		$('#345').fadeOut(500);
		
		});		
		
		
		document.getElementById("se1").selectedIndex = -1;
		
		document.getElementById("se2").selectedIndex = -1;
		
		document.getElementById("se3").selectedIndex = -1;
		
		document.getElementById("se4").selectedIndex = -1;
		
		document.getElementById("se5").selectedIndex = -1;
		
		document.getElementById("se6").selectedIndex = -1;
	
		

</script>
<script src="Bootstrap/js/bootstrap.min.js"> </script>

</body>
</html>