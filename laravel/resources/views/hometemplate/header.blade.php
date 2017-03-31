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
<div class="banner-agile" style="background:url({{ asset('assets') }}/home/images/ukanheaders.jpg) no-repeat 0px 0px; background-size:cover; min-height:580px;">
	<div class="container">
		<h2>WELCOME TO</h2>
		<h3>UIN Men's <span>FASHION</span></h3>
		<p><font type="" color="maroon">Barang Murah Berkualitas , Bergaransi , Up to Date , Setajam Silet</font> </p>
		<a href="{{ url('about') }}">Read More</a>
	</div>
</div>
<div class="content-wrapper">
	@yield('content')
</div>
@include('hometemplate/footer')