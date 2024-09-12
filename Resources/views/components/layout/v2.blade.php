<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    @stack('bootstrap-css')
    @stack('font-awesome-css')
    @stack('nprogress-css')
    @stack('bootstrap-daterangepicker-css')

    <!-- Custom Theme Style -->
    <link href="{{asset('assets/modules/gentelella/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
{{ $slot }}

<!-- jQuery -->
@stack('jquery-js')
<!-- Bootstrap -->
@stack('bootstrap-js')
<!-- FastClick -->
@stack('fastclick-js')
<!-- NProgress -->
@stack('nprogress-js')
<!-- Chart.js -->
<script src="{{asset('assets/modules/gentelella/vendor/Chart.js/dist/Chart.min.js')}}"></script>
<!-- jQuery Sparklines -->
@stack('jquery-sparkline-js')
<!-- Flot -->
<script src="{{asset('assets/modules/gentelella/vendor/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/modules/gentelella/vendor/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('assets/modules/gentelella/vendor/Flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('assets/modules/gentelella/vendor/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('assets/modules/gentelella/vendor/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{asset('assets/modules/gentelella/vendor/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('assets/modules/gentelella/vendor/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('assets/modules/gentelella/vendor/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{asset('assets/modules/gentelella/vendor/DateJS/build/date.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('assets/modules/gentelella/vendor/moment/min/moment.min.js')}}"></script>
<script src="{{asset('assets/modules/gentelella/vendor/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('assets/modules/gentelella/js/custom.min.js')}}"></script>
</body>
</html>
