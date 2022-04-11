@extends('layouts.master-2')
@section('content')
<!-- section list -->
<div class="section section-item ">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-4">
                <nav class="nav-sidebar">
                    <ul class="nav">
                        <li>
                            <a href="#">Thông tin</a>
                        </li>
                        <li class="active">
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
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Mã</th>
                                <th>Tên hàng</th>
                                <th>Ngày nhận</th>
                                <th>Tiền</th>
                                <th>CTDH</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Trà sữa</td>
                                <td>10/7</td>
                                <td>15.000đ</td>
                                <td>
                                    <button type="" class="btn btn-default">Lưu</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Trà sữa</td>
                                <td>10/7</td>
                                <td>15.000đ</td>
                                <td>
                                    <button type="" class="btn btn-default">Lưu</button>

                                </td>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Trà sữa</td>
                                <td>10/7</td>
                                <td>15.000đ</td>
                                <td>
                                    <button type="" class="btn btn-default">Lưu</button>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection