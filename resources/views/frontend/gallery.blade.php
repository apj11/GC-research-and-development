@extends('frontend.app')

@section('content')
  <section class="inner_slider_banner">
	<div class="inner_slider_banner_overlay">

      </div><!-- inner_slider_banner_overlay -->
  <div class="container">
    <div class="inner_breadcumbs">
      <h2>OUR GALLERY</h2>

    </div><!-- inner_breadcumbs -->
  </div><!-- container -->
</section><!-- inner_slider_banner -->
<section class="gallery_tab">
	<div class="container">
		<div class="tab_inner">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="photo-tab" data-toggle="tab" href="#photo" role="tab" aria-controls="photo" aria-selected="true">Photos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">Videos</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="photo" role="tabpanel" aria-labelledby="photo-tab">
  	<div class="row">
        @foreach($gallery as $galleries)
  		<div class="col-md-3 ">
						<div class="gallery_grid_more padding_right02p">
                            <a  href="{{asset(''.$galleries->image)}}" data-lightbox="example-1">
                                <img class="example-image" src="{{asset(''.$galleries->image)}}">
                            </a>

						</div><!-- gallery_grid_more -->
          </div>
        @endforeach

  	</div>
  {{$gallery ->links()}}<!-- row -->
  	<!-- pagination -->
  </div>
  <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
  	<!--Carousel Wrapper-->
<div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
    <li data-target="#video-carousel-example2" data-slide-to="1"></li>
    <li data-target="#video-carousel-example2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!-- First slide -->
    <div class="carousel-item active">
      <!--Mask color-->
        <div class="view">
            <!--Video source-->

            <iframe width="1080" height="500" src="https://www.youtube.com/embed/5GuLP0eESh0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         <!--    <video class="video-fluid" autoplay loop muted>
                <source src="https://mdbootstrap.com/img/video/animation-intro.mp4" type="video/mp4" />
            </video> -->
            <div class="mask rgba-purple-slight"></div>
        </div>
      <!--Caption-->
      <div class="carousel-caption">
        <div class="animated fadeInDown">
          <h3 class="h3-responsive">SHOX DEVICE</h3>
        </div>
      </div>
      <!--Caption-->
    </div>
    <!-- /.First slide -->



    <!-- Second slide -->
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <!--Video source-->


          <div class="fb-video" data-href="https://www.facebook.com/myrepublica/videos/1101052103433883/" data-width="1080" data-show-text="false"><blockquote cite="https://developers.facebook.com/myrepublica/videos/1101052103433883/" class="fb-xfbml-parse-ignore"><a href="https://developers.facebook.com/myrepublica/videos/1101052103433883/">SHOX: Earthquake and India’s blockade inspired fuel saver</a><p>GC has completed the invention. Named as ‘Shishir&#039;s Hydrogen Oxygen Device’ aka SHOX, the machine makes cars and motorcycles run on 40% water and 60% petroleum products.
                      Link -- https://t.ly/OvOKD</p>Posted by <a href="https://www.facebook.com/myrepublica/">Republica</a> on Thursday, September 12, 2019</blockquote></div>
{{--        <video class="video-fluid" autoplay loop muted>--}}
{{--          <source src="https://mdbootstrap.com/img/video/animation-intro.mp4" type="video/mp4" />--}}
{{--        </video>--}}
        <div class="mask rgba-purple-slight"></div>
      </div>

      <!--Caption-->
      <div class="carousel-caption">
        <div class="animated fadeInDown">
          <h3 class="h3-responsive"> ABOUT SHOX DEVICE</h3>
        </div>
      </div>
      <!--Caption-->
    </div>
    <!-- /.Second slide -->



    <!-- Third slide -->
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <!--Video source-->
{{--        <video class="video-fluid" autoplay loop muted>--}}
{{--         <source src="https://mdbootstrap.com/img/video/Lines.mp4" type="video/mp4" />--}}
{{--        </video>--}}
          <div class="fb-video" data-href="https://www.facebook.com/nagariknews/videos/729072817536395/UzpfSTIzNjQwNTI3MTA1NDA2MDA6MjUwMzI3NDYzMzI4NTA3Mw/?epa=SEARCH_BOX" data-width="1080" data-show-text="false"><blockquote cite="https://developers.facebook.com/nagariknews/videos/729072817536395/" class="fb-xfbml-parse-ignore"><a href="https://developers.facebook.com/nagariknews/videos/729072817536395/">हो मैले इन्धन बचाउने उपकरण बनाए.</a><p>हो मैले इन्धन बचाउने उपकरण बनाए.
                      भारतले गरेको पेट्रोलियम पदार्थको नाकाबन्दी पछि शिशिर जिसीले सवारी साधनको इन्धन बचाउने उपकरण बनाउने निधो गरे।
                      शक्सले सवारी साधनमा लगाएपछि सवारी साधनले कम इन्धन खर्च गर्छ।
                      शक्स (शिशिर्स हाइड्रोजन अक्शिजन डिभाइस) नामाकरण गरिएको यो उपकरणले ४० प्रतिशत पानी र ६० प्रतिशत पेट्रोल अथवा डिजेलले गाडी चल्न सक्छ।
                      तर हाल गुडिरहेका सवारी साधनमा लगाइएका इन्जिनले सय प्रतिशत पेट्रोल तथा डिजेलको प्रयोग गरिरहेका छन्।
                      थप जानकारीको लागि यस लिन्कमा क्लिक गर्नुहोस: https://nagariknews.nagariknetwork.com/news/91112/</p>Posted by <a href="https://www.facebook.com/nagariknews/">NagarikNews</a> on Tuesday, September 10, 2019</blockquote></div>
        <div class="mask rgba-black-strong"></div>
      </div>

      <!--Caption-->
      <div class="carousel-caption">
        <div class="animated fadeInDown">
          <h3 class="h3-responsive"> ABOUT SHOX MACHINE </h3>
        </div>
      </div>
      <!--Caption-->
    </div>



    <!-- /.Third slide -->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--Carousel Wrapper-->
  </div>
</div>
		</div><!-- tab_inner -->
	</div><!-- container -->
</section><!-- gallery_tab -->

  <script type="text/javascript">
      $(function () {
          $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
      });
  </script>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=1136022620062279&autoLogAppEvents=1"></script>

@endsection
