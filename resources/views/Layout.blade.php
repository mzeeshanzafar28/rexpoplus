<!DOCTYPE html>
<html lang="zxx">
<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Rexpoplus | @yield('title')</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('assets/images/all/favicon.png') }}" type="image/x-icon">
    <!--====== Google Fonts ======-->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700&amp;family=Oswald:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <!--====== Font Awesome ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-5.9.0.css') }}">
    <!--====== Bootstrap ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!--====== Magnific Popup ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!--====== Falticon ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <!--====== Animate ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!--====== Slick ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <!--====== Main Style ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .mobile-show{
            display: none;
        }
        @media only screen and (max-width: 600px) {
            .mobile-show{
                display: block;
            }
        }
    </style>
    @yield('style')
</head>

<body class="home-six">
    <div class="page-wrapper">
        <div class="preloader" style="height: 100vh;display: flex;align-items: center;justify-content: center">
            <lottie-player src="{{ asset('assets/animations/loading.json') }}" background="transparent" speed="1" loop autoplay style="height: 250px"></lottie-player>
        </div>

        <!-- main header -->
        <header class="main-header header-six">
            <!--Header-Upper-->
            <div class="header-upper">
                <div class="container clearfix">
                    <div class="header-inner d-flex align-items-center">
                        <div class="logo-outer">
                            <div class="logo">
                                <a href="{{ URL::to('/') }}"><img src="{{ asset('assets/images/all/logo.png') }}" alt="Logo" style="height: 60px;width: auto;" title="Logo"></a>
                            </div>
                        </div>

                        <div class="nav-outer clearfix d-flex align-items-center">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <div class="mobile-logo py-15">
                                        <a href="{{ URL::to('/') }}">
                                            <img src="{{ asset('assets/images/all/logo.png') }}" alt="Logo" style="height: 60px;width: auto;" title="Logo">
                                        </a>
                                    </div>

                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li><a href="{{ URL::to('/') }}">Home</a></li>
                                        <li><a href="{{ URL::to('/about') }}">About Us</a></li>
                                        <li><a href="{{ URL::to('/services') }}">Services</a></li>
                                        @if(Auth::check())
                                        <li class="mobile-show"><a href="{{ URL::to('/user/dashboard') }}">Dashboard</a></li>
                                        @else
                                        <li class="mobile-show"><a href="{{ URL::to('login') }}">Login / Sign up</a></li>
                                        @endif
                                    </ul>
                                </div>

                            </nav>
                            <div class="menu-btn">
                                @if(Auth::check())
                                <a href="{{ URL::to('/user/dashboard') }}" class="theme-btn style-seven">Dashboard</a>
                                @else
                                <a href="{{ URL::to('login') }}" class="theme-btn style-seven">LogIn / Sign up</a>
                                @endif
                            </div>
                            <!-- Main Menu End-->
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
        </header>

        @yield('content')

        <!-- Footer Area Start -->
        <footer class="main-footer footer-five bg-lighter pt-110">

            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget about-widget">
                            <div class="footer-logo mb-35">
                                <a href="{{ URL::to('/') }}"><img src="{{ asset('assets/images/all/logo.png') }}" style="height: 50px" alt="Logo"></a>
                            </div>
                            <div class="text">
                                Build a modern and creative website with crealand
                            </div>
                            <div class="social-style-two mt-30">
                                <a href="http://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="http://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget link-widget ml-50 rml-0">
                            <h4 class="footer-title">Quick Links</h4>
                            <ul class="list-style-two">
                                <li><a href="{{ URL::to('user/packages') }}">Investment Plans</a></li>
                                <li><a href="{{ URL::to('user/invite-users') }}">Referral Program</a></li>
                                <li><a href="{{ URL::to('user/rewards') }}">Rewards</a></li>
                                <li><a href="{{ URL::to('privacy-policy') }}">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget link-widget ml-50 rml-0">
                            <h4 class="footer-title">Services</h4>
                            <ul class="list-style-two">
                                <li><a href="#">iCloud Storage</a></li>
                                <li><a href="#">AWS</a></li>
                                <li><a href="#">Web Hosting</a></li>
                                <li><a href="#">Azure</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget contact-widget mr-30 rmr-0">
                            <h4 class="footer-title">Informaion</h4>
                            <ul class="list-style-two">
                                <li><i class="fas fa-phone-alt"></i> <a href="callto:+123-589-847">+1 618-369-3146</a></li>
                                <li><i class="fas fa-envelope"></i> <a href="mailto:resly@gmail.com">info@rexpoplus.com</a></li>
                                <li><i class="fas fa-map-marker-alt"></i> 2574 Hart Country Lane Dalton, Georgia, USA</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area mt-50">
                <div class="container">
                    <div class="copyright-inner justify-content-center">
                        <p>&copy; 2022 Rexpoplus All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->

    </div>
    <!--End pagewrapper-->

    <!-- Scroll Top Button -->
    <button class="scroll-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></button>
    <!--====== Jquery ======-->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <!--====== Bootstrap ======-->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!--====== Appear Js ======-->
    <script src="{{ asset('assets/js/appear.min.js') }}"></script>
    <!--====== Slick ======-->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!--====== Magnific Popup ======-->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!--====== Isotope ======-->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!--  WOW Animation -->
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <!-- Custom script -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    {{-- IonIcons Script  --}}
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    @yield('script')
</body>
</html>