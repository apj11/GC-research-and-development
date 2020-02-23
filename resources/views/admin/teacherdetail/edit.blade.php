@extends('admin.layouts.app')
@section('content')

    <!-- Product Edit Content -->
    <div class="row">
        <div class="col-lg-12">
            <!-- General Data Block -->
            <div class="block">
                <!-- General Data Title -->
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Create</strong> teacherdetail</h2>
                </div>
                <!-- END General Data Title -->

                <!-- General Data Content -->
                <form action="{{route('teacherdetail.update',[$teacherdetail->id])}}" method="post" class="form-horizontal form-bordered"  enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    {{--                                <div class="form-group">--}}
                    {{--                                    <label class="col-md-3 control-label" for="product-id">PID</label>--}}
                    {{--                                    <div class="col-md-9">--}}
                    {{--                                        <input type="text" id="product-id" name="product-id" class="form-control" value="6825">--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-name">name</label>
                        <div class="col-md-9">
                            <input type="text" id="name" name="name" class="form-control {{ $errors->has('name') ? 'has-error' : '' }}"  value="{{ old('name', isset($teacherdetail) ? $teacherdetail->name : '') }}">


                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-name">Image</label>
                        <div class="col-md-9">
                            <input type="file" id="image" name="image" class="form-control {{ $errors->has('image') ? 'has-error' : '' }}"  value="{{ old('image', isset($teacherdetail) ? $teacherdetail->image : '') }}">


                            @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>
                    

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-name">Profession</label>
                        <div class="col-md-9">
                            <input type="text" id="profession" name="profession" class="form-control {{ $errors->has('profession') ? 'has-error' : '' }}"  value="{{ old('profession', isset($teacherdetail) ? $teacherdetail->profession : '') }}">


                            @if ($errors->has('profession'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('profession') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-description">Description</label>
                        <div class="col-md-9">
                            <!-- CKEditor, you just need to include the plugin (see at the bottom of this page) and add the class 'ckeditor' to your textarea -->
                            <!-- More info can be found at http://ckeditor.com -->
                            <textarea id="description" name="description" class="ckeditor  {{ $errors->has('description') ? 'has-error' : '' }}"  Value="{{!! old('description', isset($teacherdetail) ? $teacherdetail->description : '') !!}}"> </textarea>

                            @if($errors->has('description'))
                                <p class="help-block">
                                    {{ $errors->first('description') }}
                                </p>
                            @endif

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-name">Degree</label>
                        <div class="col-md-9">
                            <input type="text" id="degree" name="degree" class="form-control {{ $errors->has('degree') ? 'has-error' : '' }}"  value="{{ old('degree', isset($teacherdetail) ? $teacherdetail->degree : '') }}">


                            @if ($errors->has('degree'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('degree') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-name">Experience</label>
                        <div class="col-md-9">
                            <input type="text" id="experience" name="experience" class="form-control {{ $errors->has('experience') ? 'has-error' : '' }}"  value="{{ old('experience', isset($teacherdetail) ? $teacherdetail->experience : '') }}">


                            @if ($errors->has('experience'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('experience') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-name">Faculty</label>
                        <div class="col-md-9">
                            <input type="text" id="faculty" name="faculty" class="form-control {{ $errors->has('faculty') ? 'has-error' : '' }}"  value="{{ old('faculty', isset($teacherdetail) ? $teacherdetail->faculty : '') }}">


                            @if ($errors->has('faculty'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('faculty') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-name">Email</label>
                        <div class="col-md-9">
                            <input type="text" id="email" name="email" class="form-control {{ $errors->has('degree') ? 'has-error' : '' }}"  value="{{ old('email', isset($teacherdetail) ? $teacherdetail->email : '') }}">


                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-name">Phone</label>
                        <div class="col-md-9">
                            <input type="text" id="phone" name="phone" class="form-control {{ $errors->has('phone') ? 'has-error' : '' }}"  value="{{ old('phone', isset($teacherdetail) ? $teacherdetail->phone : '') }}">


                            @if ($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-name">Facebook</label>
                        <div class="col-md-9">
                            <input type="text" id="facebook" name="facebook" class="form-control {{ $errors->has('facebook') ? 'has-error' : '' }}"  value="{{ old('facebook', isset($teacherdetail) ? $teacherdetail->facebook : '') }}">


                            @if ($errors->has('facebook'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('facebook') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-name">Instagram</label>
                        <div class="col-md-9">
                            <input type="text" id="instagram" name="instagram" class="form-control {{ $errors->has('instagram') ? 'has-error' : '' }}"  value="{{ old('instagram', isset($teacherdetail) ? $teacherdetail->instagram : '') }}">


                            @if ($errors->has('instagram'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('instagram') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-name">Twitter</label>
                        <div class="col-md-9">
                            <input type="text" id="twitter" name="twitter" class="form-control {{ $errors->has('twitter') ? 'has-error' : '' }}"  value="{{ old('twitter', isset($teacherdetail) ? $teacherdetail->twitter : '') }}">


                            @if ($errors->has('twitter'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('twitter') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>

                    

{{--                    <div class="form-group">--}}
{{--                        <label class="col-md-3 control-label" for="product-name">Author</label>--}}
{{--                        <div class="col-md-9">--}}
{{--                            <input type="text" id="author" name="author" class="form-control {{ $errors->has('author') ? 'has-error' : '' }}"  value="{{ old('author', isset($teacherdetail) ? $teacherdetail->author : '') }}">--}}


{{--                            @if ($errors->has('author'))--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('author') }}</strong>--}}
{{--                                    </span>--}}
{{--                            @endif--}}

{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="form-group">--}}
{{--                        <label class="col-md-3 control-label" for="product-name">Category</label>--}}
{{--                        <div class="col-md-9">--}}
{{--                            <input type="text" id="category" name="category" class="form-control {{ $errors->has('category') ? 'has-error' : '' }}"  value="{{ old('category', isset($teacherdetail) ? $teacherdetail->category : '') }}">--}}


{{--                            @if ($errors->has('category'))--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('category') }}</strong>--}}
{{--                                    </span>--}}
{{--                            @endif--}}

{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <label class="col-md-3 control-label" for="product-name">Service Image</label>--}}
{{--                        <div class="col-md-9">--}}
{{--                            <input type="file" id="service_image" name="service_image" class="form-control {{ $errors->has('service_image') ? 'has-error' : '' }}"  value="{{ old('image', isset($about) ? $about->service_image : '') }}">--}}


{{--                            @if ($errors->has('service_image'))--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('service_image') }}</strong>--}}
{{--                                    </span>--}}
{{--                            @endif--}}

{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="form-group">--}}
{{--                        <label class="col-md-3 control-label" for="product-name">Service Description</label>--}}
{{--                        <div class="col-md-9">--}}
{{--                            <input type="text" id="service_description" name="service_description" class="form-control {{ $errors->has('service_description') ? 'has-error' : '' }}"  value="{{ old('service_description', isset($about) ? $about->service_description : '') }}">--}}


{{--                            @if ($errors->has('service_description'))--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('service_description') }}</strong>--}}
{{--                                    </span>--}}
{{--                            @endif--}}

{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <label class="col-md-3 control-label" for="product-name">Team Description</label>--}}
{{--                        <div class="col-md-9">--}}
{{--                            <input type="text" id="team_description" name="team_description" class="form-control {{ $errors->has('team_description') ? 'has-error' : '' }}"  value="{{ old('team_description', isset($about) ? $about->team_description : '') }}">--}}


{{--                            @if ($errors->has('team_description'))--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('team_description') }}</strong>--}}
{{--                                    </span>--}}
{{--                            @endif--}}

{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="form-group">--}}
{{--                        <label class="col-md-3 control-label" for="product-name">Team Image</label>--}}
{{--                        <div class="col-md-9">--}}
{{--                            <input type="file" id="team_image" name="team_image" class="form-control {{ $errors->has('team_image') ? 'has-error' : '' }}"  value="{{ old('team_image', isset($about) ? $about->team_image : '') }}">--}}


{{--                            @if ($errors->has('team_image'))--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('team_image') }}</strong>--}}
{{--                                    </span>--}}
{{--                            @endif--}}

