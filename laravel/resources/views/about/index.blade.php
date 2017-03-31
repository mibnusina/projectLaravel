<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>UIN Men's Fashion</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="{{ asset('assets') }}/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('assets') }}/home/css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('assets') }}/home/css/font-awesome.min.css" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="{{ asset('assets') }}/home/js/jquery-1.11.1.min.js"></script>
<script src="{{ asset('assets') }}/home/js/bootstrap.js"></script>

@stack('style')
</head>

<body>
<div class="header-top-w3layouts">
	<div class="container">
		<div class="col-md-6 logo-w3">
			<a href="{{ url('/') }}"><img src="{{ asset('assets') }}/home/images/logos.png" alt=" " /><h1> UIN Fash on<span>MAN</span></h1></a>
		</div>
		<div class="col-md-6 phone-w3l">
			<ul>
				<li><span class="glyphicon glyphicon-user" aria-hidden="true"></span></li>
				<li> Rekayasa Perangkat Lunak 1</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="header-bottom-w3ls">
	<div class="container">
		<div class="col-md-7 navigation-agileits">
			<nav class="navbar navbar-default">
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav ">
						<li><a href="{{ url('/') }}" class="hyper "><span>Home</span></a></li>	
						
						<li><a href="{{ url('order/add') }}" class="hyper"><span>Order</span></a></li>
						<li class="active"><a href="{{ url('about') }}" class="hyper"><span>About</span></a></li>
						<li><a href="{{ url('login') }}" class="hyper"><span>Login Admin</span></a></li>
					</ul>
				</div>
			</nav>
		</div>
								<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
				</script>
		
		<div class="clearfix"></div>
	</div>
</div>
<div class="sub-banner" style="background:url({{ asset('assets') }}/home/images/ibnuheader.jpg);background-size:cover;
	min-height:280px;">
</div>
<div class="about">
	<div class="container"> 
		<h3>About Us</h3>
		<div class="about-info">
			<div class="col-md-8 about-grids">
				<h4>Our latest Final Project</h4>
				<p>Pelanggan Akan Melakukan Order Dengan Mengirimkan Data Dirinya Beserta ID Produk yang Akan Ia Order , Data Akan Masuk Ke database , Pelanggan Harus Menunggu Konfirmasi Berupa 
				SMS Tentang Konfirmasi Dari Admin. </p>		
					<div class="about-w3ls-row">
						<script type="text/javascript">
								 $(window).load(function() {
									$("#flexiselDemo3").flexisel({
										visibleItems:2,
										animationSpeed: 1000,
										autoPlay: false,
										autoPlaySpeed: 3000,    		
										pauseOnHover: true,
										enableResponsiveBreakpoints: true,
										responsiveBreakpoints: { 
											portrait: { 
												changePoint:480,
												visibleItems:2
											}, 
											landscape: { 
												changePoint:640,
												visibleItems:2
											},
											tablet: { 
												changePoint:768,
												visibleItems:2
											}
										}
									});
									
								});
						</script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script> 
						<ul id="flexiselDemo3">
							<li>
								<img src="images/a1.jpg" class="img-responsive" alt="" />
							</li>
							<li> 
								<img src="images/a2.jpg" class="img-responsive" alt="" />
							</li>
							<li> 
								<img src="images/a3.jpg" class="img-responsive" alt="" />
							</li>
							<li> 
								<img src="images/a4.jpg" class="img-responsive" alt="" />
							</li>
						</ul> 
						<div class="clearfix"> </div>
					</div>
			</div>
			<div class="col-md-4 about-grids">
					<h4>Our Team</h4>
					<div class="pince">
						<div class="pince-left">
							<h5>21</h5>
						</div>
						<div class="pince-right">
							<p>Muhammad Ibnu Sina</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pince">
						<div class="pince-left">
							<h5>23</h5>
						</div>
						<div class="pince-right">
							<p>Naufal Firzan</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pince">
						<div class="pince-left">
							<h5>32</h5>
						</div>
						<div class="pince-right">
							<p>Ukan Turkanda</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //about -->
