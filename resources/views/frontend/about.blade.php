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
</head>
<body>
  <section class="top_head">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="top_logo">
            <a href="#"><img src="{{asset('images//logo/gc_home.png')}}"></a>
          </div><!-- top_logo -->
        </div><!-- col -->
        <div class="col-md-3">
          <div class="head_identity">
            <i class="fas fa-map-marker-alt"></i> <span>Tinkune-32, Kathmandu, Nepal</span>
          </div><!-- head_identity -->
        </div><!-- col -->
        <div class="col-md-3">
          <div class="head_identity">
           <a href="#">     <i class="fas fa-globe"></i> <span>softechpark.com</span></a>
         </div><!-- head_identity -->
       </div><!-- col -->
       <div class="col-md-3">
        <div class="head_identity">
          <i class="fas fa-mobile-alt"></i> <span>+977 014234232</span>
        </div><!-- head_identity -->
      </div><!-- col -->
    </div><!-- row -->
  </div><!-- container -->
</section><!-- top_head -->
  <div class="top_navigation top_navigation2 nav_no_pos">
      <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav navbar-nav2">
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
      </div><!-- container -->
  </div>

  <section class="inner_slider_banner">
	<div class="inner_slider_banner_overlay">

  </div><!-- inner_slider_banner_overlay -->
  <div class="container">
    <div class="inner_breadcumbs">
      <h2>ABOUT COMPANY</h2>

    </div><!-- inner_breadcumbs -->
  </div><!-- container -->
</section><!-- inner_slider_banner -->

<section class="about_section">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">About Our Company <i class="fas fa-chevron-right"></i></a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Awards & Recognition <i class="fas fa-chevron-right"></i></a>
          </div>
        </nav>

        <div class="service_card">
          <div class="service_card_main">
            <h4>For Any Service</h4>
            <span>Best Machine For You</span>
            <span>Vehicle Has Arrived !!</span>
            <a href="#">CONTACT US</a>
          </div><!-- service_card_main -->
        </div><!-- service_card -->
<div class="testimonial_about">
  <div class="testimonial_about_main">
  <p>GC has completed the invention. Named as ‘Shishir's Hydrogen Oxygen Device’ aka SHOX,
the machine makes cars and
motorcycles run on 40% water and 60% petroleum products.</p>
</div><!-- testimonial_about_main -->
<h4>SHISIR GC</h4>
<small>Scientist</small>
<hr>
</div><!-- testimonial_about -->

      </div><!-- col -->
      <div class="col-md-9">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

              <div class="detail_content">
                  @foreach($about as $abouts)
              <img src="{{asset(''.$abouts->image)}}" alt="#">
              <div class="card-body card-body_detail">
                <h3 class="card-title">{{$abouts->title}}</h3>
                <p class="card-text">{{$abouts->description}}
                </p>
                  @endforeach
                <div class="point_line">
                  <div class="point_lead card-text">
                    <i class="fas fa-check"></i> <span>Your main service</span>
                  </div><!-- point_lead -->
                  <div class="point_lead card-text">
                    <i class="fas fa-check"></i> <span>Your main service</span>
                  </div><!-- point_lead -->
                  <div class="point_lead card-text">
                    <i class="fas fa-check"></i> <span>Your main service</span>
                  </div><!-- point_lead -->
                </div><!-- point_line -->
                  <hr class="point_line_hr">
                  <div class="about_overview">
                       <h3 class="card-title">Company Overviews</h3>
                       <div class="row">
                         <div class="col-md-6">
                            <div class="overview_content_blk">
                        <div class="overview_image">
                         <img src="{{asset('images/overview1.png')}}" alt="#">
                       </div><!-- overview_image -->
                         <div class="overview_lead" id="overview_lead1">
                         <h4>Free Installation</h4>
                         <p>Services consequat luctus at justo auctor metus est donec. Tempus terminal. Services consequat luctus at justo auctor metus est donec. Tempus terminal</p>
                         <a href="#" id="show_hide1">View More</a>
                       </div><!-- overview_lead -->
                       </div><!-- Overview_content_blk -->
                         </div><!-- col -->
                         <div class="col-md-6">
                            <div class="overview_content_blk">
                        <div class="overview_image">
                         <img src="{{asset('images/overview2.png')}}" alt="#">
                       </div><!-- overview_image -->
                         <div class="overview_lead"  id="overview_lead2">
                         <h4>Fuel Consumption Consultation</h4>
                         <p>Services consequat luctus at justo auctor metus est donec. Tempus terminal. Services consequat luctus at justo auctor metus est donec. Tempus terminal</p>
                          <a href="#" id="show_hide2">View More</a>
                       </div><!-- overview_lead -->
                       </div><!-- Overview_content_blk -->
                         </div><!-- col -->
                       </div><!-- row -->
                        <div class="row mg-t-4p">
                         <div class="col-md-6">
                            <div class="overview_content_blk">
                        <div class="overview_image">
                         <img src="{{asset('images/overview3.png')}}" alt="#">
                       </div><!-- overview_image -->
                         <div class="overview_lead" id="overview_lead3">
                         <h4>Reparing Services</h4>
                         <p>Services consequat luctus at justo auctor metus est donec. Tempus terminal. Services consequat luctus at justo auctor metus est donec. Tempus terminal</p>
                            <a href="#" id="show_hide3">View More</a>
                       </div><!-- overview_lead -->
                       </div><!-- Overview_content_blk -->
                         </div><!-- col -->
                         <div class="col-md-6">
                            <div class="overview_content_blk">
                        <div class="overview_image">
                         <img src="{{asset('images/overview4.png')}}" alt="#">
                       </div><!-- overview_image -->
                         <div class="overview_lead" id="overview_lead4">
                         <h4>Low Fuel Using Technique</h4>
                         <p>Services consequat luctus at justo auctor metus est donec. Tempus terminal. Services consequat luctus at justo auctor metus est donec. Tempus terminal</p>
                            <a href="#" id="show_hide4">View More</a>
                       </div><!-- overview_lead -->
                       </div><!-- Overview_content_blk -->
                         </div><!-- col -->
                       </div><!-- row -->
                        <div class="mission_content">
                          <h3 class="card-title">Our Mission</h3>
                          <h4>GC has completed the invention. Named as ‘Shishir's Hydrogen Oxygen Device’ aka SHOX, the machine makes cars and
