<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Verified User : Free</title>
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

        <!--   Core JS Files   -->
        <script src="/assets/js/core/jquery.3.2.1.min.js"></script>
        <script src="/assets/js/core/popper.min.js"></script>
        <script src="/assets/js/core/bootstrap.min.js"></script>

        <!-- jQuery UI -->
        <script src="/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
        <script src="/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
        
        <!-- Moment JS -->
        <script src="/assets/js/plugin/moment/moment.min.js"></script>
        <!-- DateTimePicker -->
        <script src="/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

        <!-- Bootstrap Notify -->
        <script src="/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

        <!-- Bootstrap Toggle -->
        <script src="/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
        <!-- jQuery Scrollbar -->
        <script src="/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	    <script src="/assets/js/atlantis2.min.js"></script>
        
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
                background-color: #ffffff;
                background-position: center center;
                background-repeat: no-repeat;
                background-size: 150px;
                background-image: url(/assets/img/preload.gif);
            }
        </style>

    </head>
    <!-- BEGIN BODY -->
    <body class=" ">
    	<div class="wrapper horizontal-layout-3">
            <div class="preloader"></div>
            
            @include('includes.translator_mainheader')    

            @yield('content')

            {{-- @include('includes.translator_footer')     --}}

            {{-- @include('includes.translator_quicksidebar') --}}
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
                    $('.preloader').delay(200).fadeOut(800);
                }
            })

        </script>
    </body>

</html>
