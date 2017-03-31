@extends('hometemplate/header')

@section('content')


<div class="top-products">
	<div class="container">
		<h3>Our Products</h3>
		@foreach (\App\Produk::all() as $produk)
		<div class="team-grids">
			<div class="col-md-3 team-grid">
									<div class="team-img">
										<img src="{{ asset('uploads/'.@$produk->foto) }}" class="img-responsive" alt=" " />
										<figcaption class="overlay">
											<div class="social-icon">
												<a href="{{ url('order/add') }}"><i class="fa fa-dollar" aria-hidden="true"> ORDER NOW</i></a>
												
											</div>
										</figcaption>
									</div>
									<h4>ID PRODUK {{ @$produk->id_prod }}</h4>

									<h5>{{ @$produk->nama_prod }}</h5>
									<h5>({{ @$produk->kategori->nama_kat }})</h5> <br /> 
									<h5>IDR {{ @$produk->harga }}</h5><br /><br /> 
			</div>
		</div>
		@endforeach
		
			</div>
		</div>	

<div class="about-bottom" style="background:url({{ asset('assets') }}/home/images/ibnuheader.jpg) no-repeat 0px 0px;
	background-size:cover;
	padding:100px 0;
	background-attachment:fixed;">
		<div class="container">
			<h3> Harga <span>100%</span> Murah</h3>
			<h4>Ayo Segera Order</h4>
			<a href="{{ url('order/add') }}">Shop Now</a>
		</div>
	</div>
	<script src="{{ asset('assets') }}/home/js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});		
	</script>
<div class="fandt">
	<div class="container">
		<div class="col-md-6 features">
			<h3>Our Services</h3>
			<div class="support">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-user " aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>24/7 Jam Pelayanan Admin</h4>
					<p>Kami Menyediakan Pelayanan Yang Secepat-cepatnya.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="shipping">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-bus" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>Gratis Ongkir</h4>
					<p>Ongkos Kirim Gratis Tanpa Tip.</p>
				</div>	
				<div class="clearfix"></div>
			</div>
			<div class="money-back">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-money" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>100% Jaminan Uang Kembali</h4>
					<p>Barang Cacat? Uang Kembali.</p>
				</div>	
				<div class="clearfix"></div>				
			</div>
		</div>
		<div class="col-md-6 testimonials">
			<div class="test-inner">
				<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<img src="{{ asset('assets') }}/home/images/ibnu.jpg" alt=" " class="img-responsive" />
								<p>"Demi Apapun, Aku Sayang Kamu"</p>
								<h4>- Ibnu (Web Enginering)</h4>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<img src="{{ asset('assets') }}/home/images/naufal.jpg" alt=" " class="img-responsive" />
								<p>"Jika Kamu Suka Pakailah, Safety Can Be Fun"</p>
								<h4>- Naufal (Web Designer)</h4>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<img src="{{ asset('assets') }}/home/images/ukan.jpg" alt=" " class="img-responsive" />
								<p>"Gaya Hidup Bukan Apa yang Dikata Mereka , melainkan Dari Diri Sendiri , BOOm!!"</p>
								<h4>- Ukan (Web Designer)</h4>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
				<script src="{{ asset('assets') }}/home/js/jquery.wmuSlider.js"></script> 
								<script>
									$('.example1').wmuSlider();         
								</script> 
</div>
<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Top Brands</h3>
			<div class="sliderfig">
				<ul id="flexiselDemo1">			
					<li>
						<img src="{{ asset('assets') }}/home/images/4.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="{{ asset('assets') }}/home/images/5.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="{{ asset('assets') }}/home/images/6.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="{{ asset('assets') }}/home/images/7.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="{{ asset('assets') }}/home/images/46.jpg" alt=" " class="img-responsive" />
					</li>
				</ul>
			</div>
					<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
									animationSpeed: 1000,
									autoPlay: false,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="{{ asset('assets') }}/home/js/jquery.flexisel.js"></script>
		</div>
	</div>
<!-- //top-brands -->
	
@endsection