motorcycles run on 40% water and 60% petroleum products.</h4>
                        <div class="row">
                          <div class="col-md-5">
                            <div class="mission_img">
                              <img src="{{asset('images/IMG_2473.jpg')}}">
                            </div><!-- mission_img -->
                          </div><!-- col -->
                          <div class="col-md-7">
                            <div class="mission_lead">
                              <p>GC has completed the invention. Named as
‘Shishir's Hydrogen Oxygen Device’ aka SHOX,
the machine makes cars and motorcycles run
on 40% water and 60% petroleum products.</p>
                            </div><!-- mission_lead -->
                          </div><!-- col -->
                        </div><!-- row -->
                        <hr>
                         <div class="row mg-b-4p">
                           <div class="col-md-7">
                            <div class="mission_lead mission_lead2">
                              <p>GC has completed the invention. Named as
‘Shishir's Hydrogen Oxygen Device’ aka SHOX,
the machine makes cars and motorcycles run
on 40% water and 60% petroleum products.</p>
                            </div><!-- mission_lead -->
                          </div><!-- col -->
                          <div class="col-md-5">
                            <div class="mission_img">
                              <img src="{{asset('images/IMG_2473.jpg')}}">
                            </div><!-- mission_img -->
                          </div><!-- col -->

                        </div><!-- row -->
                        </div><!-- mission_content -->
                  </div><!-- about_overview -->
              </div>
                        </div>

          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

              <div class="detail_content">
                  @if($menu == 'aboutus_index')

                  @if(isset($awards))
@foreach($awards as $award)
              <img src="{{asset(''.$award->image)}}" alt="#">
              <div class="card-body card-body_detail">
                <h3 class="card-title">{{$award->title}}</h3>
                <p class="card-text">{{$award->description}}
                </p>
                  @endforeach
                  @endif
                  @endif
                  @if($menu == 'aboutus_show')
                  @if(isset($award))

                      <img src="{{asset(''.$award->image)}}" alt="#">
                      <div class="card-body card-body_detail">
                          <h3 class="card-title">{{$award->title}}</h3>
                          <p class="card-text">{{$award->description}}
                          </p>
                      @endif
                          @endif
                <div class="point_line">
                  <div class="point_lead card-text">
                    <i class="fas fa-check"></i> <span>Your main service</span>
                  </div><!-- point_lead -->
                  <div class="point_lead card-text">
                    <i class="fas fa-check"></i> <span>Your main service</span>
                  </div><!-- point_lead -->
                  <div class="point_lead card-text">
                    <i class="fas fa-check"></i> <span>Your main service</span>
                  </div><!-- point_lead -->
                </div><!-- point_line -->
                  <hr class="point_line_hr">

              </div>
              </div>
          </div>
        </div>
      </div><!-- col -->
    </div><!-- row -->
  </div><!-- container -->
</section>

<section class="contact_full_blk">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <div class="inner_contact_lead">
          <i class="what_icon">?</i><p>Have you got any question or need any help for work consulant?</p>
        </div><!-- inner_contact_lead -->
      </div><!-- col -->
      <div class="col-md-2">
        <div class="inner_contact_btn">
          <a href="#"><i class="fas fa-arrow-right"></i> Contact Us</a>
        </div><!-- inner_contact_btn -->
      </div><!-- col -->
    </div><!-- row -->
  </div><!-- container -->
</section>


<section class="footer_main">
	<div class="container">
		<div class="footer-widget pb-100">
      <div class="row">
        <div class="col-lg-3">
          <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
            <a class="logo" href="#">
              <img src="{{asset('images/logo/gc_home.png')}}" alt="logo">
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
              <li><i class="far fa-envelope"></i><a href="#">support@softechpark.comf<span>info@softechpark.com</span></a></li>
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
            <li><img src="{{asset('images/footer_thumbnail.png')}}"><p><a href="#"> sox machine in market</a><span>August 08, 2018</span></p></li>
            <li><img src="{{asset('images/footer_thumbnail.png')}}"><p><a href="#"> sox machine in market</a><span>August 08, 2018</span></p></li>
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
      <li class="icon_bg1"><a href="https://www.facebook.com/Softechpark4"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
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
<script src="js/script.js"></script>
</body>
</html>
