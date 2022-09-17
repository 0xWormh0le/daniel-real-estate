
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Greenview </title>
        <link rel="icon" href="/assets/images/logo_icon.png" type="image/png" sizes="16x16">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts and icons -->
        <script src="/assets/js/plugin/webfont/webfont.min.js"></script>
        <script>
            WebFont.load({
                google: {"families":["Lato:300,400,700,900"]},
                custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['/assets/css/fonts.min.css']},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>


        @include('includes.admin_headerlink')

        <!--   Core JS Files   -->
        <script src="/assets/js/core/jquery.3.2.1.min.js"></script>
        <script src="/assets/js/core/popper.min.js"></script>
        <script src="/assets/js/core/bootstrap.min.js"></script>

        <!-- jQuery UI -->
        <script src="/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
        <script src="/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

        <!-- Bootstrap Notify -->
        <script src="/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

        <!-- Bootstrap Toggle -->
        <script src="/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
        <!-- jQuery Scrollbar -->
        <script src="/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


        @yield('template_linked_css')
            <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>

        <style>
            .preloader {
                position: fixed;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                z-index: 999999999999999999;
                background-color: transparent;
                background-position: center center;
                background-repeat: no-repeat;
                background-size: 75px;
                background-image: url(/assets/img/preload.gif);
            }
        </style>

    </head>
    <!-- BEGIN BODY -->
    <body class="non-printable" data-background-color="dark">
    	<div class="wrapper">
            <div class="preloader"></div>

            @include('includes.admin_mainheader')
            @include('includes.admin_sidebar')

            @yield('content')

            {{-- @include('includes.admin_quicksidebar') --}}
            @include('includes.chat')
        </div>

        <form id="downloadForm" target="iframeDownload" action="" method="post" style="display:none">
            <div id="formDataList">
            </div>
            {{ csrf_field() }}
        </form>

        <iframe name="iframeDownload" style="display:none" src=""></iframe>

        @yield('footer_scripts')

        <script src="/js/admin_pro.js"></script>

        <script>
            $(document).ready(function(){
                if($('.preloader').length){
                    $('.preloader').delay(100).fadeOut(200);
                }
            })

        </script>
        <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-162041736-1');
</script>
    </body>

</html>
