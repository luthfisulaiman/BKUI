<!doctype html>
<html>
    <head>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/styles.css')}}" rel="stylesheet">
        <link rel="shortcut icon" href="../public/images/favicon.png" type="image/x-icon" />
    </head>
    <body>
        <div class="wrapper">
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @if (Auth::check())
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ url('/login') }}">Login</a>
                            <a href="{{ url('/register') }}">Register</a>
                        @endif
                    </div>
                @endif

                <div class="content">
                    <h1 style="font-size:9em; color: black;" class="title m-b-md">
                        Tiket BKUI
                    </h1>

                    <div class="links">
                        <a href="">Aktivasi Tiket Voucher</a>
                        <a href="">Beli Tiket Online</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
