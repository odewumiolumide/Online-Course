<?php 


mysql_connect("localhost","root","") or die (mysql_error());

mysql_select_db("home");
if(isset($_GET['delete']))
	{
		$sql = "DELETE FROM contact  WHERE id=".$_GET['delete'].";";
		mysql_query($sql) or die(mysql_error());
	}
?>
<?php
$query = "";
$message = "";

	if(isset($_POST['Submit']))
	 {
	if(!($_POST['name']))
		$message = "field is required";
    if(!($_POST['email']))
		$message = "field is required";
        if(!($_POST['message']))
		$message = "field is required";
	
	else {
		$query=" INSERT INTO contact (name, email, message) VALUES('"
	 	    .$_POST['name']."','" 
        .$_POST['email']."','"
        .$_POST['message']."'
		);";
		mysql_query($query) or die("Error in Registration<hr>".mysql_error());
		$message="Sent Successfully";
		header("Refresh: 0; URL=blog-post.php");	
		}}
		?>



<!DOCTYPE html>
<html lang="zxx">
  
<!-- Mirrored from www.on3-step.com/tf/luxury/html/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 11:05:13 GMT -->
<head>
    <meta charset="utf-8">
    <title>Luxury Interactive Hotel Template</title>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- favicon -->
    <link href="img/favicon.png" rel="icon" sizes="32x32" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/jquery.dateselect.css">
    <link href="../../../../www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <!-- font themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- on3step CSS -->
    <link href="css/animated-on3step.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/on3step-style.css" rel="stylesheet">
    <link href="css/queries-on3step.css" media="all" rel="stylesheet" type="text/css">
  </head>
  <body>
  
    <!-- preloader -->
    <div class="bg-preloader-white"></div>
    <div class="preloader-white">
      <div class="mainpreloader">
      <span></span>
      </div>
  </div>
    <!-- preloader end -->
    
    <!-- content wraper -->
    <div class="content-wrapper">
    
    <header class="init">
    
    <!-- subnav -->
    <div class="subnav hidden-sm hidden-xs">
    <div class="container">
        <div class="row">

         <div class="col-md-6">
          <div class="left">
                            <div class="social-icons-subnav">
                                <div><i class="ti-mobile"></i>+02151 7778 009</div>
                                <div><i class="ti-email"></i><a href= "mailto:companyname@gmail.com">contact@luxury.com</a></div>
                            </div>
          </div>
         </div>
         
          <div class="col-md-6">
          <div class="right">
                            <div class="social-icons-subnav">
                                <a href="#"><span class="ti-facebook"></span></a>
                                <a href="#"><span class="ti-dribbble"></span></a>
                                <a href="#"><span class="ti-twitter"></span></a>
                                <a  href="#"><span class="ti-instagram"></span></a>
                                <a href="#"><span class="ti-linkedin"></span></a>
                            </div>
          </div>
         </div>
        
        </div>
    </div>
    </div>
    <!-- subnav end -->

      <!-- nav -->
      <div class="navbar-default-white navbar-fixed-top">
        <div class="container">
        <div class="row">
        
           <!-- menu mobile display -->
           <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
           <span class="icon icon-bar"></span> 
           <span class="icon icon-bar"></span> 
           <span class="icon icon-bar"></span></button> 
          
          <!-- logo --> 
          <a class="navbar-brand white" href="index.html">
          <img class="white" alt="logo" src="img/logo-white.png">
          <img class="black" alt="logo" src="img/logo-black.png">
          </a> 
          <!-- logo end --> 
          
          <!-- mainmenu start -->
          <div class="white menu-init" id="main-menu">
            <nav id="menu-center">
              <ul>
                <li>
                 <a href="#">Home <i class="fa fa-angle-down"></i></a>
                 <ul>
                    <li><a href="index-rev-slider.html">Index Rev Slider</a></li>
                    <li><a href="index-slider.html">Index Slider</a></li>
                    <li><a href="index.html">Slider Text</a></li>
                    <li><a href="index-2-column.html">Index 2 column</a></li>
                    <li><a href="index-onepage.html" target="_blank">Index onepage</a></li>
                    <li><a href="intro/index.html">Intro</a></li>
                  </ul>
                </li>
                <li><a href="#">About <i class="fa fa-angle-down"></i></a>
                <ul>
                    <li><a href="about.html">About Us - 1</a></li>
                    <li><a href="about-2.html">About Us - 2</a></li>
                    <li><a href="typography.html">All Elements</a></li>
                    
                  </ul>
                </li>
                 <li><a href="#">Services <i class="fa fa-angle-down"></i></a>
                  <ul>
                    <li><a href="service.html">Room 3 Column</a></li>
                    <li><a href="service-1.html">Room 2 Column</a></li>
                    <li><a href="room-detail.html">Room Detail</a></li>
                  </ul>
                </li>
                <li><a  href="#">Gallery <i class="fa fa-angle-down"></i></a> <ul>
                    <li><a href="result.html">Gallery FLUID</a></li>
                    <li><a href="#">Gallery GRID <i class="fa fa-angle-right"></i></a> <ul>
                    <li><a href="gallery-grid-2.html">Gallery 2 COL</a></li>
                    <li><a href="gallery-grid-3.html">Gallery 3 COL</a></li>
                    <li><a href="gallery-grid-4.html">Gallery 4 COL</a></li>
                    </ul>
                    </li>
                  </ul>
                </li>
                <li><a  href="#">Blog <i class="fa fa-angle-down"></i></a>
                  <ul>
                    <li><a href="blog.html">Blog Single</a></li>
                    <li><a href="blog-post.html">Blog Post</a></li>
                  </ul>
                </li>
                <li><a class="actived" href="contact.html">Contact</a></li>
                <li>
                <form role="search">
                <div class="input-group">
						<input type="text" id="search" class="form-control" placeholder="SEARCH">
						<div class="input-group-btn">
							<button type="submit"><span class="icon"><i class="fa fa-search"></i></span></button>
						</div>
				</div>
                </form>
               </li>
              </ul>
            </nav>
          </div>
          <!-- mainmenu end -->
          
        </div>
        </div>
        <!-- container -->
      </div>
      <!-- nav end -->
      
      </header>
      
      <!-- subheader -->
      <section id="subheader">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>
                Contact Us
              </h1>
            </div>
            
            <!-- devider -->
            <div class="col-md-12">
              <div class="devider-page">
                <div class="devider-img-right">
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <ul class="subdetail">
                <li>
                  <a href="index.html">Home</a>
                </li>

                <li class="sep">/
                </li>

                <li>Contact
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- subheader end -->
      
      <!-- section contact -->
      <section aria-label="contact" class="whitepage">
        <div class="container">
          <div class="row">
          
            
              <!-- map -->
              <div class="col-md-12 col-sm-12">
                <div class="onStep" data-animation="fadeInLeft" data-time="300" id="map">
                </div>
              </div>
              <!-- map end -->
              
            <!-- spacer -->
            <div class="space-double"></div>

            <!-- contact form -->
            <div class="col-md-8 col-xs-12">
            <h2>Please Fill your query below!</h2>
            
            <!-- spacer -->
            <div class="space-single"></div>
            
              <div class="onStep" data-animation="fadeInUp" data-time="300" id="contact">
                <form action="#" class="row" id="form-contact" method="post" name="form-contact">
                  <input id="name-contact" name="name" placeholder="your name" type="text"> <input id="email-contact" name="email" placeholder="your e-mail" type="text"> 

                  <textarea cols="50" id="message-contact" name="message" placeholder="your enquiry" rows="4"></textarea>
                  <div class="success" id="mail_success">
                    Thank you. Your message has been sent
                  </div>

                  <div class="error" id="mail_failed">
                    Error, email not sent
                  </div>
                  <button class="btn-contact" id="send-contact" type="submit">Sent Now</button>
                </form>
              </div>
            <!-- spacer -->
            <div class="space-single"></div>
            </div>
            <!-- contact form end -->
            
            <!-- address -->
              <div class="col-md-4 col-sm-6">
                <h2>Our Address</h2>
                
                <!-- spacer -->
                <div class="space-single"></div>
                
                <div class="wrapaddres onStep" data-animation="fadeInUp" data-time="600">
                  <address>
                    <span>
                    129 Park street,
                    New York City, NY 10903</span>
                    <span><strong>Phone :</strong> (+6221) 000 888 999</span>
                    <span><strong>Fax :</strong> (+6221) 000 888 111</span>
                    <span><strong>Email :</strong> <a href="mailto:companyname@gmail.com">companyname@gmail.com</a></span>
                    <span><strong>Website :</strong> <a href="#">www.companyname.com</a></span>
                  </address>
                </div>
              </div>
              <!-- address end -->
            
          </div>
        </div>
      </section>
      <!-- section contact end -->
      
      <!-- subfooter -->
      <section aria-label="footer" class="subfooter">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="logo">
                  <img alt="logo" src="img/logo.png">
                </div>

                <p>
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec mollis. Quisque convallis libero in sapien pharetra tincidunt. Aliquam elit ante, malesuada id, tempor eu, gravida
                  id, odio. Maecenas suscipit, risus et eleifend imperdiet, nisi orci ullamcorper massa adipiscing.
                </p>
            </div>


            <div class="col-md-4 col-xs-12 col-md-offset-1">
                <h3>
                  CONTACT INFO
                </h3>

                <address>
                  <span>129 Park street, New York City, NY 10903</span> <span>PHONE: (+6221) 000 888 999</span> <span>EMAIL : <a href=
                  "mailto:companyname@gmail.com">companyname@gmail.com</a></span> <span>SITE : <a href="#">www.companyname.com</a></span>
                </address>
            </div>

            <div class="col-md-3 col-xs-12 pull-right">
                <h3>
                  PHOTO STREAM
                </h3>
                <div id="flickr-photo-stream">
                 <script src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=52617155@N08" type="text/javascript">
                  </script>
                  <div class="clearfix">
                  </div>
                </div>
              </div>
            </div>
        </div>
      </section>
      <!-- subfooter end -->
      
      <!-- footer -->
      <footer class="white">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              &copy; Luxury 2017. all reserved design by on3step
            </div>

            <div class="col-md-6">
              <div class="right">
                <div class="social-icons">
                  <a href="#"><span class="ti-facebook"></span></a>
                  <a href="#"><span class="ti-dribbble"></span></a>
                  <a href="#"><span class="ti-twitter"></span></a>
                  <a  href="#"><span class="ti-instagram"></span></a>
                  <a href="#"><span class="ti-linkedin"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- footer end -->
      
      <!-- ScrolltoTop -->
      <div id="totop">
        <span class="ti-angle-up"></span>
      </div>
      
    </div>
    <!-- content wraper end -->
    
    
    
    <!-- plugin JS -->
    <script src="plugin/pluginson3step.js" type="text/javascript"></script> 
    <script src="plugin/sticky.js" type="text/javascript"></script> 
	<script type="text/javascript" src="js/jquery.dateselect.js"></script>
    <!-- slider revolution  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!--  map google  -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyCQ5KODzqooIP496GPLRaMAsZ4eN8Vro_U"></script> 
    <script src="js/map.js" type="text/javascript"></script> 
    <!-- on3step JS -->
    <script src="js/on3step.js" type="text/javascript"></script>
    <script src="js/plugin-set.js" type="text/javascript"></script>
  </body>

<!-- Mirrored from www.on3-step.com/tf/luxury/html/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 11:05:13 GMT -->
</html>