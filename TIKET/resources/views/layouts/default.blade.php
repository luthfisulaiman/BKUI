<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body class="wrapper">
    <div class="wrapper">
        @include('includes.header')

        <div id="main" class="row">
                @yield('content')
        </div>
    </div>
        @include('includes.footer')
</body>
</html>