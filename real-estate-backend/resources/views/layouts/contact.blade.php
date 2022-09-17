<!DOCTYPE html>
<!--[if IE 9 ]>   <html class="no-js oldie ie9 ie" lang="en-US" > <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="en-US" > <!--<![endif]-->
<head>
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- devices setting -->
    <meta name="viewport"   content="initial-scale=1,user-scalable=no,width=device-width">

    <!-- outputs by wp_head -->
    <title>Greenview</title>
    
    @include('includes.headerlink')

    {{-- Scripts --}}
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>


<body class="home page-template-default page page-id-454 _auxels auxin-pro elementor-default elementor-page elementor-page-454 phlox-pro aux-dom-unready aux-full-width aux-resp aux-s-fhd aux-top-sticky  aux-page-animation aux-page-animation-fade"  data-page-animation="true" data-page-animation-type="fade" data-framed="">
    <div class="aux-page-animation-overlay"></div>
    <div id="inner-body">
        @include('includes.header')
        
        @yield('content')

        @include('includes.footer_contact')

        @include('includes.sticky')
        
    </div>

    @include('includes.script')
    @include('includes.chat')
    
</body>
</html>
