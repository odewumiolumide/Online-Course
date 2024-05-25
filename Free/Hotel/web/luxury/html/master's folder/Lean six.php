<?php 


mysql_connect("localhost","root","") or die (mysql_error());

mysql_select_db("reglog");
if(isset($_GET['delete']))
	{
		$sql = "DELETE FROM data.php WHERE id=".$_GET['delete'].";";
		mysql_query($sql) or die(mysql_error());
	}



$query = "";
$message = "";

	if(isset($_POST['Submit']))
	 {
	if(!($_POST['course']))
		$message = "field is required";
		if(!($_POST['name']))
		$message = "field is required";
		if(!($_POST['email']))
		$message = "field is required";
		if(!($_POST['phone']))
		$message = "field is required";
	else {
		$query="INSERT INTO tb_course (course, name, email, phone) VALUES('"
		.$_POST['name']."','"
		.$_POST['number']."','"
		.$_POST['email']."','"
		.$_POST['phone']."'
		);";
		mysql_query($query) or die("Error in Registration<hr>".mysql_error());
		$message="Thank you. Your reservation has been sent.";
		header("Refresh: 0; URL=blog-data-analyst.php");	
		}}

    
       
		?>

<!DOCTYPE html>
<html lang="zxx">
  
<!-- Mirrored from www.on3-step.com/tf/luxury/html/room-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 11:05:12 GMT -->
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
                 <a class="actived" href="#">Home <i class="fa fa-angle-down"></i></a>
                 <ul>
                    
                 <li><a href="/PORTAL/Free/Hotel/web/luxury/html//index-slider.php">Index Slider</a></li>
                    <li><a href="/PORTAL/Free/Hotel/web/luxury/html//index-onepage.php" target="_blank">Index onepage</a></li>
                    <li><a href="/PORTAL/Free/Hotel/web/luxury/html/intro/index.php">Intro</a></li>
                  </ul>
                </li>
                <li><a href="#">About <i class="fa fa-angle-down"></i></a>
                <ul>
                    
                    <li><a href="http://localhost/PORTAL/Free/Hotel/web/luxury/html//about-2.php">About Us - 2</a></li>
                    
                    
                  </ul>
                </li>
                 <li><a href="#">Services <i class="fa fa-angle-down"></i></a>
                  <ul>
                  <li><a href="http://localhost/PORTAL/Free/Hotel/web/luxury/html//post-gradute%20folder/service.php">Post Gradute Programs</a></li>
                    <li><a href="http://localhost/PORTAL/Free/Hotel/web/luxury/html//master's%20folder/service-1.php">Master's Courses</a></li>
                    
                  </ul>
                </li>
                

                <li><a href="http://localhost/PORTAL/Free/Hotel/web/luxury/html//result.php">Gallery FLUID</a></li>

                

                <li><a  href="#">Contact <i class="fa fa-angle-down"></i></a>
                  <ul>
                    <li><a href="/PORTAL/Free/Hotel/web/luxury/html//contact.php">Contact</a></li>
                    <li><a href="/PORTAL/Free/Hotel/web/luxury/html//login.php">Logout</a></li>
                  </ul>
                </li>

                
                
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
              Welcome
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
                  <a href="/PORTAL/Free/Hotel/web/luxury/html//index-slider.php">Home</a>
                </li>

                <li class="sep">/
                </li>

                <li>Room Detail
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- subheader end -->
      
      <!-- services -->
      <section class="room-detail whitepage">
      <div class="onStep" data-animation="fadeInUp" data-time="300">
        <div class="container">
          <div class="row">
          
          <!-- text detail -->
          <div class="col-md-4">
          <div class="detaillist">
           <h2> Lean Six Sigma Expert</h2>
           <div class="devider-rooms-detail"></div>
           <p>This data analyst course, in collaboration with IBM, will transform you into a data analytics expert. In this course, you will learn the latest analytics tools and techiniques, how to work with SQL,
            the languages of R and Python, the art of creating data visulizations, and how to apply statistics and predictive analytics in a business enivronment.
            </p><br>
            <strong  style="font-size: 1rem;
            font-weight: bold;">Data Analysis certification Learning Path</strong>
            <br>
            <p>Accelerate your career trajectory with our extensive data analytics course Curriculum. Delve into foundational statistics, master data analysis with Python and R, 
              navigate databases using SQL, and harness the power of visualization with Tableau and Power BI.
            </p>
          
          <div class="space-single"></div>
          
          <h2> Program Curriculum </h2>
          <div class="devider-rooms-detail"></div>
          <span><i class="ti-check-box"></i> In Collaboration With IBM</span>
          <span><i class="ti-check-box"></i> 9 tools & Rigorous Curriculum</span>
          <span><i class="ti-check-box"></i> Master's certificate</span>
          <span><i class="ti-check-box"></i> 11 months / 5 Courses</span>
          <br>
          <strong style="font-size: 1rem;
          font-weight: bold;">Why Join This Program</strong>
          <br>
          <span><i class="ti-check-box"></i> IBM Advatages</span>
          <span><i class="ti-check-box"></i> Applied Learning</span>
          <span><i class="ti-check-box"></i> Data-Driven Decision Making</span>
          <span><i class="ti-check-box"></i> Top-notch Data Analyst course</span>

          </div>
          </div>
          <!-- text detail end -->

        <!-- detail img -->
        <div class="col-md-8">
        
         <div id="roomsBig" class="owl-carousel">
          <div class="item"><img alt="img" src="img/rooms/img1.jpg"></div>
          <div class="item"><img alt="img" src="img/rooms/img2.jpg"></div>
          <div class="item"><img alt="img" src="img/rooms/img3.jpg"></div>
          <div class="item"><img alt="img" src="img/rooms/img1.jpg"></div>
          <div class="item"><img alt="img" src="img/rooms/img2.jpg"></div>
          <div class="item"><img alt="img" src="img/rooms/img3.jpg"></div>
         </div>
         
         <div id="roomsSmall" class="owl-carousel">
          <div class="item"><img alt="img" src="img/rooms/img1.jpg"></div>
          <div class="item"><img alt="img" src="img/rooms/img2.jpg"></div>
          <div class="item"><img alt="img" src="img/rooms/img3.jpg"></div>
          <div class="item"><img alt="img" src="img/rooms/img1.jpg"></div>
          <div class="item"><img alt="img" src="img/rooms/img2.jpg"></div>
          <div class="item"><img alt="img" src="img/rooms/img3.jpg"></div>
         </div>
       <a class="btn-book-2" href="course.php">Begin your joureny to sucess</a>  
       </div>
       <!-- detail img end -->
          
        <div class="space-single"></div>  
       
          </div>
        </div>
        </div>
      </section>
      <!-- services end -->
      
      <!-- subscribe -->
      <section class="subscribe-section" style="background-image:url(img/subscribe-bg.jpg)">
         <div class="container">
            <div class="row">
              
            <div class="col-md-6 subwrap-tagline">
            <h2>
                Corporate Training
                Enterprise training for teams
            </h2>
            </div>
            
            <div class="col-md-6 subwrap">
              <h2>Newsletter</h2>
              <h5>Contact Us</h5>

              <div class="space-half">
              </div>
 
             <form action="http://www.on3-step.com/tf/luxury/html/subscribe.php" id="subscribe" method="post" name="subscribe">
              <input class="subscribfield subscribeemail" id="subscribeemail" name="subscribeemail" type="text" placeholder="Enter - email">
              <button class="btn-form" id="submit-2" type="submit">Talk to our advisor</button>
             </form>

             <div class="subscribesuccess">
              Thank you for fill your email
             </div>
            </div>

           </div>
         </div>
      </section>
      <!-- subscribe end -->
      
     <section class="whitepage">  
      <div class="container">
          <div class="row">
          
          <div class="col-md-12">
                <div class="text-center">
                  <h2>9+ Tools Covered</h2>
                  <span class="devider-center"></span>
                  
                 </div>
         </div>
         
         <!-- spacer -->
         <div class="space-double"></div>
         <!-- spacer -->
         
         <div class="onStep" data-animation="fadeInUp" data-time="300">
         
         <div class="owl-carousel" id="owl-post">
         
           <div class="item">
            <div class="recent-post" style="background-image:url(img/recent/img1.jpg)">
                  <div class="hovereffect">
                  <a href="#">
                    <div class="overlay ">
                     <div class="content">
                     <div class="heading">COUPLE OF JOURNEY
                     <span class="devider-recent"></span>
                     </div>
                     <div class="subheading">3 days vacation</div>
                     <div class="readmore">Read more <i class="fa fa-angle-right"></i></div>
                     </div>
                    </div>
                  </a>  
                  </div>
            </div>
           </div>
           
           <div class="item">
            <div class="recent-post" style="background-image:url(img/recent/img2.jpg)">
                  <div class="hovereffect">
                  <a href="#">
                    <div class="overlay ">
                     <div class="content">
                     <div class="heading">FAMILY HAPPINESS
                     <span class="devider-recent"></span>
                     </div>
                     <div class="subheading">7 days vacation</div>
                     <div class="readmore">Read more <i class="fa fa-angle-right"></i></div>
                     </div>
                    </div>
                  </a>  
                  </div>
            </div>
           </div>
           
           <div class="item">
            <div class="recent-post" style="background-image:url(img/recent/img3.jpg)">
                  <div class="hovereffect">
                  <a href="#">
                    <div class="overlay ">
                     <div class="content">
                     <div class="heading">TRAVELER
                     <span class="devider-recent"></span>
                     </div>
                     <div class="subheading">2 days vacation</div>
                     <div class="readmore">Read more <i class="fa fa-angle-right"></i></div>
                     </div>
                    </div>
                  </a>  
                  </div>
            </div>
           </div>
           
           <div class="item">
            <div class="recent-post" style="background-image:url(img/recent/img1.jpg)">
                  <div class="hovereffect">
                  <a href="#">
                    <div class="overlay ">
                     <div class="content">
                     <div class="heading">COUPLE OF JOURNEY
                     <span class="devider-recent"></span>
                     </div>
                     <div class="subheading">3 days vacation</div>
                     <div class="readmore">Read more <i class="fa fa-angle-right"></i></div>
                     </div>
                    </div>
                  </a>  
                  </div>
            </div>
           </div>
           
           <div class="item">
            <div class="recent-post" style="background-image:url(img/recent/img2.jpg)">
                  <div class="hovereffect">
                  <a href="#">
                    <div class="overlay ">
                     <div class="content">
                     <div class="heading">FAMILY HAPPINESS
                     <span class="devider-recent"></span>
                     </div>
                     <div class="subheading">7 days vacation</div>
                     <div class="readmore">Read more <i class="fa fa-angle-right"></i></div>
                     </div>
                    </div>
                  </a>  
                  </div>
            </div>
           </div>
           
           <div class="item">
            <div class="recent-post" style="background-image:url(img/recent/img3.jpg)">
                  <div class="hovereffect">
                  <a href="#">
                    <div class="overlay ">
                     <div class="content">
                     <div class="heading">TRAVELER
                     <span class="devider-recent"></span>
                     </div>
                     <div class="subheading">2 days vacation</div>
                     <div class="readmore">Read more <i class="fa fa-angle-right"></i></div>
                     </div>
                    </div>
                  </a>  
                  </div>
            </div>
           </div>
           
           </div>
           
           </div>

            </div>
           </div>
      </section>
      <!-- section about end -->

      <h3 style="text-align: center;">Experience of Guest</h3>
     <section id="brand" class="brand-page" aria-label="brands" style="background-image:url(img/bg-logo.jpg)">
        <!-- brands-->
        
          <div class="container">
            <div class="row">
            
              <div class="owl-carousel" id="owl-brand">
              
                <div class="item">
                  <img alt="background" src="img/ourclients/1.png">
                </div>

                <div class="item">
                  <img alt="background" src="img/ourclients/2.png">
                </div>

                <div class="item">
                  <img alt="background" src="img/ourclients/3.png">
                </div>

                <div class="item">
                  <img alt="background" src="img/ourclients/4.png">
                </div>

                <div class="item">
                  <img alt="background" src="img/ourclients/5.png">
                </div>

                <div class="item">
                  <img alt="background" src="img/ourclients/6.png">
                </div>
                
                 <div class="item">
                  <img alt="background" src="img/ourclients/1.png">
                </div>

                <div class="item">
                  <img alt="background" src="img/ourclients/2.png">
                </div>

                <div class="item">
                  <img alt="background" src="img/ourclients/3.png">
                </div>

                <div class="item">
                  <img alt="background" src="img/ourclients/4.png">
                </div>

                <div class="item">
                  <img alt="background" src="img/ourclients/5.png">
                </div>

                <div class="item">
                  <img alt="background" src="img/ourclients/6.png">
                </div>

              </div>
              
            </div>
          </div>
        <!-- brands end-->
       </section>

      
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
    <!-- on3step JS -->
    <script src="js/on3step.js" type="text/javascript"></script>
    <script src="js/plugin-set.js" type="text/javascript"></script>
  </body>

<!-- Mirrored from www.on3-step.com/tf/luxury/html/room-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 11:05:12 GMT -->
</html>