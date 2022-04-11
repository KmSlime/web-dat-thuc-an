@extends('layouts.master-adminform')
@section('title','Sửa')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý loại thức ăn</h1>
          </div>
      
        </div>
      </div><!-- /.container-fluid -->
    </section>

        <section class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card card-primary">
                      <div class="card-header">     
                          <h3 class="card-title">Sửa loại thức ăn</h3>     
                      </div>
                      <!-- /.card-header -->
                          <form method="post" action="{{ route('foodcategory.update',  $fc->FoodCategoryCode_PK) }} ">                   
                           @csrf           
                           @method('PUT')
                              <div class="card-body">
                                <div class="form-group">
                                  <label for=""></label>
                                  <input type="name" class="form-control" name="name" value="{{$fc->FoodCategoryName}}"/>
                                  @error('name')
                                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                  @enderror
                                </div>
                                       
                              <div class="card-footer">
                              <a href="{{ route('foodcategory.index') }}"class="btn btn-primary">trở về </a>
                                <button type="submit" class="btn btn-primary">Sửa</button>
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