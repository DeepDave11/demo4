<?php
session_start();
if(isset($_SESSION['whole'])=="")
{
	header("location:wholeseller_login.php?msg=stop");
	exit(0);
}

include("connect.php");
$e=$_REQUEST['u'];
$q=mysqli_query($dhy,"select * from whol_regi where wid=$e")or die("QF1");
$data=mysqli_fetch_array($q);
$old_fn=$data['shop_logo'];		
if(isset($_REQUEST['Submit']))
{
	extract($_POST);
	$fn=$_FILES['sl']['name'];
	if($fn!="")
	{
		$path="wholeseller_shplogo/";
		$npath_old=$path.$old_fn;
		unlink($npath_old);
			
		$npath_new=$path.$fn;
		move_uploaded_file($_FILES['sl']['tmp_name'],$npath_new);
	}
	else
	{
		$fn=$old_fn;
	}	
	mysqli_query($dhy,"update whol_regi set name='$n',mobile='$m',email='$em',gender='$gen',shop_nm='$sn',shop_addre='$sa',shop_cnt='$sc',shop_logo='$sl',lid='$li' where wid=$e")or die("QF2");
	header("location:wholeseller_dis.php");
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
                    <h2>Wholeseller Edit Profile</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item active"> Wholeseller Edit Profile </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div align="center">
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->
<br>
    <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return f1();">
  <table width="50%" border="0" align="center" cellspacing="3" cellpadding="5" class=" table-bordered">
    
    <tr>
      <td> Name </td>
      <td>:</td>
      <td><input name="n" type="text" id="n" value="<?php echo $data['name'];?>"  /></td>
    </tr>
    <tr>
      <td>Mobile</td>
      <td>:</td>
      <td><input name="m" type="text" id="m" value="<?php echo $data['mobile'];?>"  /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td>:</td>
      <td><input name="em" type="text" id="em" value="<?php echo $data['email'];?>"  /></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td>:</td>
      <td><input name="gen" type="radio" value="Male" <?php if($data['gender']=="male") { ?> checked="checked" <?php } ?> />
        Male
          <input name="gen" type="radio" value="Female" <?php if($data['gender']=="female") { ?> checked="checked" <?php } ?> />
        Female</td>
    </tr>
    <tr>
      <td>Shop Name </td>
      <td>:</td>
      <td><input name="sn" type="text" id="sn" value="<?php echo $data['shop_nm'];?>"  /></td>
    </tr>
    <tr>
      <td>Shop Address </td>
      <td>:</td>
      <td><textarea name="sa" id="sa"><?php echo $data['shop_addre'];?>  </textarea></td>
    </tr>
    <tr>
      <td>Shop Contect </td>
      <td>:</td>
      <td><input name="sc" type="text" id="sc"value="<?php echo $data['shop_cnt'];?>"   /></td>
    </tr>
    <tr>
      <td>Shop/Company Logo </td>
      <td>:</td>
      <td><input name="sl" type="file" id="sl" value="<?php echo $data['shop_logo'];?>"  />
      <img src="wholeseller_shplogo/<?php echo $data['shop_logo'];?>" width="80" height="80" /></td>
    </tr>
    <tr>
      <td>Login Id </td>
      <td>:</td>
      <td><input name="li" type="text" id="li" value="<?php echo $data['lid'];?>"  /></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center">
        <input type="submit" name="Submit" value="Edit" />
      </div></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center">
        <input type="reset" name="Submit2" value="Reset" />
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
<script language="javascript">
function f1()
{
	if(form1.n.value=="")
	{
		alert("Please Enter Your Name");
		form1.n.focus();
		return false;
	}
	if(form1.m.value=="")
	{
		alert("Please Enter Your Mobile Number");
		form1.m.focus();
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
	if(form1.sa.value=="")
	{
		alert("Please Enter Your  Shop Address");
		form1.sa.focus();
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
	
}
</script>