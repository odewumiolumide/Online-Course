<?php 


mysql_connect("localhost","root","") or die (mysql_error());

mysql_select_db("home");
if(isset($_GET['delete']))
	{
		$sql = "DELETE FROM blog  WHERE id=".$_GET['delete'].";";
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
		if(!($_POST['date']))
		$message = "field is required";
    if(!($_POST['email']))
		$message = "field is required";
        if(!($_POST['message']))
		$message = "field is required";
	
	else {
		$query=" INSERT INTO blog (name, date, email, message) VALUES('"
	 	    .$_POST['name']."','" 
		    .$_POST['date']."','"
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
  
<!-- Mirrored from www.on3-step.com/tf/luxury/html/blog-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 11:05:12 GMT -->
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
                <li><a class="actived" href="#">Blog <i class="fa fa-angle-down"></i></a>
                  <ul>
                    <li><a href="blog.html">Blog Single</a></li>
                    <li><a href="blog-post.html">Blog Post</a></li>
                  </ul>
                </li>
                <li><a  href="contact.html">Contact</a></li>
                <li>
                <form role="search">
                <div class="input-group">
						<input type="text" id="search1" class="form-control" placeholder="SEARCH">
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
                Blog
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

                <li>Blog Post
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- subheader end -->
      
      <!-- section -->    
 <section aria-label="section-blogg" id="content">
  <div class="container">
    <div class="row">
              
              <!-- left content -->
              <div class="col-md-8">
              <div class="onStep" data-animation="fadeInUp" data-time="300">

                     <!-- article -->
                     <article>
                        <div class="post-image">
                           <img class="img-responsive" src="img/blog/img1.jpg" alt="blog-img" />
                           <div class="post-heading">
                              <h3><a class="link"  href="#">Fierent adipisci iracundia est ei</a></h3>
                           </div>
                        </div>
                        <p>Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur
                        </p>
                        <div class="bottom-article">
                           <ul class="meta-post">
                              <li><a class="link"  href="#">Jan 12, 2017</a>
                              </li>
                           </ul>
                        </div>
                     </article>
                     <!-- article end -->

                     <!-- comment blog -->
                     <div id="blog-comment">
                        <h5><span>Comments (5)</span></h5>

                        <ul>
                           <li>
                              <div class="avatar"><img alt="img" src="img/avatar.jpg">
                              </div>
                              <div class="comment-info">
                                 <span class="c-name">John Smith</span>
                                 <span class="c-date">30 Jan 2017</span>
                                 <span class="c-reply"><a class="link"  href="#">Reply</a></span>
                              </div>
                              <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                              <!-- sub comment -->
                              <ul>
                                 <li>
                                    <div class="avatar"><img alt="img" src="img/avatar.jpg">
                                    </div>
                                    <div class="comment-info">
                                       <span class="c-name">John Smith</span>
                                       <span class="c-date">30 Jan 2017</span>
                                       <span class="c-reply"><a class="link"  href="#">Reply</a></span>
                                    </div>
                                    <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                 </li>
                              </ul>
                              <!-- sub comment end -->
                           </li>
                        </ul>


                        <ul>
                           <li>
                              <div class="avatar"><img alt="img" src="img/avatar.jpg">
                              </div>
                              <div class="comment-info">
                                 <span class="c-name">John Smith</span>
                                 <span class="c-date">30 Jan 2017</span>
                                 <span class="c-reply"><a class="link"  href="#">Reply</a></span>
                              </div>
                              <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                           </li>
                        </ul>

                        <ul>
                           <li>
                              <div class="avatar"><img alt="img" src="img/avatar.jpg">
                              </div>
                              <div class="comment-info">
                                 <span class="c-name">John Smith</span>
                                 <span class="c-date">30 Jan 2017</span>
                                 <span class="c-reply"><a class="link"  href="#">Reply</a></span>
                              </div>
                              <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                           </li>
                        </ul>

                        <ul>
                           <li>
                              <div class="avatar"><img alt="img" src="img/avatar.jpg">
                              </div>
                              <div class="comment-info">
                                 <span class="c-name">John Smith</span>
                                 <span class="c-date">30 Jan 2017</span>
                                 <span class="c-reply"><a class="link"  href="#">Reply</a></span>
                              </div>
                              <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                           </li>
                        </ul>



                      <h4>User's Comment</h4>
                      <td height="42" colspan="2" align="center" valign="middle"><hr />
                    &nbsp;
                    <table width="618" border="1" cellpadding="1" cellspacing="1">
                      <tr bgcolor="">
                        <th width="370" align="center" valign="middle" scope="col"><span class="style10">Name</span></th>
                        <th width="370" align="center" valign="middle" class="style10" scope="col">Date</th>
                        <th width="641" align="center" valign="middle" class="style10" scope="col">Message</th>
                        
                        <th width="9" align="center" valign="middle" scope="col">&nbsp;</th>
                        
                      </tr>
                      <?php $c=0;
                      
			  $sql = "SELECT *FROM blog order by id asc;";
			    $query=mysql_query($sql) or die(mysql_error());
  
  while(($rows=mysql_fetch_array($query)))
  {
  $c++;
  extract($rows);
  ?>
  <td height="42" colspan="2" align="center" valign="middle"><hr />
                      <tr bgcolor="">
                        
                        <th height="27" align="center" valign="middle" scope="col"><?php echo $name; ?></th>
                        <th height="27" align="center" valign="middle" scope="col"><?php echo $date; ?></th>
                        <th height="27" align="center" valign="middle" scope="col"><?php echo $message; ?></th>
                        <th align="center" valign="middle" bgcolor="" scope="col"><a href="#comment-form-wrapper?delete=<?php echo $id; ?>">Reply</a></th>
                        <td height="42" colspan="2" align="center" valign="middle"><hr />
                        
                      </tr>
                      <?php } ?>
                      
                    </table></td>
                    
                </tr>
                
                </table></td>
                <td height="42" colspan="2" align="center" valign="middle"><hr />
            </tr>
          </table></td>
        </tr>
        
        <tr>
          
          <td height="19" align="center" bgcolor="">&nbsp;</td>
        </tr>
        
      </table></td>
      

                        <div id="comment-form-wrapper">
                           <h5>Leave a Comment</h5>
                           <form id="commentform" name="form1" method="post" action="">
                              <input type="name" name="name" id="name" placeholder="name" />
                              <input type="date" name="date" id="date" placeholder="date">
                              <input type="email" name="email" id="email" placeholder="email" />
                              <textarea cols="10" rows="10" name="message" id="message" placeholder="Comment"></textarea>
                             <div id="mail_success" class="success"> Thanks for your comment</div>
                              <div id="mail_failed" class="error">Error, comment failed</div>
                              <button class="btn" name="Submit" id="sendcomment"  value="BOOK NOW" id="Submit" type="submit">Comment</button>
                              <!---<button id="sendcomment" class="btn" type="submit">Comment</button>
                           </form>
                        </div>
                     </div>
                     <!--comment blog end -->
                     
                  </div>
                  </div>
                  <!-- left content end -->

            <!-- right content -->
            <div class="col-md-4">
              <aside class="onStep" data-animation="fadeInUp" data-time="600">
              
              <!-- widget -->
              <div class="widget">
              <form role="search">
                <div class="input-group">
						<input type="text" id="search" class="form-control" placeholder="SEARCH">
						<div class="input-group-btn">
							<button type="submit"><span class="icon"><i class="fa fa-search"></i></span></button>
						</div>
				</div>
                </form>
                </div>
                <!-- widget end -->
              
                <!-- widget -->
                <div class="widget">
                  <h5>
                    Recent posts
                  </h5>

                  <div class="devider-widget">
                  </div>

                  <div class="recent">
                    <div>
                      <img alt="#" class="pull-left" src="img/blog/65x65/thumb1.jpg">
                      <h6>
                        <a class="link"  href="#">Lorem ipsum dolor sit</a>
                      </h6>

                      <p>
                        Mazim alienum appellantur eu cu ullum officiis pro pri
                      </p>
                    </div>

                    <div>
                      <a class="link"  href="#"><img alt="#" class="pull-left" src="img/blog/65x65/thumb2.jpg"></a>
                      <h6>
                        <a class="link"  href="#">Maiorum ponderum eum</a>
                      </h6>

                      <p>
                        Mazim alienum appellantur eu cu ullum officiis pro pri
                      </p>
                    </div>

                    <div>
                      <a class="link"  href="#"><img alt="#" class="pull-left" src="img/blog/65x65/thumb3.jpg"></a>
                      <h6>
                        <a class="link"  href="#">Et mei iusto dolorum</a>
                      </h6>

                      <p>
                        Mazim alienum appellantur eu cu ullum officiis pro pri
                      </p>
                    </div>
                  </div>
                </div>
                <!-- widget end -->
                
                <!-- widget -->
                <div class="widget">
                  <h5>
                    Tags
                  </h5>

                  <div class="devider-widget">
                  </div>

                  <div class="tags">
                    <div>
                      <a class="link"  href="#">Photography</a>
                    </div>

                    <div>
                      <a class="link"  href="#">Trends</a>
                    </div>

                    <div>
                      <a class="link"  href="#">Interactive</a>
                    </div>

                    <div>
                      <a class="link"  href="#">Interior</a>
                    </div>

                    <div>
                      <a class="link"  href="#">Responsive</a>
                    </div>

                    <div>
                      <a class="link"  href="#">Creative</a>
                    </div>

                    <div>
                      <a class="link"  href="#">Design</a>
                    </div>

                    <div>
                      <a class="link"  href="#">website</a>
                    </div>

                    <div>
                      <a class="link"  href="#">application</a>
                    </div>
                  </div>
                </div>
                <!-- widget end -->
                
                <!-- widget -->
                <div class="widget">
                  <h5>
                    About Us
                  </h5>

                  <div class="devider-widget">
                  </div>

                  <p>
                    Proin hendrerit eget tellus sit amet vestibulum. Nullam a tincidunt leo. Sed eget sem scelerisque, malesuada lectus sed, facilisis sapien. Pellentesque quis ullamcorper est, vitae
                    condimentum enim. Phasellus suscipit eu lacus finibus rhoncus. Maecenas sed lacus aliquam, vehicula sapien ac, cursus erat. Aenean vel erat a urna efficitur varius.
                  </p>
                </div>
                <!-- widget end -->
              </aside>
            </div>
            <!-- right content end -->
        
    </div>
  </div>
 </section>
 <!-- section -->

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

<!-- Mirrored from www.on3-step.com/tf/luxury/html/blog-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 11:05:13 GMT -->
</html>