@extends('layouts.master-adminform')
@section('title','Thêm')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý tài khoản</h1>
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
                          <h3 class="card-title">Thêm tài khoản</h3>     
                      </div>
                      <!-- /.card-header -->
                          <form method="post" action="{{ route('user.store') }}"> 
                          @csrf       
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="">Tài khoản</label>
                                  <input type="name" class="form-control" name="username" placeholder="tài khoản">
                                  @error('username')
                                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                  @enderror
                                </div>
                                <div class="form-group">
                                  <label for="">Mật khẩu</label>
                                  <input type="name" class="form-control" name="password" placeholder="mật khẩu">
                                  @error('pass')
                                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                  @enderror
                                </div>
                                <div class="form-group">
                                  <label for="">Quyền</label>
                                  <select class="custom-select form-control-border"  name="permission" >
                                      @foreach($pss as $row)
                                        <option value="{{$row->PermissionID_PK}}">{{$row->PermissionDescription}}</option>
                                      @endforeach    
                                    </select>
                                    @error('category')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                  @enderror
                                </div>                          
                              </div>
                              <!-- /.card-body -->
              
                              <div class="card-footer">
                                <a href="{{ route('user.index') }}"class="btn btn-primary">trở về </a>
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