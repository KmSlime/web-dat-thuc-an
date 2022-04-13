@extends('layouts.master-admin')
@section('title','Admin')
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
        <div class="col-12">
          <div class="card">
            <div class="card-header">
            </div>
            <!-- /.card-header -->
            <!-- có làm bảng khác nhớ copy khúc này-->
            <div class="card-body">
            @if($message = Session::get('success'))
              <div class="alert alert-success">
                <p>{{$message}}</p>
              </div>
              @endif
              <a class=" btn btn-primary" href="{{ route('food.create') }}" style="float:right; margin-right: 10px; width: 100px;">thêm</a>
            <!-- rồi sửa lại -->
              <table id="data" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên món ăn</th>
                    <th>ảnh món ăn</th>
                    <th>loại món ăn</th>
                    <th>Tình trạng</th>
                    <th>Giá tiền</th>
                    <th>Tác vụ</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($foods as $row)
                  <tr>
                    <td>{{$row->FoodCode_PK}}</td>
                    <td>
                      {{$row->FoodName}}
                    </td>
                    <td>
                      <img src="{{$row->FoodCoverPhoto}}" />
                    </td>
                    <td>
                      @foreach($fcs as $value)
                      @if($value->FoodCategoryCode_PK == $row->FoodCategoryCode_PFK)
                      {{$value->FoodCategoryName}}
                      @endif
                      @endforeach
                    </td>
                    <td>
                      {{$row->Status}}
                    </td>
                    <td>
                      {{$row->FoodPrice}}
                    </td>
                    <td>
                       <!-- có làm bảng khác nhớ copy khúc này-->
                    <form action="{{ route('food.destroy',$row->FoodCode_PK) }}" method="Post">
                      <a href="{{ route('food.edit',$row->FoodCode_PK) }}" class="fas fa-wrench"></a>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class=" btn btn-primary">xoá</button>
                    </form>  
                      <!-- rồi sửa lại -->    
                  </tr>
                  @endforeach
                </tbody>
           
              </table>
              {!!$foods->links()!!}
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
</div>