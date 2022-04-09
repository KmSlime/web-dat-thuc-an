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
  <h1>Quản lý thể loại thức ăn</h1>
    <section class="content-header">
      <div class="container-fluid">
        
        <div class="row mb-2">
          <div class="col-sm-1">

          </div>
        <section class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card card-primary">
                      <div class="card-header">     
                          <h3 class="card-title">Thêm thực phẩm</h3>     
                      </div>
                      <!-- /.card-header -->
                      <form action="/admin/postCreatefood" method="get">
                        {{ csrf_field() }}
                              <input type="hidden" name="_method" value="get">  
                              <div class="card-body">
                                <div class="form-group">
                                  <label >FoodName</label>
                                  <input type="text" name="FoodName" class="form-control" placeholder="gõ tên thức ăn">
                                </div>
                                <div class="form-group">
                                  <label >FoodPrice</label>
                                  <input type="text" name="FoodPrice" class="form-control"  placeholder="gõ tên thức ăn">
                                </div>
                                <div class="form-group">
                                  <label >FoodCategoryCode_PFK</label>
                                  <input type="text" name="FoodCategoryCode_PFK" class="form-control"  placeholder="gõ tên thức ăn">
                                </div>
                                <div class="form-group">
                                  <label >Status</label>
                                  <input type="text" name="Status" class="form-control" placeholder="gõ tên thức ăn">
                                </div>
                                <div class="form-group">
                                  <label >FoodCoverPhoto</label>
                                  <input type="text" name="FoodCoverPhoto" class="form-control"  placeholder="link ảnh">
                                </div>
                              <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="createfood">Thêm</button>
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
       </div>
      </div><!-- /.container-fluid -->
    </section>
     <!-- Main content -->
     
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @endsection