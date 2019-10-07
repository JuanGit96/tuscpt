<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tuscajas | @yield('title') </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/custom_css/app.css')}}"/>
    <link rel="stylesheet" href="{{ asset('plugin/swiper/css/swiper.min.css')}}">
    <link href="{{ asset('plugin/nvd3/css/nv.d3.min.css" rel="stylesheet')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom_css/custom.css') }}">
    <script src="{{asset('js_general/lib/jquery/jquery-1.9.1.js')}}"></script>
	<script type="text/javascript" src="{{asset('node_modules/bootstrap/dist/js/bootstrap.js')}}"></script>
    <link href="{{ asset('css/custom_css/dashboard1.css')}}" rel="stylesheet" type="text/css"/>
    
    <script src="{{asset('vendors/ckeditor/ckeditor.js')}}"></script>

    <link rel="stylesheet" media="screen" type="text/css" href="{{ asset('plugin/summernote/summernote.css')}}">

    <link href="{{asset('plugin/iCheck/css/all.css" rel="stylesheet')}}"/>

    

</head>
<body class="skin-default">
<header class="header">
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="index.html" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the marginin -->
            <img src="{{asset('img/tuscajas-logo.png')}}" alt="logo" width="65%" />
        </a>
        <div>
            
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle padding-user" data-toggle="dropdown">
                        <div class="riot">
                            <div>
                                Administrador
                                <span>
                                        <i class="caret"></i>
                                    </span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header" style="height: auto;">
                            <img src="{{asset('img/tuscajas-logo.png')}}" style="height: auto;width: 100%;"  alt="User Image">
                            <p> Administrador</p>
                        </li>
                        <li role="presentation"></li>
                        <li role="presentation" class="divider"></li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="{{url('logout')}}">
                                    <i class="fa fa-fw ti-shift-right"></i>
                                    Cerrar Sesion
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <aside class="left-side sidebar-offcanvas">
        <section class="sidebar">
            <div id="menu" role="navigation">
                <div class="nav_profile">
                    <div class="media profile-left">
                        <div class="content-profile">
                            <h4 class="media-heading">Tuscajas</h4>
                            <ul class="icon-list">
                                <li>
                                    <a href="users.html">
                                        <i class="fa fa-fw ti-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="lockscreen.html">
                                        <i class="fa fa-fw ti-lock"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="edit_user.html">
                                        <i class="fa fa-fw ti-settings"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        <i class="fa fa-fw ti-shift-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="navigation">
                    <li id="active" style="border-bottom: 2px solid #eee">
                        <a href="{{url('dashboard')}}">
                            <i class="menu-icon ti-dashboard"></i>
                            <span class="mm-text ">Dashboard</span>
                        </a>
                    </li>
                    <li class="menu-dropdown" style="border-bottom: 2px solid #eee">
                        <a href="{{url('dashboard/ordenes')}}">
                            <i class="menu-icon ti-shopping-cart"></i>
                            <span>Ordenes</span>
                        </a>
                    </li>
                    <li class="menu-dropdown" style="border-bottom: 2px solid #eee">
                        <a href="{{url('dashboard/kits')}}">
                            <i class="menu-icon ti-desktop"></i>
                            <span>Kits</span>
                        </a>
                    </li>
                    <li class="menu-dropdown" style="border-bottom: 2px solid #eee">
                        <a href="{{url('/dashboard/promociones')}}">
                            <i class="menu-icon ti-tag"></i>
                            <span>Promociones</span>
                        </a>
                    </li>
                    <li class="menu-dropdown" style="border-bottom: 2px solid #eee">
                        <a href="{{url('dashboard/extras')}}">
                            <i class="menu-icon ti-briefcase"></i>
                            <span>Extras</span>
                        </a>
                    </li>
                    <li class="menu-dropdown" style="border-bottom: 2px solid #eee">
                        <a href="{{url('dashboard/articulos/')}}">
                            <i class="menu-icon ti-bookmark-alt"></i>
                            <span>Articulos</span>
                        </a>
                    </li>
                    <li class="menu-dropdown" style="border-bottom: 2px solid #eee">
                        <a href="{{url('dashboard/agencias/')}}">
                            <i class="menu-icon ti-face-smile"></i>
                            <span>Agencias</span>
                        </a>
                    </li>
                    <li class="menu-dropdown" style="border-bottom: 2px solid #eee">
                        <a href="{{url('dashboard/agentes')}}">
                            <i class="menu-icon ti-face-smile"></i>
                            <span>Agentes</span>
                        </a>
                    </li>
                    <li class="menu-dropdown" style="border-bottom: 2px solid #eee">
                        <a href="{{url('dashboard/galeria')}}">
                            <i class="menu-icon ti-image"></i>
                            <span>Media</span>
                        </a>
                    </li>
                    <li class="menu-dropdown" style="border-bottom: 2px solid #eee">
                        <a href="{{url('dashboard/usuarios')}}"> <i class="menu-icon ti-user"></i>
                            <span>Usuarios</span>
                        </a>
                    </li>
                    <li class="menu-dropdown" style="border-bottom: 2px solid #eee">
                        <a href="{{url('/dashboard/indicadoresgenerales')}}"> <i class="menu-icon ti-bar-chart"></i>
                            <span>Indicadores generales</span>
                        </a>
                    </li>
                     <li class="menu-dropdown" style="border-bottom: 2px solid #eee">
                        <a href="{{url('/dashboard/cajas')}}"> <i class="menu-icon ti-dropbox"></i>
                            <span>Compra de Cajas</span>
                        </a>
                    </li>
                </ul>
               </div>
            </section>
        </aside>
    <aside class="right-side">

        <section class="content-header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-8">
                    <div class="header-element">
                        <h3>Tuscajas /
                            <small>@yield('seccion')</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-4 col-lg-offset-2 col-md-6 col-sm-7 col-xs-4">
                    <div class="header-object">
                        <span class="option-search pull-right hidden-xs">
                            <span class="search-wrapper">
                                <input type="text" placeholder="Search here"><i class="ti-search"></i>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
        	@yield('content')
        </section>
    </aside>
</div>
<div id="qn"></div>
<script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
@yield('scr')
<script type="text/javascript" src="{{ asset('plugin/moment/js/moment.min.js')}}"></script>
</body>
</html>