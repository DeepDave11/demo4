<?php
session_start();
if(isset($_SESSION['whole'])=="")
{
	header("location:wholeseller_login.php?msg=stop");
	exit(0);
}
if(isset($_REQUEST['Submit']))
{
	include("connect.php");
	extract($_POST);
	$fn=$_FILES['p']['name'];
	$fb=$_FILES['ph']['name'];
	$fc=$_FILES['pho']['name'];;
	$path="product_photos/";
    $npath=$path.$fn;	
	move_uploaded_file($_FILES['p']['tmp_name'],$npath);
	$npath1=$path.$fb;	
	move_uploaded_file($_FILES['ph']['tmp_name'],$npath1);
	$npath2=$path.$fc;	
	move_uploaded_file($_FILES['pho']['tmp_name'],$npath2);
$w=$_SESSION['whole'];
	mysqli_query($dhy,"insert into products(m_name,sub_cate_nm,company_brand,qty,p_price,s_price,size,color,photo1,photo2,photo3,wid,p_date,discount)values('$m_name','$snm','$cb','$qty','$pr',	'$sp','$s','$c','$fn','$fb','$fc','$w','$pd','$dis')")or die("QFF");
	
//stock management
//Check
$qchks=mysqli_query($dhy,"select * from stock where 	m_name='$m_name' and  sub_cate_nm='$snm' and wid=$w")or die ("QF Stock Check");
if(mysqli_num_rows($qchks))
{
	//update stock
	$datastock=mysqli_fetch_array($qchks);
	$old_q=$datastock['s_qty'];
	$new_q=$old_q+$qty;
	mysqli_query($dhy,"update stock set s_qty=$new_q where m_name='$m_name' and  sub_cate_nm='$snm' and wid=$w")or die("QF Stock Update");
} 
else
{
	//add new stock
	mysqli_query($dhy,"insert into stock (m_name,sub_cate_nm,s_qty,wid) values ('$m_name','$snm','$qty','$w')")or die ("QF add Stock");
}
	header("location:home.php");
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
<script language="javascript" type="text/javascript">

function getXMLHTTP() 
{ 
		var xmlhttp=false;	
		try
		{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	
		{		
			try
			{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e)
			{
				try
				{
					xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1)
				{
					xmlhttp=false;
				}
			}
		}
		 return xmlhttp;
}
	
	
function getState(countryId) 
{		
		
		var strURL="ajax_sub.php?country="+countryId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statediv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
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
                    <h2>Contact Us</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item active"> Contact Us </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	<div align="center">
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->
      <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return f1();">
  <table width="100%" border="1" align="center" class="table-bordered">
    
    <tr>
      <td>Main Category </td>
      <td>:</td>

      <td> <select name="m_name" id="m_name" onChange="getState(this.value)"  >
	<option>Select Main Category</option>
	<?php
	
	$q=mysqli_query($dhy,"select * from main_cat order by m_name desc")or die ("QF");
	while($data=mysqli_fetch_array($q))
	{
	?>
<option value="<?php echo $data['m_name'];?>"><?php echo $data['m_name'];?></option>
<?php } ?>
        </select> </td>
    </tr>
    <tr>
      <td>Sub  Category</td>
      <td>:</td>
      <td><div id="statediv"><select name="snm" id="snm"  >
	<option>Select Sub Catagory</option>
        </select></div></td>
    </tr>
    <tr>
      <td>Company_brand</td>
      <td>:</td>
      <td><input name="cb" type="text" id="cb" placeholder="Enter Company/Brand"/></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td>:</td>
      <td><input name="qty" type="text" id="qty" placeholder="Enter Quantity"/></td>
    </tr>
    <tr>
      <td>Product Price</td>
      <td>:</td>
      <td><input name="pr" type="text" id="pr" placeholder="Enter Product Price"/></td>
    </tr>
    <tr>
      <td>Sell Price</td>
      <td>:</td>
      <td><input name="sp" type="text" id="sp" placeholder="Enter Sell Price"/></td>
    </tr>
    <tr>
      <td>Size</td>
      <td>:</td>
      <td><input name="s" type="text" id="s" placeholder="Enter Size"/></td>
    </tr>
    <tr>
      <td>Color</td>
      <td>:</td>
      <td><input name="c" type="text" id="c" placeholder="Enter Color"/></td>
    </tr>
    <tr>
      <td>Photo1</td>
      <td>:</td>
      <td><input name="p" type="file" id="p" placeholder="Enter Photo1"/></td>
    </tr>
    <tr>
      <td>Photo2</td>
      <td>:</td>
      <td><input name="ph" type="file" id="ph" placeholder="Enter Photo2"/></td>
    </tr>
    <tr>
      <td>Photo3</td>
      <td>:</td>
      <td><input name="pho" type="file" id="pho" placeholder="Enter Photo3"/></td>
    </tr>
    <tr>
      <td>Product Date </td>
      <td>:</td>
      <td><input name="pd" type="date" id="pd" /></td>
    </tr>
    <tr>
      <td>Discount</td>
      <td>:</td>
      <td><input name="dis" type="text" id="dis" placeholder="Enter Discount" /></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center">
        <input type="submit" name="Submit" value="Submit" />
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
	if(form1.mnm.value=="")
	{
		alert("Please Enter Main Category ");
		form1.mnm.focus();
		return false;
	}
	if(form1.snm.value=="")
	{
		alert("Please Enter SubCategory ");
		form1.snm.focus();
		return false;
	}
	if(form1.cb.value=="")
	{
		alert("Please Enter Your Company/Brand");
		form1.cb.focus();
		return false;
	}
	if(form1.qty.value=="")
	{
		alert("Please Enter Your Quantity");
		form1.qty.focus();
		return false;
	}
	if(form1.pr.value=="")
	{
		alert("Please Enter Products Price");
		form1.pr.focus();
		return false;
	}
	if(form1.sp.value=="")
	{
		alert("Please Enter Sell Price");
		form1.sp.focus();
		return false;
	}
	if(form1.s.value=="")
	{
		alert("Please Enter Your Size");
		form1.s.focus();
		return false;
	}
	if(form1.c.value=="")
	{
		alert("Please Enter Your Color");
		form1.c.focus();
		return false;
	}
	if(form1.p.value=="")
	{
		alert("Please Enter Your Photo1");
		form1.p.focus();
		return false;
	}
	if(form1.ph.value=="")
	{
		alert("Please Enter Your Photo2");
		form1.ph.focus();
		return false;
	}
	if(form1.pho.value=="")
	{
		alert("Please Enter Your Photo3");
		form1.pho.focus();
		return false;
	}
	if(form1.pd.value=="")
	{
		alert("Please Enter Price Date");
		form1.p.focus();
		return false;
	}
	if(form1.dis.value=="")
	{
		alert("Please Enter Discount");
		form1.dis.focus();
		return false;
	}
}
</script>
