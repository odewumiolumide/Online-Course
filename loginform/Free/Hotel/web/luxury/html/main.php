<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}
else{
    header("Location: login.php");
}
?>




<!DOCTYPE html>
<html lang="zxx">
  
<!-- Mirrored from www.on3-step.com/tf/luxury/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 11:01:28 GMT -->
<head>
    <meta charset="utf-8">
    <title>Luxury Interactive Hotel</title>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- favicon -->
    <link href="img/favicon.png" rel="icon" sizes="32x32" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
	  <link rel="stylesheet" href="css/jquery.dateselect.css">
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
    <!--<link href="css/queries-on3step.css" media="all" rel="stylesheet" type="text/css"> -->
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
    <div class="subnav">
    <div class="container">
        <div class="row">

         <div class="col-md-6">
          <div class="left">
                            <div class="social-icons-subnav">
                                <div><i class="ti-mobile"></i>+234 7778 009</div>
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
                <li><a  href="contact.html">Contact</a></li>
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
      
      <!-- home -->
      <section aria-label="home" class="mainbg" id="home">
      
        <!-- intro -->
        <div class="container">
        <div class="row">
        <div class="overlay-main v-align">
          <div class="col-md-10 col-xs-11">
          
            <h1 class="onStep" data-animation="animbouncefall" data-time="300">PROVIDING COMFORTABLE</h1>
            <div class="onStep" data-animation="fadeInUp" data-time="600" id="slidertext">
              <h3 class="main-text">LUXURY RESIDENCE</h3>
              <h3 class="main-text">LUXURY BEACH</h3>
              <h3 class="main-text">LUXURY VACATION</h3>
            </div>
            
            <div class="star-content onStep" data-animation="fadeInUp" data-time="900"><i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> Five Star Luxury Hotel</div>
            
         </div>
        </div>
        </div>
       </div>
       <!-- intro end -->
       
      </section>
      <!-- home end -->
      
        <!-- booking home -->
        <div class="bot-home-text onStep" data-animation="fadeInUp" data-time="1200">
         <div class="container">

            <div id="reservation" class="imgbgres" style="background-image:url(img/bg-res.jpg)">
            
               <form action="" id="form1" method="post" name="form1">
               <div class="row">
               
               <div class="col-sm-6 form-group">
                  <select class="form-control" id="room" name="room" type="room">
                   <optgroup label="SELECT ROOM">
                   <option value="LUXURY SINGLE">LUXURY SINGLE ROOM</option>
                   <option value="LUXURY DOUBLE">LUXURY DOUBLE ROOM</option>
                   <option value="PREMIUM LUXURY">PREMIUM LUXURY ROOM</option>
                   <option value="PREMIUM SUITE">LUXURY PREMIUM ROOM</option>
                   <option value="PREMIUM SUITE">PREMIUM SUITE ROOM</option>
                   <option value="PREMIUM SUITE">LUXURY MASTER BEDROOM</option>
                   </optgroup>
                  </select>
                </div>
                
                <div class="col-md-3 form-group">
					<div class="input-group">
            <input type="date" name="date" id="date" class="form-control fox1" placeholder="CHECK IN DATE">
						
						<div class="input-group-btn">
							<span class="icon"><i class="fa fa-calendar"></i></span>
						</div>
					</div>
				</div>

		
				<div class="col-md-3 form-group">
					<div class="input-group">
            <input type="datE" name="data" id="data" class="form-control fox2" placeholder="CHECK OUT DATE">
						
						<div class="input-group-btn">
							<span class="icon"><i class="fa fa-calendar"></i></span>
						</div>
					</div>
				</div>
                
                <div class="col-sm-2 form-group">
                  <input id="person" name="person"  placeholder="PERSON" type="person">
                </div>
                
                <div class="col-sm-4 form-group">
                  <input id="name" name="name" placeholder="NAME" type="name">
                </div>
                
                <div class="col-sm-3 form-group">
                  <input id="email" name="email" placeholder="EMAIL" type="email">
                </div>

              
                
                <div class="col-sm-2 form-group">
                  
                  <input type="number" name="phone"  id="phone" placeholder="PHONE NUMBER">
                  
                </div>
                
                <div class="col-sm-12 form-group">
                  <textarea cols="50" id="message" type="messagebook" name="message" placeholder="YOUR MESSAGE" rows="2"></textarea>
                </div>

                <td><span id="sprytextfield5"><span class="textfieldRequiredMsg"></span>

                  <!--<div class="success-white" id="mail_success">Thank you. Your reservation has been sent.</div>-->
                  <div class="error-white" id="mail_failed">Error, email not sent</div>
                  <span id="sprytextfield5"><span class="textfieldRequiredMsg"></span>
                    
                      


                 <button class="btn-content" name="Submit"  value="BOOK NOW" id="Submit" type="submit">BOOK NOW</button>
               
               </div>   
               </form>
               
            </div>
              
          </div>
        </div>
        <!-- booking home end -->
      
      <!-- section room -->
      <section class="whitepage"> 
         
        <div class="container">
          <div class="row">
          
          <div class="col-md-12">
                <div class="text-center">
                  <h2>LUXURY ROOMS</h2>
                  <span class="devider-center"></span>
                  <h3>Display Our Room</h3>
                 </div>
         </div>
         
         <!-- spacer -->
         <div class="space-single"></div>
         <!-- spacer -->
         
         <div class="with-gutter">
         
         <div class="onStep" data-animation="fadeInUp" data-time="300">
           <div class="col-md-5">
            <div class="projects-home" style="background-image:url(img/rooms/resto-room.jpg)">
                  <div class="hovereffect">
                  <a href="#">
                    <div class="overlay v-align">
                     <div class="content">
                     <span class="heading">OUR RESTAURANT</span>
                     <span class="devider-projects"></span>
                     <span class="subheading">Display Our Room</span>
                     </div>
                    </div>
                  </a>  
                  </div>
            </div>
           </div>
           
           <div class="col-md-7">
            <div class="projects-home" style="background-image:url(img/rooms/com-room.jpg)">
                  <div class="hovereffect">
                  <a href="#">
                    <div class="overlay v-align">
                     <div class="content">
                     <h3 class="heading">COMPARTMENT</h3>
                     <span class="devider-projects"></span>
                     <p class="subheading">Full Served</p>
                     </div>
                    </div>
                  </a>  
                  </div>
            </div>
           </div>
           
           <div class="col-md-7">
            <div class="projects-home" style="background-image:url(img/rooms/rel-room.jpg)">
                  <div class="hovereffect">
                  <a href="#">
                    <div class="overlay v-align">
                     <div class="content">
                     <span class="heading">RELAXING</span>
                     <span class="devider-projects"></span>
                     <span class="subheading">Spa & Pool</span>
                     </div>
                    </div>
                  </a>  
                  </div>
            </div>
           </div>
           
           <div class="col-md-5">
            <div class="projects-home" style="background-image:url(img/rooms/beach.jpg)">
                  <div class="hovereffect">
                  <a href="#">
                    <div class="overlay v-align">
                     <div class="content">
                     <h3 class="heading">THE BEACH</h3>
                     <span class="devider-projects"></span>
                     <p class="subheading">Ocean View</p>
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
      <!-- section room end -->
      
      <!-- subscribe -->
      <section class="subscribe-section" style="background-image:url(img/subscribe-bg.jpg)">
         <div class="container">
            <div class="row">
              
            <div class="col-md-6 subwrap-tagline">
            <h2>
                THE 
                GREATEST 
                LANDSCAPE 
                HOTEL 
                FOR
                VACATION
            </h2>
            </div>
            
            <div class="col-md-6 subwrap">
              <h2>Newsletter</h2>
              <h5>Sign up for Our News!</h5>

              <div class="space-half">
              </div>
 
             <form action="http://www.on3-step.com/tf/luxury/html/subscribe.php" id="subscribe" method="post" name="subscribe">
              <input class="subscribfield subscribeemail" id="subscribeemail" name="subscribeemail" type="text" placeholder="Enter - email">
              <button class="btn-form" id="submit-2" type="submit">SUBSCRIBE</button>
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
                  <h2>RECENT POST</h2>
                  <span class="devider-center"></span>
                  <h3>Experience of Guest</h3>
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

<!-- Mirrored from www.on3-step.com/tf/luxury/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 11:01:29 GMT -->
</html>