<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Forgot Password - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/css/colors.css">
    <link rel="stylesheet" type="text/css" href="/css/components.css">
    <link rel="stylesheet" type="text/css" href="/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-7 col-md-9 col-10 d-flex justify-content-center px-0">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center">
                                    <img src="/images/pages/forgot-password.png" alt="branding logo">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 px-2 py-1">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">Recover your password</h4>
                                            </div>
                                        </div>
                                        <p class="px-2 mb-0">Please enter your email address and we'll send you instructions on how to reset your password.</p>
                                        <div class="card-content">
                                            <div class="card-body">
                                            @if (session('status'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('status') }}
                                                </div>
                                            @endif
                                                <form role="form" method="POST" action="{{ route('password.email') }}">
                                                    {{ csrf_field() }}
                                                    <div class="form-label-group">
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                        <label for="email">{{ __('Email') }}</label>

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </form>
                                                <div class="float-md-left d-block mb-1">
                                                    <a href="{{ route('login') }}" class="btn btn-outline-primary btn-block px-75">{{ __('Back to Login') }}</a>
                                                </div>
                                                <div class="float-md-right d-block mb-1">
                                                    <button type="submit" class="btn btn-primary btn-block px-75">
                                                        {{ __('Send Password Reset Link') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>

        </div>
    </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/js/core/app-menu.js"></script>
    <script src="/js/core/app.js"></script>
    <script src="/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
