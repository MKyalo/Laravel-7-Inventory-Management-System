
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="bootstrap default admin template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inventory | Manager</title>


    <!-- Start global css -->
    <link rel="stylesheet" href="{{asset('public/assets/global/plugins/Waves/dist/waves.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('public/assets/global/plugins/bootstrap/dist/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('public/assets/icons_fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/icons_fonts/font-awesome/css/font-awesome.min.css')}}"/>
    <!-- End global css -->

    <!-- Start page plugin css -->
    <link rel="stylesheet" href="{{asset('public/assets/global/plugins/jqvmap/dist/jqvmap.css')}}"/>
    <link rel="stylesheet" href="{{asset('public/assets/global/plugins/datatables/media/css/jquery.dataTables.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('public/assets/global/plugins/datatables/media/css/dataTables.bootstrap.min.css')}}"/>
     <link rel="stylesheet" href="{{asset('public/assets/global/plugins/animate.css/animate.min.css')}}"/>
    <!-- End page plugin css -->

    <!-- Start template global css -->
    <link href="{{asset('public/assets/global/css/components.min.css')}}" type="text/css" rel="stylesheet"/>
    <!-- End template global css -->

    <!-- Start layout css -->
    <link rel="stylesheet" href="{{asset('public/assets/layouts/layouts_left_menu/left_menu_layout.min.css')}}"/>
    <!-- End layout css -->

    <!-- Start favicon ico -->
    <link rel="icon" href="{{asset('public/assets/favicon/prince.ico')}}" type="image/x-icon"/>
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('public/assets/favicon/prince-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('public/assets/favicon/prince-180x180.png')}}">
    <!-- End favicon ico -->

</head>
<body class="nav-medium">
<div class="container body">
    <div class="main_container">
            <!-- Start Loader -->
<div class="page-loader">
    <div class="preloader loading">
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
    </div>
</div>
<!-- End Loader -->

<!-- Start Scroll Top -->
<a href="javascript:" id="scroll" style="display: none;"><span></span></a>
<!-- End Scroll Top -->

<!-- start Left Menu-->
<div class="col-md-3 left_color">
    <div class="left_color scroll-view">
        <div class="navbar nav_title">
            <a href="index.html" class="medium-logo">
                <img src="{{asset('public/assets/global/images/prince_logo.png')}}" alt="medium-logo">
            </a>
            <a href="index.html" class="small-logo">
                <img src="{{asset('public/assets/global/images/prince_logo2.png')}}" alt="small-logo">
            </a>
        </div>

        <div class="clearfix"></div>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a class="waves-effect waves-light" href="{{route('dashboard')}}"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a class="waves-effect waves-light" href="{{route('suppliers.index')}}"><i class="fa fa-home"></i> Suppliers</a></li>
                    
                    <!--
                    <li><a class="waves-effect waves-light"><i class="fa fa-desktop"></i>Suppliers <span
                                    class="fa fa-chevron-right"></span></a>
                        <ul class="nav child_menu">
                            <li> <a class="waves-effect waves-light" href="accordions.html">Accordions</a></li>
                            <li> <a class="waves-effect waves-light" href="buttons.html">Buttons</a></li>
                            <li> <a class="waves-effect waves-light" href="dropdowns.html">Dropdowns</a></li>
                            <li> <a class="waves-effect waves-light" href="modals.html">Modals</a></li>
                            <li> <a class="waves-effect waves-light" href="modals_animation.html">Modals Animation</a></li>
                            <li><a class="waves-effect waves-light" href="list.html">List</a></li>
                            <li> <a class="waves-effect waves-light" href="progressbar.html">Progress bar</a></li>
                            <li> <a class="waves-effect waves-light" href="tabs.html">Tabs</a></li>
                            <li> <a class="waves-effect waves-light" href="typography.html">Typography</a></li>
                            <li> <a class="waves-effect waves-light" href="tooltip_popover.html">Tooltips & Popover</a></li>
                        </ul>
                    </li>
        			-->
                </ul>
            </div>
            
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="fa fa-cog" aria-hidden="true"></span>
            </a>
            <a class="toggle-fullscreen" data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="fa fa-arrows-alt" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="fa fa-lock" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        
                <span class="fa fa-power-off" aria-hidden="true"></span>
            </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
<!-- End Left Menu -->

<!-- start top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                <div class="responsive-logo">
                    <a href="index.html">
                        <img src="{{asset('public/assets/global/images/prince_logo.png')}}" alt="main-logo">
                    </a>
                </div>
            </div>

            <div class="topbar-right">
                <div class="nav navbar-nav navbar-right">

                    <div class="header-search right-icon">
                        <form role="search" class="search-box">
                            <input placeholder="Search..." class="form-control" type="text">
                            <a href="javascript:">
                                <i class="fa fa-search"></i>
                            </a>
                        </form>
                    </div>

                    <div class="dropdown header-notification right-icon">
                        <a href="javascript:" class="dropdown-toggle waves-effect waves-light notification-icon"
                           data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell-o" aria-hidden="true"></i>
                            <span class="label label-danger"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="text-center">
                                <p class="notification-title">Notifications<span
                                            class="label label-primary"></span></p>
                            </li>
                            
                            <li class="all-notification">
                                <a href="javascript:;" class="list-group-item text-right">
                                    <small>See all notifications</small>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="header-fullscreen right-icon">
                        <a href="javascript:" class="waves-effect waves-light toggle-fullscreen">
                            <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                        </a>
                    </div>

                    <!--<div class="header-chat right-icon">
                        <a href="javascript:" class="waves-effect waves-light">
                            <i class="fa fa-comments-o" aria-hidden="true"></i>
                        </a>
                    </div>-->

                    <div class="dropdown user-profile right-icon">
                        <a href="javascript:" class="dropdown-toggle waves-effect waves-light"
                           data-toggle="dropdown"
                           aria-expanded="false">
                            <img src="{{asset('public/assets/global/images/user10.jpg')}}" alt="user">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:" class="waves-effect waves-light">
                                    <i class="fa fa-user" aria-hidden="true"></i>Profile</a>
                            </li>
                            <li><a href="javascript:" class="waves-effect waves-light">
                                    <i class="fa fa-cog" aria-hidden="true"></i>Settings</a>
                            </li>
                            <li><a href="javascript:" class="waves-effect waves-light">
                                    <i class="fa fa-lock" aria-hidden="true"></i>Lock screen</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('logout') }}"
                            	onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    	
                                    </i> Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </nav>
    </div>
</div>
<div class="clearfix"></div>
<!-- End top navigation -->

@yield('content')

</div>
</div>

<!-- Start core js -->
<script src="{{asset('public/assets/global/plugins/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('public/assets/global/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/assets/global/plugins/Waves/dist/waves.min.js')}}"></script>
<script src="{{asset('public/assets/global/plugins/screenfull.js/dist/screenfull.min.js')}}"></script>
<script src="{{asset('public/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- Start core javascript -->

<!-- Start global js -->
<script src="{{asset('public/assets/global/js/left-menu.min.js')}}"></script>
<!-- End global js -->
<!-- Start page plugin js -->
<script src="{{asset('public/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/assets/global/plugins/datatables/media/js/dataTables.bootstrap.min.js')}}"></script>
<!-- End page plugin js -->

<!-- Start page js -->
<script src="{{asset('public/assets/global/js/datatable.min.js')}}"></script>
<!-- End page js -->

</body>
</html>