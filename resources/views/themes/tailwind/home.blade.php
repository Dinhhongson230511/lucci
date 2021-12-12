@extends('theme::layouts.app')

@section('content')

<!-- slider -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		@for($i = 0;$i < count($listBanner); $i++) <li data-target="#myCarousel" data-slide-to="0" class="{{ $i >= 1 ? '' : 'active' }}">
			</li>
			@endfor
	</ol>
	<div class="carousel-inner" role="listbox">
		@foreach($listBanner as $key => $banner)
		<div class="item {{ $key >= 1 ? 'item'.$key : 'active' }}" style="background: url( {{ asset('storage/'. $banner->images) }} ) no-repeat center 0px;background-size: cover;height: 760px!important;">
			<div class="banner-dott">
				<div class="container">
					<div class="carousel-caption">
						<h3>{{ $banner->title }}</h3>
						<div class="contrast">
							<p>{{ $banner->description }}.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<div class="agileits_reservation">
	@if(Session::has('message'))
	<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
	@endif
	<form action="{{ route('wave.appointments.create') }}" method="post">
	@csrf
		<div class="cuisine">
			<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
			<input type="text" name="name" placeholder="Tên của bạn" required="">
		</div>
		<div class="phone_email">
			<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
			<input type="text" name="phone" placeholder="Số điện thoại" required="">
		</div>
		<div class="phone_email1">
			<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
			<input type="email" name="email" placeholder="Email" required="">
		</div>
		<div class="clearfix"> </div>
		<div class="agileits_reservation_grid">
			<div class="span1_of_1 book_date">
				<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
				<input class="date" id="datepicker" name="date" placeholder="Chọn ngày" type="text" required="">
			</div>
			<div class="span1_of_1 section_room">
				<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
				<input type="text" name="time" class="timepicker" value="Thời gian">
			</div>
			<div class="span1_of_1 section_room">
				<!-- start_section_room -->
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				<select id="country1" name="people" class="frm-field sect" required>
					<option value="">Người</option>
					<option value="1">1 Người</option>
					<option value="2">2 Người</option>
					<option value="3">Hơn nữa</option>
				</select>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="date_btn">
			<input type="submit" value="Đặt Lịch" />
		</div>
	</form>
</div>
</div>
<!-- /About -->
<div class="w3-about about-gap" style="margin-top: 50px;" id="about">
	<div class="container">
		<div class="w3-heading-all">
			<h3>Trách nhiệm & Dịch vụ</h3>
		</div>
		<div class="w3-about-grids">
			<div class="col-md-6 w3-about-left-grid">
				<div class=" w3-about-left-grid-inner-head">
					<i class="fa fa-microphone" aria-hidden="true"></i>
					<h3>{{ $serviceHighlight ? $serviceHighlight->title : 'Nha khoa LUCCI - Niềng răng chỉnh nha công nghệ mới nhất nắn chỉnh toàn diện' }}</h3>
				</div>
				<div class=" w3-about-left-grid-inner2-head">
					<h3>{{ $serviceHighlight ? $serviceHighlight->sub_description : 'Nha khoa LUCCI luôn cảm ơn và trân trọng sự tin tưởng của khách hàng đã lựa chọn chúng tôi cùng đồng hành trên con đường lấy lại nụ cười hoàn thiện nhất. Được nhìn thấy khách hàng của mình đẹp hơn, thành công hơn đó chính là niềm hạnh phúc, là nỗ lực mà Nha khoa LUCCI luôn muốn hướng đến.' }}</h3>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 w3-about-right-grid">
				@foreach ($services as $service)
				<div class="col-md-8 w3-about-right-text1">
					<h4>{{ $service->title }}</h4>
					{{-- <h3>{{ $service->sub_description }}</h3> --}}
				</div>
				<div class="col-md-4 w3-about-right-img1">
					<img src="{{ asset('storage/'. $service->image) }}" alt="img" />
				</div>
				<div class="clearfix"></div>
				@endforeach
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //About -->
<!-- testimonials -->
<div class="testimonials" id="testimonials">
	<div class="container">
		<div class="w3-heading-all">
			<h3>TẠI SAO NÊN CHỌN ?</h3>
		</div>
		<div class="w3ls_testimonials_grids">
			<section class="center slider">
				@foreach ($slogans as $slogan)
					<div class="agileits_testimonial_grid">
						<div class="w3l_testimonial_grid">
							<p style="height:125px;">{{ $slogan->slogan }}</p>
							<h4>{{ $slogan->title }}</h4>
							{{-- <h5>{{ $value->job }}</h5> --}}
							<div class="w3l_testimonial_grid_pos">
								{{-- <img src="{{ asset('storage/'.$service->image) }}" alt=" " class="img-responsive" /> --}}
							</div>
						</div>
					</div>
				@endforeach
			</section>
		</div>
	</div>
</div>
<!-- //testimonials -->
<!-- /services -->
<div class="services" id="services" style="background:#f5f5f5;">
	<div class="container">
		<div class="w3-heading-all services-head">
			<h3 style="color:#0392ce;">Đội ngũ bác sĩ</h3>
		</div>
		<div class="w3-services-grids">
			@foreach ($doctors as $doctor)
			<div class="col-md-4 w3-services-grids1" style="margin-top: 20px;">
				<div class="w3-services-grid1">
					<img style='width:100%; object-fit: contain;' src="{{ asset('storage/'. $doctor->image) }}" alt="img" />
					<h3>{{ $doctor->name }}</h3>
					<p style="padding-bottom:20px">
						{{ $doctor->description }}
					</p>
				</div>
			</div>
			@if (($key + 1) % 3 == 0)
					<div class="clearfix"></div>
				@endif
			@endforeach
		</div>
	</div>
</div>
</div>
<!-- //services -->
<!-- testimonials -->
<div class="testimonials" id="testimonials">
	<div class="container">
		<div class="w3-heading-all">
			<h3>Khách Hàng</h3>
		</div>
		<div class="w3ls_testimonials_grids">
			<section class="center slider">
				@foreach ($customerComment as $value)
				<div class="agileits_testimonial_grid">
					<div class="w3l_testimonial_grid">
						<p>{{ $value->comment }}</p>
						<h4>{{ $value->name }}</h4>
						<h5>{{ $value->job }}</h5>
						<div class="w3l_testimonial_grid_pos">
							<img src="{{ asset('storage/'.$value->image) }}" alt=" " class="img-responsive" />
						</div>
					</div>
				</div>
				@endforeach
			</section>
		</div>
	</div>
</div>
<!-- //testimonials -->

<!-- /services -->
<div class="services" id="services" style="background:#f5f5f5;">
	<div class="container">
		<div class="w3-heading-all services-head">
			<h3 style="color:#0392ce;">Tin Tức</h3>
		</div>
		<div class="w3-services-grids">
			@foreach ($posts as $key => $post)
				<div class="col-md-4 w3-services-grids1" style="margin-top: 20px;width:33%;">
					<div class="w3-services-grid1">
						<img style='width:100%; object-fit: contain;' src="{{ asset('storage/'. $post->image) }}" alt="img" />
						<h3><a href="{{ route('wave.news.detail', $post->slug) }}">{{ $post->title }}</a></h3>
						<p style="padding-bottom:20px">
							{{ $post->excerpt }}
						</p>
					</div>
				</div>
				@if (($key + 1) % 3 == 0)
					<div class="clearfix"></div>
				@endif
			@endforeach
			
		</div>
	</div>
</div>
</div>
<!-- //services -->

@endsection