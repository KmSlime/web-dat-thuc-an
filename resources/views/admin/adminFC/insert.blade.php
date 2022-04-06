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
      <div class="container-fluid">
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
                          <form method="post" action="">
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="Tên loại">Tên loại thức ăn</label>
                                  <input type="text" name="tên loại"  class="form-control"  placeholder="gõ tên thức ăn">
                                </div>
                                
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