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
            <div class="offset-2 col-md-8">
                <div class="row">
                    @foreach($peoductdetails as $productdetail)
                        <div class="col-md-4">
                            <div class="product_blk_head">
                                <div class="product_blk">
                                    <img src="{{asset(''.$productdetail->image)}}" height="200px"></img>
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
        </div>
    </div><!-- container -->
</section>

@endsection


