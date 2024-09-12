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

    <!-- Custom Theme Style -->
    <link href="{{asset('assets/modules/gentelella/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{route('gentelella.layout.v1')}}" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{asset('assets/modules/gentelella/images/img.jpg')}}" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>John Doe</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

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
                                            <li class="sub_menu"><a href="{{route('gentelella.example.menulevel2')}}">Level Two</a>
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
                            <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
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
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{route('gentelella.example.extra.login')}}">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                    <ul class=" navbar-right">
                        <li class="nav-item dropdown open" style="padding-left: 15px;">
                            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('assets/modules/gentelella/images/img.jpg')}}" alt="">John Doe
                            </a>
                            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item"  href="javascript:;"> Profile</a>
                                <a class="dropdown-item"  href="javascript:;">
                                    <span class="badge bg-red pull-right">50%</span>
                                    <span>Settings</span>
                                </a>
                                <a class="dropdown-item"  href="javascript:;">Help</a>
                                <a class="dropdown-item"  href="{{route('gentelella.example.extra.login')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                            </div>
                        </li>

                        <li role="presentation" class="nav-item dropdown open">
                            <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                                <li class="nav-item">
                                    <a class="dropdown-item">
                                        <span class="image"><img src="{{asset('assets/modules/gentelella/images/img.jpg')}}" alt="Profile Image" /></span>
                                        <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                                        <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item">
                                        <span class="image"><img src="{{asset('assets/modules/gentelella/images/img.jpg')}}" alt="Profile Image" /></span>
                                        <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                                        <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item">
                                        <span class="image"><img src="{{asset('assets/modules/gentelella/images/img.jpg')}}" alt="Profile Image" /></span>
                                        <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                                        <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item">
                                        <span class="image"><img src="{{asset('assets/modules/gentelella/images/img.jpg')}}" alt="Profile Image" /></span>
                                        <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                                        <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <div class="text-center">
                                        <a class="dropdown-item">
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Pricing Tables</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12  ">
                        <div class="x_panel" style="height:600px;">
                            <div class="x_title">
                                <h2>Pricing Tables Design</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Settings 1</a>
                                            <a class="dropdown-item" href="#">Settings 2</a>
                                        </div>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>

                            <div class="x_content">
                                <div class="row">

                                    <div class="col-md-12">

                                        <!-- price element -->
                                        <div class="col-md-3 col-sm-6  ">
                                            <div class="pricing">
                                                <div class="title">
                                                    <h2>Tally Box Design</h2>
                                                    <h1>free</h1>
                                                </div>
                                                <div class="x_content">
                                                    <div class="">
                                                        <div class="pricing_features">
                                                            <ul class="list-unstyled text-left">
                                                                <li><i class="fa fa-times text-danger"></i> 2 years access <strong> to all storage locations</strong></li>
                                                                <li><i class="fa fa-times text-danger"></i> <strong>Unlimited</strong> storage</li>
                                                                <li><i class="fa fa-check text-success"></i> Limited <strong> download quota</strong></li>
                                                                <li><i class="fa fa-check text-success"></i> <strong>Cash on Delivery</strong></li>
                                                                <li><i class="fa fa-check text-success"></i> All time <strong> updates</strong></li>
                                                                <li><i class="fa fa-times text-danger"></i> <strong>Unlimited</strong> access to all files</li>
                                                                <li><i class="fa fa-times text-danger"></i> <strong>Allowed</strong> to be exclusing per sale</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="pricing_footer">
                                                        <a href="javascript:void(0);" class="btn btn-success btn-block" role="button">Download <span> now!</span></a>
                                                        <p>
                                                            <a href="javascript:void(0);">Sign up</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- price element -->

                                        <!-- price element -->
                                        <div class="col-md-3 col-sm-6  ">
                                            <div class="pricing ui-ribbon-container">
                                                <div class="ui-ribbon-wrapper">
                                                    <div class="ui-ribbon">
                                                        30% Off
                                                    </div>
                                                </div>
                                                <div class="title">
                                                    <h2>Tally Box Design</h2>
                                                    <h1>$25</h1>
                                                    <span>Monthly</span>
                                                </div>
                                                <div class="x_content">
                                                    <div class="">
                                                        <div class="pricing_features">
                                                            <ul class="list-unstyled text-left">
                                                                <li><i class="fa fa-check text-success"></i> 2 years access <strong> to all storage locations</strong></li>
                                                                <li><i class="fa fa-check text-success"></i> <strong>Unlimited</strong> storage</li>
                                                                <li><i class="fa fa-check text-success"></i> Limited <strong> download quota</strong></li>
                                                                <li><i class="fa fa-check text-success"></i> <strong>Cash on Delivery</strong></li>
                                                                <li><i class="fa fa-check text-success"></i> All time <strong> updates</strong></li>
                                                                <li><i class="fa fa-times text-danger"></i> <strong>Unlimited</strong> access to all files</li>
                                                                <li><i class="fa fa-times text-danger"></i> <strong>Allowed</strong> to be exclusing per sale</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="pricing_footer">
                                                        <a href="javascript:void(0);" class="btn btn-primary btn-block" role="button">Download <span> now!</span></a>
                                                        <p>
                                                            <a href="javascript:void(0);">Sign up</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- price element -->

                                        <!-- price element -->
                                        <div class="col-md-3 col-sm-6  ">
                                            <div class="pricing">
                                                <div class="title">
                                                    <h2>Tally Box Design</h2>
                                                    <h1>$25</h1>
                                                    <span>Monthly</span>
                                                </div>
                                                <div class="x_content">
                                                    <div class="">
                                                        <div class="pricing_features">
                                                            <ul class="list-unstyled text-left">
                                                                <li><i class="fa fa-check text-success"></i> 2 years access <strong> to all storage locations</strong></li>
                                                                <li><i class="fa fa-check text-success"></i> <strong>Unlimited</strong> storage</li>
                                                                <li><i class="fa fa-check text-success"></i> Limited <strong> download quota</strong></li>
                                                                <li><i class="fa fa-check text-success"></i> <strong>Cash on Delivery</strong></li>
                                                                <li><i class="fa fa-check text-success"></i> All time <strong> updates</strong></li>
                                                                <li><i class="fa fa-times text-danger"></i> <strong>Unlimited</strong> access to all files</li>
                                                                <li><i class="fa fa-times text-danger"></i> <strong>Allowed</strong> to be exclusing per sale</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="pricing_footer">
                                                        <a href="javascript:void(0);" class="btn btn-success btn-block" role="button">Download <span> now!</span></a>
                                                        <p>
                                                            <a href="javascript:void(0);">Sign up</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- price element -->

                                        <!-- price element -->
                                        <div class="col-md-3 col-sm-6  ">
                                            <div class="pricing">
                                                <div class="title">
                                                    <h2>Tally Box Design</h2>
                                                    <h1>$25</h1>
                                                    <span>Monthly</span>
                                                </div>
                                                <div class="x_content">
                                                    <div class="">
                                                        <div class="pricing_features">
                                                            <ul class="list-unstyled text-left">
                                                                <li><i class="fa fa-check text-success"></i> 2 years access <strong> to all storage locations</strong></li>
                                                                <li><i class="fa fa-check text-success"></i> <strong>Unlimited</strong> storage</li>
                                                                <li><i class="fa fa-check text-success"></i> Limited <strong> download quota</strong></li>
                                                                <li><i class="fa fa-check text-success"></i> <strong>Cash on Delivery</strong></li>
                                                                <li><i class="fa fa-check text-success"></i> All time <strong> updates</strong></li>
                                                                <li><i class="fa fa-check text-success"></i> <strong>Unlimited</strong> access to all files</li>
                                                                <li><i class="fa fa-check text-success"></i> <strong>Allowed</strong> to be exclusing per sale</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="pricing_footer">
                                                        <a href="javascript:void(0);" class="btn btn-success btn-block" role="button">Download <span> now!</span></a>
                                                        <p>
                                                            <a href="javascript:void(0);">Sign up</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- price element -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
@stack('jquery-js')
<!-- Bootstrap -->
@stack('bootstrap-js')
<!-- FastClick -->
@stack('fastclick-js')
<!-- NProgress -->
@stack('nprogress-js')

<!-- Custom Theme Scripts -->
<script src="{{asset('assets/modules/gentelella/js/custom.min.js')}}"></script>
</body>
</html>
