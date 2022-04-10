@extends('layouts.master-2')
@section('content')
    <div class="section section-item ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-4">
                    <div class="item-preview">
                        <img alt="..." class="item-image" src="assets\img\test.jpg" />
                    </div>
                    <div class="item-decription">
                        <h2>Mô tả</h2>
                        <p> món này rất ngon</p>
                    </div>
                </div>
                <!--user content-->
                <div class="col-md-6 col-xs-6">
                    <div class="item-detail">
                        <h3>Cơm sườn</h3>
                        <form action="" class="form-horizontal">
                            <div class="form-group">
                                <label for="first_name" class="col-xs-3 control-label">Giá tiền</label>
                                <div class="col-xs-9">
                                    <p>12.000đ</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="last_name" class="col-xs-3 control-label">Số lượng</label>
                                <div class="col-xs-9">
                                        <input type="number" name="" class="form-control input-number" value="1">
                                    </div>
                                </div>
                            </div>          
                            <div class="form-group">
                                <div class="col-xs-offset-3 col-xs-9">
                                    <button type="" class="btn btn-default">thêm vào giỏ hàng</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endSection