@extends('theme::layouts.app')

@section('content')
<div class="banner-header banner2">

	<!--//header-->

</div>
<!-- // banner -->
<!-- about -->
<div class="about">
	<div class="container">
		<div class="w3-heading-all">
			@if ($page)
			<h3>{{ $page->title }}</h3>
		</div>
		<div class="ab-agile">
			<div class="col-md-6 aboutleft">
				{!!$page->body!!}
			</div>
			<div class="col-md-6 aboutright">
				<img src="images/p1.jpg" class="img-responsive" alt="" />
			</div>
			<div class="clearfix"></div>
		</div>
		@endif
	</div>
</div>
<!-- //about -->
<!-- wthree-mid -->
<div class="wthree-mid">
	<div class="container">
		{!!$page->excerpt!!}
	</div>
</div>
<!-- //wthree-mid -->
<!--/team-->

<div class="services" style="background:white;" id="services">
	<div class="container">
		<div class="w3-heading-all services-head">
			<h3 style="color:#0392ce;">Đội ngũ của chúng tôi</h3>
		</div>

		<div class="w3-services-grids">
			@foreach ($doctor as $value)
			<div class="col-md-4 w3-services-grids1" style="margin-top: 20px;">

				<div class="w3-services-grid1">
					<img style='width:100%; object-fit: contain;' src="{{ asset('storage/'. $value->image) }}" alt="img" />
					<h3>{{ $value->name }}</h3>
					<p style="padding-bottom:20px">
						{{ $value->description }}
					</p>
					<div class="clearfix"></div>
				</div>

			</div>
			@endforeach
			<div class="clearfix"></div>

		</div>

	</div>

</div>
<!--//team-->
<!-- footer -->

@endsection