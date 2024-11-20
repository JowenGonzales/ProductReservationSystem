<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="{{asset('asset/images/logo6.jpg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('asset/images/logo6.jpg')}}">
    <title>ADMIN | Product Reservation System</title>
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

    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">






    <style>


        #API-chield-row th {
            white-space: nowrap;  /* Prevents text from wrapping */
            text-overflow: ellipsis; /* Adds ellipsis (...) if text overflows */
            overflow: hidden; /* Ensures overflow is hidden */
            max-width: 200px; /* Adjust this value according to your needs */
            vertical-align: middle; /* Centers text vertically */
        }

        #API-chield-row th, #API-chield-row td {
            padding: 8px; /* Adjust padding as needed */
        }

    </style>


    @yield('head-imports')
</head>
<body>
<div class="loader-wrapper">
    <div class="loader loader-1">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
        <div class="loader-inner-1"></div>
    </div>
</div>
<!-- loader ends-->
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <div class="page-header row">
        <div class="header-logo-wrapper col-auto">
            <div class="logo-wrapper">
                <a href="">
                    <img class="img-fluid for-light" src="{{asset('assets/dashboard/images/logo/logo.png')}}" alt="">
                    <img class="img-fluid for-dark" src="{{asset('assets/dashboard/images/logo/logo_light.png')}}" alt="">
                </a>
            </div>
        </div>
        <div class="col-4 col-xl-4 page-title">
            <h4 class="f-w-700">@yield('header-name')</h4>
            <nav>
                <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                    <li class="breadcrumb-item"><a href=""> <i data-feather="home"> </i></a></li>
                    <li class="breadcrumb-item f-w-400">Dashboard</li>
                    <li class="breadcrumb-item f-w-400 active">Default</li>
                </ol>
            </nav>
        </div>
        <!-- Page Header Start-->
        <div class="header-wrapper col m-0">
            <div class="row">
                <form class="form-inline search-full col" action="#" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Mofi .." name="q" title="" autofocus="">
                                <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{asset('assets/dashboard/images/logo/logo.png')}}" alt=""></a></div>
                    <div class="toggle-sidebar">
                        <svg class="stroke-icon sidebar-toggle status_toggle middle">
                            <use href="{{asset('assets/dashboard/svg/icon-sprite.svg')}}#toggle-icon"></use>
                        </svg>
                    </div>
                </div>
                <div class="nav-right col-xxl-8 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
                    <ul class="nav-menus">
                        <li>                         <span class="header-search">
                    <svg>
                      <use href="{{asset('assets/dashboard/svg/icon-sprite.svg')}}#search"></use>
                    </svg></span></li>


                        <li class="onhover-dropdown">
                            <div class="notification-box">
                                <svg>
                                    <use href="{{asset('assets/dashboard/svg/icon-sprite.svg')}}#notification"></use>
                                </svg>
                                <div id="notification-badge-div">

                                </div>

                            </div>
                            <div class="onhover-show-div notification-dropdown">
                                <h5 class="f-18 f-w-600 mb-0 dropdown-title">Notifications                               </h5>
                                <ul class="notification-box">
                                    <div id="hr-notification-div">

                                    </div>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="mode">
                                <svg>
                                    <use href="{{asset('assets/dashboard/svg/icon-sprite.svg')}}#moon"></use>
                                </svg>
                            </div>
                        </li>
                        <li class="profile-nav onhover-dropdown px-0 py-0">
                            <div class="d-flex profile-media align-items-center"><img class="img-30" src="{{asset('assets/dashboard/images/dashboard/profile.png')}}" alt="">
                                <div class="flex-grow-1"><span>ADMIN</span>
                                    <p class="mb-0 font-outfit">ADMIN<i class="fa fa-angle-down"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">

                                <li><a href="{{route('admin.logout')}}"><i data-feather="log-in"> </i><span>Log out</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
                    <div class="ProfileCard u-cf">
                        <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                        <div class="ProfileCard-details">
                            <div class="ProfileCard-realName">name</div>
                        </div>
                    </div>
                </script>
                <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
            </div>
        </div>
        <!-- Page Header Ends                              -->
    </div>
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper" data-layout="stroke-svg">
            <div>
                <div class="logo-wrapper">
                    <a href="#">
                        <h4 class="logo-primary-color">Admin<span class="logo-secondary-color">Account</span></h4>
                    </a>
                    <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                    <div class="toggle-sidebar">
                        <svg class="stroke-icon sidebar-toggle status_toggle middle">
                            <use href="{{asset('assets/dashboard/svg/icon-sprite.svg')}}#toggle-icon"></use>
                        </svg>
                        <svg class="fill-icon sidebar-toggle status_toggle middle">
                            <use href="{{asset('assets/dashboard/svg/icon-sprite.svg')}}#fill-toggle-icon"></use>
                        </svg>
                    </div>
                </div>
                <div class="logo-icon-wrapper">
                    <a href="">
                        <img class="img-fluid" src="{{asset('assets/dashboard/images/logo/logo-icon.png')}}" alt=""></a></div>
                <nav class="sidebar-main">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                    <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar">
                            <li class="back-btn">
                                <a href="">
                                    <img class="img-fluid" src="{{asset('assets/dashboard/images/logo/logo-icon.png')}}" alt="">
                                </a>
                                <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                            </li>
                            <li class="pin-title sidebar-main-title">
                                <div>
                                    <h6>Pinned</h6>
                                </div>
                            </li>
                            <li class="sidebar-main-title">
                                <div>
                                    <h6 class="lan-1">General</h6>
                                </div>
                            </li>
                            <li class="sidebar-list">
                                <i class="fa fa-thumb-tack"></i>
                                <a class="sidebar-link sidebar-title link-nav" href="search.html">
                                    <i class="feather-light" data-feather="home"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li class="sidebar-list">
                                <i class="fa fa-thumb-tack"></i>
                                <a class="sidebar-link sidebar-title link-nav" href="{{route('admin.orders')}}">
                                    <i class="feather-light" data-feather="shopping-cart"></i>
                                    <span>Orders</span>
                                </a>
                            </li>

                            <li class="sidebar-list">
                                <i class="fa fa-thumb-tack"></i>
                                <a class="sidebar-link sidebar-title link-nav" href="{{route('admin.products')}}">
                                    <i class="feather-light" data-feather="package"></i>
                                    <span>Products</span>
                                </a>
                            </li>

                            <li class="sidebar-list">
                                <i class="fa fa-thumb-tack"></i>
                                <a class="sidebar-link sidebar-title link-nav" href="search.html">
                                    <i class="feather-light" data-feather="calendar"></i>
                                    <span>Schedule</span>
                                </a>
                            </li>



                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </nav>
            </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <!-- Container-fluid starts-->
            @yield('page-contents')
            <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">

                </div>
            </div>
        </footer>
    </div>
