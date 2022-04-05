@extends('layouts.master-admin')
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
            <div class="card-body">
              <button class=" btn btn-primary" style="float:right; margin-right: 10px; width: 100px;">thêm</button>
              <!-- <table id="data" class="table table-bordered table-hover"> -->
                <!-- <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên món ăn</th>
                    <th>Ảnh món ăn</th>
                    <th>Mô tả</th>
                    <th>Giá tiền</th>
                    <th>Tác vụ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>
                      Gà chiên
                    </td>
                    <td></td>
                    <td>ngon</td>
                    <td>12000đ</td>
                    <td>
                      <i class="fas fa-wrench"></i>

                      <i class="fas fa-times"></i>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>
                      Gà chiên
                    </td>
                    <td>chưa có</td>
                    <td>ngon</td>
                    <td>12000đ</td>
                    <td>
                      <i class="fas fa-wrench"></i>
                      <i class="fas fa-times"></i>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>
                      Gà chiên
                    </td>
                    <td>chưa có</td>
                    <td>ngon</td>
                    <td>12000đ</td>
                    <td>
                      <i class="fas fa-wrench"></i>

                      <i class="fas fa-times"></i>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>
                      Gà chiên
                    </td>
                    <td>chưa có</td>
                    <td>ngon</td>
                    <td>12000đ</td>
                    <td>
                      <i class="fas fa-wrench"></i>
                      <i class="fas fa-times"></i>
                    </td> -->
                  <!-- </tr> -->
                <!-- </tbody> -->
              <!-- </table> -->
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
                @if (isset($foods) && $foods->count() > 0)
                  @foreach($foods as $row)
                  <tr>
                    <td>{{$row->FoodCode_PK}}</td>
                    <td>{{$row->FoodName}}</td>
                    <td><img src="{{$row->FoodCoverPhoto}}" /></td>
                    <td>
                      @foreach($fcs as $value)
                      @if($value->FoodCategoryCode_PK == $row->FoodCategoryCode_PFK)
                      {{$value->FoodCategoryName}}
                      @endif
                      @endforeach
                    </td>
                    <td>{{$row->Status}}</td>
                    <td>{{$row->FoodPrice}}</td>
                    <td>
                      <a href="#"><i class="fas fa-wrench"></i></a>
                      <a href="#"><i class="fas fa-times"></i></a>
                    </td>
                  </tr>
                  @endforeach
                  @endif
                </tbody>
              </table>
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
</div>