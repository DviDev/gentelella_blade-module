@props([
    'title' => config('app.name')
])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('assets/modules/gentelella/images/favicon.ico')}}" type="image/ico" />

    <title>{{$title}}</title>

    <!-- Bootstrap -->
    <link href="{{asset('assets/modules/gentelella/vendor/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('assets/modules/gentelella/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    @stack('nprogress-css')
    @stack('iCheck-css')
    @stack('bootstrap-progressbar-css')
    @stack('jqvmap-css')
    @stack('daterangepicker-css')

    <!-- Custom Theme Style -->
    <link href="{{asset('assets/modules/gentelella/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <x-gentelella::layout.sidebarleft/>
        </div>

        <x-gentelella::layout.header.topnav/>

        <!-- page content -->
        <div class="right_col" role="main">
            {{ $slot }}
        </div>
        <!-- /page content -->

        <x-gentelella::layout.footer.footer/>
    </div>
</div>

<!-- jQuery -->
<script src="{{asset('assets/modules/gentelella/vendor/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/modules/gentelella/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('assets/modules/gentelella/vendor/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
@stack('nprogress-js')
@stack('Chart-js')
@stack('gauge-js')

<!-- bootstrap-progressbar -->
@stack('bootstrap-progressbar-js')

@stack('iCheck-js')
<!-- Skycons -->
<script src="{{asset('assets/modules/gentelella/vendor/skycons/skycons.js')}}"></script>
@stack('flot-js')
@stack('DateJS-js')
@stack('jqvmap-js')
@stack('bootstrap-daterangepicker-js')

<!-- Custom Theme Scripts -->
<script src="{{asset('assets/modules/gentelella/js/custom.min.js')}}"></script>

</body>
</html>
