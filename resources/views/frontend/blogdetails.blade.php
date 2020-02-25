@extends('frontend.app')

@section('content')
  <section class="inner_slider_banner">
  <div class="inner_slider_banner_overlay">

  </div><!-- inner_slider_banner_overlay -->
  <div class="container">
    <div class="inner_breadcumbs">
      <h2>BLOG DETAIL</h2>

    </div><!-- inner_breadcumbs -->
  </div><!-- container -->
</section>


<section class="blog_detail_division">
  <div class="container">
    <div class="row">
        @foreach($blogdetail as $blogdetails)
      <div class="col-md-9">

        <div class="detail_content">
          <img src="{{asset(''.$blogdetails->image)}}" height="400px" alt="#">
          <div class="card-body card-body_detail">
            <h3 class="card-title">{{$blogdetails->title}}</h3>
            <span><i class="fas fa-user"></i> {{$blogdetails->name}}</span>
            <span><i class="fa fa-calendar" aria-hidden="true"></i>{{$blogdetails->date}}</span>

            <p class="card-text">{{$blogdetails->description}}
            </p>

          </div>

        </div><!-- detail_content -->
      </div><!-- col -->

        @endforeach
      <div class="col-md-3">

        <div class="input-group md-form form-sm form-2 pl-0 search_blk_inner">
          <input class="form-control my-0 py-1 lime-border" type="text" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <span class="input-group-text lime lighten-2" id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i></span>
          </div>
        </div>
        <div class="inner_news_head">
          <h3>RECENT NEWS </h3> <i class="fas fa-file"></i>
        </div><!-- inner_news_head -->
        <div class="inner_news_main footer-news mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.8s; animation-name: fadeIn;">
          <div class="footer-title">
            <h4 class="title">LATEST NEWS</h4>
          </div>
            @foreach($blog as $blogs)
          <ul class="news">
            <li><img src="{{asset(''.$blogs->image)}}"><p><a href="{{route('blogs.index')}}"> {{$blogs->title}}</a><span>{{$blogs->date}}</span></p></li>
            <hr>
          </ul>
                @endforeach
        </div>
      </div><!-- col -->
    </div><!-- row -->
  </div><!-- container -->
</section><!-- blog_detail_division -->

{{--<section class="inner_form_footer">--}}
{{--    <div class="container">--}}
{{--       <div class="row">--}}
{{--    <div class="col-md-9">--}}
{{--    <div class="form_head">--}}
{{--      <h4>DROP US A LINE</h4>--}}
{{--    </div><!-- form_head -->--}}
{{--    <div class="footer_form_main">--}}
{{--      <form  method="post" action="contacts">--}}

{{--      <div class="row">--}}
{{--        <div class="col-md-6">--}}
{{--           <input type="name" name="name" placeholder="Name">--}}
{{--        </div><!-- col -->--}}
{{--        <div class="col-md-6">--}}
{{--           <input type="subject" name="subject" placeholder="Subject">--}}
{{--        </div><!-- col -->--}}
{{--      </div><!-- row -->--}}
{{--        <div class="row mg-t-2p">--}}
{{--        <div class="col-md-6">--}}
{{--           <input type="email" name="email" placeholder="Emial">--}}
{{--        </div><!-- col -->--}}
{{--        <div class="col-md-6">--}}
{{--           <input type="mobile" name="mobile" placeholder="Mobile">--}}
{{--        </div><!-- col -->--}}
{{--      </div><!-- row -->--}}
{{--      <textarea class="mg-t-2p" name="messages" form="usrform" placeholder="Messages" cols="5" rows="9"></textarea>--}}
{{--      <a href="{{asset('blogdetails.index')}}">Send message</a>--}}
{{--     </form>--}}
{{--    </div><!-- footer_form_main -->--}}
{{--    </div><!-- col -->--}}
{{--  </div><!-- row -->--}}
{{--  </div><!-- container -->--}}

{{--</section>--}}

  <!-- inner_form_footer -->


    @endsection
