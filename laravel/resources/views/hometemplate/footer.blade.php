<!-- //top-brands -->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grids fgd1">
		<a href="index.html"><img src="{{ asset('assets') }}/home/images/logos.png" alt=" " /><h3> UIN Fash on<span>MAN</span></h3></a>
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