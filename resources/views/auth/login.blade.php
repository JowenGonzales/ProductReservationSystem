

@extends('webpage.webpagelayout')
@section('head-imports')

@endsection
@section('contents')

    <div class="container-fluid p-0 mt-5">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div>
                            <a class="logo" href="">
                                <img class="img-fluid for-light " style="width: 100px;" src="{{asset('asset/images/logo7.png')}}">
                                <img class="img-fluid for-light "  style="width: 100px;" src="{{asset('asset/images/logo8.png')}}">

                            </a>
                        </div>
                        <div class="login-main">
                            <form method="POST" action="{{ route('login') }}" class="theme-form">
                                @csrf
                                <h4>Sign in to account</h4>
                                <p>Enter your email & password to login</p>
                                <div class="form-group">
                                    <label class="col-form-label">Username</label>
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="email" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <div class="form-input position-relative">
                                        <input name="password"  id="password" type="password" class="form-control @error('password') is-invalid @enderror"  autocomplete="current-password"  required="" placeholder="*********">
                                        <div class="show-hide">
                                            <span id="toggle-password" class="show"></span>
                                        </div>
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback" style="display: inline-block;" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                @error('username')
                                <span class="invalid-feedback" style="display: inline-block;" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group mb-0">
                                    <div class="checkbox p-0">
                                        <input id="checkbox1" type="checkbox">
                                        <label class="text-muted" for="checkbox1">Remember password</label>
                                    </div><a class="link" href="forget-password.html">Forgot password?</a>
                                    <div class="text-end mt-3">
                                        <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                                    </div>
                                </div>

                                <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="{{ route('register') }}">Create Account</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- latest jquery-->
        <script src="../assets/js/jquery.min.js"></script>
        <!-- Bootstrap js-->
        <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
        <!-- feather icon js-->
        <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
        <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
        <!-- scrollbar js-->
        <!-- Sidebar jquery-->
        <script src="../assets/js/config.js"></script>
        <!-- Plugins JS start-->
        <!-- calendar js-->
        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script src="../assets/js/script.js"></script>
        <script src="../assets/js/script1.js"></script>



        <!-- Plugin used-->
    </div>

@endsection


@section('body-scripts')

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
@endsection
