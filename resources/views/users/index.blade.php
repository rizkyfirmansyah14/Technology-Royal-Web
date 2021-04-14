@extends('layout.users.main')
@section('content')
		@include('partial.users.navbar')
		<div class="page-body-wrapper">
			<section id="home" class="home">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="main-banner">
								<div class="d-sm-flex justify-content-between">
									<div data-aos="zoom-in-up">
										<div>
											<h3 class="font-weight-medium">
                                            PT. Royal Teknologi 
                                            Digital
											<span>For Tomorrow’s</span>
											</h3>
										</div>
										<p class="mt-3">PT. Royal Teknologi Digital 

											<br>
											Company engaged in digital technology.
										</p>
										<a href="#" class="btn btn-secondary mt-3">Learn more</a>
									</div>
									<div class="mt-5 mt-lg-0">
										<img src="images/head-content.svg" alt="marsmello" class="head-img" data-aos="zoom-in-up">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Start Recent Work -->
		<section class="py-5 mb-5" id="services">
			<div class="container">
				<div class="recent-work-header row text-center pb-5 mt-5">
					<h2 class="col-md-6 m-auto h2 semi-bold-600 py-5">Our Business Unit</h2>
				</div>
				<div class="row gy-5 g-lg-5 mb-4">

					@foreach($bisnis as $bisnis)
					<!-- Start Recent Work -->
					<div class="col-md-4 mb-3" data-aos="fade-right"  data-aos-offset="200">
						<a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
							<img class="recent-work-img card-img" src="{{ asset('uploads/' . $bisnis->image) }}" alt="Card image">
							<div class="recent-work-vertical card-img-overlay d-flex align-items-end">
								<div class="recent-work-content text-start mb-3 ml-3 text-dark">
									<h3 class="card-title light-300 text-dark">{{$bisnis->title}}</h3>
									<button type="button" class="btn btn-outline-dark">Show More</button>
								</div>
							</div>
						</a>
					</div><!-- End Recent Work -->
					@endforeach
					
				</div>
			</div>
    	</section>
    <!-- End Recent Work -->
			<section class="our-process" id="about">
				<div class="container">
					<div class="row">
						<div class="col-sm-6" data-aos="fade-up">
							<h5 class="text-dark">Our work process</h5>
							<h3 class="font-weight-medium text-dark">Discover New Idea With Us!</h3>
							<h5 class="text-dark mb-3">Imagination will take us everywhere</h5>
							<p class="font-weight-medium mb-4">Lorem ipsum dolor sit amet, <br> 
								pretium pretium tempor.Lorem ipsum dolor sit amet, consectetur
							</p>
							<div class="d-flex justify-content-start mb-3">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Lorem ipsum dolor sit amet, pretium pretium</p>
							</div>
							<div class="d-flex justify-content-start mb-3">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Lorem ipsum dolor sit amet, pretium pretium</p>
							</div>
							<div class="d-flex justify-content-start">
								<img src="images/tick.png" alt="tick" class="mr-3 tick-icon"  >
								<p class="mb-0">Lorem ipsum dolor sit amet, pretium pretium</p>
							</div>
						</div>
						<div class="col-sm-6 text-right" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
							<img src="images/idea.png" alt="idea" class="img-fluid">
						</div>
					</div>
				</div>
			</section>
			<section class="our-projects" id="projects">
				<div class="container">
				<div class="recent-work-header row text-center">
					<h2 class="col-md-6 m-auto h2 semi-bold-600 py-5">Our Partner</h2>
				</div>
				</div>
				<div data-aos="fade-up">
					<div class="owl-carousel-projects owl-carousel owl-theme">
						@foreach($partner as $p)
						<div class="item">
							<img src="uploads/{{$p->image}}" alt="deloit" class="p-2 p-lg-0" data-aos="fade-down"  data-aos-offset="-400">
						</div>
						@endforeach
					</div>
				</div>
			</section>

			<section class="contactus" id="contact">
				<div class="container">
					<div class="row mb-5 pb-5">
						<div class="col-sm-5" data-aos="fade-up" data-aos-offset="-500">
							<img src="images/contact.jpg" alt="contact" class="img-fluid">
						</div>
						<div class="col-sm-7" data-aos="fade-up" data-aos-offset="-500">
							<h3 class="font-weight-medium text-dark mt-5 mt-lg-0">Got A Problem</h3>
							<h5 class="text-dark mb-5">Lorem ipsum dolor sit amet, consectetur pretium</h5>
							<form method="post" action="{{ route('contact.store')}}">
								@csrf

								@if (session('status'))
									<div class="alert alert-primary mt-4">
										{{ session('status') }}
									</div>
								@endif
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name*" value="{{ old('name') }}">
											@error('name')
												<div class="invalid-feedback">
													{{ $message }}   
												</div>
											@enderror
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="mail" placeholder="Email*"  value="{{ old('email') }}">
											@error('email')
												<div class="invalid-feedback">
													{{ $message }}   
												</div>
											@enderror
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<textarea name="message" id="message" class="form-control @error('message') is-invalid @enderror" placeholder="Message*" rows="5"  value="{{ old('message') }}"></textarea>
											@error('message')
												<div class="invalid-feedback">
													{{ $message }}   
												</div>
											@enderror
										</div>
									</div>
									<div class="col-sm-12">
										<button  type="submit" class="btn btn-secondary">SEND</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>
@endsection
		
