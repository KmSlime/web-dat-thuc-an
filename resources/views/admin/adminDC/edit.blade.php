@extends('layouts.master-adminform')
@section('title','Thêm')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản lý thức ăn</h1>
        </div>

      </div>
    </div><!-- /.container-fluid -->
  </section>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">A
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý thể loại thức ăn</h1>
          </div>
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Thêm thực phẩm</h3>
                    </div>
                    <!-- /.card-header -->
                    <form>
                      <div class="card-body">
                        <div class="form-group">
                          <label for="">Tên thức ăn</label>
                          <input type="name" class="form-control" id="exampleInputEmail1" placeholder="gõ tên thức ăn">
                        </div>
                        <div class="form-group">
                          <label for="">Ảnh thức ăn</label>
                          <input type="name" class="form-control" id="exampleInputPassword1" placeholder="link ảnh">
                        </div>

                        <div class="form-group">
                          <label for="">Thể loại</label>
                          <select class="custom-select form-control-border">
                            <option>món ngon</option>
                            <option>gà</option>
                            <option>thịt</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="">Giá tiền</label>
                          <input type="number" class="form-control" id="exampleInputPassword1" placeholder="giá tiền">
                        </div>
                      </div>
                      <!-- /.card-body -->

                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Thêm</button>
                      </div>
                    </form>
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

        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
</div>