
<?php $__env->startSection('title','Admin'); ?>
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý  nhân viên</h1>
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
                    <th>Họ nhân viên</th>     
                    <th>Tên nhân viên</th> 
                    <th>Địa chỉ</th> 
                    <th>Điện thoại</th>
                    <th>Email</th>       
                    <th>Tác vụ</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $staffs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>                 
                    <td><?php echo e($row->StaffID_PK); ?></td>
                    <td>
                        <?php echo e($row->StaffLastName); ?>

                    </td>
                    <td>
                        <?php echo e($row->StaffFirstName); ?>

                    </td>
                    <td>
                        <?php echo e($row->StaffAddress); ?>

                    </td>                   
                    <td>
                      <?php echo e($row->StaffPhoneContact); ?>

                    </td>
                    <td>
                      <?php echo e($row->StaffEmail); ?>

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

<?php echo $__env->make('layouts.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH K:\projects\xampp\htdocs\dat-thuc-an\resources\views/admin/adminStaff/index.blade.php ENDPATH**/ ?>