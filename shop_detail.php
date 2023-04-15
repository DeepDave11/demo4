<?php
session_start();
if(isset($_SESSION['whole'])=="")
{
	header("location:wholeseller_login.php?msg=stop");
	exit(0);
}
include("connect.php");

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

    <!-- Site Icons -->
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="icon.png">

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

<body>

    <!-- Start Main Top -->
     <div class="main-top">
        <div class="container-fluid">
            <?php include("top.php");?>
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
                    <h2>Shop Detail</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Shop Detail </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Detail  -->
<?php 
$p=$_REQUEST['p'];
$qqq=mysqli_query($dhy,"select *from products where pid='$p' ")or die("QQe");
while($data1=mysqli_fetch_array($qqq))
{
$pr=$data1['s_price'];
$dd=$data1['discount'];
$dr=($pr*$dd)/100;
$sp=$pr-$dr;







?>
    <div class="shop-detail-box-main">
        <div class="container">
      <form name="frm1" id="frm1" method="post" action="invoice.php">
<input type="hidden" name="pr" value="<?php echo $data1['s_price'];?>">
<input type="hidden" name="dis" value="<?php echo $data1['discount'];?>">
<input type="hidden" name="pid" value="<?php echo $data1['pid'];?>">
<input type="hidden" name="wid_s" value="<?php echo $data1['wid'];?>">    
  <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100" src="product_photos/<?php echo $data1['photo1'];?>" alt="First slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="product_photos/<?php echo $data1['photo2'];?>" alt="Second slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="product_photos/<?php echo $data1['photo3'];?>" alt="Third slide"> </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev"> 
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Previous</span> 
					</a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next"> 
						<i class="fa fa-angle-right" aria-hidden="true"></i> 
						<span class="sr-only">Next</span> 
					</a>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                                <img class="d-block w-100 img-fluid" src="product_photos/<?php echo $data1['photo1'];?>" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="1">
                                <img class="d-block w-100 img-fluid" src="product_photos/<?php echo $data1['photo2'];?>" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="2">
                                <img class="d-block w-100 img-fluid" src="product_photos/<?php echo $data1['photo3'];?>" alt="" />
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2><?php echo $data1['m_name']." - ".$data1['sub_cate_nm'];?></h2>
                        <h5> <del> <?php echo $pr;?></del><?php echo $sp;?></h5>
                          
                           <h4>Short Description:</h4>
                                <p><?php echo $data1['company_brand'];?> </p>   
                                 
                                  
                                <ul>
                                    <li>
                                        <div class="form-group size-st">
                                            <label class="size-label">Size</label>
                                            <select id="basic" class="selectpicker show-tick form-control" name="size">
									<option >Size</option>
									<option ><?php echo $data1['size'];?></option>
								</select>
                                        </div>
   											<div class="form-group size-st">
                                            <label class="size-label">Color</label>
                                            <select id="basic" class="selectpicker show-tick form-control" name="color">
									<option>Color</option>
									<option ><?php echo $data1['color'];?></option>
								</select>
                                        </div>
										
                                    </li>
                                    <li>
                                        <div class="form-group quantity-box">
                                            <label class="control-label">Quantity</label>
                                            <input class="form-control"  type="text" id="txt" name="qty">
                                        </div>
                                    </li>
                                </ul>

                                <div class="price-box-bar">
                                    <div class="cart-and-bay-btn">
                                         <input type="submit" name="btn" class="mybtn btn hvr-bounce-to-bottom" value="Buy Now">
                                        
                                    </div>
                                </div>

                                
                    </div>
                </div>
            </div>

     </form>       

        </div>
    </div>
<?php  }
?>
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
    
    <!-- End Footer  -->

    <!-- Start copyright  -->
      <?php include("footer.php");?>
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