@extends('admin.layouts.app')
@section('content')

    <div class="content-header">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Comments</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Comments</li>
                </ol>
            </nav>

        </div>



    </div><!-- content-header -->
    <div class="content-body content-body-calendar" style="margin-top: -50px;">
        <div class="d-md-flex justify-content-between">
            <h4 class="content-title mg-t-10">Welcome to Comment</h4>
{{--            <a href="{{route('award.create')}}" class="btn btn-sm btn-primary"> Add new About</a>--}}
            {{--            <button type="button" class="btn btn-sm btn-primary">Add  New Customer</button>--}}
        </div>
        <div class="component-section">

            <table id="example1" class="table">
                <thead>
                <tr>
                    {{--                    <th class="wd-10p">S.N</th>--}}
                    <th class="wd-10p">S.N.</th>
                    <th class="wd-10p">UserName</th>
                    <th class="wd-10p">Email</th>
                    <th class="wd-10p">Comment</th>
                    <th class="wd-10p">Rating</th>
                    <th class="wd-10p">Product Id</th>
                    <th class="wd-10p">Action</th>
                    <th class="wd-10p">Status</th>



                </tr>
                </thead>
                <tbody>
                @foreach($comment as $key =>$comments )
                    <tr id="award{{$comments->id}}">
                        <input type="hidden" class="comment" value="{{$comments->id}}">
                        <td>{{++$key}}</td>
                        <td>{!! $comments->username !!}</td>
                        <td>{!! $comments->email !!}</td>
                        <td>{!! $comments->comment !!}</td>
                        <td>{!! $comments->rating !!}</td>
                        <td>{!! $comments->productdetails_id !!}</td>
                        <td>

                            <input data-id="{{$comments->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $comments->status ? 'checked' : '' }}>
                        </td>


                        <td class="d-md-flex">


                            <div class="mg-r-20" title="Delete"><a href="{{route('comment.destroy',$comments->id)}}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="icon ion-trash-b text-danger"></i></a></div>
                            {{--                        <!-- <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger remove_button" url="{{route('about.destroy',$about->id)}}"><i class="fa fa-times"></i></a> -->--}}
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div><!-- component-section -->

    </div><!-- content-body -->
       <script src="{{asset('dist/sweetalert.min.js')}}"></script>
    @push('scripts')
        <script>

            $(".toggle-class").click(function (e) {

                var status = $(this).prop('checked') == true ? 1 : 0;
                var comment_id= $(this).data('id');

                $.ajax({

                    url:"changeStatus",
                    type:"POST",
                    data:{

                        comment_id:comment_id,
                        status:status,
                        _token:"{{csrf_token()}}"
                    },

                    success:function (data) {

                       console.log(data);
                    },
                    errors:function (error) {

                    }
                });


            });


        </script>
        <script type="text/javascript">
            $('.remove_button').on('click', function(e) {
                e.preventDefault();
                // alert('test');
                var url = $(this).attr('url');
                swal({
                        title: "Are you sure!",
                        type: "error",
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Yes!",
                        showCancelButton: true,
                    },
                    function() {
                        $.ajax({
                            url: url,
                            type: 'DELETE',
                            data: {
                                _token : "{{csrf_token()}}"
                            },
                            success: function(data){
                                $(data).remove();
                                toastr.success('Deleted Successfully');
                            },
                            error: function(error){
                                console.log('error');
                            }
                        })
                    });
            })
        </script>
    @endpush
@endsection
