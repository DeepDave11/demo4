<?php
session_start();
if(isset($_REQUEST['Submit']))
{	
	extract($_POST);
	include("connect.php");
	//echo $_REQUEST['pwd1'];die;
	$p=md5($_REQUEST['pwd1']);
	
	$q=mysqli_query($dhy,"select * from  whol_regi where lid='$li' and pwd='$p'")or die ("QF");
	if(mysqli_num_rows($q))
	{
		$data=mysqli_fetch_array($q);
		$_SESSION['whole']=$data['wid'];
		header("location:wholeseller_profile.php");
	}
	else
	{
		header("location:wholeseller_login.php");
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

<script>
function myFunction() {
  var x = document.getElementById("pwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
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
                    <h2>Login</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item active"> Login </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div align="center">
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->
<br>
<form id="form1" name="form1" method="post" action="" onSubmit="return f2();">
  <table width="50%" border="1" align="center">
    
    <tr>
      <td><div align="center">
        <input name="li" type="text" id="li" autofocus placeholder="USER NAME OR E-MAIL" />
      </div></td>
    </tr>
    <tr>
      <td><div align="center">
        <input name="pwd1" type="password" id="pwd1"  placeholder="PASSWORD" />
      </div></td>
    </tr>
<tr>
	<td>
		<div align="center">
			<input type="checkbox" name="pwd" onClick="myFunction();" /> Show Password
		</div>
	</td>
</tr>

    <tr>
      <td><div align="center">
        <input type="submit" name="Submit" value="Login" onClick="return f2();" />
      </div></td>
    </tr>
    <tr>
      <td><div align="center"><a href="wholeseller_forgotpwd.php">Forgot Password</a> </div></td>
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
function f2()
{
	if(form1.li.value=="")
	{
		alert("Enter Your Login Id");
		form1.li.focus();
		return false;
	}
	else if(form1.pwd.value=="")
	{
	alert("Enter Your Password");
	form1.pwd.focus();
	return false;
	}

}

</script>
<?php if (isset($_REQUEST['msg'])=="stop"){?>
<script>
alert("Login Required");
</script>
<?php }?>
