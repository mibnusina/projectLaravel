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
						
						<li class="active"><a href="{{ url('order/add') }}" class="hyper"><span>Order</span></a></li>
						<li><a href="{{ url('about') }}" class="hyper"><span>About</span></a></li>
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
<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<center><h3>Form Order</h3></center>
				
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>




<div class="contact">
	<div class="container">
		<div class="col-md-3 col-sm-3 contact-left">
			<div class="address">
				<h4>Anggota</h4>
				<h5>Muhammad Ibnu Sina</h5>
				<h5>Naufal Firzan</h5>
				<h5>Ukan Turkanda</h5>
			</div>
			<div class="phone">
				<h4>ID Line</h4>
				<h5>mibnusina</h5>
				<h5>ukanturkanda</h5>
				<h5>nfirzan</h5>
			</div>
			<div class="email">
				<h4>EMAIL</h4>
				<h5><a href="mailto:mibnusina26@gmail.com">mibnusina26@gmail.com</a></h5>
				<h5><a href="mailto:ukanturkanda21@gmail.com">ukanturkanda21@gmail.com</a></h5>
			</div>
		</div>
		<div class="col-md-9 col-sm-9 contact-right">
			<form action="{{ url('order/add') }}" method="post">
			{{ csrf_field() }}
				<input type="text" name="nama_pelanggan" placeholder="Nama" />
				<input type="text" name="notelp" placeholder="Nomor Telepon" />
				<input type="text" name="id_prod" placeholder="ID Produk" />
				<input type="text" name="alamat" placeholder="Alamat" />
				<input type="text" readonly name="status" placeholder="status" value="Belum" />
				<input type="submit" value="ORDER">
			</form>
		</div>
	</div>
</div>

<!-- //top-brands -->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
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
