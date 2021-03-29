<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
    <meta content="Uniquecrew" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{url('')}}/front/images/favicon.ico">
    <!-- Bootstrap -->
    <link href="{{url('')}}/front/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{{url('')}}/front/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('')}}/front/css/themify-icons.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../../unicons.iconscout.com/release/v3.0.3/{{url('')}}/front/css/line.css">
    <!-- Slider -->
    <link rel="stylesheet" href="{{url('')}}/front/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{url('')}}/front/css/owl.theme.default.min.css" />
    <!-- Main css -->
    <link href="{{url('')}}/front/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{{url('')}}/front/css/colors/default.css" rel="stylesheet" id="color-opt">
    <link href="https://fonts.googleapis.com/css?family=Amiri&display=swap" rel="stylesheet">

    <!-- RTL STYLES -->
    @if($lang == 'fa' || $lang == 'ps')
    <style>
        *:not(.fa):not(.mdicon):not(.fab) {
            font-family: 'Amiri', serif !important;
            font-size: 16px;
        }

        .af-fr {
            float: right !important;
        }

        .af-fl {
            float: left !important;
        }

        .af-tr,
        .af-tr>* {
            text-align: right !important;
        }

        .af-tl,
        .af-tl>* {
            text-align: left !important;
        }
        .af-none {
          display: none;
        }
        

        .af-ml0 {
            margin-left: 0 !important;
        }

        .af-rtl {
            direction: rtl !important;
        }

        .af-p0 {
            padding: 0 !important;
        }

        .af-pr0 {
            padding-right: 0 !important;
        }

        .af-left75 {
            left: -75px !important;
        }

        .category>li a {
            float: right !important;
        }

        .widget-title:before {
            left: inherit !important;
            right: 0 !important;
        }

        .table th,
        .table td {
            text-align: right;
        }

        .bread-crumb > li::before {
            content: "-";
            position: absolute;
            left: -9px !important;
            right: 115px;
            top: 4px;
        }

        h4 {
          font-size: 24px !important;
        }

    </style>
    @endif
    @if($lang == 'ps')
    <style>
        .main-menu ul li a {
            font-size: 14px !important;
        }

    </style>
    @endif
</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <!-- Navbar STart -->
    <header id="topnav" class="defaultscroll sticky bg-white">
        <div class="container">
            <!-- Logo container-->
            <div class="af-fr">
                <a class="logo" href="index.html"><img src="{{url('')}}/front/images/web-logo.png" height="80" alt=""></a>
            </div>
            <!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu af-rtl af-tr">
                    <li><a href="{{route('home')}}">{{__('messages.home')}}</a></li>
                    <li><a href="{{route('blog')}}">{{__('messages.blog')}}</a></li>
                    @if($opportunities->first())
                    <li class="has-submenu">
                        <a href="javascript:void(0)">{{__('messages.opportunities')}}</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            @foreach($opportunities as $opportunity)
                            <li><a
                                    href="{{route('opportunity', $opportunity)}}">{{$opportunity->{'title_' . $lang} }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @endif
                    <li><a href="{{route('event')}}">{{__('messages.events')}}</a></li>

                    <li class="has-submenu">
                        <a href="javascript:void(0)">{{__('messages.about')}}</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            @foreach($abouts as $about)
                            <li><a href="{{route('about', $about)}}">{{$about->{'title_' . $lang} }}</a></li>
                            @endforeach
                            <li><a href="{{route('contact')}}">{{__('messages.contact')}}</a></li>

                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="javascript:void(0)">{{__('messages.language')}}</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="{{url('')}}/locale/en">English</a></li>
                            <li><a href="{{url('')}}/locale/ps">پښتو</a></li>
                            <li><a href="{{url('')}}/locale/en">دری</a></li>
                        </ul>
                    </li>
                </ul>
                <!--end navigation menu-->
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </header>
    <!--end header-->
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <footer class="footer bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a class="logo-footer text-light" href="#"><img src="{{url('')}}/front/images/web-logo.png"
                            height="80" alt=""></a>
                    <p class="mt-4">{{__('messages.footer_text')}}</p>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h4 class="text-light footer-head">{{__('messages.links')}}</h4>
                    <ul class="list-unstyled footer-list mt-4">
                        <li><a href="{{route('blog')}}" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
                                {{__('messages.blog')}}</a></li>
                        <li><a href="{{route('event')}}" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
                                {{__('messages.events')}}</a></li>
                    </ul>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h4 class="text-light footer-head">{{__('messages.contact')}}</h4>
                    <ul class="list-unstyled footer-list mt-4">
                        <li><a href="{{route('contact')}}" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>{{__('messages.contact')}}</a>
                        </li>
                    </ul>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!--end footer-->
    <footer class="footer bg-footer footer-bar">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="text-center">
                        <p class="mb-0">{{__('messages.copyright')}}</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="back-to-top rounded text-center" id="back-to-top">
        <i class="mdi mdi-chevron-up d-block"> </i>
    </a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="{{url('')}}/front/js/jquery-3.5.1.min.js"></script>
    <script src="{{url('')}}/front/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('')}}/front/js/jquery.easing.min.js"></script>
    <script src="{{url('')}}/front/js/scrollspy.min.js"></script>
    <!-- SLIDER -->
    <script src="{{url('')}}/front/js/owl.carousel.min.js"></script>
    <script src="{{url('')}}/front/js/owl.init.js"></script>
    <!-- Icons -->
    <script src="{{url('')}}/front/js/switcher.js"></script>
    <script src="{{url('')}}/front/js/feather.min.js"></script>
    <script src="../../../unicons.iconscout.com/release/v3.0.3/script/monochrome/bundle.js"></script>
    <!-- Main Js -->
    <script src="{{url('')}}/front/js/app.js"></script>
</body>

</html>
