@extends('theme::layouts.app')

@section('content')

<div class="banner-header banner2">

</div>
<!-- // banner -->
<!-- offer-bottom -->
	<div class="banner-bottom">
		<div class="container">
		<div class="w3-heading-all">
				<h3>Tin Tức</h3>
			</div>
			{{-- <div class="col-md-4 w3l_services_footer_top_left">
				<img src="{{ asset('themes/tailwind/lucci/images/sp5.jpg') }}" alt=" " class="img-responsive" />
			</div> --}}
			<div class="col-md-8 w3l_services_footer_top_right">
				@foreach ($posts as $post)
					<div class="w3l_services_footer_top_right_main">
						<div class="w3l_services_footer_top_right_main_l1">	
							<div class="image-services">
								{{-- <i class="fa fa-globe" aria-hidden="true"></i> --}}
								<img width="260px;" src="{{ asset('storage/'.$post->image) }}"/>
							</div>
						</div>
						<div class="w3l_services_footer_top_right_main_r">
							<a href="{{ route('wave.news.detail', $post->slug) }}" >{{ $post->title }}</a>
							<p>{{ $post->excerpt  }}</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				@endforeach

				<ul id="paginate-data-targeted" class="d-flex pagination">
					@include('themes.tailwind.lucci.news.pagination', ['paginator' => $posts])
				</ul>

			</div>

	</div>
<!-- //offer-bottom -->
</div>

@endsection