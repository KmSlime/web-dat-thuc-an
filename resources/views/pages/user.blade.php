@extends('layouts.master-2')
@section('content')
<!-- section list -->
<div class="section section-item ">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-4">
                <nav class="nav-sidebar">
                    <ul class="nav">
                        <li class="active">
                            <a href="#">Thông tin</a>
                        </li>
                        <li>
                            <a href="#">Lịch Sử Đơn Hàng</a>
                        </li>
                        <li>
                            <a href="#">Dăng Xuất</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--user content-->
            <div class="col-md-7 col-xs-6">
                <div class="user-content">
                    <form action="" class="form-horizontal">
                        <div class="form-group">
                            <label for="first_name" class="col-xs-3 control-label">Họ</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="first_name" name="first_name" value="{{$customer->CustomerLastName}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="first_name" class="col-xs-3 control-label">Tên</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="first_name" name="first_name" value="{{$customer->CustomerFirstName}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-xs-3 control-label">UserName</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="last_name" name="last_name" value="{{$userSelect->Username}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-xs-3 control-label">Password</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="last_name" name="last_name" value="{{$userSelect->Password}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-xs-3 control-label">Số điện thoại</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="last_name" name="last_name"value="{{$customer->CustomerPhoneContact}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-3 col-xs-9">
                                <button type="" class="btn btn-default">Lưu</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection