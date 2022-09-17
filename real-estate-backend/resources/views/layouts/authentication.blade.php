<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@if (trim($__env->yieldContent('template_title')))@yield('template_title')  @endif </title>
        <meta name="description" content="">
        <meta name="author" content="Jeremy Kenedy">
        <link rel="icon" href="assets/images/logo_icon.png" type="image/png" sizes="16x16">

        {!! HTML::style(asset('/assets/fonts/fonts.googleapis.icons.css'), array('type' => 'text/css', 'rel' => 'stylesheet')) !!}

        <link rel="stylesheet" href="/auth/assets/css/fontawsom-all.min.css">

        <link rel="stylesheet" href="/auth/assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/auth/assets/css/style.css" />

        <!-- CSS Files -->
        <link rel="stylesheet" href="/assets/css/atlantis.css">
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link rel="stylesheet" href="/assets/css/demo.css">

        <script src="/assets/js/core/jquery.3.2.1.min.js"></script>

        <!-- Bootstrap Notify -->
        <script src="/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

        {{-- Head Scripts --}}
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>

    </head>
    <body>
        <div class="container-fluid ">
            <div class="container ">
                @include('partials.form-status')
                @yield('content')
            </div>
        </div>

        <script src="{{ mix('/js/mdl.js') }}"></script>
        @yield('footer_scripts')
        
        @include('includes.chat')
        
    </body>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162041736-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-162041736-1');
</script>
</html>