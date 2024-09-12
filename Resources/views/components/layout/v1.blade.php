@props([
    'title' => config('app.name'),
    'menu' => null,
    'footer_fixed' => false
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

    @stack('bootstrap-css')
    @stack('font-awesome-css')
    @stack('nprogress-css')
    @stack('iCheck-css')
    @stack('bootstrap-progressbar-css')
    @stack('jqvmap-css')
    @stack('bootstrap-daterangepicker-css')
    @stack('bootstrap-datetimepicker')

    @stack('bootstrap-wysiwyg-css')
    @stack('select2-css')
    @stack('switchery-css')
    @stack('starrr-css')
    @stack('ion.rangeSlider-css')
    @stack('mjolnic-bootstrap-colorpicker-css')
    @stack('cropper')
    @stack('dropzone-css')
    @stack('pnotify-css')
    @stack('fullcalendar-css')
    @stack('datatables-css')
    @stack('morris-css')
    @stack('malihu-custom-scrollbar-plugin-css')
    @stack('animate-css')

    <!-- Custom Theme Style -->
    <link href="{{asset('assets/modules/gentelella/css/custom.min.css')}}" rel="stylesheet">
</head>

<body @class(["nav-md", 'footer_fixed' => $footer_fixed])>
<div class="container body">
    <div class="main_container">
        @if($menu)
            {{$menu}}
        @else
            <x-gentelella::layout.sidebarleft/>
        @endif

        <x-gentelella::layout.header.topnav/>

        <!-- page content -->
        <div class="right_col" role="main">
            {{ $slot }}
        </div>
        <!-- /page content -->

        <x-gentelella::layout.footer.footer/>
    </div>
</div>

@stack('jquery-js')
@stack('bootstrap-js')
@stack('fastclick-js')
@stack('nprogress-js')
@stack('Chart-js')
@stack('gauge-js')
@stack('bootstrap-progressbar-js')
@stack('iCheck-js')
@stack('skycons-js')
@stack('flot-js')
@stack('DateJS-js')
@stack('jqvmap-js')
@stack('bootstrap-daterangepicker-js')
@stack('bootstrap-datetimepicker-js')
@stack('ion.rangeSlider-js')
@stack('jquery.tagsinput')
@stack('switchery-js')
@stack('select2-js')
@stack('parsleyjs')
@stack('devbridge-autocomplete')
@stack('autosize')
@stack('starrr-js')
@stack('jquery.inputmask-js')
@stack('knob-js')
@stack('cropper-js')
@stack('mjolnic-bootstrap-colorpicker-js')
@stack('validator-js')
@stack('jQuery-Smart-Wizard')
@stack('dropzone-js')
@stack('pnotify-js')
@stack('jquery-sparkline-js')
@stack('jquery_easy-pie-chart-js')
@stack('fullcalendar-js')
@stack('datatables-js')
@stack('morris-js')
@stack('echarts-js')
@stack('malihu-custom-scrollbar-plugin-js')
@stack('raphael-js')



<!-- Custom Theme Scripts -->
<script src="{{asset('assets/modules/gentelella/js/custom.min.js')}}"></script>

@stack('scripts')
</body>
</html>
