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
{{--          {{dd($categories->gallery->image)}}--}}
          @foreach($categories as $category)
        <!--Video source-->
        <video class="video-fluid" autoplay loop muted>
{{--          <source src="{{asset(''.$category->gallery->image)}}" type="video/mp4" />--}}
            </video>
        <div class="mask rgba-indigo-light"></div>
              @endforeach
      </div>

      <!--Caption-->
      <div class="carousel-caption">
        <div class="animated fadeInDown">
          <h3 class="h3-responsive">Light mask</h3>
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
        <video class="video-fluid" autoplay loop muted>
          <source src="https://mdbootstrap.com/img/video/animation-intro.mp4" type="video/mp4" />
        </video>
        <div class="mask rgba-purple-slight"></div>
      </div>

      <!--Caption-->
      <div class="carousel-caption">
        <div class="animated fadeInDown">
          <h3 class="h3-responsive">Super light mask</h3>
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
        <video class="video-fluid" autoplay loop muted>
         <source src="https://mdbootstrap.com/img/video/Lines.mp4" type="video/mp4" />
        </video>
        <div class="mask rgba-black-strong"></div>
      </div>

      <!--Caption-->
      <div class="carousel-caption">
        <div class="animated fadeInDown">
          <h3 class="h3-responsive">Strong mask</h3>
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

@endsection
