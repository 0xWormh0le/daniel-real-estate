<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Greenview</title>


</head>


<body>
    <div class="boxed_wrapper">

        <div class="preloader"></div>

        @yield('content')

        @include('includes.chat')

        @include('includes.translate_footer')

    </div>

    @include('includes.translate_script')

</body>
</html>
