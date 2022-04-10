@extends('layouts.master-adminform')
@section('title','Thêm')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý nhân viên</h1>
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
                          <h3 class="card-title">Sửa nhân viên</h3>     
                      </div>
                      <!-- /.card-header -->
                          <form method="post" action="{{ route('staff.update', $staff->StaffID_PK )}}"> 
                          @csrf   
                          @method('PUT') 
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="">Họ</label>
                                  <input type="name" class="form-control" value="{{$staff->StaffFirstName}}" name="first" placeholder="họ">
                                  @error('first')
                                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                  @enderror
                                </div>
                                <div class="form-group">
                                  <label for="">Tên</label>
                                  <input type="name" class="form-control" value="{{$staff->StaffLastName}}"name="last" placeholder="tên">
                                  @error('last')
                                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                  @enderror
                                </div>
                                <div class="form-group">
                                  <label for="">Địa chỉ</label>
                                  <input type="name" class="form-control" value="{{$staff->StaffAddress}}"name="address" placeholder="tên">
                                  @error('address')
                                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                  @enderror
                                </div>
                                <div class="form-group">
                                  <label for="">Giới tính</label>
                                  <select class="custom-select form-control-border" name="gender" >                                
                                        <option value="{{$staff->StaffGender}}">{{$staff->StaffGender}}</option>                                     
                                        @if($staff->StaffGender == 'Nam')
                                        {
                                          <option value="Nữ">Nữ</option>
                                          <option value="Khác">Khác</option>
                                        }

                                       @elseif ($staff->StaffGender == 'Nữ')
                                        {
                                          <option value="Nam">Nam</option>
                                          <option value="Khác">Khác</option>
                                        }
                                        @else
                                        {
                                          <option value="Nữ">Nữ</option>
                                          <option value="Nam">Nam</option>
                                        }
                                        @endif
                                    </select>
                                    @error('gender')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                  @enderror
                                </div>
                                <div class="form-group">
                                  <label for="">Ngày Sinh</label>
                                  <input type="date" class="form-control" value="{{$staff->StaffDateOfBirth}}" name="birth"  placeholder="ngày sinh ">
                                  @error('birth')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                  @enderror
                                </div>
                                <div class="form-group">
                                  <label for="">Số điện thoại</label>
                                  <input type="text" class="form-control" value="{{$staff->StaffEmail}}" name="phone"  placeholder="Điện thoại">
                                  @error('phone')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                  @enderror
                                </div>
                                <div class="form-group">
                                  <label for="">Email</label>
                                  <input type="text" class="form-control" value="{{$staff->StaffFirstName}}" name="email"  placeholder="Điện thoại">
                                  @error('email')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                  @enderror
                                </div>
                              </div>
                              <!-- /.card-body -->
              
                              <div class="card-footer">
                                <a href="{{ route('staff.index') }}"class="btn btn-primary">trở về </a>
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