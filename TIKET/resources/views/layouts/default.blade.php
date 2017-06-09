<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body class="wrapper wow fadeIn">
    <div class="wrapper">
        @include('includes.header')

        <div id="main" class="row">
                @yield('content')
        </div>

        @include('includes.footer')
    </div>
</body>
</html>
