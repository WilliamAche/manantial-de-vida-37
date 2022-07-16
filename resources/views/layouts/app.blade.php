<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{{-- Head --}}
@include('layouts.components.head')

<body>
    <div id="app">
        <!-- Navigation -->
        @include('layouts.components.navbar')
        {{-- Scripts --}}
        @include('layouts.components.script')
        {{-- Main content --}}
        <div class="loader"></div>

        @yield('content')
    </div>

    {{-- Footer --}}
    @include('layouts.components.footer')
    
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    {{-- script --}}
    <script type="text/javascript">
        $(window).on('load', function () {
            $(".loader").fadeOut("slow");
        });

    </script>

</body>

</html>
