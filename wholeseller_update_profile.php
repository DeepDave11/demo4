<?php
session_start();
if(isset($_SESSION['whole'])=="")
{
	header("location:wholeseller_login.php?msg=stop");
	exit(0);
}
$a=$_SESSION['whole'];
include("connect.php");

$q=mysqli_query($dhy,"select * from whol_regi where wid=$a")or die("Qf");
$data=mysqli_fetch_array($q);

if(isset($_REQUEST['Submit']))
{
	extract($_POST);
	mysqli_query($dhy,"update whol_regi set name='$wn',mobile='$mob',email='$ei',lid='$li' where wid=$a")or die("QF2");
	header("location:wholeseller_profile.php?m=1");
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
                    <h2>WholeSeller Update Profile</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item active">WholeSeller Update Profile </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	<div align="center">
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->
<br>
     <form id="form1" name="form1" method="post" action="">
  <table width="70%" border="1" align="center">
    
    <tr>
      <td width="49%">Whole-Seller Name </td>
      <td width="2%">:</td>
      <td width="49%"><input name="wn" type="text" id="wn" value="<?php echo $data ['name'];?>" /></td>
    </tr>
    <tr>
      <td>Mobile Number </td>
      <td>:</td>
      <td><input name="mob" type="text" id="mob" value="<?php echo $data ['mobile'];?>"  /></td>
    </tr>
    <tr>
      <td>Email Id </td>
      <td>:</td>
      <td><input name="ei" type="text" id="ei" value="<?php echo $data ['email'];?>" /></td>
    </tr>
    <tr>
      <td>Login id </td>
      <td>:</td>
      <td><input name="li" type="text" id="li" value="<?php echo $data ['lid'];?>" /></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center">
        <input type="submit" name="Submit" value="Save" onClick="return f1();"/>
      </div></td>
    </tr>
  </table>
</form>
  <!-- End Cart -->
<br>
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
<script>
function f1()
{
if(from1.wn.value="")
{
	alert("Enter Your Name");
	from1.wn.focus();
	return false;
}
else if(frmo1.ei.value="")
{
	alert("Enter Your Email Id");
	from1.ei.focus();
	return false;
}
else if(frmo1.li.value="")
{
	alert("Enter Your Login Id");
	from1.li.focus();
	return false;
}
}
</script>
