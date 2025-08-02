<x-gentelella::assets.bootstrap/>
<x-gentelella::assets.font-awesome/>
<x-gentelella::assets.nprogress/>
<x-gentelella::assets.jquery/>
<x-gentelella::assets.fastclick/>
{{--@pushonce('malihu-custom-scrollbar-plugin')--}}
@pushonce('scripts')
    <link href="{{asset('assets/modules/gentelella/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css')}}" rel="stylesheet"/>
    <script src="{{asset('assets/modules/gentelella/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
@endpushonce()

<x-gentelella::layout.v1>
    <x-slot:menu>
        <x-gentelella::layout.sidebarleft class="menu_fixed"/>
    </x-slot:menu>
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Fixed Sidebar <small> Just add class <strong>menu_fixed</strong></small></h3>
            </div>
        </div>
    </div>
</x-gentelella::layout.v1>
