<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
    <div id="app">

        @include('includes.nav')

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')

</body>
</html>
