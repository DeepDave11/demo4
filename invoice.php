<?php
session_start();
if(isset($_SESSION['whole'])=="")
{
	header("location:wholeseller_login.php?msg=stop");
	exit(0);
}
include("connect.php");
//for Whol name
$w=$_SESSION['whole'];
$qw=mysqli_query($dhy,"select * from whol_regi where wid=$w")or die ("QF1");
$dataw=mysqli_fetch_array($qw);


//for Prod Price
extract($_POST); 
$pr=$_REQUEST['pr'];
$qty=$_REQUEST['qty'];
$dis=$_REQUEST['dis'];
$pid=$_REQUEST['pid'];
$wid_s=$_REQUEST['wid_s'];
$s=$pr*$qty;
$d=($pr*$qty)/100;
$t=$s-$d;
//echo $pid;die;

//for Bill No.
$qbill=mysqli_query($dhy,"select max(bill_no) from  invoice")or die ("QF Bill No.");
$databill=mysqli_fetch_array($qbill);
if($databill[0]=="")
{
	$bno="101";
}
else
{
	$bno=$databill[0]+1;
}
//Insert data on Invoice
if(isset($_REQUEST['submit']))
{
$dt=date('Y-m-d');
	extract($_POST);
$pr=$_REQUEST['pr'];
$qty=$_REQUEST['qty'];
$dis=$_REQUEST['dis'];
$pid=$_REQUEST['pid'];
$wid_s=$_REQUEST['wid_s'];
$s=$pr*$qty;
$d=($pr*$qty)/100;
$t=$s-$d;
mysqli_query($dhy,"insert into invoice (bill_no,bill_date,pid,wid_s,wid_b,s_price,qty,sub_total,discount,main_total,main_tot_words,payment_method)values('$bno','$dt','$pid','$wid_s','$w','$pr','$qty','$s','$dis','$t','aaa','$paymentMethod')")or die("QF");

	header("location:order_history.php");
}
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

    <!-- Site Icons -->
    <link rel="shortcut icon" href="icon.png" type="image/ico">
    <link rel="apple-touch-icon" href="images/icon">

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

</head>
<?php
function numberTowords($num)
{ 
$ones = array( 
1 => "one", 
2 => "two", 
3 => "three", 
4 => "four", 
5 => "five", 
6 => "six", 
7 => "seven", 
8 => "eight", 
9 => "nine", 
10 => "ten", 
11 => "eleven", 
12 => "twelve", 
13 => "thirteen", 
14 => "fourteen", 
15 => "fifteen", 
16 => "sixteen", 
17 => "seventeen", 
18 => "eighteen", 
19 => "nineteen" 
); 
$tens = array( 
2 => "twenty", 
3 => "thirty", 
4 => "forty", 
5 => "fifty", 
6 => "sixty", 
7 => "seventy", 
8 => "eighty", 
9 => "ninety" 
); 
$hundreds = array( 
"hundred", 
"thousand", 
"million", 
"billion", 
"trillion", 
"quadrillion" 
); //limit t quadrillion 
$num = number_format($num,2,".",","); 
$num_arr = explode(".",$num); 
$wholenum = $num_arr[0]; 
$decnum = $num_arr[1]; 
$whole_arr = array_reverse(explode(",",$wholenum)); 
krsort($whole_arr); 
$rettxt = ""; 
foreach($whole_arr as $key => $i){ 
if($i < 20){ 
$rettxt .= $ones[$i]; 
}elseif($i < 100){ 
$rettxt .= $tens[substr($i,0,1)]; 
$rettxt .= " ".$ones[substr($i,1,1)]; 
}else{ 
$rettxt .= $ones[substr($i,0,1)]." ".$hundreds[0]; 
$rettxt .= " ".$tens[substr($i,1,1)]; 
$rettxt .= " ".$ones[substr($i,2,1)]; 
} 
if($key > 0){ 
$rettxt .= " ".$hundreds[$key]." "; 
} 
} 
if($decnum > 0){ 
$rettxt .= " and "; 
if($decnum < 20){ 
$rettxt .= $ones[$decnum]; 
}elseif($decnum < 100){ 
$rettxt .= $tens[substr($decnum,0,1)]; 
$rettxt .= " ".$ones[substr($decnum,1,1)]; 
} 
} 
return $rettxt; 
} 

