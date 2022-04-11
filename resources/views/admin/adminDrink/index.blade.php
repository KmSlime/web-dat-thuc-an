@extends('layouts.master-admin')
@section('title','Admin')
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">          
              </div>
              <div class="card-body">
              @if($message = Session::get('success'))
              <div class="alert alert-success">
                <p>{{$message}}</p>
              </div>
              @endif
              <a class=" btn btn-primary" href="{{ route('drink.create') }}" style="float:right; margin-right: 10px; width: 100px;">thêm</a>
                <table id="data" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên đồ uống</th>     
                    <th>ảnh đồ uống</th> 
                    <th>loại đồ uống</th> 
                    <th>Tình trạng</th>
                    <th>Giá tiền</th>     
                    <th>Tác vụ</th>              
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($drinks as $row)
                  <tr>                 
                    <td>{{$row->DrinkCode_PK}}</td>
                    <td>
                        {{$row->DrinkName}}
                    </td>
                    <td>
                        <img src="{{$row->DrinkCoverPhoto}}" />
                    </td>
                    <td>
                        @foreach($dcs as $value)
                          @if($value->DrinkCategoryCode_PK == $row->DrinkCategoryCode_PFK)
                            {{$value->DrinkCategoryName}}
                         @endif
                       @endforeach
                    </td>
                    <td>
                      {{$row->Status}}
                    </td>
                    <td>
                      {{$row->DrinkPrice}}
                    </td>
                    <td>
                    <form action="{{ route('drink.destroy',$row->DrinkCode_PK) }}" method="Post">
                      <a href="{{ route('drink.edit',$row->DrinkCode_PK) }}" class="fas fa-wrench"></a>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class=" btn btn-primary">xoá</button>
                    </form>              
                    </td>
                  </tr>
                  @endforeach
                  </tbody>           
                </table>
                {!!$drinks->links()!!}
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
