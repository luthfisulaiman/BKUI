<!doctype html>
<html>
<head>
    <?php echo $__env->make('includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body class="wrapper wow fadeIn">
    <div class="wrapper">
        <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div id="main" class="row">
                <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
    <div class="footer">
        <?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
</body>
</html>