<?php
session_start();
?><!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Title Here</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<link rel="shortcut icon" href="icon.png" type="image/ico" />

</head>

<body>

    <!-- Start Main Top -->
    <?php include("top.php");?>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg brand-center navbar-light bg-light navbar-default bootsnav">
            <?php include("menu.php");?>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ABOUT US</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">ABOUT US</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="noo-sh-title">We are <span>IGTU Electronics</span></h2>
                    <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                        voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                        sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                        Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                </div>
                <div class="col-lg-6">
                    <div class="banner-frame"> <img class="img-thumbnail img-fluid" src="images/about-img.jpg" alt="" />
                    </div>
                </div>
            </div>
            
            <div class="row my-4">
                <div class="col-12">
                    <h2 class="noo-sh-title">Meet Our Team</h2>
                </div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="images/img-1.jpg">
						</div>
						<div class="team-content">
							<h3 class="title">Williamson</h3>
							<span class="post">Web Developer</span>
						</div>
						<ul class="social">
							<li><a href="#" class="fab fa-facebook"></a></li>
							<li><a href="#" class="fab fa-google-plus"></a></li>
							<li><a href="#" class="fab fa-instagram"></a></li>
							<li><a href="#" class="fab fa-linkedin"></a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="images/img-2.jpg">
						</div>
						<div class="team-content">
							<h3 class="title">Kristiana</h3>
							<span class="post">Web Designer</span>
						</div>
						<ul class="social">
							<li><a href="#" class="fab fa-facebook"></a></li>
							<li><a href="#" class="fab fa-google-plus"></a></li>
							<li><a href="#" class="fab fa-instagram"></a></li>
							<li><a href="#" class="fab fa-linkedin"></a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="images/img-3.jpg">
						</div>
						<div class="team-content">
							<h3 class="title">Steve Thomas</h3>
							<span class="post">Web Developer</span>
						</div>
						<ul class="social">
							<li><a href="#" class="fab fa-facebook"></a></li>
							<li><a href="#" class="fab fa-google-plus"></a></li>
							<li><a href="#" class="fab fa-instagram"></a></li>
							<li><a href="#" class="fab fa-linkedin"></a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="images/img-4.jpg">
						</div>
						<div class="team-content">
							<h3 class="title">Miranda joy</h3>
							<span class="post">Web Designer</span>
						</div>
						<ul class="social">
							<li><a href="#" class="fab fa-facebook"></a></li>
							<li><a href="#" class="fab fa-google-plus"></a></li>
							<li><a href="#" class="fab fa-instagram"></a></li>
							<li><a href="#" class="fab fa-linkedin"></a></li>
						</ul>
					</div>
				</div>
            </div>
			<div class="row my-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Trusted</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Professional</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Expert</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Page -->

    <!-- Start info shop  -->
	<div class="info-box">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-sm-6 col-lg-3">
					<div class="media service-block">
						<div class="service-block-icon"> <i class="fas fa-truck"></i> </div>
						<div class="media-body">
							<h6>FREE SHIPPING &amp; RETURN</h6>
							<div class="service-block-desc">Get free shipping for all orders $99 or more</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="media service-block">
						<div class="service-block-icon"> <i class="fas fa-sync-alt"></i> </div>
						<div class="media-body">
							<h6>MONEY BACK GUARANTEE</h6>
							<div class="service-block-desc">Get the item you ordered, or your money back</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="media service-block">
						<div class="service-block-icon"> <i class="fas fa-shield-alt"></i> </div>
						<div class="media-body">
							<h6>100% SECURE PAYMENT</h6>
							<div class="service-block-desc">Your transaction are secure with SSL Encryption</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="media service-block">
						<div class="service-block-icon"> <i class="fas fa-phone"></i> </div>
						<div class="media-body">
							<h6>ONLINE SUPPORT 24/7</h6>
							<div class="service-block-desc">Chat with experts or have us call you right away</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End info shop  -->

    <!-- Start Footer  -->
    
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <?php include ("footer.php");?>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fas fa-angle-double-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>