?>
<body>

    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <?php include ("top.php");?>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light brand-center bg-light navbar-default bootsnav">
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
                    <h2>Invoice</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Invoice</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
       
  <form class="needs-validation" novalidate action="" method="post" name="form1" id="form1">
<input type="hidden" name="pr" value="<?php echo $pr;?>">
<input type="hidden" name="dis" value="<?php echo $dis;?>">
<input type="hidden" name="pid" value="<?php echo $pid;?>">
<input type="hidden" name="wid_s" value="<?php echo $wid_s;?>">
<input type="hidden" name="qty" value="<?php echo $qty;?>">


 <div class="container">
             
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Billing address</h3>
                        </div>
                      
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Name *</label>
                                    <input type="text" class="form-control" id="nm" name="nm" placeholder=""   required value="<?php echo $dataw['name'];?>">
                                    <div class="invalid-feedback"> Valid Name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Mobile No.*</label>
                                    <input type="text" class="form-control" id="mob" name="mob" placeholder=""  required value="<?php echo $dataw['mobile'];?>">
                                    <div class="invalid-feedback"> Valid Mobile No. is required. </div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email">Email Address *</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="" value="<?php echo $dataw['email'];?>">
                                <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                            </div>
<div class="mb-3">
                                <label for="username">Shop Name </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="shopnm" name="shopnm" placeholder="" required value="<?php echo $dataw['shop_nm'];?>">
                                    <div class="invalid-feedback" style="width: 100%;"> Shop Name </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Shop Address *</label>
                                
<textarea   class="form-control" name="address" id="address" rows="5"><?php echo $dataw['shop_addre'];?></textarea>

 
                                <div class="invalid-feedback"> Please enter your shipping address. </div>
                            </div>
                             
                             
                             
                             
                             
                            <hr class="mb-4">
                            <div class="title"> <span>Payment</span> </div>
                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="paymentMethod" name="paymentMethod" type="radio" value="GPay"  >
                                    <label class="custom-control-label" for="credit">GPay (8888)</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="paymentMethod" name="paymentMethod" type="radio" value="PayTM" >
                                    <label class="custom-control-label" for="debit">PayTM(88)</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="paymentMethod" name="paymentMethod" type="radio" value="COD"   checked="checked" >
                                    <label class="custom-control-label" for="paypal">COD</label>
                                </div>
                            </div>
                             
                             
                            <hr class="mb-1"> 
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="shipping-method-box">
                                <div class="title-left">
                                    <h3>Shipping Method</h3>
                                </div>
                                <div class="mb-4">
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption1" name="shipping-option" class="custom-control-input" checked="checked" type="radio">
                                        <label class="custom-control-label" for="shippingOption1">Standard Delivery</label> <span class="float-right font-weight-bold">FREE</span> </div>
                                    <div class="ml-4 mb-2 small">(3-7 business days)</div>
                                     
                                     
                                     
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                                    <h3>Your order</h3>
                                </div>
                                <div class="d-flex">
                                    <div class="font-weight-bold">Product</div>
                                    <div class="ml-auto font-weight-bold">Total</div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Sub Total</h4>
                                    <div class="ml-auto font-weight-bold"> &#8377; <?php echo $s?> </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Discount</h4>
                                    <div class="ml-auto font-weight-bold"> &#8377; <?php 

echo $d;
?> </div>
                                </div>
                                <hr class="my-1">
                                 
                                
                                <div class="d-flex">
                                    <h4>Shipping Cost</h4>
                                    <div class="ml-auto font-weight-bold"> Free </div>
                                </div>
                                <hr>
                                <div class="d-flex gr-total">
                                    <h5>Grand Total</h5>
                                    <div class="ml-auto h5">&#8377; <?php echo $t;?> </div>
   <div class="ml-auto h5"><?php echo "<p align='left' style='color:black'>".ucwords(numberTowords("$t"))."</p>";?> 
 </div>
                                </div>
                                <hr> </div>
                        </div>
                        <div class="col-12 d-flex shopping-box"> 
<input type="submit" value="Place Order" name="submit" id="submit" class="ml-auto btn hvr-bounce-to-bottom">  </div>
                    </div>
                </div>
            </div>

        </div>


</form>
    </div>
    <!-- End Cart -->

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
    <?php include("footer.php");?>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    
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