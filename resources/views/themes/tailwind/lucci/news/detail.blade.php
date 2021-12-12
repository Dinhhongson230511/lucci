@extends('theme::layouts.app')

@section('content')

<div class="banner-header banner2">

</div>
<!-- // banner -->
<!-- offer-bottom -->
	{{-- <div class="banner-bottom">
		<div class="container">
		<div class="w3-heading-all">
				<h3>Tin Tức</h3>
			</div> --}}
			{{-- <div class="col-md-4 w3l_services_footer_top_left">
				<img src="{{ asset('themes/tailwind/lucci/images/sp5.jpg') }}" alt=" " class="img-responsive" />
			</div> --}}
			{{-- <div class="col-md-8 w3l_services_footer_top_right">
				
		</div>
	</div> --}}
<!-- //offer-bottom -->
{{-- </div> --}}
<style>
	.aboutleft img {
		margin-top:20px;
		width:100%;
		margin-bottom: 1em;
	}
</style>
<div class="about">
	<div class="container">
		<div class="w3-heading-all">
			<h3>{{ $post->title }}</h3>
		</div>
		<div class="ab-agile">
			<div class="col-md-12 aboutleft">
				{!!$post->body!!}
			</div>
			{{-- <div class="col-md-12 aboutright">
				<img src="images/p1.jpg" class="img-responsive" alt="" />
			</div> --}}
			<div class="clearfix"></div>
		</div>
	</div>
</div>

@endsection