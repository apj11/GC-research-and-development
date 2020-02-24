<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GC</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Rajdhani&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
	integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/hover.css" type="text/css" rel="stylesheet"/>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
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
		<div class="top_navigation ">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="#"><img src="images//logo/gc_home.png"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
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
				<div class="login_top">
					<a href="#" class="btn_default">Login/Register</a>
				</div><!-- login_top -->
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
				<div class="offset-2 col-md-8">
					<div class="row">
                        @foreach($productdetails as $productdetail)
						<div class="col-md-4">
							<div class="product_blk_head">
								<div class="product_blk">
									<i class="fas fa-cogs"></i>
									<div class="product_overlay_content">
										<a href="{{route('productdetails.show', $productdetail->id)}}">
											<i class="far fa-comments"></i>
										</a>
										<a href="{{route('productdetails.show', $productdetail->id)}}"><i class="far fa-star"></i></a>
									</div><!-- product_overlay_content -->
								</div><!-- product_blk -->
								<div class="rating_blk">
									<h6>{{$productdetail->title}}</h6>
									<div class="rating">
										<input id="rating-5" type="radio" name="rating" value="5"/><label for="rating-5"><i class="fas fa-3x fa-star"></i></label>
										<input id="rating-4" type="radio" name="rating" value="4" checked /><label for="rating-4"><i class="fas fa-3x fa-star"></i></label>
										<input id="rating-3" type="radio" name="rating" value="3"/><label for="rating-3"><i class="fas fa-3x fa-star"></i></label>
										<input id="rating-2" type="radio" name="rating" value="2"/><label for="rating-2"><i class="fas fa-3x fa-star"></i></label>
										<input id="rating-1" type="radio" name="rating" value="1"/><label for="rating-1"><i class="fas fa-3x fa-star"></i></label>
									</div>
								</div><!-- rating_blk -->

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
                            @if($key> 0)
					<div class="col-md-3 no-pad">
                        @if($key == 1)
						<div class="gallery_grid_more padding_top1p padding_right02p">
							<img src="{{asset(''.$gal->image)}}" width="200" height="200">
							<div class="gallery_overlay">
								<a href="{{route('galleries.index')}}"><i class="fas fa-arrow-right"></i></a>
							</div><!-- gallery_overlay -->
						</div><!-- gallery_grid_more -->
                        @endif

                        @if($key == 2)

                        <div class="gallery_grid_more">
                            <img src="{{asset(''.$gal->image)}}" width="200" height="200">
                            <div class="gallery_overlay">
                                <a href="{{route('galleries.index')}}"><i class="fas fa-arrow-right"></i></a>
                            </div><!-- gallery_overlay -->
                            <div class="gallery_overlay">
                                <a href="{{route('galleries.index')}}"><i class="fas fa-arrow-right"></i></a>
                            </div><!-- gallery_overlay -->
                        </div><!-- gallery_grid_more -->
                            @endif

					</div><!-- col -->
                            @endif
                        @endforeach

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
							<a href="#">Contact Us<i class="icofont-long-arrow-right"></i></a>
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
								<div class="owl-item">
									<div class="brands_item d-flex flex-column justify-content-center"><img src="images/carousel1.png" alt=""></div>
								</div>
								<div class="owl-item">
									<div class="brands_item d-flex flex-column justify-content-center"><img src="images/carousel2.png" alt=""></div>
								</div>
								<div class="owl-item">
									<div class="brands_item d-flex flex-column justify-content-center"><img src="images/carousel3.png" alt=""></div>
								</div>
								<div class="owl-item">
									<div class="brands_item d-flex flex-column justify-content-center"><img src="images/carousel4.png" alt=""></div>
								</div>
								<div class="owl-item">
									<div class="brands_item d-flex flex-column justify-content-center"><img src="images/carousel1.png" alt=""></div>
								</div>
								<div class="owl-item">
									<div class="brands_item d-flex flex-column justify-content-center"><img src="images/carousel2.png" alt=""></div>
								</div>
								<div class="owl-item">
									<div class="brands_item d-flex flex-column justify-content-center"><img src="images/carousel3.png" alt=""></div>
								</div>
								<div class="owl-item">
									<div class="brands_item d-flex flex-column justify-content-center"><img src="images/carousel4.png" alt=""></div>
								</div>
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
							<ul class="news">
								<li><img src="images/footer_thumbnail.png"><p><a href="#"> sox machine in market</a><span>August 08, 2018</span></p></li>
								<li><img src="images/footer_thumbnail.png"><p><a href="#"> sox machine in market</a><span>August 08, 2018</span></p></li>
							</ul>
						</div> <!-- footer contact -->
					</div>
				</div> <!-- row -->
			</div>
			<hr>
			<div class="copyright">
				<div class="row">
					<div class="col-md-6">
						<div class="design_boss">
							<small>Design by <a href="#">softechpark.</a> All Rights Reserved</small>
						</div><!-- design_boss -->
					</div><!-- col -->
					<div class="offset-md-3 col-md-3">
						<div class="footer_end_social">
							<ul class="clearfix">
								<li class="icon_bg1"><a href="https://www.facebook.com/Softechpark"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
								<li class="icon_bg2"><a href="https://twitter.com/softechpark"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
								<li class="icon_bg1"><a href=""><i class="fab fa-instagram" aria-hidden="true"></i></a>
								</li>
								<li class="icon_bg2"><a href="https://www.youtube.com/channel/UCsxhtxRoxBaD9-oemjvZq4A"><i class="fab fa-youtube" aria-hidden="true"></i></a> </li>
								<li class="icon_bg1"><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
							</ul>
						</div><!-- footer_end_social -->
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- copyright -->
		</div><!-- container -->
	</section>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
		<script src="js/wow.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
