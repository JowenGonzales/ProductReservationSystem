<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="{{asset('assets/dashboard/images/adminicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/dashboard/images/adminicon.png')}}" type="image/x-icon">
    <title>SUPER Product Reservation System</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="{{asset('assets/dashboard/css/css2')}}?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/font-awesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/icofont.css')}}">
    <!-- Themify-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/themifyicon/themify-icons.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('assets/dashboard/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/responsive.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<!-- login page start-->
<div class="container-fluid">


    <div class="row">
        <div class="col-xl-5"><img class="bg-img-cover bg-center" src="{{asset('assets/dashboard/images/login/superadmin.jpg')}}" alt="looginpage"></div>
        <div class="col-xl-7 p-0">
            <div class="login-card login-dark">
                <div>
                    <div>
                        <a class="logo text-start d-flex" >
                            <img class="img-fluid for-light" width="60px" src="{{asset('asset/images/logo7.png')}}">

                            <h3 class="my-auto mx-1">Product Reservation System</h3>
                        </a>
                    </div>
                    <div class="login-main">
                        <form method="POST" action="{{ route('superadmin.postlogin') }}" class="theme-form" >
                            @csrf
                            <h4>Sign in to account</h4>
                            <p>Enter admin username & password to login</p>
                            <div class="form-group">
                                <label class="col-form-label">Username</label>
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                            </div>
                            @error('username')
                            <span class="text-danger text-center mx-auto" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="form-input position-relative">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" autocomplete="current-password" name="password" required placeholder="*********">
                                    <div class="show-hide">
                                        <span id="toggle-password" class="show"></span>
                                    </div>
                                </div>

                                @error('password')
                                <span class="text-danger text-center mx-auto" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-0">
                                <div class="checkbox p-0">
                                    <input id="checkbox1" type="checkbox">
                                    <label class="text-muted" for="checkbox1">Remember password</label>
                                </div>
                                <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
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
    <!-- Sidebar jquery-->
    <script src="{{asset('assets/dashboard/js/config.js')}}"></script>
    <!-- Plugins JS start-->
    <!-- calendar js-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('assets/dashboard/js/script.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/script1.js')}}"></script>
    <!-- Plugin used-->

    <script>

        $(document).ready(function() {
            $('#toggle-password').on('click', function() {
                // Get the password input
                var passwordInput = $('#password');
                // Get the current type of the input field
                var inputType = passwordInput.attr('type');

                // Toggle the type between 'password' and 'text'
                if (inputType === 'password') {
                    passwordInput.attr('type', 'text');

                } else {
                    passwordInput.attr('type', 'password');

                }
            });
        });


    </script>




</div>
</body>
</html>


