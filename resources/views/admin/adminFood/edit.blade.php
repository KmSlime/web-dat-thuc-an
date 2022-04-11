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
        <section class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card card-primary">
                      <div class="card-header">     
                          <h3 class="card-title">Sửa thức ăn</h3>     
                      </div>
                      <!-- /.card-header -->
                          <form method="post" action="{{ route('food.update',  $food->FoodCode_PK) }}"> 
                          @csrf       
                          @method('PUT')
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="">Tên thức ăn</label>
                                  <input type="name" class="form-control" name="name" value="{{$food->FoodName}}" placeholder="gõ tên thức ăn">
                                  @error('name')
                                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                  @enderror
                                </div>
                                <div class="form-group">
                                  <label for="">Ảnh thức ăn</label>
                                  <input type="name" class="form-control" name="image"  value="{{$food->FoodCoverPhoto}}" placeholder="link ảnh">
                                  @error('image')
                                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                  @enderror
                                </div>
                            
                                <div class="form-group">
                                  <label for="">Thể loại</label>
                                  <select class="custom-select form-control-border" name="category"  >
                                        <option value="{{$fc->FoodCategoryCode_PK}}">{{$fc->FoodCategoryName}}</option>
                                      @foreach($fcs as $row)
                                        <option value="{{$row->FoodCategoryCode_PK }}">{{$row->FoodCategoryName}}</option>
                                      @endforeach    
                                    </select>
                                    @error('category')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                  @enderror
                                </div>
                                <div class="form-group">
                                  <label for="">Giá tiền</label>
                                  <input type="number" class="form-control"  value="{{$food->FoodPrice}}" name="price"   placeholder="giá tiền">
                                  @error('price')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                  @enderror
                                </div>
                                <div class="form-group">
                                  <label for="">tình trạng</label>
                                  <input type="text" class="form-control"  value="{{$food->Status}}" name="status"  placeholder="tình trạng">
                                  @error('status')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                  @enderror
                                </div>
                              </div>
                              <!-- /.card-body -->
              
                              <div class="card-footer">
                                <a href="{{ route('food.index') }}"class="btn btn-primary">trở về </a>
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