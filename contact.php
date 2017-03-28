<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About- Technote Limited</title>
	
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">
    
    <!-- =======================================================
        Theme Name: Medicio
        Theme URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">
	
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
					<p class="bold text-left"></p>
					</div>
					<div class="col-sm-6 col-md-6">
					<p class="bold text-right">Call us now +254 721 519525 |+254 763 519525</p>
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="img/logoo.png" alt="" width="150" height="40" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class=""><a href="#">Home</a></li>
				<li class="active"><a href="about.html">About Us</a></li>
				<li class=""><a href="products.html">Products & Services</a></li>
				<li class=""><a href="contact.php">Contact Us</a></li>
				<!--<li><a href="#service">Service</a></li>
				<li><a href="#boxes">Products</a></li>
				<li><a href="#facilities">Facilities</a></li>
				<li><a href="#pricing">Pricing</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
				  <ul class="dropdown-menu">
				    <li><a href="index.html">Home CTA</a></li>
					<li><a href="index-form.html">Home Form</a></li>
					<li><a href="index-video.html">Home video</a></li>
				  </ul>
				</li>-->
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	

	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
					<h2 class="h-ultra">Contact Us</h2>
					</div>
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
					<!--<h4 class="h-light">Provide <span class="color">best quality healthcare</span> for you</h4>-->
					</div>
						<div class="well well-trans">
						<div class="wow fadeInRight" data-wow-delay="0.1s">

						<form method="post" class="form-control-static" action="sendmail.php">
        
            <div class="form-group">
                <input class="form-control" type="text" name="full_name" value="" maxlength="50" placeholder="Full Name" />
				<span class="text-danger"><?php //echo $name; ?></span>
            </div>
		 
		 <div class="form-group">
                <input class="form-control" type="email" name="email" value="" maxlength="50" placeholder="Email" />
			 <span class="text-danger"><?php //echo $emailError; ?></span>
            </div>
		 
		  <div class="form-group">
                <input type="text" class="form-control" name ="subject" value="" maxlength="50" placeholder="Subject"/ >
			  <span class="text-danger"><?php //echo $subjecte; ?></span>
            </div>
            
            <div class="form-group">
                <textarea type="text" class="form-control"  name ="message" value="" rows="12" placeholder="Message" >
				<?php 
    if(!empty($_POST['message'])) {
        echo $_POST['message'];
	}
?>
				</textarea>
				<span class="text-danger"><?php //echo $messagi; ?></span>
            </div>
		 		<div class="form-group"> 

		 <label for="anti_spam">40 + 3 = </label>
          <input id="anti_spam" name="anti_spam" class = "form-control" value="" maxlength="50" type="number"
            placeholder="answer the sum" required>
					<span class="text-danger"><?php //echo $sum; ?></span>
		 </div>
            
            <div class="form-group">
                <button class="btn btn-success" type="submit" name="btn_send">
                <span class="glyphicon glyphicon-envelope"></span> Send Mail
                </button>
            </div>
        
     </form>

						</div>
						</div>


					</div>
					<div class="col-lg-4" style="background-image: url(''); background-size: cover; min-height: 500px;">
					<br><br>
						
				</div>		
			</div>
		</div>		
    </section>
	
	<!-- /Section: intro -->
	

	<footer>
	
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>About Technote Limited</h5>
						<p>
						 We are a financial solution provider in Banking software,
                        Mobile and EMV POS solutions among other products and services.
						</p>
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Information</h5>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Products & Services</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Contact Information</h5>
						<p>
						Contact us anytime. for more details  about our products
						</p>
						<ul>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Monday - Saturday, 8am to 10pm
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span>+254 721 519525 |+254 763 519525
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> info@technote.co.ke
							</li>

						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Our location</h5>
						<p>PO Box 74358 - 00200, Nairobi, Kenya.</p>		
						
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Follow us</h5>
						<ul class="company-social">
								<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
								<li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
						</ul>
					</div>
					</div>
				</div>
			</div>	
		</div>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
					<p>&copy;Copyright - Technote Limited 2017. All rights reserved.</p>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
    					<div class="text-right">
    						<div class="credits">
                                <!-- 
                                    All the links in the footer should remain intact. 
                                    You can delete the links only if you purchased the pro version.
                                    Licensing information: https://bootstrapmade.com/license/
                                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medicio
                                -->
                                <!--<a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
                            </div>
    					</div>
					</div>
				</div>
			</div>	
		</div>
		</div>
	</footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
</body>

</html>
