<link href="{{asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
<script src="{{asset('js/plugins/toastr/toastr.min.js')}}"></script>
{{--<script>--}}
{{--    @if(\Illuminate\Support\Facades\Session::has('message'))--}}
{{--                       var type="{{\Illuminate\Support\Facades\Session::get('alert-type')}}"--}}
{{--    switch(type){--}}
{{--         case 'info':--}}
{{--             toastr.info("{{ \Illuminate\Support\Facades\Session::get('message') }}");--}}
{{--             break;--}}
{{--         case 'success':--}}
{{--             toastr.success("{{ \Illuminate\Support\Facades\Session::get('message') }}");--}}
{{--             break;--}}
{{--         case 'warning':--}}
{{--             toastr.warning("{{ \Illuminate\Support\Facades\Session::get('message') }}");--}}
{{--             break;--}}
{{--         case 'error':--}}
{{--             toastr.error("{{ \Illuminate\Support\Facades\Session::get('message') }}");--}}
{{--             break;--}}
{{--     }--}}
{{--     @endif--}}
{{-- </script>--}}
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        @if(Session::has('success'))
        toastr.success("{{ Session::get('success')}}")
        @endif
        @if(Session::has('danger'))
        toastr.danger("{{ Session::get('danger')}}")
        @endif
        @if(Session::has('info'))
        toastr.info("{{ Session::get('info')}}")
        @endif
    });
</script>
