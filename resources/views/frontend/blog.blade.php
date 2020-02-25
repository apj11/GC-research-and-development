@extends('frontend.app')

@section('content')
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

  @endsection
