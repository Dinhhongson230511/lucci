<div class="footer">
	<div class="container">
		<div class="footer_agile_inner_info_w3l">
			<div class="col-md-4 footer-left">
				<h2><a href="index.html">NHA KHOA LUCCI</a></h2>
				<p>Nha khoa LUCCI luôn cảm ơn và trân trọng sự tin tưởng của khách hàng đã lựa chọn chúng tôi cùng đồng hành trên con đường lấy lại nụ cười hoàn thiện nhất. Được nhìn thấy khách hàng của mình đẹp hơn, thành công hơn đó chính là niềm hạnh phúc, là nỗ lực mà Nha khoa LUCCI luôn muốn hướng đến.</p>
				<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
					<li><a href="https://www.facebook.com/nhakhoalucci.vn" class="facebook">
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
						<h4>THÔNG TIN </h4>
						<ul>
							<li><a href="{{ route('wave.home') }}" class="active">Trang chủ</a></li>
							<li><a href="{{ route('wave.about') }}">Về chúng tôi</a></li>
							<li><a href="{{ route('wave.service') }}"> Dịch vụ</a></li>
							<li><a href="{{ route('wave.gallery') }}">Ảnh của khách hàng</a></li>
							<li><a href="{{ route('wave.contact') }}">Liên hệ</a></li>

						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 sign-gd-two">
				<h4>ĐỊA CHỈ</h4>
				<div class="w3-address">
					<div class="w3-address-grid">
						<div class="w3-address-left">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="w3-address-right">
							<h6>
								Số điện thoại</h6>
							<p>02438613888 - 0918382228</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3-address-grid">
						<div class="w3-address-left">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="w3-address-right">
							<h6>Email</h6>
							<p><a href="mailto:example@email.com">Email : nhakhoalucci@gmail.com

								</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3-address-grid">
						<div class="w3-address-left">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="w3-address-right">
							<h6>Địa chỉ</h6>
							<p>- 671 Trương Định, Hoàng Mai, Hà nội.</p>
							<p>- Ninh Bình: Gia Viễn.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>


			<div class="clearfix"></div>

			<p class="copy-right">&copy;2021 Design by <a href="">Nha khoa Lucci</a></p>
		</div>
	</div>
</div>

<script type="text/javascript" src="{{ asset('themes/' . $theme->folder . '/lucci/js/jquery-2.1.4.min.js') }}"></script>
<!-- carousal -->
<script src="{{ asset('themes/' . $theme->folder . '/lucci/js/slick.js') }}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	$(document).on('ready', function() {
		$(".center").slick({
			dots: true,
			infinite: true,
			centerMode: true,
			slidesToShow: 2,
			slidesToScroll: 2,
			responsive: [{
					breakpoint: 768,
					settings: {
						arrows: true,
						centerMode: false,
						slidesToShow: 2
					}
				},
				{
					breakpoint: 480,
					settings: {
						arrows: true,
						centerMode: false,
						centerPadding: '40px',
						slidesToShow: 1
					}
				}
			]
		});
	});
</script>
<!-- //carousal -->

<script src="{{ asset('themes/' . $theme->folder . '/lucci/js/SmoothScroll.min.js') }}"></script>
<!-- smooth scrolling-bottom-to-top -->
<script type="text/javascript">
	$(document).ready(function() {
		/*
		    var defaults = {
		    containerID: 'toTop', // fading element id
		    containerHoverID: 'toTopHover', // fading element hover id
		    scrollSpeed: 1200,
		    easingType: 'linear' 
		    };
		*/
		$().UItoTop({
			easingType: 'easeOutQuart'
		});
	});
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling-bottom-to-top -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop: $(this.hash).offset().top
			}, 1000);
		});
	});
</script>
<!-- Time select -->
<script type="text/javascript" src="{{ asset('themes/' . $theme->folder . '/lucci/js/wickedpicker.js') }}"></script>
<script type="text/javascript">
	$('.timepicker').wickedpicker({
		twentyFour: false
	});
</script>
<!-- //Time select -->
<!-- Calendar -->
<link rel="stylesheet" href="{{ asset('themes/' . $theme->folder . '/lucci/css/jquery-ui.css') }}" />
<script src="{{ asset('themes/' . $theme->folder . '/lucci/js/jquery-ui.js') }}"></script>
<script>
	$(function() {
		$("#datepicker").datepicker();
	});
</script>
<!-- //Calendar -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ asset('themes/' . $theme->folder . '/lucci/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/' . $theme->folder . '/lucci/js/easing.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/' . $theme->folder . '/lucci/js/bootstrap.js') }}"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->