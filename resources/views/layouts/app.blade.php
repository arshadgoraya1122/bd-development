<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-style-mode" content="1" />
    <!-- 0 == light, 1 == dark -->

    <title>BLACKDEFYNITION</title>
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/ "> -->
    <!-- CSS ============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/animation.css" />
    <link rel="stylesheet" href="assets/css/plugins/feature.css" />
    <link rel="stylesheet" href="assets/css/plugins/magnify.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/slick.css" />
    <link rel="stylesheet" href="assets/css/plugins/slick-theme.css" />
    <link rel="stylesheet" href="assets/css/plugins/lightbox.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <main class="page-wrapper">
        <!-- Start Header Top Area  -->

        <!-- End Header Top Area  -->
        <!-- Start Header Area  -->
        <header class="rainbow-header header-default header-transparent header-sticky">
            <div class="container position-relative">
                <div class="row align-items-center row--0">
                    <div class="col-lg-3 col-md-6 col-4">
                        <div class="logo">
                            <a href="{{url('/')}}">
                                <img class="logo-light" src="{{asset('assets/images/logobd.png')}}" alt="Corporate Logo" />
                                <img class="logo-dark" src="{{asset('assets/images/logobd.png')}}" alt="Corporate Logo" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6 col-8 position-static">
                        <div class="header-right">
                            <nav class="mainmenu-nav d-none d-lg-block">
                                <ul class="mainmenu">
                                    <li><a href="#"> Home</a></li>
                                    <li><a href=" ">About</a></li>

                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Project</a></li>

                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </nav>

                            <!-- Start Header Btn  -->
                            <div class="header-btn">
                            @guest
                                <a class="btn-default btn-small" target="_blank" href="{{ route('login') }}">{{ __('Login in') }}</a>
                                @if (Route::has('register'))
                                <a class="btn-default btn-small" target="_blank" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            @else
                                <a class="btn-default btn-small" target="_blank" href="{{route('feed')}}">{{ __('Dashboard') }}</a>
                            @endguest
                                
                            </div>
                            <!-- End Header Btn  -->

                            <!-- Start Mobile-Menu-Bar -->
                            <div class="mobile-menu-bar ml--5 d-block d-lg-none">
                                <div class="hamberger">
                                    <button class="hamberger-button">
                                        <i class="feather-menu"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Start Mobile-Menu-Bar -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Area  -->
        <div class="popup-mobile-menu">
            <div class="inner">
                <div class="header-top">
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img class="logo-light" src="{{asset('assets/images/logo/logo.png')}}" alt="Corporate Logo" />
                            <img class="logo-dark" src="{{asset('assets/images/logo/logo-dark.png')}}" alt="Corporate Logo" />
                        </a>
                    </div>
                    <div class="close-menu">
                        <button class="close-button">
                            <i class="feather-x"></i>
                        </button>
                    </div>
                </div>
                <ul class="mainmenu">
                    <li><a href="#"> Home</a></li>
                    <li><a href=" ">About</a></li>

                    <li><a href="#">Services</a></li>
                    <li><a href="#">Project</a></li>

                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
        <!-- Start Theme Style  -->
        <div>
            <div class="rainbow-gradient-circle"></div>
            <div class="rainbow-gradient-circle theme-pink"></div>
        </div>
        <!-- End Theme Style  -->

        <!-- Start Slider Area  -->
        @yield('content')
        <!-- Start Footer Area  -->
        <footer class="rainbow-footer footer-style-default variation-two">
            <div class="rainbow-callto-action clltoaction-style-default style-7">
                <div class="container">
                    <div class="row row--0 align-items-center content-wrapper">
                        <div class="col-lg-8 col-md-8">
                            <div class="inner">
                                <div class="content text-left">
                                    <div class="logo">
                                        <a href="{{url('/')}}">
                                            <img class="logo-light" src="{{asset('assets/images/logobd.png')}}"
                                                alt="Corporate Logo" />
                                            <img class="logo-dark" src="{{asset('assets/images/logobd.png')}}"
                                                alt="Corporate Logo" />
                                        </a>
                                    </div>
                                    <p class="subtitle" data-sal="slide-up" data-sal-duration="400"
                                        data-sal-delay="150">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                            <div class="call-to-btn text-left mt_sm--20 text-lg-right">
                                <a class="btn-default" href=" ">
                                    Sign up Now
                                    <i class="feather-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="rainbow-footer-widget">
                                <h4 class="title">Services</h4>
                                <div class="inner">
                                    <ul class="footer-link link-hover">
                                        <li><a href="#"> lorem</a></li>
                                        <li><a href="#"> lorem</a></li>
                                        <li><a href="#"> lorem</a></li>
                                        <li><a href="#"> lorem</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="rainbow-footer-widget">
                                <div class="widget-menu-top">
                                    <h4 class="title">Solutions</h4>
                                    <div class="inner">
                                        <ul class="footer-link link-hover">
                                            <li><a href="#"> lorem</a></li>
                                            <li><a href="#"> lorem</a></li>
                                            <li><a href="#"> lorem</a></li>
                                            <li><a href="#"> lorem</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="rainbow-footer-widget">
                                <h4 class="title">Company</h4>
                                <div class="inner">
                                    <ul class="footer-link link-hover">
                                        <li><a href="#"> lorem</a></li>
                                        <li><a href="#"> lorem</a></li>
                                        <li><a href="#"> lorem</a></li>
                                        <li><a href="#"> lorem</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="rainbow-footer-widget">
                                <h4 class="title">Stay With Us.</h4>
                                <div class="inner">
                                    <h6 class="subtitle">
                                        2000+ Our clients are subscribe Around the World
                                    </h6>
                                    <ul class="social-icon social-default justify-content-start">
                                        <li>
                                            <a href=" ">
                                                <i class="feather-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="  ">
                                                <i class="feather-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=" ">
                                                <i class="feather-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=" ">
                                                <i class="feather-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area  -->
        <!-- Start Copy Right Area  -->
        <div class="copyright-area copyright-style-one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8 col-sm-12 col-12">
                        <div class="copyright-left">
                            <ul class="ft-menu link-hover">
                                <li>
                                    <a href=" ">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Terms And Condition</a>
                                </li>
                                <li>
                                    <a href=" ">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-12 col-12">
                        <div class="copyright-right text-center text-lg-end">
                            <p class="copyright-text"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copy Right Area  -->
    </main>

    <!-- All Scripts  -->
    <!-- Start Top To Bottom Area  -->
    <div class="rainbow-back-top">
        <i class="feather-arrow-up"></i>
    </div>
    <!-- End Top To Bottom Area  -->
    <!-- JS
============================================ -->
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/waypoint.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/counterup.min.js"></script>
    <script src="assets/js/vendor/feather.min.js"></script>
    <script src="assets/js/vendor/sal.min.js"></script>
    <script src="assets/js/vendor/masonry.js"></script>
    <script src="assets/js/vendor/imageloaded.js"></script>
    <script src="assets/js/vendor/magnify.min.js"></script>
    <script src="assets/js/vendor/lightbox.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/easypie.js"></script>
    <script src="assets/js/vendor/text-type.js"></script>
    <script src="assets/js/vendor/jquery.style.swicher.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <script src="assets/js/vendor/jquery-one-page-nav.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>



</html>