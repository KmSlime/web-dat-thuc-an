<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title', config('app.name', '@Master Layout')); ?></title>

    
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/gaia.css')); ?>">
    <?php echo $__env->yieldContent('style-libraries'); ?>
    
    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
    
    <?php echo $__env->make('pages.footer-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(asset('js\jquery.leanModal.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('content'); ?>
    
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html><?php /**PATH K:\projects\xampp\htdocs\dat-thuc-an\resources\views/layouts/master-header.blade.php ENDPATH**/ ?>