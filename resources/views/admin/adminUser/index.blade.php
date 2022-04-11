@extends('layouts.master-admin')
@section('title','Admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý  người dùng/h1>
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
              @if($message = Session::get('success'))
              <div class="alert alert-success">
                <p>{{$message}}</p>
              </div>
              @endif
                 <a class=" btn btn-primary" href="{{ route('user.create')}}" style="float:right; margin-right: 10px; width: 100px;">thêm</a>
                <table id="data" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tài khoản</th>     
                    <th>Mật khảu</th> 
                    <th>Quyền</th>   
                    <th>Tác vụ</th>     
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($users as $row)
                  <tr>                 
                    <td>{{$row->UserID_PK }}</td>
                    <td>
                        {{$row->Username}}
                    </td> 
                    <td>
                        {{$row->Password}}
                    </td>
                    <td>
                        @foreach($pss as $value)
                          @if($value->PermissionID_PK  == $row->PermissionID_PFK )
                            {{$value->PermissionDescription}}
                         @endif
                       @endforeach
                    </td>             
                    <td>
                    <form action="{{ route('user.destroy',$row->UserID_PK) }}" method="Post">
                        <a href="{{ route('user.edit',$row->UserID_PK) }}" class="fas fa-wrench"></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class=" btn btn-primary">xoá</button>
                      </form>                            
                    </td>
                  </tr>
                  @endforeach
                  </tbody>           
                </table>
                {!!$users->links()!!}
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
  @endsection
