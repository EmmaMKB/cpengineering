<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We are CP Engineering, a dynamic and innovative company specializing in the supply of essential goods and services to the mining sector in the Democratic Republic of Congo (DRC). Our mission is to provide high-quality products and reliable services that support the operational needs of mining companies, ensuring efficiency and sustainability in their operations.">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <title>CP Engineering</title>
    <link rel="stylesheet preload" href="{{ asset('assets/css/plugins/fontawesome.css') }}" as="style">
    <link rel="stylesheet preload" href="{{ asset('assets/css/plugins/swiper.css') }}" as="style">
    <link rel="stylesheet preload" href="{{ asset('assets/css/plugins/metismenu.css') }}" as="style">
    <link rel="stylesheet preload" href="{{ asset('assets/css/plugins/magnifying-popup.css') }}" as="style">
    <link rel="stylesheet preload" href="{{ asset('assets/css/plugins/odometer.css') }}" as="style">
    <link rel="stylesheet preload" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}" as="style">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet preload" as="style">
    <link rel="preload" as="image" href="{{ asset('assets/images/banner/21.webp') }}" />
    <link rel="stylesheet preload" href="{{ asset('assets/css/style.css') }}" as="style">
</head>

<body class="primary-blue">

    <header class="header-one style-four header--sticky">
        <div class="header-top-area-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-one-wrapper">
                            <div class="left">
                                <div class="mail">
                                    <a href="mailto:contact@cpengineeringdrc.com"><i class="fal fa-envelope"></i>
                                        contact@cpengineeringdrc.com</a>
                                </div>
                                <div class="working-time">
                                    <p><i class="fal fa-clock"></i> Working: 8.00am - 5.00pm</p>
                                </div>
                            </div>
                            <div class="right">
                                <ul class="top-nav">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="{{ route('services.index') }}">Services</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-main-one-wrapper">
                            <div class="thumbnail">
                                <a href="{{ route('home') }}">
                                    <img src="assets/images/logo/logo.png" alt="cp-engineering-logo">
                                </a>
                            </div>
                            <div class="main-header">
                                <div class="nav-area">
                                    <ul class="">
                                        <li class="main-nav">
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li class="main-nav">
                                            <a href="{{ route('services.index') }}">Services</a>
                                        </li>
                                        <li class="main-nav">
                                            <a href="#">Products</a>
                                        </li>
                                    </ul>
                                </div>


                                <div class="loader-wrapper">
                                    <div class="loader">
                                    </div>
                                    <div class="loader-section section-left"></div>
                                    <div class="loader-section section-right"></div>
                                </div>
                                <div class="button-area">
                                    <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">
                                        Contact</a>
                                    <button id="menu-btn" class="menu menu-btn ml--20 ml_sm--5">
                                        <img class="menu-light" src="{{ asset('assets/images/icons/01.svg') }}" alt="Menu-icon">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <div class="rts-footer-area footer-six bg_image rts-section-gapTop bg-footer-one">
        <div class="container bg-shape-f1">
            <!-- footer call to action area -->
            <div class="row">
                <div class="col-12">
                    <div class="rts-cta-wrapper">
                        <div class="background-cta">
                            <div class="row">
                                <!-- cta-left -->
                                <div class="col-lg-6">
                                    <div class="cta-left-wrapepr">
                                        <p class="cta-disc">
                                            Latest Business Ideas
                                        </p>
                                        <h3 class="title animated fadeIn">Sign Up Newsletter</h3>
                                    </div>
                                </div>
                                <!-- cta left end -->
                                <div class="col-lg-6">
                                    <!-- cta right -->
                                    <form class="cta-input-arae">
                                        <input type="email" name="email" placeholder="Enter Email Address" required="">
                                        <button type="submit" class="rts-btn btn-primary">Subscribe Now</button>
                                    </form>
                                    <!-- cta right End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer call to action area End -->
            <!-- rts footer area -->
            <div class="row pt--120 pt_sm--80 pb--80 pb_sm--40">
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <div class="footer-one-single-wized">
                        <div class="wized-title">
                            <h5 class="title">Quick Links</h5>
                            <img src="{{ asset('assets/images/footer/under-title.png') }}" alt="finbiz_footer">
                        </div>
                        <div class="quick-link-inner">
                            <ul class="links">
                                <li><a href="#"><i class="far fa-arrow-right"></i> Forum Support</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> Help &amp; FAQ</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> Contact Us</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> Pricing &amp; Plans</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> Cookie Policy</a></li>
                            </ul>
                            <ul class="links margin-left-70">
                                <li><a href="#"><i class="far fa-arrow-right"></i> About Us</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> My Account</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i>Our Company</a></li>
                                <li><a href="{{ route('services.index') }}"><i class="far fa-arrow-right"></i>Service</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- footer mid area -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <div class="footer-one-single-wized mid-bg">
                        <div class="wized-title">
                            <h5 class="title">Opening Hours</h5>
                            <img src="assets/images/footer/under-title.png" alt="finbiz_footer">
                        </div>
                        <div class="opening-time-inner">
                            <div class="single-opening">
                                <p class="day">Week Days</p>
                                <p class="time">09.00 - 24:00</p>
                            </div>
                            <div class="single-opening">
                                <p class="day">Saturday</p>
                                <p class="time">08:00 - 03.00</p>
                            </div>
                            <div class="single-opening mb--30 mb_sm--10">
                                <p class="day">Sunday</p>
                                <p class="time">Day Off</p>
                            </div>
                            <a href="#" class="rts-btn btn-primary contact-us">Contact Us</a>
                        </div>
                    </div>
                </div>
                <!-- footer mid area end -->

                <!-- footer end area post -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <div class="footer-one-single-wized margin-left-65">
                        <div class="wized-title">
                            <h5 class="title">Popular Updates</h5>
                            <img src="assets/images/footer/under-title.png" alt="finbiz_footer">
                        </div>
                        <div class="post-wrapper">
                            <!-- single post -->
                            <div class="single-footer-post mb--30">
                                <div class="left-thumbnail">
                                    <img src="assets/images/footer/post/01.png" alt="finbiz_business-post">
                                </div>
                                <div class="post-right">
                                    <p> <i class="fal fa-clock"></i> 15th April, 2022</p>
                                    <a href="blog-details.html">
                                        <h6 class="title">Best Business Ideas For
                                            Getting Solution</h6>
                                    </a>
                                    <a class="red-more" href="blog-details.html">Read More<i
                                            class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- single post End -->
                            <!-- single post -->
                            <div class="single-footer-post">
                                <div class="left-thumbnail">
                                    <img src="assets/images/footer/post/02.png" alt="finbiz_business-post">
                                </div>
                                <div class="post-right">
                                    <p> <i class="fal fa-clock"></i> 15th April, 2022</p>
                                    <a href="blog-details.html">
                                        <h6 class="title">Best Business Ideas For
                                            Getting Solution</h6>
                                    </a>
                                    <a class="red-more" href="blog-details.html">Read More<i
                                            class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- single post End -->
                        </div>
                    </div>
                </div>
                <!-- footer end area post end-->
            </div>
            <!-- rts footer area End -->
        </div>
        <!-- copyright area start -->
        <div class="rts-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <p>CP Engineering - Copyright
                                <script>
                                    document.write(
                                        new Date().getFullYear()
                                    )
                                </script>. All rights reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright area end -->
    </div>


    <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu" title="Close menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <a class="logo-1" href="{{ route('home') }}"><img class="logo" src="{{ asset('assets/images/logo/logo.png') }}" alt="cpengineering_logo"></a>
            <div class="body d-none d-xl-block">
                <p class="disc">
                    We specialize in the efficient and reliable supply of
                    essential goods and services tailored specifically for
                    the mining sector. Operating throughout the strategic
                    provinces of Haut-Katanga and Lualaba, we are the
                    preferred local partner committed to supporting the
                    seamless operations and growth of mining companies in
                    the region.
                </p>
                <div class="get-in-touch">
                    <!-- title -->
                    <div class="h6 title">Get In Touch</div>
                    <!-- title End -->
                    <div class="wrapper">
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-phone-alt"></i>
                            <a href="#">+8801234566789</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:contact@cpengineeringdrc.com">contact@cpengineeringdrc.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-globe"></i>
                            <a href="https://www.cpengineeringdrc.com">www.cpengineeringdrc.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="#">Kolwezi, Haut-Katanga, DRC</a>
                        </div>
                        <!-- single ENd -->
                    </div>

                </div>
            </div>
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu d-block d-xl-none">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li>
                        <a href="{{ route('home') }}" class="main" aria-expanded="false">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('services.index') }}" class="main" aria-expanded="false">Our Services</a>
                    </li>
                    <li>
                        <a href="#" class="main" aria-expanded="false">Our Products</a>
                    </li>
                    <li>
                        <a href="#" class="main">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- inner menu area desktop End -->


    <!-- offcanvase search -->

    <div id="anywhere-home" class="">
    </div>



    <!-- progress area start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!-- progress area end -->

    <script defer src="{{ asset('assets/js/plugins/jquery.js') }}"></script>

    <script defer src="{{ asset('assets/js/plugins/odometer.js') }}"></script>
    <script defer src="{{ asset('assets/js/plugins/jquery-appear.js') }}"></script>


    <script defer src="{{ asset('assets/js/plugins/gsap.js') }}"></script>
    <script defer src="{{ asset('assets/js/plugins/split-text.js') }}"></script>
    <script defer src="{{ asset('assets/js/plugins/scroll-trigger.js') }}"></script>
    <script defer src="{{ asset('assets/js/plugins/smooth-scroll.js') }}"></script>
    <script defer src="{{ asset('assets/js/plugins/metismenu.js') }}"></script>
    <script defer src="{{ asset('assets/js/plugins/popup.js') }}"></script>

    <script defer src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/plugins/swiper.js') }}"></script>
    <script defer src="{{ asset('assets/js/plugins/contact.form.js') }}"></script>

    <script defer src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
