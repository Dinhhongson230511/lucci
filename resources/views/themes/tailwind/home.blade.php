@extends('theme::layouts.app')

@section('content')

<!-- slider -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			@for($i = 0;$i < count($listBanner); $i++)
				<li data-target="#myCarousel" data-slide-to="0" class="{{ $i >= 1 ? '' : 'active' }}"></li>
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
					<form action="#" method="post">
						<div class="cuisine"> 
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
							<input type="text" name="Location" placeholder="Enter name" required="">
						</div>
						<div class="phone_email"> 
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							<input type="text" name="Phone" placeholder="Phone" required=""> 
						</div>
						<div class="phone_email1"> 
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							<input type="email" name="Email" placeholder="Email" required="">
						</div>
						<div class="clearfix"> </div>
						<div class="agileits_reservation_grid">
							<div  class="span1_of_1 book_date"> 
								<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
								<input class="date" id="datepicker" name="Text" placeholder="Select Date"  type="text" required="">
							</div>
							<div class="span1_of_1 section_room"> 
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span>  
								<input type="text" name="Time" class="timepicker" value=" Time">	 
							</div>
							<div class="span1_of_1 section_room">
								<!-- start_section_room --> 
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								<select id="country1" class="frm-field sect" required>
									<option value="">People</option>
									<option value="1">1 People</option>
									<option value="2">2 People</option>         
									<option value="3">More</option>
								</select> 
							</div>  
							<div class="clearfix"></div>
						</div>
						<div class="date_btn"> 
							<input type="submit" value="Book An Appointment" /> 
						</div> 
					</form>
				</div>
 </div>
   <!-- /About -->
	<div class="w3-about about-gap" id="about">
		<div class="container">
			<div class="w3-heading-all">
				<h3>About us</h3>
			</div>
		<div class="w3-about-grids">
				<div class="col-md-6 w3-about-left-grid">
					<div class=" w3-about-left-grid-inner-head">
						<i class="fa fa-microphone" aria-hidden="true"></i>
						<h3>Lets Talk about Hospitality</h3>
					</div>
					<div class=" w3-about-left-grid-inner2-head">
						<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec gravida, ante egestas egestas vulputate, elit risus maximus mauris, non gravida arcu justo eget est. Cras eu mauris nisl. Maecenas ut scelerisque metus.</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-6 w3-about-right-grid">
						<div class="col-md-8 w3-about-right-text1">
							<h5>Lorem ipsum 109</h5>
							<h4>Specialist1</h4>
							<h3>Ut sed augue porttitor, vehicula eros in, vehicula elit. Aliquam ut ex aliquam risus vestibulum hendrerit.</h3>
				
						</div>
						<div class="col-md-4 w3-about-right-img1">
								<img src="images/a11.jpg" alt="img" />
						</div>
						<div class="clearfix"></div>
						<div class="col-md-8 w3-about-right-text1">
							<h5>Dunke alpha 212</h5>
							<h4>Specialist2</h4>
							<h3>Ut sed augue porttitor, vehicula eros in, vehicula elit. Aliquam ut ex aliquam risus vestibulum hendrerit.</h3>
						</div>
						<div class="col-md-4 w3-about-right-img1">
								<img src="images/a121.jpg" alt="img" />
						</div>
						<div class="clearfix"></div>
						<div class="col-md-8 w3-about-right-text1">
							<h5>Monst ibram 143</h5>
							<h4>Specialist3</h4>
							<h3>Ut sed augue porttitor, vehicula eros in, vehicula elit. Aliquam ut ex aliquam risus vestibulum hendrerit.</h3>
						</div>
						<div class="col-md-4 w3-about-right-img1">
							<img src="images/a13.jpg" alt="img" />
						</div>
						<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
		</div>
		</div>
	</div>
	<!-- //About -->
