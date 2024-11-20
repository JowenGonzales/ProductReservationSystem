<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Towerside Clothing Store
    </title>



    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="{{asset('assets/dashboard/css/css2')}}?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/font-awesome.css')}}">
    <!-- ico-font-->
    {{--    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/icofont.css')}}">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/plugins/icofont/icofont.css')}}">
    <!-- Themify-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/themifyicon/themify-icons.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/date-range-picker/flatpickr.min.css')}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('assets/dashboard/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/responsive.css')}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('assets/fonts/icons/font-awesome.css')}}"  />

    <link rel="stylesheet" href="{{asset('assets/dashboard/css/style2.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/sweetalert2.css')}}">


    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/sweetalert2.css')}}">




    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/owl.transitions.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/cubeportfolio.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/jquery.fancybox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootsnav.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/loader.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/custom.css')}}">
    <link rel="shortcut icon" href="{{asset('asset/images/logo6.jpg')}}">
    @yield('head-imports')
</head>
<body class="landing-page">
<!--Loader-->
<div class="loader">
    <div class="spinner-load">
        <div class="dot1">
        </div>
        <div class="dot2">
        </div>
    </div>
</div>

<!--HEADER-->
<div class="container-fluid">
    <div class="landing-page ">
        <!-- Page Body Start            -->
        <div class="landing-home">

            <div class="container-fluid" >
                <div class="sticky-header">
                    <header>
                        <nav class="navbar navbar-b navbar-dark navbar-trans navbar-expand-xl fixed-top nav-padding" id="sidebar-menu">
                            <a class="navbar-brand p-0" href="#">
                                <img class="img-fluid" src="../assets/images/landing/landing_logo.png" alt="">
                            </a>
                            <img class="img-fluid for-light" width="60px" src="{{asset('asset/images/logo7.png')}}">
                            <img class="img-fluid for-light" width="60px" src="{{asset('asset/images/logo8.png')}}">

                            <button class="navbar-toggler navabr_btn-set custom_nav" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation"><span></span><span></span><span></span></button>
                            <div class="navbar-collapse justify-content-center collapse hidenav" id="navbarDefault">
                                <ul class="navbar-nav navbar_nav_modify" id="scroll-spy">
                                    <li class="nav-item"><a class="nav-link" href="{{route('webpage.index')}}">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('webpage.catalogues')}}">Catalogue</a></li>
                                </ul>
                                <ul class="navbar-nav navbar_nav_modify" id="scroll-spy text-center">
                                    @guest
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                <span class="ps-3">Guest</span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                                @if (Route::has('login'))
                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                @endif
                                                @if (Route::has('register'))
                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                @endif
                                            </div>
                                        </li>

                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                <span class="">{{ Auth::user()->name }}</span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">


                                                <a class="dropdown-item" href="{{route('webpage.cart')}}">Cart</a>
                                                <a class="dropdown-item" href="{{route('webpage.reservations')}}">Reservations</a>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>

                            </div>

                            <div class="btn-group">


                            </div>





                        </nav>
                    </header>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('contents')
<!--Footer-->
<footer class="padding_top bottom_half">
    <a href="#." class="go-top text-center">
        <i class="fa fa-angle-double-up">
        </i>
    </a>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer_panel content_space">
                    <h4 class="heading_border heading_space">about store
                    </h4>
                    <ul class="about_foot">
                        <li>
                            <i class="fa fa-home">
                            </i>234 Heaven Stress, Beverly Hill.
                        </li>
                        <li>
                            <i class="fa fa-phone">
                            </i>800) 123 456 789
                        </li>
                        <li>
                            <a href="#.">
                                <i class="fa fa-envelope-o">
                                </i>Contact@
                            </a>
                        </li>
                        <li>
                  <span>
                    <img src="{{asset('asset/images/paymennt1.png')}}" alt="payment">
                  </span>
                            <span>
                    <img src="{{asset('asset/images/payment2.png')}}" alt="payment">
                  </span>
                            <span>
                    <img src="{{asset('asset/images/payment3.jpg')}}" alt="payment">
                  </span>
                            <span>
                    <img src="{{asset('asset/images/payment4.png')}}" alt="payment">
                  </span>
                            <span>
                    <img src="{{asset('asset/images/payment5.png')}}" alt="payment">
                  </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer_panel content_space">
                    <h4 class="heading_border heading_space">My Account
                    </h4>
                    <ul class="account_foot">
                        <li>
                            <a href="#.">My Account
                            </a>
                        </li>
                        <li>
                            <a href="#.">Login
                            </a>
                        </li>
                        <li>
                            <a href="#.">My Cart
                            </a>
                        </li>
                        <li>
                            <a href="#.">Wishlist
                            </a>
                        </li>
                        <li>
                            <a href="#.">Checkout
                            </a>
                        </li>
                        <li>
                            <a href="#.">Userinfo
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer_panel content_space">
                    <h4 class="heading_border heading_space">Customer Information
                    </h4>
                    <ul class="account_foot">
                        <li>
                            <a href="#.">
                                About
                            </a>
                        </li>
                        <li>
                            <a href="#.">Size Chart
                            </a>
                        </li>
                        <li>
                            <a href="#.">Payment
                            </a>
                        </li>
                        <li>
                            <a href="#.">Order and Shipment
                            </a>
                        </li>
                        <li>
                            <a href="#.">Returns & Exchange Policy
                            </a>
                        </li>
                        <li>
                            <a href="#.">Term and Condition
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <p>Copyright &copy; 2016
                    <a href="#.">Towerside
                    </a>. All Right Reserved.
                </p>
            </div>
            <div class="col-sm-8">
                <ul class="social">
                    <li>
                        <a href="#.">
                            <i class="fa fa-facebook">
                            </i>
                        </a>
                    </li>
                    <li>
                        <a href="#.">
                            <i class="fa fa-twitter">
                            </i>
                        </a>
                    </li>
                    <li>
                        <a href="#.">
                            <i class="fa fa-rss">
                            </i>
                        </a>
                    </li>
                    <li>
                        <a href="#.">
                            <i class="fa fa-google-plus">
                            </i>
                        </a>
                    </li>
                    <li>
                        <a href="#.">
                            <i class="fa fa-linkedin">
                            </i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>



