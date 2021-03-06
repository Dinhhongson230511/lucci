@extends('theme::layouts.app')

@section('content')
<div class="banner-header banner2">

</div>
<!-- // banner -->
<div class="section-w3ls agileits-gallery" id="portfolio">
	<div class="w3-heading-all">
		<h3>Ảnh khách hàng</h3>
	</div>
	<div class="gallery-w3layouts">
		@foreach ($gallery as $value)
		<div class="col-sm-3 w3_tab_img_left">
			<div class="demo">
				<a class="cm-overlay" href="{{ asset('storage/'.$value->image) }}">
					<figure class="imghvr-shutter-in-out-diag-2">
						<img  src="{{ asset('storage/'.$value->image) }}" alt=" " class="img-responsive" />
					</figure>
				</a>
			</div>
			<div class="agile-gallery-info">
				<h5>{{ $value->title }}</h5>
				<p>{{ $value->description }}</p>
			</div>
		</div>
		@endforeach
		<div class="clearfix"></div>
	</div>
</div>
<!-- //menu -->

<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="footer_agile_inner_info_w3l">
			<div class="col-md-4 footer-left">
				<h2><a href="index.html">MediBulk </a></h2>
				<p>Lorem ipsum quia dolor
					sit amet, consectetur, adipisci velit, sed quia non
					numquam eius modi tempora.</p>
				<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
					<li><a href="#" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a></li>
					<li><a href="#" class="twitter">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a></li>
					<li><a href="#" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a></li>
					<li><a href="#" class="pinterest">
							<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						</a></li>
				</ul>
			</div>
			<div class="col-md-4 footer-right">
				<div class="sign-grds">
					<div class="sign-gd">
						<h4>Information </h4>
						<ul>
							<li><a href="index.html" class="active">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="services.html"> Services</a></li>
							<li><a href="gallery.html">Portfolio</a></li>
							<li><a href="contact.html">Contact</a></li>

						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 sign-gd-two">
				<h4>Address</h4>
				<div class="w3-address">
					<div class="w3-address-grid">
						<div class="w3-address-left">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="w3-address-right">
							<h6>Phone Number</h6>
							<p>+1 234 567 8901</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3-address-grid">
						<div class="w3-address-left">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="w3-address-right">
							<h6>Email Address</h6>
							<p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3-address-grid">
						<div class="w3-address-left">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="w3-address-right">
							<h6>Location</h6>
							<p>Broome St, NY 10002,California, USA.

							</p>
						</div>

					</div>
				</div>
			</div>
			<div class="clearfix"> </div>


			<div class="clearfix"></div>

			<p class="copy-right">&copy;2018 MediBulk. All rights reserved | Design by <a href="">W3layouts</a></p>
		</div>
	</div>
</div>
@endsection