<!-- about-bottom -->
	<div class="about-bottom" style="background:url({{ asset('assets') }}/home/images/naufalf.jpg) no-repeat 0px 0px;
	background-size:cover;
	padding:100px 0;
	background-attachment:fixed;">
		<div class="container">
			<h3> Harga <span>100%</span> Stingak</h3>
			<h4>On women Accessories</h4>
			<a href="{{ url('order/add') }}">Shop Now</a>
		</div>
	</div>
<!-- //about-bottom -->
<!--team-->
<div class="team" id="team">
	<div class="container">
		<h3> Our Girlfriend</h3>
		<div class="team-grids">
			<div class="col-md-3 team-grid">
									<div class="team-img">
										<img src="{{ asset('assets') }}/home/images/t1.jpg" class="img-responsive" alt=" " />
										<figcaption class="overlay">
											<div class="social-icon">
												<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
												<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
												<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
												<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
											</div>
										</figcaption>
									</div>
									<h4>McClaine Nur Janah</h4>
									<h5>Ibnu's girlfriend</h5>
			</div>
			<div class="col-md-3 team-grid">
				<div class="team-img">
					<img src="{{ asset('assets') }}/home/images/t3.jpg" class="img-responsive" alt=" " />
					<figcaption class="overlay">
						<div class="social-icon">
							<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						</div>
					</figcaption>
				</div>
				<h4>Nadine S. Komalasari</h4>
				<h5>Naufal's Girlfriend</h5>
			</div>
			<div class="col-md-3 team-grid">
				<div class="team-img">
					<img src="{{ asset('assets') }}/home/images/t2.jpg" class="img-responsive" alt=" " />
					<figcaption class="overlay">
						<div class="social-icon">
							<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						</div>
					</figcaption>
				</div>
				<h4>Emma Stingkak</h4>
				<h5>Ukan's Girlfriend</h5>
			</div>
			<div class="col-md-3 team-grid">
				<div class="team-img">
					<img src="{{ asset('assets') }}/home/images/t4.jpg" class="img-responsive" alt=" " />
					<figcaption class="overlay">
						<div class="social-icon">
							<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						</div>
					</figcaption>
				</div>
				<h4>Michele Lampa</h4>
				<h5>Our Beloved Mother</h5>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--team-->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls1.render();

        w3ls1.cart.on('w3sb1_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->  
</body>

<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grids fgd1">
		<a href="{{ url('/') }}"><img src="{{ asset('assets') }}/home/images/logos.png" alt=" " /><h3> UIN Fash on<span>MAN</span></h3></a>
		<ul>
			<li>Taman Cibaduyut, Batununggal , Gumuruh</li>
			<li>Bandung City.</li>
			<li><a href="mailto:mibnusina26@gmail.com">mibnusina26@gmail.com</a></li>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		</ul>
		</div>
		<div class="col-md-3 footer-grids fgd2">
			<h4>Instagram</h4> 
			<ul>
				<li><a href="http://www.instagram.com/mibnusina">Muhammad Ibnu Sina</a></li>
				<li><a href="http://www.instagram.com/ukanturknda">Ukan Turkanda</a></li>
				<li><a href="http://www.instagram.com/nfirzan">Naufal Firzan</a></li>
				
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd3">
			<h4>Shop</h4> 
			<ul>
				<li><a href="{{ url('order/add') }}">Order</a></li>
				
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd4">
			<h4>Administrator</h4> 
			<ul>
				
				<li><a href="{{ url('login') }}">Login</a></li>
				
			</ul>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">© 2017 UIN MensFashion . All rights reserved.</a></p>
	</div>
</div>
	<!-- cart-js -->
	<script src="{{ asset('assets') }}/home/js/minicart.js"></script>
	<script>
        w3ls1.render();

        w3ls1.cart.on('w3sb1_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->  
</body>
</html>