<!-- /services -->
<div class="services" id="services">
	<div class="container">
		<div class="w3-heading-all services-head">
			<h3>Services</h3>
		</div>	

		<div class="w3-services-grids">
			<div class="col-md-4 w3-services-grids1">
			<div class="w3-services-grid1">
				<i class="fa fa-user-md" aria-hidden="true"></i>
				<h3> Special Team</h3>
				<div class="w3-services-grid1-left">
					<h4>10 </h4>
					<p>ipsum</p>
				</div>
				<div class="w3-services-grid1-right">
				<h4>5</h4>
					<p>basusx</p>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			<div class="col-md-4 w3-services-grids1 ">
			<div class=" w3-services-grid2">
		<i class="fa fa-laptop" aria-hidden="true"></i>
				<h3>Qualified Doctors</h3>
			<div class="w3-services-grid1-left">
					<h4>20 </h4>
					<p>basus</p>
				</div>
				<div class="w3-services-grid1-right">
				<h4>10</h4>
					<p>basus</p>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			<div class="col-md-4 w3-services-grids1">
			<div class=" w3-services-grid3">
			<i class="fa fa-hospital-o" aria-hidden="true"></i>
				<h3>Special sergery</h3>
			<div class="w3-services-grid1-left">
					<h4>15 </h4>
					<p>mpsum</p>
				</div>
				<div class="w3-services-grid1-right">
				<h4>20</h4>
					<p>rasus</p>
				</div>
				<div class="clearfix"></div>
		
			</div>
			</div>
			
			<div class="clearfix"></div>
			<div class="w3-services-grid-bottom">
			<div class="col-md-4 w3-services-grids1">
			<div class="w3-services-grid4">
							<i class="fa fa-heartbeat" aria-hidden="true"></i>
				<h3>Cardiac Clinic</h3>
				<div class="w3-services-grid1-left">
					<h4>25 </h4>
					<p>ipsum</p>
				</div>
				<div class="w3-services-grid1-right">
				<h4>30</h4>
					<p>basusx</p>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			<div class="col-md-4 w3-services-grids1">
			<div class=" w3-services-grid5">
							<i class="fa fa-flask" aria-hidden="true"></i>
				<h3>Pediatric Clinic</h3>
				<div class="w3-services-grid1-left">
					<h4>35</h4>
					<p>ipsum</p>
				</div>
				<div class="w3-services-grid1-right">
				<h4>25</h4>
					<p>basusx</p>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			<div class="col-md-4 w3-services-grids1">
			<div class=" w3-services-grid6">
							<i class="fa fa-ambulance" aria-hidden="true"></i>
				<h3>Emergency Help</h3>
				<div class="w3-services-grid1-left">
					<h4>40 </h4>
					<p>ipsum</p>
				</div>
				<div class="w3-services-grid1-right">
				<h4>45</h4>
					<p>basusx</p>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			
			<div class="clearfix"></div>
		</div>
		</div>
</div>
</div>
<!-- //services -->
<!-- testimonials -->
	<div class="testimonials" id="testimonials">
		<div class="container">
		<div class="w3-heading-all">
			<h3>Testimonials</h3>
		</div>
			<div class="w3ls_testimonials_grids">
				 <section class="center slider">
						<div class="agileits_testimonial_grid">
							<div class="w3l_testimonial_grid">
								<p>In eu auctor felis, id eleifend dolor. Integer bibendum dictum erat, 
									non laoreet dolor.</p>
								<h4>Rosy Crisp</h4>
								<h5>Student</h5>
								<div class="w3l_testimonial_grid_pos">
									<img src="images/tm1.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
						</div>
						<div class="agileits_testimonial_grid">
							<div class="w3l_testimonial_grid">
								<p>In eu auctor felis, id eleifend dolor. Integer bibendum dictum erat, 
									non laoreet dolor.</p>
								<h4>Laura Paul</h4>
								<h5>Student</h5>
								<div class="w3l_testimonial_grid_pos">
									<img src="images/tm2.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
						</div>
						<div class="agileits_testimonial_grid">
							<div class="w3l_testimonial_grid">
								<p>In eu auctor felis, id eleifend dolor. Integer bibendum dictum erat, 
									non laoreet dolor.</p>
								<h4>Michael Doe</h4>
								<h5>Student</h5>
								<div class="w3l_testimonial_grid_pos">
									<img src="images/tm3.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
						</div>
				</section>
			</div>
		</div>
	</div>
<!-- //testimonials -->

@endsection
