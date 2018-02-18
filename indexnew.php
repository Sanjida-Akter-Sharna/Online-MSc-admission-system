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
@media screen and (min-width: 480px) {
  
}

.navbar-nav.navbar-right li a {

	font-family: 'Roboto',sans-serif;
	font-size: 15px;
	padding: 0;
	text-transform: uppercase;
	
	transition: all .9s ease 0s;
	padding: 15px 15px;
}
.navbar-nav.navbar-right li a:hover {
	color: #fff; /* text color*/
	background-color: #3B91C1;
}



/*       carousel       */

.fade-carousel {
    position: relative;
    height: 80vh;
}
.fade-carousel .carousel-inner .item {
    height: 80vh;
}
.fade-carousel .carousel-indicators > li {
    margin: 0 2px;
    background-color: hsla(0,47%,94%,1.00);
    border-color: #f39c12;
    opacity: .9;
}
.fade-carousel .carousel-indicators > li.active {
  width: 20px;
  height: 20px;
  opacity: 1;
}


.hero {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 3;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    text-shadow: 1px 1px 0 rgba(0,0,0,.75);
      -webkit-transform: translate3d(-50%,-50%,0);
         -moz-transform: translate3d(-50%,-50%,0);
          -ms-transform: translate3d(-50%,-50%,0);
           -o-transform: translate3d(-50%,-50%,0);
              transform: translate3d(-50%,-50%,0);
}
.hero h1 {
    font-size: 6em;    
    font-weight: bold;
    margin: 0;
    padding: 0;
}

.fade-carousel .carousel-inner .item .hero {
    opacity: 0;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s; 
}
.fade-carousel .carousel-inner .item.active .hero {
    opacity: 1;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s;    
}


.overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 2;
    background-color: #080d15;
    opacity: .7;
}


.btn.btn-lg {padding: 10px 40px;}
.btn.btn-hero,
.btn.btn-hero:hover,
.btn.btn-hero:focus {
    color: #f5f5f5;
    background-color: hsla(0,3%,34%,1.00);
    border-color: hsla(351,23%,94%,1.00);
    outline: none;
    margin: 20px auto;
}


.fade-carousel .slides .slide-1, 
.fade-carousel .slides .slide-2,
.fade-carousel .slides .slide-3 {
  height: 100vh;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}
.fade-carousel .slides .slide-1 {
  background-image: url(IMG_4638-600x400.jpg) ;
}
.fade-carousel .slides .slide-2 {
  background-image: url(MoU-MIST-GB-1024x684.jpg);
}
.fade-carousel .slides .slide-3 {
  background-image: url(DSC_6540-1024x604.jpg);
}


/*          Media Queries       */

@media screen and (min-width: 980px){
    .hero { width: 980px; }    
}
@media screen and (max-width: 640px){
    .hero h1 { font-size: 4em; }    
}
</style>


</head>
<body>



<nav class="navbar navbar-inverse navbar-fixed-top" style="background: hsla(0,2%,26%,1.00) ; margin-bottom:0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
       
      </button>
   
       <img src="Bangladesh_Air_Force_emblem.svg.png" width="80">
    
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" style="margin-top:20px;">
        <li class="active"><a href="index.php">Home</a></li>
        <?php if(empty($_SESSION)) { ?>
        <li><a href="adminlogin.php" style="color:hsla(0,7%,97%,1.00)">Admin Login</a></li>
        <?php } ?>
        <?php if(!empty($_SESSION)) { ?>
          <li><a href="adminlogout.php" style="color:hsla(0,7%,97%,1.00)">Admin logout</a></li>
        <?php } ?>
        <li><a href="#notice" style="color:hsla(0,7%,97%,1.00)">Latest News</a></li> 
        <li><a href="#cont" style="color:hsla(0,7%,97%,1.00)">Contact Us</a></li> 
      </ul>
    
    </div>
  </div>
</nav>


<div class="" style="position:relative; top:80px;">
<h2 style="text-align:center; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif">Passport management system</h2>

