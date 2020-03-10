<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GC</title>

	<link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans|Rajdhani&display=swap')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('https://pro.fontawesome.com/releases/v5.10.0/css/all.css')}}"
	integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css')}}">
	<link href="{{asset('css/hover.css')}}" type="text/css" rel="stylesheet"/>
	<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="{{asset('dist/css/lightbox.min.css')}}">
	<link href="{{asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
	@stack('styles')
</head>
<body>
	<section class="slider_main">
		<div id="demo" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			</ul>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/slider1.png" alt="Los Angeles" width="1100" height="450">
					<div class="carousel-caption">
						<h1>softech park</h1>
						<p>the machine makes cars and motorcycles run on 40% water and 60% petroleum products.</p>
						<a href="#" class="btn_default">Read More</a>
					</div>
				</div>
				<div class="carousel-item">
					<img src="images/slider2.png" alt="Chicago" width="1100" height="450">
					<div class="carousel-caption">
						<h1>softech park</h1>
						<p>the machine makes cars and motorcycles run on 40% water and 60% petroleum products.</p>
						<a href="#" class="btn_default">Read More</a>
					</div>
				</div>
				<div class="carousel-item">
					<img src="images/slider3.png" alt="New York" width="1100" height="450">
					<div class="carousel-caption">
						<h1>New York</h1>
						<p>We love the Big Apple!</p>
						<a href="#" class="btn_default">Read More</a>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
		<div class="overlay"></div><!-- overlay -->
		<div id="navbar" class="top_navigation ">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="{{route('index')}}"><img src="images//logo/gc_home.png"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="container">
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="{{route('index')}}">HOME<span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link hvr-underline-from-center" href="{{route('products.index')}}">PRODUCTS</a>
							</li>
							<li class="nav-item">
								<a class="nav-link hvr-underline-from-center" href="{{route('galleries.index')}}">GALLERY</a>
							</li>
							<li class="nav-item">
								<a class="nav-link hvr-underline-from-center" href="{{route('abouts.index')}}">ABOUT US</a>
							</li>
							<li class="nav-item">
								<a class="nav-link hvr-underline-from-center" href="{{route('blogs.index')}}">BLOG</a>
							</li>
							<li class="nav-item">
								<a class="nav-link hvr-underline-from-center" href="{{route('contacts.index')}}">CONTACT</a>
							</li>
						</ul>
					</div>
				</div>





				<!-- login_top -->
			</nav>
		</div><!-- top_navigation -->

	</section><!-- slider_main -->
	<section class="award">
		<div class="row no-pad">
			@foreach($award as $awards)
			<div class="col-md-4">
				<div class="award_blk">
					<div class="image_blk">
						<i class="fas fa-award"></i>
					</div><!-- image_blk -->

					<div class="award_lead">
						<h6>{{$awards->title}}</h6>
						<p>{{$awards->description}}</p>
						<a href="{{route('abouts.show', $awards->id)}}" class="btn_default"> VIEW MORE</a>
					</div><!-- award_lead -->

				</div><!-- award_blk -->

			</div><!-- col -->
			@endforeach
		</div><!-- row -->
	</section><!-- award -->

	<section class="services">
		<div class="container">
			<div class="service_head">
				<h2>OUR SERVICES</h2>
			</div><!-- service_head -->
			<div class="row">
				<div class="col-md-4">
					<div class="service_blk text-center">
						<i class="fas fa-cogs"></i>
						<div class="head_blk_service text-left">
							<h6>DEVICE SETUP</h6>
							<P>GC has completed the invention. Named as
								‘Shishir's Hydrogen Oxygen Device’ aka SHOX,
								the machine makes cars and motorcycles run
							on 40% water and 60% petroleum products.</P>
						</div><!-- head_blk_service -->
					</div><!-- service_blk -->
				</div><!-- col -->
				<div class="col-md-4">
					<div class="service_blk text-center">
						<i class="fas fa-handshake"></i>
						<div class="head_blk_service text-left">
							<h6>CONSULTANT</h6>
							<P>GC has completed the invention. Named as
								‘Shishir's Hydrogen Oxygen Device’ aka SHOX,
								the machine makes cars and motorcycles run
							on 40% water and 60% petroleum products.</P>
						</div><!-- head_blk_service -->
					</div><!-- service_blk -->
				</div><!-- col -->
				<div class="col-md-4">
					<div class="service_blk text-center">
						<i class="fas fa-user-friends"></i>
						<div class="head_blk_service text-left">
							<h6>SEMINAR</h6>
							<P>GC has completed the invention. Named as
								‘Shishir's Hydrogen Oxygen Device’ aka SHOX,
								the machine makes cars and motorcycles run
							on 40% water and 60% petroleum products.</P>
						</div><!-- head_blk_service -->
					</div><!-- service_blk -->
				</div><!-- col -->
			</div><!-- row -->
			<hr>
		</div><!-- container -->
	</section><!-- services -->
	<section class="product">
		<div class="container">
			<div class="section_head">
				<h2>OUR PRODUCT</h2>
				<P>Don't find customers for your products for your customers </P>
			</div><!-- product_head -->
			<div class="row">
				<div class="offset-md-2 col-md-8">
					<div class="row">
						@foreach($productdetails as $productdetail)
						<div class="col-md-4">
							<div class="product_blk_head product_blk_head_main">
								<a href="{{route('productdetails.show', $productdetail->id)}}">
									<div class="product_blk">
										<i class="fas fa-cogs"></i>
										<div class="product_overlay_content">
											<i class="far fa-comments"></i>
											<i class="far fa-star"></i>
										</div><!-- product_overlay_content -->
									</div><!-- product_blk -->
									<div class="rating_blk">
										<h6>{{$productdetail->title}}</h6>
										<div class="rating">
											<div class="star_main">
												<i class="fas fa-3x fa-star"></i>
												<i class="fas fa-3x fa-star"></i>
												<i class="fas fa-3x fa-star"></i>
												<i class="fas fa-3x fa-star"></i>
												<i class="fas fa-3x fa-star"></i>
											</div>	
											</div>
										</div><!-- rating_blk -->
										</a>
										</div><!-- product_blk_head -->
									</div><!-- col -->
									@endforeach
								</div><!-- row -->
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
				</section><!-- product -->
				<section class="gallery">
					<div class="container">
						<div class="section_head">
							<h2>OUR GALLERY</h2>
							<P>Don't find customers for your products for your customers </P>
						</div><!-- product_head -->
						<div class="gallery_content">
							<div class="row">
								@foreach($gallery as $key=>$gal)
								@if($key == 0)
								<div class="col-md-6 no-pad">
									<div class="gallery_grid padding_right02p">
										<img src="{{asset(''.$gal->image)}}" width="580" height="400">
										<div class="all_gallery_link">
											<a href="{{route('galleries.index')}}">ALL WE GOT</a>
										</div><!-- all_gallery_link -->
									</div><!-- gallery_grid -->
								</div><!-- col -->
								@endif
								@endforeach



								<div class="col-md-6">
									<div class="row">
										@foreach($gallery as $key=>$gal)
										@if($key>0 && $key<5)
										<div class="col-md-6 no-pad">
											<div class="gallery_grid_more padding_right02p">
												<img src="{{asset(''.$gal->image)}}" width="200" height="200">
												<div class="gallery_overlay">
													<a href="{{route('galleries.index')}}"><i class="fas fa-arrow-right"></i></a>
												</div><!-- gallery_overlay -->
											</div>
										</div>
										@endif
										@endforeach

									</div>
								</div>

							</div><!-- row -->
						</div><!-- gallery_content -->
						<div class="show_all_gal text-center">
							<a href="{{route('galleries.index')}}"> <i class="fas fa-arrow-circle-right"></i> View all gallery</a>
						</div><!-- show_all_gal -->
					</div><!-- container -->
				</section><!-- gallery -->

				<section class="testimonial_section">
					<div class="container">
						<div class="section_head">
							<h2>TESTIMONIAL</h2>
						</div>
						<div class="row">
							<div class="col-lg-7">
								<div class="about_content">
									<div class="background_layer"></div>
									<div class="layer_content">
										<div class="section_title">
											<h2>Happy with<strong>Customers & Clients</strong></h2>
											<div class="heading_line"><span></span></div>
											<p>If you need any industrial solution we are available for you. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										</div>
										<a href="{{route('contacts.index')}}">Contact Us<i class="icofont-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="testimonial_box">
									<div class="testimonial_container">
										<div class="background_layer"></div>
										<div class="layer_content">
											<div class="testimonial_owlCarousel owl-carousel">
												@foreach($testimonial as $testimonials)
												<div class="testimonials">
													<div class="testimonial_content">
														<div class="testimonial_caption">
															<h6>{{$testimonials->name}}</h6>
															<span>{{$testimonials->position}}</span>
														</div>
														<p>{{$testimonials->description}}</p>
													</div>
													<div class="images_box">
														<div class="testimonial_img">
															<img class="img-center" src="{{asset(''.$testimonials->image)}}" alt="images not found">
														</div>
													</div>
												</div>

												@endforeach
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="news_update">
					<div class="container">
						<div class="section_head">
							<h2>UPDATE NEWS</h2>
							<P>Don't find customers for your products for your customers </P>
						</div><!-- product_head -->
						@foreach($blog as $blogs)
						<div class="row">
							<div class="col-md-4">
								<div class="news_image">
									<img src="{{asset(''.$blogs->image)}}" height="200">
								</div><!-- news_image -->
							</div><!-- col -->
							<div class="col-md-6">
								<div class="news_lead">
									<h6>{{$blogs->title}}</h6>
									<i class="fas fa-user"></i> <small>{{$blogs->name}}</small>
									<p>{{$blogs->description}}</p>
								</div><!-- news_lead -->
							</div><!-- col -->
							<div class="col-md-2">
								<div class="news_more">
									<a href="{{route('blogdetails.show', $blogs->id)}}" class="btn_default">Read More</a>
								</div><!-- news_more -->
							</div><!-- co -->
						</div><!-- row -->
						<hr>
						@endforeach
					</div><!-- container -->
				</section><!-- news_update -->

				<section class="carousel_logo">
					<div class="brands">
						<div class="container">
							<div class="brand_head">
								<h2>OUR PARTNERS</h2>
							</div><!-- brand_head -->
							<div class="row">
								<div class="col">
									<div class="brands_slider_container">
										<div class="owl-carousel owl-theme brands_slider">
											@foreach($partner as $partners)
											<div class="owl-item test">
												<div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset(''.$partners->image)}}" alt=""></div>
											</div>
											@endforeach
										</div> <!-- Brands Slider Navigation -->
										<div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
										<div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section><!-- carousel_logo -->
				<section class="footer_main">
					<div class="container">
						<div class="footer-widget pb-100">
							<div class="row">
								<div class="col-lg-3">
									<div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
										<a class="logo" href="#">
											<img src="images/logo/gc_home.png" alt="logo">
										</a>
										<p class="text">Lorem ipsum dolor sit amet consetetur sadipscing elitr, sederfs diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
										<p>Lorem ipsum dolor sit amet consetetur sadipscing elitr,</p>
										<a href="#" class="history">Our History</a>
									</div> <!-- footer about -->
								</div>
								<div class="col-lg-3">
									<div class="footer-link">
										<div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
											<div class="footer-title">
												<h4 class="title">USEFUL LINKS</h4>
											</div>
											<ul class="link">
												<li><a href="{{route('index')}}">Home</a></li>
												<li><a href="{{route('abouts.index')}}">About</a></li>
												<li><a href="{{route('products.index')}}">Products</a></li>
												<li><a href="{{route('blogs.index')}}">Blogs</a></li>
												<li><a href="{{route('galleries.index')}}">Gallery</a></li>
											</ul>
										</div> <!-- footer wrapper -->
									</div> <!-- footer link -->
								</div>
								<div class="col-lg-3">
									<div class="footer-link">
										<div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.6s; animation-name: fadeIn;">
											<div class="footer-title">
												<h4 class="title">CONTACT INFO</h4>
											</div>
											<ul class="link">
												<li><i class="fas fa-map-marker-alt"></i><p>Tinkune-32,Kathmandu <span>Nepal</span></p></li>
												<li><i class="fas fa-mobile-alt"></i><p>+977 014111992 <span>+977 9841674653</span></p></li>
												<li><i class="far fa-envelope"></i><a href="#">support@softechpark.com<span>info@softechpark.com</span></a></li>
											</ul>
										</div> <!-- footer wrapper -->
									</div><!-- footer-link -->
								</div>
								<div class="col-lg-3 col-md-5 col-sm-5">
									<div class="footer-news mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.8s; animation-name: fadeIn;">
										<div class="footer-title">
											<h4 class="title">LATEST NEWS</h4>
										</div>
										@foreach($blog as $blogs)
										<ul class="news">
											<li><img src="{{asset(''.$blogs->image)}}"><p><a href="{{route('blogdetails.show', $blogs->id)}}"> {{$blogs->title}}</a><span>{{$blogs->date}}</span></p></li>
										</ul>
										@endforeach
									</div> <!-- footer contact -->
								</div>
							</div> <!-- row -->
						</div>
						<hr>
						<div class="copyright">
							<div class="row">
								<div class="col-md-6">
									<div class="design_boss">
										<small>Design by <a href="https://softechpark.com/">softechpark.</a> All Rights Reserved</small>
									</div><!-- design_boss -->
								</div><!-- col -->
								<div class="offset-md-3 col-md-3">
									<div class="footer_end_social">
										<ul class="clearfix">
											<li class="icon_bg1"><a href="https://www.facebook.com/GCRESEARCHANDDEVELOPMENT/"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
											<li class="icon_bg2"><a href="https://twitter.com/softechpark"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
											<li class="icon_bg1"><a href=""><i class="fab fa-instagram" aria-hidden="true"></i></a>
											</li>
											<li class="icon_bg2"><a href="https://www.youtube.com/channel/UCq-K2J0e1Yab3zAxs7FvCyg"><i class="fab fa-youtube" aria-hidden="true"></i></a> </li>
											<li class="icon_bg1"><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
										</ul>
									</div><!-- footer_end_social -->
								</div><!-- col -->
							</div><!-- row -->
						</div><!-- copyright -->
					</div><!-- container -->
				</section>


				<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered top_login" role="document">
						<div class="modal-content">
							<div class="modal-header">

								<ul class="nav nav-tabs justify-content-center pt-4" id="pills-tab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active text-primary" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login"
										aria-selected="true">LOGIN</a>
									</li>
									{{--                        <li class="nav-item">--}}
										{{--                            <a class="nav-link text-primary" id="pills-register-tab" data-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register"--}}
										{{--                               aria-selected="false">REGISTER</a>--}}
									{{--                        </li>--}}
								</ul>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="login_social">
									<div class="row">
										<div class="col-md-6">
											<div class="main_login">
												<h3>Login With</h3>
												<div class="social_media">
													<a href="{{ url('/auth/facebook') }}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
												</div><!-- social_media -->
											</div><!-- main_login -->
										</div><!-- col -->
										<div class="col-md-6">
											<div class="main_login">
												<h3>Login With</h3>
												<div class="social_media media_gmail">
													<a href="{{ url('/auth/google') }}"><i class="fab fa-google"></i></a>
												</div><!-- social_media -->
											</div><!-- main_login -->
										</div><!-- col -->
									</div><!-- row -->
								</div><!-- login_social -->
							</div>

						</div>
					</div>
				</div>

				@include('flash-message')
				<script src="{{asset('dist/js/lightbox-plus-jquery.min.js')}}"></script>
				<script src="{{asset('js/plugins/toastr/toastr.min.js')}}"></script>
				<script src="{{asset('dist/js/lightbox.js')}}"></script>
				<script src="{{asset('https://code.jquery.com/jquery-3.4.1.slim.min.js')}}" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
				<script src="{{asset('https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js')}}" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
				<script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
					<script  type="text/javascript" class="test" src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js')}}">
						var partners = $.noConflict(true);
	
					</script>
			

				<script src="{{asset('js/script.js')}}"></script>

				<script>
					$(function(){
						'use strict'

						$('#example1').DataTable({
							language: {
								searchPlaceholder: 'Search...',
								sSearch: '',
								lengthMenu: '_MENU_ items/page',
							}
						});

						$('#example2').DataTable({
							responsive: true,
							language: {
								searchPlaceholder: 'Search...',
								sSearch: '',
								lengthMenu: '_MENU_ items/page',
							}
						});

						$('#example8').DataTable({
							responsive: true,
							language: {
								searchPlaceholder: 'Search...',
								sSearch: '',
								lengthMenu: '_MENU_ items/page',
							}
						});



            // Select2
            $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

        });
    </script>


    <script>
    	$(function(){

    		'use strict'

    		$.plot('#flotChart1', [{
    			data: df1,
    			color: '#38c4fa'
    		}], {
    			series: {
    				shadowSize: 0,
    				lines: {
    					show: true,
    					lineWidth: 1.5,
    					fill: true,
    					fillColor: { colors: [ { opacity: 0 }, { opacity: 0.5 } ] }
    				},
    				points: {
    					show: false,
    					radius: 2,
    					lineWidth: 1.5
    				}
    			},
    			grid: {
    				borderWidth: 0,
    				labelMargin: 0,
    			},
    			yaxis: { show: false },
    			xaxis: {
    				show: false,
    				min: 40,
    				max: 80
    			}
    		});

    		$.plot('#flotChart2', [{
    			data: df1,
    			color: '#22d273'
    		}], {
    			series: {
    				shadowSize: 0,
    				lines: {
    					show: true,
    					lineWidth: 1.5,
    					fill: true,
    					fillColor: { colors: [ { opacity: 0 }, { opacity: 0.5 } ] }
    				},
    				points: {
    					show: false,
    					radius: 2,
    					lineWidth: 1.5
    				}
    			},
    			grid: {
    				borderWidth: 0,
    				labelMargin: 0,
    			},
    			yaxis: { show: false },
    			xaxis: {
    				show: false,
    				min: 20,
    				max: 60
    			}
    		});

    		$.plot('#flotChart3', [{
    			data: df1,
    			color: '#e83e8c'
    		}], {
    			series: {
    				shadowSize: 0,
    				lines: {
    					show: true,
    					lineWidth: 1.5,
    					fill: true,
    					fillColor: { colors: [ { opacity: 0 }, { opacity: 0.5 } ] }
    				},
    				points: {
    					show: false,
    					radius: 2,
    					lineWidth: 1.5
    				}
    			},
    			grid: {
    				borderWidth: 0,
    				labelMargin: 0,
    			},
    			yaxis: { show: false },
    			xaxis: {
    				show: false,
    				min: 60,
    				max: 100
    			}
    		});

    		$.plot('#flotChart4', [{
    			data: df1,
    			color: '#fd7e14'
    		}], {
    			series: {
    				shadowSize: 0,
    				lines: {
    					show: true,
    					lineWidth: 1.5,
    					fill: true,
    					fillColor: { colors: [ { opacity: 0 }, { opacity: 0.5 } ] }
    				},
    				points: {
    					show: false,
    					radius: 2,
    					lineWidth: 1.5
    				}
    			},
    			grid: {
    				borderWidth: 0,
    				labelMargin: 0,
    			},
    			yaxis: { show: false },
    			xaxis: {
    				show: false,
    				min: 100,
    				max: 140
    			}
    		});

            // card-calendar-one widget
            $('#datepicker1').datepicker({
            	showOtherMonths: true
            });

        })
    </script>

    <script>
    	$(function(){

    		'use strict'

    		var getUrlParameter = function getUrlParameter(sParam) {
    			var sPageURL = window.location.search.substring(1),
    			sURLVariables = sPageURL.split('&'),
    			sParameterName,
    			i;

    			for (i = 0; i < sURLVariables.length; i++) {
    				sParameterName = sURLVariables[i].split('=');

    				if (sParameterName[0] === sParam) {
    					return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
    				}
    			}
    		};

    		if(!Cookies.get('theme-skin')){
    			$('#defaultTheme').addClass('theme-selected');
    		}

    		$('.card-theme').on('click', function(e){
    			$('.card-theme').removeClass('theme-selected');
    			$(this).addClass('theme-selected');

    			var skin = $(this).attr('data-title');

    			if(skin === 'default') {
    				$('#themeSkin').remove();
    				Cookies.remove('theme-skin');
    			} else {

    				if($('#themeSkin').length === 0) {
    					$('head').append('<link id="themeSkin" rel="stylesheet" href="{{asset('assets/css/skin')}}.'+skin+'.css">')
    				} else {
    					$('#themeSkin').attr('href', '{{asset('assets/css/skin')}}.'+skin+'.css');
    				}

    				Cookies.set('theme-skin', skin);
    			}
    		})

    		var skinParam = getUrlParameter('skin');
    		if(skinParam.length) {
    			$('.card-theme').removeClass('theme-selected');
    			$('.card-theme[data-title="'+skinParam+'"]').addClass('theme-selected');

    			if(skinParam === 'default') {
    				$('#themeSkin').remove();
    				Cookies.remove('theme-skin');
    			} else {

    				if($('#themeSkin').length === 0) {
    					$('head').append('<link id="themeSkin" rel="stylesheet" href="{{asset('assets/css/skin')}}.'+skinParam+'.css">')
    				} else {
    					$('#themeSkin').attr('href', '{{asset('assets/css/skin')}}.'+skinParam+'.css');
    				}

    				Cookies.set('theme-skin', skinParam);
    			}
    		}

    	})
    </script>
    {{--<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>--}}
    <script type="text/javascript" src="https://unpkg.com/nepali-date-picker@2.0.0/dist/jquery.nepaliDatePicker.min.js" integrity="sha384-bBN6UZ/L0DswJczUYcUXb9lwIfAnJSGWjU3S0W5+IlyrjK0geKO+7chJ7RlOtrrF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/nepali-date-picker@2.0.0/dist/nepaliDatePicker.min.css" integrity="sha384-Fligaq3qH5qXDi+gnnhQctSqfMKJvH4U8DTA+XGemB/vv9AUHCwmlVR/B3Z4nE+q" crossorigin="anonymous">

    <script type="text/javascript">
    	$(".bod-picker").nepaliDatePicker({
            // dateFormat: "%D, %M %d, %y",

            dateFormat: "%y-%m-%d",
            closeOnDateSelect: true
        });
    	$("#clear-bth").on("click", function(event) {
    		$(".bod-picker").val('');
    	});

    </script>
    <script>
    	function readURL(input) {
    		if (input.files && input.files[0]) {
    			var reader = new FileReader();

    			reader.onload = function (e) {
    				$('#blah')
    				.attr('src', e.target.result);
    			};

    			reader.readAsDataURL(input.files[0]);
    		}
    	}
    </script>
    @stack('scripts')
</body>
</html>
