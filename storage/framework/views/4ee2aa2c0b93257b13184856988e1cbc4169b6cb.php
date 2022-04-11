
<?php $__env->startSection('content'); ?>
<?php $imgtest = '<?php echo asset(' . 'img/test.jpg' . ')?>'; ?>
<div class="section section-item ">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-xs-2">
                <nav class="nav-sidebar">
                    <ul class="nav">
                        <li class ="active">
                            <a href="/menu">Tất cả</a>
                        </li>
                        <?php $__currentLoopData = $catergory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class ="active">
                            <a href="/menu/<?php echo e($row->FoodCategoryCode_PK); ?>"><?php echo e($row->FoodCategoryName); ?></a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </nav>
            </div>
            <div class="col-md-10 col-xs-6">
                <div class="main-content">
                    <div class="row">
                        <?php $__currentLoopData = $food; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 col-xs-3">
                            <div class="card card-member">
                                <div class="content">
                                    <div class="avatar avatar-danger">
                                        <img alt="..." class="" src="<?php echo e($row->FoodCoverPhoto); ?>" />
                                    </div>
                                    <div class="description">
                                        <h3 class="title"><?php echo e($row->FoodName); ?></h3>
                                    </div>
                                    <div class="description">
                                        <h3 class="title"><?php echo e($row->FoodPrice); ?> VNĐ</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH K:\projects\xampp\htdocs\dat-thuc-an\resources\views/pages/catergory.blade.php ENDPATH**/ ?>