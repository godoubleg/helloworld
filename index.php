 <?php
    require_once('config.php');
    
    $query= "Select video from banner";
    $response = @mysqli_query($dbc,$query);
     $row = mysqli_fetch_array($response); 
    $video = $row['video'];
    
    $query= "Select title,description from header where id = 1";
    $response = @mysqli_query($dbc,$query);
     $row = mysqli_fetch_array($response); 
    $banner_header = $row['title'];
    $banner_description = $row['description'];
    
    $query= "Select title,description from header where id = 2";
    $response = @mysqli_query($dbc,$query);
     $row = mysqli_fetch_array($response); 
    $sale_header = $row['title'];
    $sale_description = $row['description'];
    
    $query= "Select title,description from header where id = 3";
    $response = @mysqli_query($dbc,$query);
     $row = mysqli_fetch_array($response); 
    $quote_header = $row['title'];
    $quote_description = $row['description'];
    
    $query= "Select title,description from header where id = 4";
    $response = @mysqli_query($dbc,$query);
     $row = mysqli_fetch_array($response); 
    $sold_header = $row['title'];
    $sold_description = $row['description'];
    
    $query= "SELECT `id`, `email`, `telephone`, `address`, `time` FROM `contactinfo` WHERE 1";
    $response = @mysqli_query($dbc,$query);
     $row = mysqli_fetch_array($response); 
    $email= $row['email'];
    $telephone= $row['telephone'];
    $address= $row['address'];
    
    $query= "SELECT `value`FROM `logo` WHERE id =1";
    $response = @mysqli_query($dbc,$query);
     $row = mysqli_fetch_array($response);  
    $header_logo1= $row['value'];

    $query= "SELECT `value`FROM `logo` WHERE id =2";
    $response = @mysqli_query($dbc,$query);
     $row = mysqli_fetch_array($response);
    $header_logo2= $row['value'];

   $query= "SELECT `value`FROM `logo` WHERE id =3";
    $response = @mysqli_query($dbc,$query);
     $row = mysqli_fetch_array($response);
    $footer_logo= $row['value'];

    $query= "SELECT `value`FROM `logo` WHERE id =4";
    $response = @mysqli_query($dbc,$query);
     $row = mysqli_fetch_array($response);
    $wxQR= $row['value'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
	
	<title>Jonas Yu Real Estate</title>
	<!-- set your website meta description and keywords -->
	<meta name="description" content="Add your business website description here">
	<meta name="keywords" content="Add your business website keywords here">
	<!-- set your website favicon -->
	<link href="images/logo-foot.jpg" rel="icon">
	
	<!-- Bootstrap Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Font Awesome Stylesheets -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Owl Carousel Stylesheets -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Lightbox Stylesheets -->
	<link rel="stylesheet" href="css/lightbox.min.css">
	<!-- Parallax Stylesheets -->
	<link rel="stylesheet" href="css/parallax.css" type="text/css">
	<!-- Template Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!-- Responsive Stylesheets -->
	<link rel="stylesheet" href="css/responsive.css" type="text/css">
	
</head>

<body>
	<!-- start Header -->
	<header id="header" class="header">
        <div class="header-nav">
            <div class="container">
                <div class="row">
					<div class="col-sm-12">
						<nav class="main-menu">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar top-bar"></span>
									<span class="icon-bar middle-bar"></span>
									<span class="icon-bar bottom-bar"></span>
								</button>
								<a class="navbar-brand" href="index.php">
									<img class="logo logo-white" src="images/<?php echo $header_logo1 ?>" alt="logo"> 
									<img class="logo logo-color" src="images/<?php echo $header_logo2 ?>" alt="logo">
                                    
								</a>
                                
                                
							</div><!--End navbar-header -->
                                
							<div id="navbar" class="navbar-collapse collapse">
                              
								<ul class="nav navbar-nav navbar-right">
                                    
									<li><a class="active" href="#home">Home</a></li>
									<li><a href="#about">About</a></li>  
                                    <li><a href="#blog">Sold</a></li>  
                                    <li> 
                                       <div class="dropdown"  >
                                           <button class="dropbtn"> PROPERTIES </button>
                                            <div class="dropdown-content">
                                                <a href="#portfolio" >FEATURE LISTINGS</a>
                                                <a href="https://www.realtor.ca/"  target="_blank">SEARCH PROPERTIES</a> 
                                            </div>
                                        </div>
                                    </li>
									<li><a class="last" href="#contact">Contact</a></li>
                                     <li>  
                                         <a href="index-videoCN.php"> &nbsp;中文</a>          
                                    </li>
								</ul>
                                
							</div><!--End navbar -->
                            
						</nav>
					</div><!--End col -->
                </div><!--End row -->
            </div><!--End container -->
        </div><!--End header-nav -->
    </header>
	<!-- end Header -->
	
	<!-- start slider and home section -->
	<section id="home" class="home video-bg" data-vide-bg="<?php  echo $video ?>" data-vide-options="position: 50% 50%">
        <div class="home-top-banner background-transparent">
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
								<div class="banner-content banner-content-fullwidth">
									<h3></h3>
									<h1 class="header-title-text type-animate">
								    <?php  echo $banner_header ?>
									</h1>
                                    <h2 style="color: white"><?php  echo $banner_description ?></h2> 
								</div><!--End banner-content -->
							</div><!--End col-sm-12 -->
                        </div><!--End row -->
                    </div><!--End container -->
                </div><!--End display-table-cell -->
            </div><!--End display-table -->
        </div><!--End home-top-banner -->
	</section>
	<!-- end slider and home section -->
 <?php 
    
    $query= "Select img,content1,content2,content3 from about";
    $response = @mysqli_query($dbc,$query);
     $row = mysqli_fetch_array($response); 
?>	
	<!-- start About section -->
	<section id="about" class="about about-timeline-style">
		<div class="container">
			<div class=" row">
				<div class="col-sm-12">
					<!-- start section title-wrap -->
					<div class="title-wrap">
						<div class="section-title-box">
							<h2 class="section-title">About <strong>Me</strong></h2>
						</div><!-- end section-title-box -->
					</div>
					<!-- end section title-wrap -->
				</div><!-- end col -->
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-6">
							<div class="profile-image">
								<img src="<?php  echo $row['img']; ?>" alt="profile photo">
							</div><!-- end profile-image -->
						</div><!-- end col --> 
						<div class="col-sm-6">
							<div class="about-text">
								<p><?php  echo $row['content1'] ?></p>
								<p><?php  echo $row['content2'] ?></p> 
								<p><?php  echo $row['content3'] ?></p>
								<div class="button-holder">
									<a class="btn btn-shutter-out-horizontal" href="#contact">Contact Me </a> 
								</div><!-- end button-holder -->
							</div><!-- about-text -->
						</div><!-- end col -->
					</div><!-- end row -->
				</div><!-- end col-sm-12 -->
				 
				
			</div><!-- end row -->	
		</div><!-- end container -->  
	</section>
	<!-- end About section -->
	
	   <?php
        $titleArray = explode(" ", $sale_header);
    ?> 
    
	<!-- start portfolio -->  
    
	<section id="portfolio" >
        <div class="col-sm-12">
					<!-- start section title-wrap -->
					<div class="title-wrap">
						<div class="section-title-box">
							<h2 class="section-title"><?php echo $titleArray[0]; ?> <strong><?php echo $titleArray[1]; ?> </strong></h2>
						</div><!-- end section-title-box -->
					</div>
					<!-- end section title-wrap -->
					<div class="intro-text text-center">
						<?php echo $sale_description; ?> 
					</div><!-- end intro-text -->
				</div><!-- end col -->	
        <div class="sale_style">
            
            <?php
            $query= "SELECT `id`, `image` FROM `sale` WHERE 1"; 
            $response = @mysqli_query($dbc,$query); 
            ?>
            <?php while( $row = mysqli_fetch_array($response)){  ?>
            <div class="one">  
                <div class="portfolio-wrapper">
                      <img src="./images/sale/<?php echo $row['image']; ?> " height="300px" alt="Portfolio Title">
                      <div class="portfolio-overlay">
                          <div class="portfolio-overlay-inner">
                              <div class="portfolio-overlay-content">
                                  <div class="portfolio-link">
													<a title="Details" href="single-portfolio.php?id=<?php echo $row['id']; ?>"><i class="fa fa-link"></i></a>
                                      <a data-lightbox="photography" data-title="Image Preview" href="./images/sale/<?php echo $row['image']; ?> "><i class="fa fa-search-plus"></i></a>
                                  </div><!--End portfolio-link -->
                                  <div class="portfolio-caption">
                                      <h3><a href="single-portfolio.html">Property Details</a></h3>
                                  </div><!--End portfolio-caption -->
                              </div><!--End portfolio-overlay-content -->
                          </div><!--End portfolio-overlay-inner -->
                      </div><!--End portfolio-overlay -->
                  </div><!--End portfolio-wrapper -->
              </div>	 
                        <?php  } ?>  
            
     
        </div> 
	</section>
	<!-- end portfolio -->
	
    
    
    
    
    
    
     <?php
        $titleArray = explode(" ", $quote_header);
    ?>
	
	<!--  start quotes-section -->
	<section id="quotes" class="quotes-section  ">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="quotes-wrap text-center">
						<!-- start section title-wrap -->
						<div class="title-wrap">
							<div class="section-title-box">
								<h2 class="section-title"><?php echo $titleArray[0]; ?> <strong><?php echo $titleArray[1]; ?></strong></h2>
							</div><!-- end section-title-box -->
						</div>
						<!-- end section title-wrap -->
						<p><?php echo $quote_description; ?></p>
						<a class="btn btn-shutter-out-horizontal" href="#portfolio">Feature Listings </a> &nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-shutter-out-horizontal" href="https://www.realtor.ca/">Search Properties </a> 
					</div>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!-- end quotes-section -->
	
 
	<!-- end clients -->
	 
	<!--End #success-story -->
	    
	<section id="blog" class="blog blog-style2">
		<div class="container">
			<div class="row">	
				<div class="col-sm-12">
					<!-- start section title-wrap -->
					<div class="title-wrap">
						<div class="section-title-box">
                            <h2 class="section-title"><strong><?php echo $sold_header ?></strong> </h2>
						</div><!-- end section-title-box -->
					</div>
					<!-- end section title-wrap -->
					<div class="intro-text text-center">
					   <?php echo $sold_description ?>
					</div><!-- end intro-text -->
				</div><!-- end col -->
			</div><!-- end row -->				
			<div class="row">
				<div class="col-sm-12">
					<div class="owl-carousel">
<?php
	$query= "Select id,title,description,image,author,date from sold"; 
    $response = @mysqli_query($dbc,$query); 
	  ?>
    <?php while( $row = mysqli_fetch_array($response)){  ?>
					<div class="item">
							<article class="post-wrap">
								<div class="post-thumb">
									<img src="./images/sold/<?php echo $row['image'] ?>" alt="Blog Image" >
                                    <img src="images/sold.jpg" alt="Blog Image"  >
								</div><!--End post-thumb -->
								<div class="post-content">
									<div class="post-title">
										<h3><a href="single-blog.php?id=<?php echo $row['id'];?>"><?php echo $row['title'] ?></a></h3>
									</div><!--End post-title -->
									<div class="post-excerpt">
										<p><?php echo $row['description'] ?><a class="btn-more" href="single-blog.php?id=<?php echo $row['id'];?>">Read More <i class="fa fa-angle-double-right"></i></a></p>
									</div><!--End post-excerpt -->
								  
								</div><!--End post-content -->
							</article><!--End post-wrap -->
						</div><!--End item -->					 
                        <?php  } ?>  
                     
					 
					</div><!-- end carousel -->
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!-- start contact -->
  
	<section id="contact" class="contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<!-- start section title-wrap -->
					<div class="title-wrap">
						<div class="section-title-box">
							<h2 class="section-title">Contact  <strong>Me</strong></h2>
						</div><!-- end section-title-box -->
					</div>
					<!-- end section title-wrap -->
				 
				</div><!-- end col -->
			</div><!-- end row -->	
			<!-- start contact section -->
			<div class="row">
				<div class="col-sm-6 jhform" >
					<!-- start title-box -->
				 
					<!-- end title-box -->
					<form id="contactForm" name="contactform" data-toggle="validator" class="contact-form"  >
						 
						<div class="form-group col-sm-12">
							<div class="help-block with-errors"></div>
							<input name="fname" id="fname" placeholder="Your Name*" class="form-control" type="text" required data-error="Please enter Name"> 
							<div class="input-group-icon"><i class="fa fa-user"></i></div>
						</div><!-- end form-group -->
						<div class="form-group col-sm-12">
							<div class="help-block with-errors"></div>
							<input name="email" id="email" placeholder="Your Email*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" type="email" required data-error="Please enter valid Email"> 
							<div class="input-group-icon"><i class="fa fa-envelope"></i></div>
						</div><!-- end form-group -->
						<div class="form-group col-sm-12">
							<div class="help-block with-errors"></div>
							<input name="phone" id="phone" placeholder="Phone* Use Only Digit with/without + sign" pattern="^\+?\d{6,16}" class="form-control" type="text" required data-error="Please enter valid Phone">
							<div class="input-group-icon"><i class="fa fa-phone"></i></div> 
						</div><!-- end form-group -->
						<div class="form-group col-sm-12">
							<div class="help-block with-errors"></div>
							<textarea rows="3" name="message" id="message" placeholder="Write comment here*" class="form-control" required data-error="Please enter message"></textarea>
							<div class="input-group-icon"><i class="fa fa-pencil"></i></div>
						</div><!-- end form-group -->
						<div class="form-group col-sm-12">
							<button type="submit" id="submit" name="submit" class="btn btn-shutter-out-horizontal">Send</button>
						</div><!-- end form-group -->					
						<span class="sub-text">* Required fields</span>
                        <div id="msgContactSubmit" class="hidden"></div>
						<div class="clearfix"></div>
					</form><!-- end form -->
				</div><!-- end col -->
 
				 
			</div><!-- end row -->
			<!-- end contact section -->
			<div class="row">	
				<!-- start contact Info -->
				<div class="col-sm-12 text-center">
					<div class="row">
						<div class="col-sm-4">
							<div class="contact-item">
								<div class="contact-item-inner">
									<div class="contact-icon">
										<i class="fa fa-home"></i>
									</div>
									<div class="contact-desc">
										<h4><?php echo $address;?></h4>
									</div>
								</div><!-- end contact-item-inner -->
							</div><!-- end contact-item -->
						</div><!-- end col -->
						<div class="col-sm-4">
							<div class="contact-item">
								<div class="contact-item-inner">
									<div class="contact-icon">
										<i class="fa fa-envelope"></i>
									</div>
									<div class="contact-desc">
										<h4><a><?php echo $email;?></a></h4><br>
									</div>
								</div><!-- end contact-item-inner -->
							</div><!-- end contact-item --> 
						</div><!-- end col -->
						<div class="col-sm-4">
							<div class="contact-item">
								<div class="contact-item-inner">
									<div class="contact-icon">
										<i class="fa fa-phone"></i>
									</div>
									<div class="contact-desc">
										<h4><?php echo $telephone;?></h4><br>
									</div>
								</div><!-- end contact-item-inner --> 
							</div><!-- end contact-item --> 
						</div><!-- end col -->
					</div><!-- end row -->
				</div><!-- end col-sm-12 -->
				<!-- end contact Info -->
			</div><!-- end row -->
		 </div><!-- end container --> 
	</section>
	<!-- end contact -->
	
	<!-- start footer -->
	<footer id="footer" class="footer">
		<div class="container">
			<div class="row">	
				<div class="footer-top clearfix">
					<div class="col-sm-4">
						<div class="columnbottom-margin subscribe-form-wrap">
							<h4 class="widget-title">Subscribe <span>NewsLetter</span></h4>
							<p>By subscribing to our mailing list you will always get latest news from us.</p>
							<!-- start mailchimp form -->
							<div class="mc-form-holder">
								<form id="mc-form">
									<input id="mc-email" class="form-control" placeholder="email address" name="EMAIL" type="email">
									<button class="btn" type="submit"><i class="fa fa-paper-plane"></i></button>
									<label for="mc-email"></label>
								</form>
							</div>
							<!-- end mailchimp form -->
						</div><!-- end subscribe-form-wrap -->
					</div><!-- end col -->
					<div class="col-sm-4">
						<div class="columnbottom-margin recent-work-wrap">
							<h4 class="widget-title">Recent <span>Work</span></h4>
							<div class="latest-pfolio">
          <?php
	$query= "Select id,title,description,image,author,date from sold where id = 1"; 
    $response = @mysqli_query($dbc,$query); 
     $row = mysqli_fetch_array($response)
	  ?>                              
								<div class="col-xs-4 no-space">
									<div class="portfolio-wrapper">
										<img src="./images/sold/<?php echo $row['image'] ?>" alt="Blog Image" >
										<div class="portfolio-overlay">
											<div class="portfolio-overlay-inner">
												<div class="portfolio-overlay-content">
													<div class="portfolio-link">
														<a title="Details" href="single-blog.php?id=<?php echo $row['id'];?>"><i class="fa fa-link"></i></a>
														<a data-lightbox="recentwork" data-title="Image Preview" href="./images/sold/<?php echo $row['image'] ?>"><i class="fa fa-search-plus"></i></a>
													</div><!--End portfolio-link -->
												</div><!--End portfolio-overlay-content -->
											</div><!--End portfolio-overlay-inner -->
										</div><!--End portfolio-overlay -->
									</div><!--End portfolio-wrapper -->
								</div><!--End ./col- -->
             <?php
	$query= "Select id,title,description,image,author,date from sold where id = 2"; 
    $response = @mysqli_query($dbc,$query); 
     $row = mysqli_fetch_array($response)
	  ?>                              
								<div class="col-xs-4 no-space">
									<div class="portfolio-wrapper">
										<img src="./images/sold/<?php echo $row['image'] ?>" alt="Blog Image" >
										<div class="portfolio-overlay">
											<div class="portfolio-overlay-inner">
												<div class="portfolio-overlay-content">
													<div class="portfolio-link">
														<a title="Details" href="single-blog.php?id=<?php echo $row['id'];?>"><i class="fa fa-link"></i></a>
														<a data-lightbox="recentwork" data-title="Image Preview" href="./images/sold/<?php echo $row['image'] ?>"><i class="fa fa-search-plus"></i></a>
													</div><!--End portfolio-link -->
												</div><!--End portfolio-overlay-content -->
											</div><!--End portfolio-overlay-inner -->
										</div><!--End portfolio-overlay -->
									</div><!--End portfolio-wrapper -->
								</div><!--End ./col- -->
                 <?php
	$query= "Select id,title,description,image,author,date from sold where id = 3"; 
    $response = @mysqli_query($dbc,$query); 
     $row = mysqli_fetch_array($response)
	  ?>                              
								<div class="col-xs-4 no-space">
									<div class="portfolio-wrapper">
										<img src="./images/sold/<?php echo $row['image'] ?>" alt="Blog Image" >
										<div class="portfolio-overlay">
											<div class="portfolio-overlay-inner">
												<div class="portfolio-overlay-content">
													<div class="portfolio-link">
														<a title="Details" href="single-blog.php?id=<?php echo $row['id'];?>"><i class="fa fa-link"></i></a>
														<a data-lightbox="recentwork" data-title="Image Preview" href="./images/sold/<?php echo $row['image'] ?>"><i class="fa fa-search-plus"></i></a>
													</div><!--End portfolio-link -->
												</div><!--End portfolio-overlay-content -->
											</div><!--End portfolio-overlay-inner -->
										</div><!--End portfolio-overlay -->
									</div><!--End portfolio-wrapper -->
								</div><!--End ./col- -->
                                
							 
							</div><!--End latest-portfolio -->   
							<div class="clearfix"></div>
						</div><!-- end recent-work-wrap -->
					</div><!-- end col -->
					<div class="col-sm-4">
						<div class="columnbottom-margin contact-info-wrap">
							<h4 class="widget-title">Contact <span>Details</span></h4>
							<ul class="contact-info list-unstyled">
								<li><i class="fa fa-home"></i><?php echo $address;?></li>
								<li><i class="fa fa-phone"></i> <?php echo $telephone;?></li>
								<li><i class="fa fa-envelope"></i> <?php echo $email;?>  </li>
                                		<li> <img src="images/<?php echo $wxQR ?>" class="wx" style="height: 147.4px;width:137.2px"> </li>
                                
							</ul><!-- end contact-info  -->
					 
						</div><!-- end contact-info-wrap -->
					</div><!-- end col -->
				</div><!-- end footer-top  --> 
			</div><!-- end row --> 
			<hr>
			<div class="row">					
				<div class="col-sm-12">
                    <a href="#" class="footer-logo-link"><img class="footer-logo" src="images/<?php echo $footer_logo ?>"  alt="footer-logo"></a>
					  <p class="text-center copyright"  >&copy; 2019 All right reserved | Jonas Yu Homes <a href="privacy.php"  style="text-decoration:underline;color:#04b962">Privacy Policy</a>| Powered By <a href="http://www.finestudio.ca" class="finestudio" style="text-decoration:underline;color:#04b962" >  www.FineStudio.ca</a></p>
				</div><!-- end col --> 
			</div><!-- end row --> 
		</div><!-- end container --> 
	</footer>
	<!-- end footer -->
	 <?php  mysqli_close($dbc); ?>
	
	<!-- jQuery Library -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<!-- Bootstrap Js -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Modernizr Js -->
	<script src="js/modernizr.js"></script>
	<!-- jquery.vide Js -->
	<script src="js/jquery.vide.js"></script>
	<!-- Circle Progress Js -->
	<script src="js/circle-progress.js"></script>
	<!-- Isotope Filtring Js -->
	<script src="js/isotope.pkgd.min.js"></script>
	<!-- Lightbox Js -->
	<script src="js/lightbox.min.js"></script>
	<!-- owl.carousel Js -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Form validator Js -->
	<script src="js/validator.min.js"></script>
	<!-- counterup Js -->
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<!-- ajaxchimp Js -->
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<!-- Template main Js -->
	<script src="js/main.js"></script>
	
</body>
</html>