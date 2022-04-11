<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title', config('app.name', '@Master Layout')); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('css/gaia.css')); ?>">
    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <?php echo $__env->make('partial.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('partial.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
<script src="<?php echo e(asset('js\jquery.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js\jquery.leanModal.min.js')); ?>"></script>
<script src="<?php echo e(asset('js\boostrap.js')); ?>" type="text/javascript"></script>
<!--  js library for devices recognition -->
<script type="text/javascript" src="<?php echo e(asset('js\modernizr.js')); ?>"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="<?php echo e(asset('js\gaia.js')); ?>"></script>
<script type="text/javascript">
    // Plugin options and our code
    $("#modal_trigger").leanModal({
        top: 100,
        overlay: 0.6,
        closeButton: ".modal_close"
    });

    $(function() {
        // Calling Login Form
        $("#login_form").click(function() {
            $(".social_login").hide();
            $(".user_login").show();
            return false;
        });

        // Calling Register Form
        $("#register_form").click(function() {
            $(".social_login").hide();
            $(".user_register").show();
            $(".header_title").text('Register');
            return false;
        });

        // Going back to Social Forms
        $(".back_btn").click(function() {
            $(".user_login").hide();
            $(".user_register").hide();
            $(".social_login").show();
            $(".header_title").text('Login');
            return false;
        });
    });
</script>

</html><?php /**PATH K:\projects\xampp\htdocs\dat-thuc-an\resources\views/layouts/master-2.blade.php ENDPATH**/ ?>