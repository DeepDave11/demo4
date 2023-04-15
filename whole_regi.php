
<?php
session_start();
include("connect.php");
error_reporting(1);
$arr=range(99,9);
$brr=range(99,9);
$randa=array_rand($arr);
$randb=array_rand($brr); 
$a=$arr[$randa];
$b=$brr[$randb];
$r=$a+$b; 
$cap=$a."+".$b;


if(isset($_REQUEST['Submit']))
{
	
	extract($_POST);
	if($_POST['t2']==$_POST['t3'])
    {
   $a=nl2br($_REQUEST['sa']);
	//password
	$p=md5($_REQUEST['pd']);
	//file upload
	$fn=$_FILES['sl']['name'];
	$path="wholeseller_shplogo/";
	$npath=$path.$fn;	
	move_uploaded_file($_FILES['sl']['tmp_name'],$npath);
 	mysqli_query($dhy,"insert into whol_regi(name,mobile,email,gender,shop_nm,shop_addre,shop_cnt,shop_logo,lid,pwd)values('$nm','$mob','$em','$g','$sn','$sa','$sc','$fn','$li','$p')")or die("455Qf");
	
	header("location:wholeseller_login.php");
    }
	 else
   	{
   echo '<center>'.'<font color="red" size="5">'."Please fill the correct answer".'</font>'.'</center>';
   }
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

<!--RTB-->
<script type="text/javascript" src="nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>	
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
                    <h2>Create Account</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item active">Create Account</li>
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
                       
                        <form id="form1" name="form1" method="post" action="">
                            <div class="row" >
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nm" name="nm" placeholder="Your Name" >
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
                                        <input type="email" placeholder="Your Email" id="em" class="form-control" name="em" >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-group">
                     <input name="g" type="radio" value="male" checked="checked" /> Male
        							 <div class="help-block with-errors"></div>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-group">
                     <input name="g" type="radio" value="female" checked="" /> Female
        							 <div class="help-block with-errors"></div>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-group">
                                <input name="sn" type="text" id="sn" placeholder="Enter Shop Name" class="form-control"/>
								 		<div class="help-block with-errors"></div>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-group">
                             

<div id="sample">
						  <textarea name="sa" id="sa" style="width: 500px; height: 300px;"></textarea></div>
  
								 		<div class="help-block with-errors"></div>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-group">
                              <input name="sc" type="text" id="sc" maxlength="10" placeholder="Enter Shop Contect No."/>								 												
							  				<div class="help-block with-errors">			
							  			</div>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-group">
                              <input name="sl" type="file" id="sl"placeholder="Enter Shop/Company Logo" />								 												
							  				<div class="help-block with-errors">			
							  			</div>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-group">
                              <input name="li" type="text" id="li"placeholder="Enter Login Id" />								 												
							  				<div class="help-block with-errors">			
							  			</div>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-group">
                              <input name="pd" type="password" id="pd" placeholder="Enter Password">								 												
							  				<div class="help-block with-errors">			
							  			</div>
                                    </div>
                                </div>
<div class="col-md-12">
                                    <div class="form-group">
<?php

error_reporting(1);

echo $cap."=";

?>
                             <input type="hidden" name="t3" value="<?php echo $r; ?>">

<input type="text" name="t2" autofocus> 							 												
							  				<div class="help-block with-errors">			
							  			</div>
                                    </div>
                                </div>
								<div class="submit-button text-center" align="center">
								<button class="btn hvr-bounce-to-bottom" id="submit"  name="Submit" type="submit" onClick="return f1();">Submit</button>
</div>
                                       
                                        <div class="clearfix"></div>
                               
                            </div>
                        </form>
                    </div>
                </div>
				
            </div>
        </div>
    </div>
    <!-- End Cart -->

   <!-- Start info shop  -->
	
	<!-- End info shop  -->

   
    <!-- Start copyright  -->
    <?php include ("footer.php.")?>
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
<script language="javascript">
function f1()
{
	if(form1.nm.value=="")
	{
		alert("Please Enter Your Name");
		form1.nm.focus();
		return false;
	}
	if(form1.mob.value=="")
	{
		alert("Please Enter Your Mobile Number");
		form1.mob.focus();
		return false;
	}
	if(form1.em.value=="")
	{
		alert("Please Enter Your Email");
		form1.em.focus();
		return false;
	}
	if(form1.sn.value=="")
	{
		alert("Please Enter Your Shop Name");
		form1.sn.focus();
		return false;
	}
	
	if(form1.sc.value=="")
	{
		alert("Please Enter Your Shop Contact");
		form1.sc.focus();
		return false;
	}
	if(form1.sl.value=="")
	{
		alert("Please Enter Your Company/Shop Logo");
		form1.sl.focus();
		return false;
	}
	if(form1.li.value=="")
	{
		alert("Please Enter Your Login Id");
		form1.li.focus();
		return false;
	}
	if(form1.pd.value=="")
	{
		alert("Please Enter Your Password");
		form1.pd.focus();
		return false;
	}
}
</script>