<script src="{{asset('assets/dashboard/js/jquery-3.5.1.min.js')}}"></script>
<!-- <script src="{{asset('assets/dashboard/js/cursor/stats.min.js')}}"> </script> -->
<!-- Bootstrap js-->
<script src="{{asset('assets/dashboard/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<!-- feather icon js-->
<script src="{{asset('assets/dashboard/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('assets/dashboard/js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- Plugins JS start-->
<script src="{{asset('assets/dashboard/js/tooltip-init.js')}}"></script>
<script src="{{asset('assets/dashboard/js/animation/wow/wow.min.js')}}"></script>
<script src="{{asset('assets/dashboard/js/landing_sticky.js')}}"></script>
<script src="{{asset('assets/dashboard/js/landing.js')}}"></script>
<script src="{{asset('assets/dashboard/js/jarallax_libs/libs.min.js')}}"></script>
<script src="{{asset('assets/dashboard/js/slick/slick.min.js')}}"></script>
<script src="{{asset('assets/dashboard/js/slick/slick.js')}}"></script>
<script src="{{asset('assets/dashboard/js/landing-slick.js')}}"></script>

<script src="{{asset('assets/dashboard/js/sweet-alert/app.js')}}"></script>
<script src="{{asset('assets/dashboard/js/sweet-alert/sweetalert.min.js')}}"></script>

@yield('body-scripts')
<x-toasts/>


<script src="{{asset('asset/js/jquery-2.2.3.js')}}">
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U">
</script>
<script src="{{asset('asset/js/gmap3.min.js')}}">
</script>
<script src="{{asset('asset/js/bootstrap.min.js')}}">
</script>
<script src="{{asset('asset/js/bootsnav.js')}}">
</script>
<script src="{{asset('asset/js/jquery.parallax-1.1.3.js')}}">
</script>
<script src="{{asset('asset/js/jquery.appear.js')}}">
</script>
<script src="{{asset('asset/js/owl.carousel.min.js')}}">
</script>
<script src="{{asset('asset/js/jquery.cubeportfolio.min.js')}}">
</script>
<script src="{{asset('asset/js/jquery.fancybox.js')}}">
</script>
<script src="{{asset('asset/js/jquery.themepunch.tools.min.js')}}">
</script>
<script src="{{asset('asset/js/jquery.themepunch.revolution.min.js')}}">
</script>
<script src="{{asset('asset/js/revolution.extension.layeranimation.min.js')}}">
</script>
<script src="{{asset('asset/js/revolution.extension.navigation.min.js')}}">
</script>
<script src="{{asset('asset/js/revolution.extension.parallax.min.js')}}">
</script>
<script src="{{asset('asset/js/revolution.extension.slideanims.min.js')}}">
</script>
<script src="{{asset('asset/js/revolution.extension.video.min.js')}}">
</script>
<script src="{{asset('asset/js/kinetic.js')}}">
</script>
<script src="{{asset('asset/js/jquery.final-countdown.js')}}">
</script>
<script src="{{asset('asset/js/functions.js')}}">
</script>
</body>
</html>
