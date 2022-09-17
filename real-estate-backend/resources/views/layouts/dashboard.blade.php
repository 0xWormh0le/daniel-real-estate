<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
	<meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Greenview</title>
    


    @yield('template_linked_fonts')

        {{-- MDL CSS Library --}}
        @if (Auth::User() && (Auth::User()->profile) && $theme->link != null && $theme->link != 'null')
            <link rel="stylesheet" type="text/css" href="{{ asset('css/mdl-themes/' . $theme->link) }}" id="user_theme_link">
        @else
            <link rel="stylesheet" type="text/css" href="{{ asset('css/mdl-themes/material.min.css') }}" id="user_theme_link">
        @endif

        {{-- Custom App Styles --}}
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

        @yield('template_linked_css')

        <style type="text/css">
            @yield('template_fastload_css')

            @if (Auth::User() && (Auth::User()->profile) && (Auth::User()->profile->avatar_status == 0))
                .user-avatar-nav {
                    background: url({{ Gravatar::get(Auth::user()->email) }}) 50% 50% no-repeat;
                    background-size: auto 100%;
                }
            @endif

        </style>

        {{-- Scripts --}}
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>

        @yield('head')
        <script src="/assets/js/core/jquery.3.2.1.min.js"></script>

</head>


<body data-background-color="dark" style = "margin-top: 30px">
    <div class="boxed_wrapper bg-color-gray" style="min-height:88.6%">

        <div class="preloader"></div>

       

        @yield('content')

        @include('includes.chat')

    </div>
    
    <form id="downloadForm" target="iframeDownload" action="" method="post" style="display:none">
        <div id="formDataList">
    </div>
        {{ csrf_field() }}
    </form>

    {{-- Scripts --}}
        {!! HTML::script('/material/js/material.min.js', array('type' => 'text/javascript')) !!}
        {!! HTML::script('js/dialog-polyfill.min.js', array('type' => 'text/javascript')) !!}

        <script src="{{ mix('/js/mdl.js') }}"></script>

        @yield('footer_scripts')


    <script src="/js/download.js"></script>


</body>
</html>