</div>


<!-- latest jquery-->
<script src="{{asset('assets/dashboard/js/jquery.min.js')}}"></script>
<!-- Bootstrap js-->
<script src="{{asset('assets/dashboard/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<!-- feather icon js-->
<script src="{{asset('assets/dashboard/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('assets/dashboard/js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- scrollbar js-->
<script src="{{asset('assets/dashboard/js/scrollbar/simplebar.js')}}"></script>
<script src="{{asset('assets/dashboard/js/scrollbar/custom.js')}}"></script>
<!-- Sidebar jquery-->
<script src="{{asset('assets/dashboard/js/config.js')}}"></script>
<!-- Plugins JS start-->
<script src="{{asset('assets/dashboard/js/sidebar-menu.js')}}"></script>
<script src="{{asset('assets/dashboard/js/sidebar-pin.js')}}"></script>
<script src="{{asset('assets/dashboard/js/slick/slick.min.js')}}"></script>
<script src="{{asset('assets/dashboard/js/slick/slick.js')}}"></script>
<script src="{{asset('assets/dashboard/js/header-slick.js')}}"></script>



<script src="{{asset('assets/dashboard/js/height-equal.js')}}"></script>
<script src="{{asset('assets/dashboard/js/animation/wow/wow.min.js')}}"></script>

<script src="{{asset('assets/dashboard/js/sweet-alert/app.js')}}"></script>
<script src="{{asset('assets/dashboard/js/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{asset('assets/dashboard/js/height-equal.js')}}"></script>

<script src="{{asset('assets/dashboard/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>

<script src="{{asset('assets/dashboard/js/animation/animate-custom.js')}}"></script>
{{--<script src="{{asset('assets/dashboard/js/datatable/datatables/datatable.custom.js')}}"></script>--}}
@yield('body-scripts')

<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{asset('assets/dashboard/js/script.js')}}"></script>
<script src="{{asset('assets/dashboard/js/script1.js')}}"></script>
{{--<script src="{{asset('assets/dashboard/js/theme-customizer/customizer.js')}}"></script>--}}


<!-- Plugin used-->
<script>new WOW().init();</script>
<x-toasts/>
<script>
    function goBack() {
        window.history.back();
    }
</script>

</body>
</html>
