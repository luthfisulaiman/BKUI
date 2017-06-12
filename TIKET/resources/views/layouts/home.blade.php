<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body class="wrapper">
    <div class="wrapper">
        @include('includes.home-head')

        <div id="main" class="row">
            @yield('content')
        </div>
    </div>
        @include('includes.home-footer')
</body>
</html>