@extends('frontend.app')

@section('content')
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
            <a href="{{route('contacts.index')}}">CONTACT US</a>
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

    @endsection
