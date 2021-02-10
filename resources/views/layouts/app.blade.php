<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
{{--    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">--}}
{{--    <link rel="icon" type="image/png" href="../assets/img/favicon.png">--}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>@yield('title','')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/material-kit.css')}}" rel="stylesheet" />
    @yield('stylesxd')

</head>

<body class="@yield('body-class')">

@if(auth()->user())
    @if(auth()->user()->admin == 2)
        @include('includes.navemploy')
    @endif
@else
    @include('includes.navguest')
@endif


@yield('content')

</body>
<!--   Core JS Files   -->
<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/material.min.js')}}"></script>

<!--    Plugin for Date Time Picker and Full Calendar Plugin   -->
<script src="{{asset('js/moment.min.js')}}"></script>

<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
<script src="{{asset('js/nouislider.min.js')}}" type="text/javascript"></script>

<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker   -->
<script src="{{asset('js/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>

<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select   -->
<script src="{{asset('js/bootstrap-selectpicker.js')}}" type="text/javascript"></script>

<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/   -->
<script src="{{asset('js/bootstrap-tagsinput.js')}}"></script>

<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput   -->
<script src="{{asset('js/jasny-bootstrap.min.js')}}"></script>

<!--    Plugin For Google Maps   -->
{{--<script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>--}}

<!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
<script src="{{asset('js/material-kit.js')}}" type="text/javascript"></script>

{{--scripts para el boardadmin--}}


</html>
