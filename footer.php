<footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
					<aside class="col-lg-3 col-sm-6 white">
						<h5 class="title">Customer Services</h5>
						<ul class="list-unstyled">
							<li> <a href="#">Help center</a></li>
							<li> <a href="#">Money refund</a></li>
							<li> Total Visitor: <?php $ql=mysqli_query($dhy,"select count(vid)from visitor")or die("Qf2");
$data1=mysqli_fetch_array($ql);
echo $data1[0];
?> </li>
							  
						</ul>
					</aside>
					<aside class="col-lg-3 col-sm-6 white">
						<h5 class="title">My Account</h5>
						<ul class="list-unstyled">
							<li> <a href="#"> User Login </a></li>
							<li> <a href="#"> User register </a></li>
							<li> <a href="#"> Account Setting </a></li>
							<li> <a href="#"> My Orders </a></li>
							<li> <a href="#"> My Wishlist </a></li>
						</ul>
					</aside>
					<aside class="col-lg-3 col-sm-6 white">
						<h5 class="title">About</h5>
						<ul class="list-unstyled">
							<li> <a href="#"> Our history </a></li>
							<li> <a href="#"> How to buy </a></li>
							<li> <a href="#"> Delivery and payment </a></li>
							<li> <a href="#"> Advertice </a></li>
							<li> <a href="#"> Partnership </a></li>
						</ul>
					</aside>
					<aside class="col-lg-3 col-sm-6">
						<article class="white">
							<h5 class="title">Contacts</h5>
							<p>
								<strong>Address: </strong> Donald M. Palmer 2595 Pearlman Avenue Sudbury, MA 01776 <br> 
								<strong>Phone: </strong> +8834 56789 <br> 
								<strong>Fax:</strong> +8834 56789
							</p>

							 <div class="btn-group white">
								<a class="btn btn-facebook" title="Facebook" target="_blank" href="#"><i class="fab fa-facebook-f  fa-fw"></i></a>
								<a class="btn btn-instagram" title="Instagram" target="_blank" href="#"><i class="fab fa-instagram  fa-fw"></i></a>
								<a class="btn btn-youtube" title="Youtube" target="_blank" href="#"><i class="fab fa-youtube  fa-fw"></i></a>
								<a class="btn btn-twitter" title="Twitter" target="_blank" href="#"><i class="fab fa-twitter  fa-fw"></i></a>
							</div>
						</article>
					</aside>
				</div>
            </div>
        </div>
    </footer>

<div class="footer-copyright">
        <p class="footer-company">

All Rights Reserved. &copy; 2022 <a href="home.php">Apna Market</a> Design By :
            <a href="#">Deep Dave</a></p>
    </div>
    
    
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62d154727b967b117999af32/1g80r3okr';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->