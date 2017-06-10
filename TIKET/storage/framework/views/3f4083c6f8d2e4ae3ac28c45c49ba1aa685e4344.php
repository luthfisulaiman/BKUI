<!doctype html>
<html>
    <head>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet">
        <link rel="shortcut icon" href="../public/images/favicon.png" type="image/x-icon" />
    </head>
    <body>
        <div class="wrapper">
            <div class="flex-center position-ref full-height">
                <?php if(Route::has('login')): ?>
                    <div class="top-right links">
                        <?php if(Auth::check()): ?>
                            <a href="<?php echo e(url('/home')); ?>">Home</a>
                        <?php else: ?>
                            <a href="<?php echo e(url('/login')); ?>">Login</a>
                            <a href="<?php echo e(url('/register')); ?>">Register</a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

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
