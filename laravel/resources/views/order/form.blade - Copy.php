@extends('hometemplate/header')

@section('content')
<div class="contact">
	<div class="container">
		<h3>Contact Us</h3>
		<div class="col-md-3 col-sm-3 contact-left">
			<div class="address">
				<h4>ADDRESS</h4>
				<h5>345 Setwant natrer,</h5>
				<h5>Washington. United States.</h5>
			</div>
			<div class="phone">
				<h4>PHONE</h4>
				<h5>+1(401) 1234 567.</h5>
				<h5>+1(804) 4261 150.</h5>
			</div>
			<div class="email">
				<h4>EMAIL</h4>
				<h5><a href="mailto:info@example.com">example@gmail.com</a></h5>
				<h5><a href="mailto:info@example.com">example2@yahoo.com</a></h5>
			</div>
		</div>
		<div class="col-md-9 col-sm-9 contact-right">
			<form action="#" method="post">
				<input type="text" name="your name" placeholder="Your name" required=" ">
				<input type="text" name="your email" placeholder="Your email" required=" ">
				<input type="text" name="your subject" placeholder="Your subject" required=" ">
				<input type="text" name="your phone number" placeholder="Phone number" required=" ">
				<textarea  name="your message" placeholder="Your message" required=" "></textarea>
				<input type="submit" value="Send message">
			</form>
		</div>
	</div>
</div>


@endsection