{{--                        </div>--}}
{{--                    </div>--}}

                    {{--                                <div class="form-group">--}}
                    {{--                                    <label class="col-md-3 control-label" for="product-short-description">Short Description</label>--}}
                    {{--                                    <div class="col-md-9">--}}
                    {{--                                        <textarea id="product-short-description" name="product-short-description" class="form-control" rows="3"></textarea>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="form-group">--}}
                    {{--                                    <label class="col-md-3 control-label" for="product-category">Category</label>--}}
                    {{--                                    <div class="col-md-8">--}}
                    {{--                                        <!-- Chosen plugin (class is initialized in js/app.js -> uiInit()), for extra usage examples you can check out http://harvesthq.github.io/chosen/ -->--}}
                    {{--                                        <select id="product-category" name="product-category" class="select-chosen" data-placeholder="Choose Category.." style="width: 250px;">--}}
                    {{--                                            <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->--}}
                    {{--                                            <option value="1">Tablets</option>--}}
                    {{--                                            <option value="2">Laptops</option>--}}
                    {{--                                            <option value="3">PCs</option>--}}
                    {{--                                            <option value="4">Consoles</option>--}}
                    {{--                                            <option value="5">Movies</option>--}}
                    {{--                                            <option value="6">Books</option>--}}
                    {{--                                            <option value="7">Cables</option>--}}
                    {{--                                            <option value="8">Adapters</option>--}}
                    {{--                                            <option value="9">Office</option>--}}
                    {{--                                        </select>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="form-group">--}}
                    {{--                                    <label class="col-md-3 control-label" for="product-price">Price</label>--}}
                    {{--                                    <div class="col-md-8">--}}
                    {{--                                        <div class="input-group">--}}
                    {{--                                            <div class="input-group-addon"><i class="fa fa-usd"></i></div>--}}
                    {{--                                            <input type="text" id="product-price" name="product-price" class="form-control" placeholder="0,00">--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="form-group">--}}
                    {{--                                    <label class="col-md-3 control-label">Condition</label>--}}
                    {{--                                    <div class="col-md-9">--}}
                    {{--                                        <label class="radio-inline" for="product-condition-new">--}}
                    {{--                                            <input type="radio" id="product-condition-new" name="product-condition" value="condition_new" checked> New--}}
                    {{--                                        </label>--}}
                    {{--                                        <label class="radio-inline" for="product-condition-used">--}}
                    {{--                                            <input type="radio" id="product-condition-used" name="product-condition" value="condition_used"> Used--}}
                    {{--                                        </label>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="form-group">--}}
                    {{--                                    <label class="col-md-3 control-label">Published?</label>--}}
                    {{--                                    <div class="col-md-9">--}}
                    {{--                                        <label class="switch switch-primary">--}}
                    {{--                                            <input type="checkbox" id="product-status" name="product-status" checked><span></span>--}}
                    {{--                                        </label>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Save</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                    </div>
                </form>
                <!-- END General Data Content -->
            </div>
            <!-- END General Data Block -->
        </div>

    </div>
    <!-- END Product Edit Content -->
    </div>
    <!-- END Page Content -->


    </div>
    <!-- END Main Container -->
    </div>
    <!-- END Page Container -->
    </div>
    <!-- END Page Wrapper -->

    <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
    <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>



    {{--<!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->--}}
    {{--<script src="{{'js/vendor/jquery.min.js'}}"></script>--}}
    {{--<script src="{{'js/vendor/bootstrap.min.js'}}"></script>--}}
    {{--<script src="{{'js/plugins.js'}}"></script>--}}
    {{--<script src="{{asset('js/app.js')}}"></script>--}}

    <!-- ckeditor.js, load it only in the page you would like to use CKEditor (it's a heavy plugin to include it with the others!) -->
    <script src="{{asset('js/helpers/ckeditor/ckeditor.js')}}"></script>

@endsection
