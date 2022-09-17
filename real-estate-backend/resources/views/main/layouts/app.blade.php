<!DOCTYPE html>
<!--[if IE 9 ]>   <html class="no-js oldie ie9 ie" lang="en-US" > <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="en-US" > <!--<![endif]-->
<head>
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- devices setting -->
    <meta name="viewport"   content="initial-scale=1,user-scalable=no,width=device-width">

    <!-- outputs by wp_head -->
    <title>Greenview</title>
    <link rel="icon" href="assets/images/logo_icon.png" type="image/png" sizes="16x16">

    @include('includes.headerlink')

</head>


<body class="home page-template-default page page-id-454 _auxels auxin-pro elementor-default elementor-page elementor-page-454 phlox-pro aux-dom-unready aux-full-width aux-resp aux-s-fhd aux-top-sticky  aux-page-animation aux-page-animation-fade"  data-page-animation="true" data-page-animation-type="fade" data-framed="">
    <div class="aux-page-animation-overlay"></div>
    <div id="inner-body">
        @include('includes.header')

        @yield('content')

        @include('includes.footer')

        @include('includes.sticky')

    </div>

    @include('includes.script')
    @include('includes.chat')

</body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162041736-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-162041736-1');
</script>
</html>
