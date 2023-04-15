<?php 
if(isset($_REQUEST['Submit']))
{
	include("b2b/connect.php");
	$e=$_REQUEST['em'];
	$q=mysqli_query($dhy,"select  login,password from admin where email='$e'")or die("QF1");
	if(mysqli_num_rows($q))
	{
		$data=mysqli_fetch_array($q);
		$l=$data['login'];
		$p=$data['password'];
		$to=$e;
		$sub='Login Details';
		$from='admin@gmail.com';
		$body="<style type='text/css'>
<!--
.style1 {color: #FFFFFF}
.style2 {color: #000000}
-->
</style>
<table width='50%' border='1'>
  <tr>
    <td colspan='3' bgcolor='#6B6B6B'><div align='center' class='style1'>Welcome To Apna Market </div></td>
  </tr>
  <tr>
    <td colspan='3' bgcolor='#C78D8D'><span class='style2'>Please Note Down Your Id And Password</span> </td>
  </tr>
  <tr>
    <td colspan='3' bgcolor='#C78D8D'>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor='#C78D8D'><span class='style2'>Login Id</span> </td>
    <td bgcolor='#C78D8D'>:</td>
    <td bgcolor='#C78D8D'>$l</td>
  </tr>
  <tr>
    <td bgcolor='#C78D8D'><span class='style2'>Password</span></td>
    <td bgcolor='#C78D8D'>:</td>
    <td bgcolor='#C78D8D'>$p</td>
  </tr>
  <tr>
    <td colspan='3' bgcolor='#C78D8D'>&nbsp;</td>
  </tr>
  <tr>
    <td colspan='3' bgcolor='#C78D8D'>Thanks</td>
  </tr>
  <tr>
    <td colspan='3' bgcolor='#C78D8D'><span class='style2'>Team:Apna Market </span></td>
  </tr>
  <tr>
    <td colspan='3' bgcolor='#666666'><div align='center' class='style1'><a href='http://localhost/b2b Deep\b2b\client\admin/index.php'>Click Here</a> </div></td>
  </tr>
</table>"

	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "From: ".$from." <".$from.">\r\n";
	mail($to,$sub,$body,$headers);
	header("location:b2b/../index.php?m3=4");
	}
	else
	{
		header("location:forgotpwd.php?m=j");
	}
}

?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Video Login Form Responsive Widget Template :: w3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Video Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Marck+Script&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext"
	    rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<div class="video-w3l" data-vide-bg="video/2">
		<!-- title -->
		<h1>
			<span>V</span>ideo
			<span>L</span>ogin
			<span>F</span>orm</h1>
		<!-- //title -->
		<!-- content -->
		<div class="sub-main-w3">
			<form action="" method="post" name="form1" id="form1" onSubmit="return f1();">
				<div class="form-style-agile">
					<label>
						<i class="fas fa-user"></i>Username</label>
					<input placeholder="Email Id" name="em" id="em" type="text" >
				</div>
				<div class="form-style-agile">
					
					
				</div>
				<!-- switch -->
				<div class="checkout-w3l">
					<div class="demo5">
						
					</div>
					
				</div>
				<!-- //switch -->
				<input type="submit" class="register" value="Send" name="Submit">
				<!-- social icons -->
				<div class="footer-social">
					<h2><a href="index.php"><font color="#FFFFFF">Or Login</font></a></h2>
					
				</div>
				<!-- //social icons -->
			</form>
		</div>
		<!-- //content -->

		<!-- copyright -->
		<div class="footer">
			<p>&copy; 2018 Video Login Form. All rights reserved | Design by
				<a href="http://w3layouts.com">W3layouts</a>
			</p>
		</div>
		<!-- //copyright -->
	</div>

	
	<!-- Jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //Jquery -->

	<!-- Video js -->
	<script src="js/jquery.vide.min.js"></script>
	<!-- //Video js -->
	
</body>

</html>
<script>
function f1()
{
	if(form1.em.value=="")
	{
			alert("Enter your Email Id");
			form1.em.focus();
			return false;
	}
		
}
</script>