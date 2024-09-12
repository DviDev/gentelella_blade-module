<div {{$attributes->class(["col-md-3 left_col"])}}>
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{route('gentelella.layout.v1')}}" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{asset('assets/modules/gentelella/images/img.jpg')}}" alt="..."
                     class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('gentelella.layout.v1')}}">Dashboard</a></li>
                            <li><a href="{{route('gentelella.layout.v2')}}">Dashboard2</a></li>
                            <li><a href="{{route('gentelella.layout.v3')}}">Dashboard3</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('gentelella.example.form.general')}}">General Form</a></li>
                            <li><a href="{{route('gentelella.example.form.advanced')}}">Advanced Components</a></li>
                            <li><a href="{{route('gentelella.example.form.validation')}}">Form Validation</a></li>
                            <li><a href="{{route('gentelella.example.form.wizard')}}">Form Wizard</a></li>
                            <li><a href="{{route('gentelella.example.form.upload')}}">Form Upload</a></li>
                            <li><a href="{{route('gentelella.example.form.buttons')}}">Form Buttons</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('gentelella.example.ui.general')}}">General Elements</a></li>
                            <li><a href="{{route('gentelella.example.ui.media-gallery')}}">Media Gallery</a></li>
                            <li><a href="{{route('gentelella.example.ui.typography')}}">Typography</a></li>
                            <li><a href="{{route('gentelella.example.ui.icons')}}">Icons</a></li>
                            <li><a href="{{route('gentelella.example.ui.glyphicons')}}">Glyphicons</a></li>
                            <li><a href="{{route('gentelella.example.ui.widgets')}}">Widgets</a></li>
                            <li><a href="{{route('gentelella.example.ui.invoice')}}">Invoice</a></li>
                            <li><a href="{{route('gentelella.example.ui.inbox')}}">Inbox</a></li>
                            <li><a href="{{route('gentelella.example.ui.calendar')}}">Calendar</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('gentelella.example.table.default')}}">Tables</a></li>
                            <li><a href="{{route('gentelella.example.table.dynamic')}}">Table Dynamic</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('gentelella.example.chart.one')}}">Chart JS</a></li>
                            <li><a href="{{route('gentelella.example.chart.two')}}">Chart JS2</a></li>
                            <li><a href="{{route('gentelella.example.chart.morisjs')}}">Moris JS</a></li>
                            <li><a href="{{route('gentelella.example.chart.echarts')}}">ECharts</a></li>
                            <li><a href="{{route('gentelella.example.chart.others')}}">Other Charts</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('gentelella.example.layout.fixed-sidebar')}}">Fixed Sidebar</a></li>
                            <li><a href="{{route('gentelella.example.layout.fixed-footer')}}">Fixed Footer</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('gentelella.example.ecommerce')}}">E-commerce</a></li>
                            <li><a href="{{route('gentelella.example.projects')}}">Projects</a></li>
                            <li><a href="{{route('gentelella.example.projectdetail')}}">Project Detail</a></li>
                            <li><a href="{{route('gentelella.example.contacts')}}">Contacts</a></li>
                            <li><a href="{{route('gentelella.example.profile')}}">Profile</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('gentelella.example.extra.403')}}">403 Error</a></li>
                            <li><a href="{{route('gentelella.example.extra.404')}}">404 Error</a></li>
                            <li><a href="{{route('gentelella.example.extra.500')}}">500 Error</a></li>
                            <li><a href="{{route('gentelella.example.extra.plain')}}">Plain Page</a></li>
                            <li><a href="{{route('gentelella.example.extra.login')}}">Login Page</a></li>
                            <li><a href="{{route('gentelella.example.extra.pricing')}}">Pricing Tables</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#level1_1">Level One</a>
                            <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li class="sub_menu"><a href="{{route('gentelella.example.menulevel2')}}">Level
                                            Two</a>
                                    </li>
                                    <li><a href="#level2_1">Level Two</a>
                                    </li>
                                    <li><a href="#level2_2">Level Two</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#level1_2">Level One</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span
                                class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout"
               href="{{route('gentelella.example.extra.login')}}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