<div class="row" >
<div class="col-lg-5" style="height:auto">

 <img src="21a7dc5643ece39a785c867cd9cf4e23.jpg">
      
   <h2 style="text-align:center; font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif">Welcome to passport management system</h2> 
 <p style="font-size:18px">Military Institute of Science and Technology (MIST) started its journey since 19 April 1998. It is the pioneer Technical Institute of Bangladesh Armed Forces. It was the visionary leadership of the Honorable Prime Minister of People’s Republic of Bangladesh Sheikh Hasina to establish this Institute. ...<a href="http://mist.ac.bd/welcome-to-mist/" class="btn">Read More</a>
</p>
                 
  
      
      
 </div>



<div class="col-lg-7" style="height:auto">

<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>Advantage </h1>        
            <h3>of our system</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">View details</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
            <h1>Automated<br> programme </h1>        
            
        </hgroup>       
        <button class="btn btn-hero btn-lg" role="button">View Details</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
            <h1>Book now</h1>        
            
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">View Details</button>
      </div>
    </div>
  </div> 
</div>
</div>
</div>





<div class="row" style="height:auto" id="notice">


<div class="col-lg-12" style="height:auto"> 

<div class="row text-center">
 <h1 style="text-align:center">News and Events</h1>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="14th-Graduation-Ceremony-01-1024x607.jpg" alt="">
                    <div class="caption">
                        <h3>23 August 2017</h3>
                        <p>Informantion about this</p>
                        <p>
                            <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="DSC_6505-1024x492.jpg" alt="">
                    <div class="caption">
                        <h3>27 April 2017</h3>
                        <p>Informantion about this</p>
                        <p>
                             <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="MoU-MIST-GB-1024x684.jpg" alt="">
                    <div class="caption">
                        <h3>1 June 2017</h3>
                        <p>Informantion about this</p>
                        <p>
                           <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="DSC_6540-1024x604.jpg" alt="">
                    <div class="caption">
                        <h3>4 July 2017</h3>
                        <p>Informantion about this</p>
                        <p>
                             <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>


</div>


</div>

 
 

 
 
 
 
 
 
 
 
 <div class="row mcon" style="height:auto; background: hsla(0,5%,68%,1.00); margin-top:2%; margin-left:.5%" id="cont">
 
 
		
								<div class="row">
									
										<div style="text-align:center">
											<h1 style="font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif;  text-align:center">Contant with us</h1>
											<h3>If you have any question or problem let us know. You are always welcome for any kind of question </h3>
										</div>
									
								
							</div>
							
								
									
									<div class="row ">
										<div class="col-lg-4 col-sm-4 col-md-4 jumbotron" style="margin-left:2%">
											<div style="margin-left:2%">
                                            <address><p style="font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; font-size:24px"><span style="font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; font-size:36px; color:hsla(35,98%,49%,1.00)">Passport</span>Office</p>
                                            <strong>Let's Tavel.<br>Mirpur cantonment , Mirpur 12<br> 
                                            Dhaka-1200, Bangladesh</strong><br>
                                            <h4 style="font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; color:hsla(237,84%,39%,1.00)">MILITARY INSTITUTE OF SCIENCE AND TECHNOLOGY</h4>
                                            </address>
                                            </div>
										</div>
										<div class="col-lg-7 col-sm-7 col-md-7" style="margin-left:2%"> 
										
												
												<form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">
													<div class="form-group">
														<input type="text" name="name" class="form-control name-field" required="required" placeholder="Your Name"></div>
														<div class="form-group">
															<input type="email" name="email" class="form-control mail-field" required="required" placeholder="Your Email">
														</div> 
														<div class="form-group">
															<textarea name="message" id="message" required class="form-control" rows="8" placeholder="Message"></textarea>
														</div> 
														<div class="form-group">
															<button type="submit" class="btn btn-primary">Send</button>
														</div>
													</form> 
												
											</div>
								
								</div> 
							<!--/#contact-->








</div>
<script src="Bootstrap/js/jquery-2.2.1.min.js" > </script>
<script src="Bootstrap/js/bootstrap.min.js"> </script>
</body>
</html>