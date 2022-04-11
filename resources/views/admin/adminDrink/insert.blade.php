@extends('layouts.master-adminform')
@section('title','Thêm')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý thức uống</h1>
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
                          <h3 class="card-title">Thêm thức uống</h3>     
                      </div>
                      <!-- /.card-header -->
                          <form method="post" action="{{ route('drink.store') }}"> 
                          @csrf       
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="">Tên thức uống</label>
                                  <input type="name" class="form-control" name="name" placeholder="gõ tên thức ăn">
                                  @error('name')
                                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                  @enderror
                                </div>
                                <div class="form-group">
                                  <label for="">Ảnh thức uống</label>
                                  <input type="name" class="form-control" name="image" placeholder="link ảnh">
                                  @error('image')
                                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                  @enderror
                                </div>
                            
                                <div class="form-group">
                                  <label for="">Thể loại</label>
                                  <select class="custom-select form-control-border"  name="category" >
                                      @foreach($dcs as $row)
                                        <option value="{{$row->DrinkCategoryCode_PK }}">{{$row->DrinkCategoryName}}</option>
                                      @endforeach    
                                    </select>
                                    @error('category')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                  @enderror
                                </div>
                                <div class="form-group">
                                  <label for="">Giá tiền</label>
                                  <input type="number" class="form-control"  name="price"  placeholder="giá tiền">
                                  @error('price')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                  @enderror
                                </div>
                                <div class="form-group">
                                  <label for="">tình trạng</label>
                                  <input type="text" class="form-control"  name="status"  placeholder="tình trạng">
                                  @error('status')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                  @enderror
                                </div>
                              </div>
                              <!-- /.card-body -->
              
                              <div class="card-footer">
                                <a href="{{ route('drink.index') }}"class="btn btn-primary">trở về </a>
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