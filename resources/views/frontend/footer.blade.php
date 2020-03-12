

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
                    <a href="{{route('contacts.index')}}"><i class="fas fa-arrow-right"></i> Contact Us</a>
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
                            @foreach($social as $socials)
                            <ul class="link">
                                <li><i class="fas fa-map-marker-alt"></i><p>{{$socials->address}} <span></span></p></li>
                                <li><i class="fas fa-mobile-alt"></i><p>{{$socials->phone}} <span></span></p></li>
                                <li><i class="far fa-envelope"></i><a href="{{$socials->email}}"><span>{{$socials->email}}</span></a></li>
                            </ul>
                                @endforeach
                        </div> <!-- footer wrapper -->
                    </div><!-- footer-link -->
                </div>




                <div class="col-lg-3 col-md-5 col-sm-5">
                    <div class="footer-news mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.8s; animation-name: fadeIn;">
                        <div class="footer-title">
                            <h4 class="title">LATEST NEWS</h4>
                        </div>
                        @foreach($blog as $key=>$blogs)
                            @if($key<2)
                            <ul class="news">

                                <li><img src="{{asset(''.$blogs->image)}}"><p><a href="{{route('blogdetails.show', $blogs->id)}}"> {{$blogs->title}}</a><span>{{$blogs->date}}</span></p></li>

                            </ul>
                            @endif
                        @endforeach
                    </div> <!-- footer contact -->
                </div>
            </div> <!-- row -->
        </div>
        <hr>
        <div class="copyright">
            <div class="row">
                <div class="col-md-6">
                    <div class="design_boss">
                        <small>Design by <a href="https://softechpark.com/">softechpark.</a> All Rights Reserved</small>
                    </div><!-- design_boss -->
                </div><!-- col -->
                <div class="offset-md-3 col-md-3">
                    <div class="footer_end_social">
                        <ul class="clearfix">
                            <li class="icon_bg1"><a href="https://www.facebook.com/GCRESEARCHANDDEVELOPMENT/"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li class="icon_bg2"><a href="https://twitter.com/softechpark"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li class="icon_bg1"><a href=""><i class="fab fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li class="icon_bg2"><a href="https://www.youtube.com/channel/UCq-K2J0e1Yab3zAxs7FvCyg"><i class="fab fa-youtube" aria-hidden="true"></i></a> </li>
                            <li class="icon_bg1"><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                        </ul>
                    </div><!-- footer_end_social -->
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- copyright -->
    </div><!-- container -->
</section>

