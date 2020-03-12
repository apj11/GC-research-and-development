

<section class="top_head">
    <div class="container">
        @foreach($social as $socials)
        <div class="row">
            <div class="col-md-3">
                <div class="top_logo">
                    <a href="{{route('index')}}"><img src="{{asset('images//logo/gc_home.png')}}"></a>
                </div><!-- top_logo -->
            </div><!-- col -->
            <div class="col-md-3">
                <div class="head_identity">
                    <i class="fas fa-map-marker-alt"></i> <span>{{$socials->address}}</span>
                </div><!-- head_identity -->
            </div><!-- col -->
            <div class="col-md-3">
                <div class="head_identity">
                    <a href="{{$socials->facebook}}">     <i class="fas fa-globe"></i> <span>{{$socials->facebook}}</span></a>
                </div><!-- head_identity -->
            </div><!-- col -->
            <div class="col-md-3">
                <div class="head_identity">
                    <i class="fas fa-mobile-alt"></i> <span>{{$socials->phone}}</span>
                </div><!-- head_identity -->
            </div><!-- col -->

        </div><!-- row -->
        @endforeach
    </div><!-- container -->
</section>

<!-- top_head -->
<div id="navbar" class="top_navigation top_navigation2 nav_no_pos">
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




           <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered top_login" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <ul class="nav nav-tabs justify-content-center pt-4" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active text-primary" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login"
                               aria-selected="true">LOGIN</a>
                        </li>
                      <!--   <li class="nav-item">
                            <a class="nav-link text-primary" id="pills-register-tab" data-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register"
                               aria-selected="false">REGISTER</a>
                        </li> -->
                    </ul>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <div class="login_social">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="main_login">
                                <h3>Login With</h3>
                                <div class="social_media">
                                    <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                </div><!-- social_media -->
                            </div><!-- main_login -->
                        </div><!-- col -->
                  <div class="col-md-6">
                            <div class="main_login">
                                <h3>Login With</h3>
                                <div class="social_media media_gmail">
                                    <a href="#"><i class="fab fa-google"></i></a>
                                </div><!-- social_media -->
                            </div><!-- main_login -->
                        </div><!-- col -->
                    </div><!-- row -->
                   </div><!-- login_social -->
                </div>

            </div>
        </div>
    </div>

        </nav>
    </div><!-- container -->
</div>
