@extends('frontend.app')

@section('content')
  <section class="inner_slider_banner">
	<div class="inner_slider_banner_overlay">

      </div><!-- inner_slider_banner_overlay -->
  <div class="container">
    <div class="inner_breadcumbs">
      <h2>PRODUCT PAGE</h2>
    </div><!-- inner_breadcumbs -->
  </div><!-- container -->
</section><!-- inner_slider_banner -->

<section class="product_view_zoom">
  <div class="container">
<div class="row">
    @foreach($productdetails as $productdetail)
  <div class="col-md-6">
<figure class="iz iz-js-image-zoom" data-large-size="700x300">
  <img class="iz__thumb iz-js-thumb" src="{{asset(''.$productdetail->image)}}" alt="[[fill me!]]" touch-action="none" width="200" height="400">
  <div class="iz__zoom iz-js-zoom">
    <img  class="iz__zoom-pic iz-js-zoom-pic" aria-hidden="true">
  </div>
</figure>
  </div><!-- col -->
  <div class="col-md-6">
    <div class="rating_blk">
                  <h6>{{$productdetail->title}}</h6>
                  <div class="rating">
                    <input id="rating-15" type="radio" name="rating" value="5"><label for="rating-15"><i class="fas fa-3x fa-star"></i></label>
                    <input id="rating-14" type="radio" name="rating" value="4" checked=""><label for="rating-14"><i class="fas fa-3x fa-star"></i></label>
                    <input id="rating-13" type="radio" name="rating" value="3"><label for="rating-13"><i class="fas fa-3x fa-star"></i></label>
                    <input id="rating-12" type="radio" name="rating" value="2"><label for="rating-12"><i class="fas fa-3x fa-star"></i></label>
                    <input id="rating-11" type="radio" name="rating" value="1"><label for="rating-11"><i class="fas fa-3x fa-star"></i></label>
                  </div>
                </div>

                <div class="rating_main">
                  <p>{{$productdetail->description}} </p>
                </div><!-- rating_main -->
                <div class="category">
                  <ul>
                    <li>Category: <span>{{$productdetail->category}}</span></li>
                    <li>Tags: <span>{{$productdetail->tags}}</span></li>
                    <li>Share: <span>
                            <a class="fab fa-facebook-f" href="{{$productdetail->facebook}}" aria-hidden="true"></a>
                            <a class="fab fa-twitter" href="{{$productdetail->twitter}}" aria-hidden="true"></a>
                            <a class="fab fa-instagram" href="{{$productdetail->instagram}}"  aria-hidden="true"></a>
                            <a href="{{$productdetail->youtube}}"  class="fab fa-youtube" aria-hidden="true"></a>
                            <a href="{{$productdetail->google}}" class="fab fa-google-plus-g" aria-hidden="true"></a>
                        </span></li>
                  </ul>
                </div><!-- category -->
                <hr>
                  <div class="rating_blk no_flex">
                  <h6>Rate the product:</h6>
                  <div class="rating">
                    <input id="rating-20" type="radio" name="rating" value="10"><label for="rating-20"><i class="fas fa-3x fa-star"></i></label>
                    <input id="rating-19" type="radio" name="rating" value="9" checked=""><label for="rating-19"><i class="fas fa-3x fa-star"></i></label>
                    <input id="rating-18" type="radio" name="rating" value="8"><label for="rating-18"><i class="fas fa-3x fa-star"></i></label>
                    <input id="rating-17" type="radio" name="rating" value="7"><label for="rating-17"><i class="fas fa-3x fa-star"></i></label>
                    <input id="rating-16" type="radio" name="rating" value="6"><label for="rating-16"><i class="fas fa-3x fa-star"></i></label>
                  </div>
                </div>
  </div><!-- col -->
        @endforeach
</div><!-- row -->
  </div><!-- container -->
</section>
<section class="product_post">
<div class="container">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Comments</a>
  </li>

</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="row">
      <div class="col-md-12">
        <div class="recent_comments description_comment">
      <h6>{{$productdetail->title}}</h6>
      <p> {{$productdetail->description}} </p>
        </div><!-- recent_comments -->
      </div><!-- col -->
    </div><!-- row -->
  </div>
  <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="comment_box">
      Post A Comment :
      <textarea cols="6" rows="4"> </textarea>
      <div class="comment_box_comment">
      <a href="#">Comment</a>
    </div><!-- comment_box_comment -->
    </div><!--comment_box -->
    <div class="row">
      <div class="col-md-6">
    <div class="recent_comments">
      <h6>Aantosh Prasad Adhakari</h6>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi. </p>
        </div><!-- recent_comments -->
        </div><!-- col -->
        <div class="col-md-6">
          <div class="comment_date">
          <span>Jan 02, 2020</span>
          </div><!-- comment_date -->
        </div><!-- col -->
      </div><!-- row -->
      <hr>
          <div class="row">
      <div class="col-md-6 mg-b-4p">
    <div class="recent_comments">
      <h6>Aantosh Prasad Adhakari</h6>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </p>
        </div><!-- recent_comments -->
        </div><!-- col -->
        <div class="col-md-6">
          <div class="comment_date">
          <span>Jan 02, 2020</span>
          </div><!-- comment_date -->
        </div><!-- col -->
      </div><!-- row -->

  </div>
</div>
</div><!-- container -->
</section><!-- product_post -->

    @endsection
