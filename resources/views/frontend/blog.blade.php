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
	<link href="css/hover.css" type="text/css" rel="stylesheet"/>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  <section class="top_head">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="top_logo">
            <a href="#"><img src="images//logo/gc_home.png"></a>
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
      <h2>BLOG</h2>

    </div><!-- inner_breadcumbs -->
  </div><!-- container -->
</section>

<section class="card_blk">
 <div class="container">

   <div class="row">
       @foreach($blog as $blogs)
     <div class="col-md-4">
       <div class="card">
         <div class="card_img">
           <div class="date_pick">
            <h4>{{$blogs->date}}</h4>

          </div><!-- date_pick -->
          <img src="{{asset(''.$blogs->image)}}" alt="Card image cap">
        </div><!-- card_img -->
        <div class="card-body">
          <h3 class="card-title">{{$blogs->title}}</h3>
          <span><i class="fas fa-user"></i>{{$blogs->name}}</span>
          <p class="card-text">{{$blogs->description}}</p>
          <a href="{{route('blogdetails.show', $blogs->id)}}" class="btn">Read More</a>
        </div>
      </div>
    </div><!-- col -->
       @endforeach
  </div><!-- row -->




  <div class="pagination">
      <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">«</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">»</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
    </div>
</div><!-- container -->
</section><!-- card_blk -->


























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
</section><!-- contact_full_blk -->






























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
