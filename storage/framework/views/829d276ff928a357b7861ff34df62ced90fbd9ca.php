
<?php $__env->startSection('content'); ?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="section section-small section-get-started">
                <div class="parallax filter">
                    <div class="image" style="background-image: url('<?php echo e(asset('img/test slide.jpg')); ?>')">
                    </div>
                    <div class="container">
                        <div class="title-area">
                            <h2 class="text-white">Thực phẩm chất lượng cao</h2>
                            <div class="separator line-separator">♦</div>
                            <p class="description"> Món ngon mỗi ngày</p>
                        </div>

                        <div class="button-get-started">
                            <a href="#" class="btn btn-danger btn-fill btn-lg">Đặt ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="section section-small section-get-started">
                <div class="parallax filter">
                    <div class="image" style="background-image: url('<?php echo e(asset('img/test slide.jpg')); ?>">
                    </div>
                    <div class="container">
                        <div class="title-area">
                            <h2 class="text-white">Thực phẩm chất lượng cao</h2>
                            <div class="separator line-separator">♦</div>
                            <p class="description"> Món ngon mỗi ngày </p>
                        </div>
                        <div class="button-get-started">
                            <a href="#" class="btn btn-danger btn-fill btn-lg">Đặt ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ...
    </div>


    <!-- Controls -->
 
</div>



<div class="section section-our-team-freebie">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="title-area">
                    <h2>Món bán chạy nhất</h2>
                    <div class="separator separator-danger">✻</div>
                </div>
                <div class="team">
                    <div class="row">
                        <?php $__currentLoopData = $listFood; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <div class="col-md-3 col-xs-3">
                                <div class="card card-member">
                                    <div class="content">
                                        <div class="avatar avatar-danger">
                                            <td><img alt="" class="" src="<?php echo e($row->FoodCoverPhoto); ?>" /></td>
                                        </div>
                                        <div class="description">
                                            <td><h3 class="title"><?php echo e($row->FoodName); ?></h3></td>
                                        </div>
                                        <div class="description">
                                            <td><h3 class="title"><?php echo e($row->FoodPrice); ?> VNĐ</h3></td>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH K:\projects\xampp\htdocs\dat-thuc-an\resources\views/pages/index.blade.php ENDPATH**/ ?>