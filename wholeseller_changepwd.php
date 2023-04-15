<?php 
session_start();
if(isset($_SESSION['whole'])=="")
{
	header("location:wholeseller_login.php?msg=stop");
	exit(0);
}
include("connect.php");
$a=$_SESSION['whole'];

$q=mysqli_query($dhy,"select pwd from whol_regi where wid=$a")or die("QF1");
$data=mysqli_fetch_array($q);
$old_pwd=$data['pwd'];
if (isset($_REQUEST['Submit']))
	{
	extract($_POST);
		if($old_pwd=$cp)
		{
			mysqli_query($dhy,"update whol_regi set pwd='$np' where wid='$a'")or die("QF2");
			header("location:logout.php");
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
                    <h2>Change Password</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item active"> Change Password </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div align="center">
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->
<br>
    <form id="form1" name="form1" method="post" action="" onSubmit="return f2();" >
  <table width="70%" border="0" cellspacing="3" cellpadding="5" align="center" class=" table-bordered" >
    
    <tr>
      <td width="48%">Current Password </td>
      <td width="3%">:</td>
      <td width="49%"><input name="cp" type="password" id="cp" placeholder="Enter your Email or Mobile" autofocus /></td>
    </tr>
    <tr>
      <td>New Password</td>
      <td>:</td>
      <td><input name="np" type="password" id="np" placeholder="Enter your Password" /></td>
    </tr>
    <tr>
      <td>Retype Password </td>
      <td>:</td>
      <td><input name="rp" type="password" id="rp" placeholder="Retype your Password"  onblur="return f2();"  /></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center">
        <input type="submit" name="Submit" value="Change" onclick ="return f1();" class="btn btn-dark" />
      </div></td>
    </tr>
  </table>
</form>
    <!-- End Cart -->

    <!-- Start info shop  -->
	</div>
    <br>
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
if(form1.rp.value!=form1.np.value)
	{
		alert("New And Re-Type Password not matched");
		form1.np.value='';
		form1.rp.value='';
		form1.np.focus();
		return false;
	}
}
</script>
<script>
function f2()
{
if(form1.cp.value=="")
	{
		alert("Enter Current Password");
		form1.cp.focus();
		return false;
	}
else if(form1.np.value=="")
	{
		alert("Enter New Password");
		form1.np.focus();
		return false;
	}
else if(form1.rp.value=="")
	{
		alert("Enter Re-Type New Password");
		form1.rp.focus();
		return false;
	}
}	
</script>
