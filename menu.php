<?php 
include("connect.php");
?>
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>                </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo" alt=""></a>                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Product</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                       
		<?php
$qm1=mysqli_query($dhy,"select * from main_cat order by mid")or die ("QF Menu 1");
while($datam1=mysqli_fetch_array($qm1))
{		
?>

		 <div class="col-menu col-md-3">
                                            <h6 class="title"><?php echo $datam1['m_name'];?></h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    
<?php
$mm=$datam1['m_name'];
$qm2=mysqli_query($dhy,"select * from sub_cat where main_cate_nm='$mm'")or die ("QF Menu 2") ;
while($datam2=mysqli_fetch_array($qm2))
{
?>
<li><a href="shop.php?m=<?php echo $datam1['m_name'];?>&s=<?php echo $datam2['sub_cate_nm']?>"><?php echo $datam2['sub_cate_nm'];?></a></li>
<?php
}
?>

                                                 </ul>
                                            </div>
                                        </div>

<?php } ?>
                                        <!-- end col-3 -->

 
                                        
                                        <!-- end col-3 -->
                                         
                                         
                                        <!-- end col-3 -->
                                    </div>
                                    <!-- end row -->
                                </li>
                            </ul>
                        </li>
                         
<li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">ORDERS</a>
                            <ul class="dropdown-menu">
                                <li><a href="order_history.php">My Order</a></li>
                                <li><a href="orders.php">Orders for Me</a></li>
                            </ul>
                        </li>						
<li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">GALLERY</a>
                            <ul class="dropdown-menu">
                                <li><a href="photo.php">Photo</a></li>
                                <li><a href="video.php">Video</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="service.html">Service</a></li>
                        <li class="nav-item active"><a class="nav-link" href="contact_us.php">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
					<ul>
						<li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
						 
					</ul>
				</div>
                <!-- End Atribute Navigation -->
            </div>            
        