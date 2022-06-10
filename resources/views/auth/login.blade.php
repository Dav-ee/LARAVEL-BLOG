<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from tendex.vercel.app/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 13:59:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LOGIN</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <!-- Custom Stylesheet -->
    
    
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="@@dashboard">

<div id="preloader"><i>.</i><i>.</i><i>.</i></div>

<div id="main-wrapper" style="margin-top: -25px;">
    <div class="authincation section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="mini-logo text-center my-4">
                   <h4> <a href="/"> BLOGGA</a></h4>
                        <h4 class="card-title mt-5">LOGIN TO YOUR ACCOUNT</h4>
                    </div>
                    <div class="auth-form card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="col-12">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Your Email</label>
                                    <input type="email" id="email" required class="form-control @error('email') is-invalid @enderror" placeholder="hello@example.com" name="email" value="{{ old('email') }}"
                                         autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right"> Password</label>
                                    <input type="password" required class="form-control @error('password') is-invalid @enderror" placeholder="Password" id="password" name="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input"  type="checkbox" id="flexSwitchCheckDefault" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Remember
                                            me</label>
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="#">Forgot Password?</a>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </div>
                            </form>
                            <p class="mt-3 mb-0">Don't have an account? <a class="text-primary" href="/register">Sign
                                    up</a></p>
                        </div>

                    </div>
                    {{-- <div class="privacy-link">
                        <a href="signup.html">Have an issue with 2-factor
                            authentication?</a>
                        <br />
                        <a href="signup.html">Privacy Policy</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>



<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>


</body>


<!-- Mirrored from tendex.vercel.app/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 13:59:58 GMT -->
</html>