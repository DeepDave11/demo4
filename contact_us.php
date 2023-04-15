<?php
session_start();
 if(isset($_REQUEST['Submit']))
{
	include("connect.php");
	extract($_POST);
	$a=nl2br($_REQUEST['msg']);
	
	mysqli_query($dhy,"insert into inquiry(name,email,mobile,subject,message)values('$nm','$em','$mob','$subject','$message')")or die("Qf");
	
	header("location:index.php");
}
?>
<!DOCTYPE html>
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
    <?php include ("top.php");?>
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
                    <h2>Contact Us</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item active"> Contact Us </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>GET IN TOUCH</h2>
                        
                        <form id="form1" name="form1" method="post" action="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nm" name="nm" placeholder="Your Name" >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" placeholder="Your Email" id="em" class="form-control" name="em" >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="mob" name="mob" placeholder="Your Mobile Number" >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="name" placeholder="Subject" >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Your Message" rows="4"  ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        
									 	
										
											<button class="btn hvr-bounce-to-bottom" id="submit"  name="Submit" type="submit" onClick="return f1();">Send Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
				<div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
                        <h2>CONTACT INFO</h2>
                        
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address: Upvan Society,<br>Bhargav Vrux Mandir,<br>Fulsar,Bhavnagar. </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+91 6352 36 0909">+91 6352 36 0909</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:deepdave0406@gmail.com">deepdave0406@gmail.com</a></p>
                            </li>
<li>
<p> <a href="brosher.rar">Download Brosher</a></p>
</li>
<li>
<a href="https://www.facebook.com/SSCCMBhavnagar/" target="_blank"><img src="socialmedia/facebook_small.png" height="65" width="55"></a>

<a href="https://www.instagram.com/ssccm_college/?hl=en" target="_blank">
<img src="socialmedia/instagram_small.png" height="65" width="55"></a>

<a href="https://www.youtube.com/channel/UCZNm-w6eg-HdPmniah-noPg" target="_blank">
<img src="socialmedia/youtube_small.png" height="50" width="45"></a>



<a href="https://wa.me/+91 8866229903?text=hello uday"  target="_blank"><img src="socialmedia/whatsapp_small.png" height="65" width="55"></a>



</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14823.743744486032!2d72.07802811878923!3d21.744009200881177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5121e6d81d2f%3A0x6e968f27962db773!2sFulsar%2C%20Bhavnagar%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1657324085809!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <!-- End Cart -->

   <!-- Start info shop  -->
	 
	<!-- End info shop  -->

   
    <!-- Start copyright  -->
    <?php include ("footer.php")?>
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
<script>
function f1()
{
	if(form1.nm.value=="")
	{
		alert("Enter Your Name");
		form1.nm.focus();
		return false;
	}
	else if(form1.em.value=="")
	{
		alert("Enter Your Email Id");
		form1.em.focus();
		return false;
	}
	else if(form1.mob.value=="")
	{
		alert("Enter Your Mobile Number");
		form1.mob.focus();
		return false;
	}
	else if(form1.subject.value=="")
	{
		alert("Enter Your Subject");
		form1.subject.focus();
		return false;
	}
	else if(form1.message.value=="")
	{
		alert("Enter Your Message");
		form1.message.focus();
		return false;
	}
}
</script>