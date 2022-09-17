
<body class="vertical-layout vertical-menu-modern 2-columns " data-menu="vertical-menu-modern" data-col="2-columns">
  <div class="absolute-center">
    <div class="loader"></div>
  </div>
  <div class="vertical-body">
  {{-- Include Sidebar --}}
    @include('panels.sidebar')

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <!-- BEGIN: Header-->
        <!-- <div class="content-overlay"></div> -->
        <!-- <div class="header-navbar-shadow"></div> -->

        {{-- Include Navbar --}}
        @include('panels.navbar')

            <div class="content-wrapper">
                {{-- Include Breadcrumb --}}
                    @include('panels.breadcrumb')
                <div class="content-body">
                    {{-- Include Page Content --}}
                    <input type="hidden" id="api_url" value={{ env('API_URL') }}>
                    @yield('content')
                </div>
            </div>

    </div>
    <!-- End: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    {{-- include footer --}}
    @include('panels/footer')

    {{-- include default scripts --}}
    @include('panels/scripts')
  </div>
</body>
</html>
