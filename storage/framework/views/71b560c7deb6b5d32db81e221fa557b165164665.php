
<?php $__env->startSection('title','Admin'); ?>
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản lý thực phẩm</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <button class=" btn btn-primary" style="float:right; margin-right: 10px; width: 100px;">thêm</button>
              <table id="data" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên món ăn</th>
                    <th>ảnh món ăn</th>
                    <th>loại món ăn</th>
                    <th>Tình trạng</th>
                    <th>Giá tiền</th>
                    <th>Tác vụ</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($row->FoodCode_PK); ?></td>
                    <td>
                      <?php echo e($row->FoodName); ?>

                    </td>
                    <td>
                      <img src="<?php echo e($row->FoodCoverPhoto); ?>" />
                    </td>
                    <td>
                      <?php $__currentLoopData = $fcs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php if($value->FoodCategoryCode_PK == $row->FoodCategoryCode_PFK): ?>
                      <?php echo e($value->FoodCategoryName); ?>

                      <?php endif; ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <td>
                      <?php echo e($row->Status); ?>

                    </td>
                    <td>
                      <?php echo e($row->FoodPrice); ?>

                    </td>
                    <td>
                      <a href="#"><i class="fas fa-wrench"></i></a>

                      <a href="#"><i class="fas fa-times"></i></a>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <?php $__env->stopSection(); ?>
</div>
<?php echo $__env->make('layouts.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH K:\projects\xampp\htdocs\dat-thuc-an\resources\views/admin/adminFood/index.blade.php ENDPATH**/ ?>