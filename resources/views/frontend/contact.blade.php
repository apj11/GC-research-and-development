@extends('frontend.app')

@section('content')

  <!-- top_navigation -->

<section class="inner_form_footer">

    <div class="container">
       <div class="row">
    <div class="col-md-9">
    <div class="form_head">
      <h4>DROP US A LINE</h4>
    </div><!-- form_head -->
    <div class="footer_form_main">
        <form action="{{route('contacts.store')}}" method="post">
            @csrf

      <div class="row">
        <div class="col-md-6">
           <input type="name" name="name" class="form-control {{ $errors->has('name' ? 'has-error' :  '') }}" placeholder="Name" >
                @if($errors->has('name'))
                                                    <p style="color: red"> {{$errors->first('name')}}</p>
                                                @endif
        </div><!-- col -->
        <div class="col-md-6">
           <input type="subject" name="subject" class="form-control {{ $errors->has('mobile' ? 'has-error' :  '') }}" placeholder="Subject" >
                @if($errors->has('subject'))
                                                    <p style="color: red"> {{$errors->first('subject')}}</p>
                                                @endif
        </div><!-- col -->
      </div><!-- row -->
        <div class="row mg-t-2p">
        <div class="col-md-6">
           <input type="email" name="email" class="form-control {{ $errors->has('email' ? 'has-error' :  '') }}" placeholder="Emial" >
                @if($errors->has('email'))
                                                    <p style="color: red"> {{$errors->first('email')}}</p>
                                                @endif
        </div><!-- col -->
        <div class="col-md-6">
           <input type="mobile"  name="mobile" class="form-control {{ $errors->has('mobile' ? 'has-error' :  '') }}" placeholder="Mobile Number">
              @if($errors->has('mobile'))
                                                    <p style="color: red"> {{$errors->first('mobile')}}</p>
                                                @endif
        </div><!-- col -->
      </div><!-- row -->
                <div>
      <textarea class="mg-t-2p"  name="message" class="form-control {{ $errors->has('message' ? 'has-error' :  '') }}"  placeholder="Messages" cols="5" rows="9" ></textarea>
           @if($errors->has('message'))
                                                    <p style="color: red"> {{$errors->first('message')}}</p>
                                                @endif
                </div>
          <button class="btn_default" type="submit" ><span>Sent Message</span></button>
     </form>
    </div><!-- footer_form_main -->
    </div><!-- col -->
    <div class="col-md-3">
      <div class="map_location">
        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="360" id="gmap_canvas" src="https://maps.google.com/maps?q=butwal%20Milan+Chowk&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
      </div><!-- map_location -->
    </div><!-- col -->
  </div><!-- row -->
  </div><!-- container -->

</section>


    @endsection


