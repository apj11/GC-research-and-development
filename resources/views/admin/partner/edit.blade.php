@extends('admin.layouts.app')
@section('content')

    <!-- Product Edit Content -->
    <div class="row">
        <div class="col-lg-12">
            <!-- General Data Block -->
            <div class="block">
                <!-- General Data Title -->
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Create</strong> Partners</h2>
                </div>
                <!-- END General Data Title -->

                <!-- General Data Content -->
                <form action="{{route('partner.update',[$partner->id])}}" method="post" class="form-horizontal form-bordered"  enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    {{--                                <div class="form-group">--}}
                    {{--                                    <label class="col-md-3 control-label" for="product-id">PID</label>--}}
                    {{--                                    <div class="col-md-9">--}}
                    {{--                                        <input type="text" id="product-id" name="product-id" class="form-control" value="6825">--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-name">Partner Name</label>
                        <div class="col-md-9">
                            <input type="text" id="title" name="title" class="form-control {{ $errors->has('title') ? 'has-error' : '' }}"  value="{{ old('title', isset($blog) ? $blog->title : '') }}">


                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-3 control-label" for="product-name">Partners Logo</label>
                        <div class="col-md-9">
                            <input type="file" id="image" name="image" class="form-control {{ $errors->has('image') ? 'has-error' : '' }}"  value="{{ old('image', isset($blog) ? $blog->image : '') }}">


                            @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>

{{--                    <div class="form-group">--}}
{{--                        <label class="col-md-3 control-label" for="product-description">Description</label>--}}
{{--                        <div class="col-md-9">--}}
{{--                            <!-- CKEditor, you just need to include the plugin (see at the bottom of this page) and add the class 'ckeditor' to your textarea -->--}}
{{--                            <!-- More info can be found at http://ckeditor.com -->--}}
{{--                            <textarea id="description" name="description" class="ckeditor  {{ $errors->has('description') ? 'has-error' : '' }}" >{!! old('description', isset($blog) ? $blog->description : '') !!} </textarea>--}}

{{--                            @if($errors->has('description'))--}}
{{--                                <p class="help-block">--}}
{{--                                    {{ $errors->first('description') }}--}}
{{--                                </p>--}}
{{--                            @endif--}}

{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <label class="col-md-3 control-label" for="product-name">name</label>--}}
{{--                        <div class="col-md-9">--}}
{{--                            <input type="text" id="name" name="name" class="form-control {{ $errors->has('name') ? 'has-error' : '' }}"  value="{{ old('title', isset($blog) ? $blog->title : '') }}">--}}


{{--                            @if ($errors->has('name'))--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('name') }}</strong>--}}
{{--                                    </span>--}}
{{--                            @endif--}}

{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <label class="col-md-3 control-label" for="product-name">Date</label>--}}
{{--                        <div class="col-md-9">--}}
{{--                            <input type="date" id="date" name="date" class="form-control {{ $errors->has('date') ? 'has-error' : '' }}"  value="{{ old('date', isset($blog) ? $blog->date : '') }}">--}}


{{--                            @if ($errors->has('date'))--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('date') }}</strong>--}}
{{--                                    </span>--}}
{{--                            @endif--}}

{{--                        </div>--}}
{{--                    </div>--}}

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


    <!-- ckeditor.js, load it only in the page you would like to use CKEditor (it's a heavy plugin to include it with the others!) -->
    <script src="{{asset('js/helpers/ckeditor/ckeditor.js')}}"></script>

@endsection
