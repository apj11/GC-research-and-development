<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GC</title>

    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans|Rajdhani&display=swap')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('https://pro.fontawesome.com/releases/v5.10.0/css/all.css')}}"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css')}}">
    <link href="{{asset('css/hover.css')}}" type="text/css" rel="stylesheet"/>
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('dist/css/lightbox.min.css')}}">
    <link href="{{asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
      @stack('styles');
</head>
<body>
<div class="content content-page">
    @include('frontend.header')

    @yield('content')

    @include('frontend.footer')
</div>
@include('flash-message')
<script src="{{asset('dist/js/lightbox-plus-jquery.min.js')}}"></script>
<script src="{{asset('js/plugins/toastr/toastr.min.js')}}"></script>
<script src="{{asset('dist/js/lightbox.js')}}"></script>
<script src="{{asset('https://code.jquery.com/jquery-3.4.1.slim.min.js')}}" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js')}}" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>

<script>
    $(function(){
        'use strict'

        $('#example1').DataTable({
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });

        $('#example2').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });

        $('#example8').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });



        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

    });
</script>


<script>
    $(function(){

        'use strict'

        $.plot('#flotChart1', [{
            data: df1,
            color: '#38c4fa'
        }], {
            series: {
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 1.5,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0 }, { opacity: 0.5 } ] }
                },
                points: {
                    show: false,
                    radius: 2,
                    lineWidth: 1.5
                }
            },
            grid: {
                borderWidth: 0,
                labelMargin: 0,
            },
            yaxis: { show: false },
            xaxis: {
                show: false,
                min: 40,
                max: 80
            }
        });

        $.plot('#flotChart2', [{
            data: df1,
            color: '#22d273'
        }], {
            series: {
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 1.5,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0 }, { opacity: 0.5 } ] }
                },
                points: {
                    show: false,
                    radius: 2,
                    lineWidth: 1.5
                }
            },
            grid: {
                borderWidth: 0,
                labelMargin: 0,
            },
            yaxis: { show: false },
            xaxis: {
                show: false,
                min: 20,
                max: 60
            }
        });

        $.plot('#flotChart3', [{
            data: df1,
            color: '#e83e8c'
        }], {
            series: {
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 1.5,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0 }, { opacity: 0.5 } ] }
                },
                points: {
                    show: false,
                    radius: 2,
                    lineWidth: 1.5
                }
            },
            grid: {
                borderWidth: 0,
                labelMargin: 0,
            },
            yaxis: { show: false },
            xaxis: {
                show: false,
                min: 60,
                max: 100
            }
        });

        $.plot('#flotChart4', [{
            data: df1,
            color: '#fd7e14'
        }], {
            series: {
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 1.5,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0 }, { opacity: 0.5 } ] }
                },
                points: {
                    show: false,
                    radius: 2,
                    lineWidth: 1.5
                }
            },
            grid: {
                borderWidth: 0,
                labelMargin: 0,
            },
            yaxis: { show: false },
            xaxis: {
                show: false,
                min: 100,
                max: 140
            }
        });

        // card-calendar-one widget
        $('#datepicker1').datepicker({
            showOtherMonths: true
        });

    })
</script>

<script>
    $(function(){

        'use strict'

        var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = window.location.search.substring(1),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                }
            }
        };

        if(!Cookies.get('theme-skin')){
            $('#defaultTheme').addClass('theme-selected');
        }

        $('.card-theme').on('click', function(e){
            $('.card-theme').removeClass('theme-selected');
            $(this).addClass('theme-selected');

            var skin = $(this).attr('data-title');

            if(skin === 'default') {
                $('#themeSkin').remove();
                Cookies.remove('theme-skin');
            } else {

                if($('#themeSkin').length === 0) {
                    $('head').append('<link id="themeSkin" rel="stylesheet" href="{{asset('assets/css/skin')}}.'+skin+'.css">')
                } else {
                    $('#themeSkin').attr('href', '{{asset('assets/css/skin')}}.'+skin+'.css');
                }

                Cookies.set('theme-skin', skin);
            }
        })

        var skinParam = getUrlParameter('skin');
        if(skinParam.length) {
            $('.card-theme').removeClass('theme-selected');
            $('.card-theme[data-title="'+skinParam+'"]').addClass('theme-selected');

            if(skinParam === 'default') {
                $('#themeSkin').remove();
                Cookies.remove('theme-skin');
            } else {

                if($('#themeSkin').length === 0) {
                    $('head').append('<link id="themeSkin" rel="stylesheet" href="{{asset('assets/css/skin')}}.'+skinParam+'.css">')
                } else {
                    $('#themeSkin').attr('href', '{{asset('assets/css/skin')}}.'+skinParam+'.css');
                }

                Cookies.set('theme-skin', skinParam);
            }
        }

    })
</script>
{{--<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>--}}
<script type="text/javascript" src="https://unpkg.com/nepali-date-picker@2.0.0/dist/jquery.nepaliDatePicker.min.js" integrity="sha384-bBN6UZ/L0DswJczUYcUXb9lwIfAnJSGWjU3S0W5+IlyrjK0geKO+7chJ7RlOtrrF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://unpkg.com/nepali-date-picker@2.0.0/dist/nepaliDatePicker.min.css" integrity="sha384-Fligaq3qH5qXDi+gnnhQctSqfMKJvH4U8DTA+XGemB/vv9AUHCwmlVR/B3Z4nE+q" crossorigin="anonymous">

<script type="text/javascript">
    $(".bod-picker").nepaliDatePicker({
        // dateFormat: "%D, %M %d, %y",

        dateFormat: "%y-%m-%d",
        closeOnDateSelect: true
    });
    $("#clear-bth").on("click", function(event) {
        $(".bod-picker").val('');
    });

</script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@stack('scripts')
</body>
</html>

