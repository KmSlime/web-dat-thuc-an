@extends('layouts.master-2')
<!-- section list -->
<div class="section section-item ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="user-infor box">
                    <form action="" class="form-horizontal">
                        <div class="form-group">
                            <label for="first_name" class="col-xs-3 control-label">Họ tên</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="first_name" name="first_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-xs-3 control-label">Gmail</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="last_name" name="last_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-xs-3 control-label">Password</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="last_name" name="last_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-xs-3 control-label">Số điện thoại</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="last_name" name="last_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-xs-3 control-label">Địa chỉ</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="last_name" name="last_name">
                            </div>
                        </div>
                    </form>

                </div>
                <br></br>

            </div>
            <!--user content-->
            <div class="col-md-6 ">
                <div class="pay-infor box">
                    <table class="table  ">
                        <thead>
                            <tr>
                                <th>Tên hàng</th>
                                <th></th>
                                <th>
                                    <button type="" class="btn btn-default" style="float:right;">Thêm</button>
                                <th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Trà sữa</td>
                                <td>thêm đường</td>
                                <td>15.000đ</td>

                            </tr>
                            <tr>
                                <td>Trà sữa</td>
                                <td>thêm đường</td>
                                <td>15.000đ</td>
                            </tr>
                            <tr>
                                <td>Trà sữa</td>
                                <td>thêm đường</td>
                                <td>14.000đ</td>
                            </tr>
                        </tbody>
                    </table>
                    <h3>Thanh toán</h3>
                    <form action="" class="form-horizontal">
                        <div class="form-group">
                            <label for="first_name" class="col-xs-3 control-label">Tổng tiền</label>
                            <div class="col-xs-9">
                                <h3>12.000đ</h3>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-xs-3 control-label">Ghi chú</label>
                            <div class="col-xs-9">
                                <textarea id="" name="" placeholder="ghi chú"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-3 col-xs-9">
                                <button type="" class="btn btn-default">Thanh toán</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>