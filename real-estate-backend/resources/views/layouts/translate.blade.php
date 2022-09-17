<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">

	<title>Greenview</title>

</head>


<body>
    <div class="boxed_wrapper">

        <div class="preloader"></div>


        @yield('content')

        @include('includes.translate_footer')

    </div>
    
    @include('includes.translate_script')
    @include('includes.chat')

</body>
</html>
