@extends('layouts.master-2')
@section('content')
<!-- section list -->
<div class="section section-item ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="user-infor box">
                    <form action="/home/CartSubmit" class="form-horizontal" method="get">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" name="IDUser" value="<?php if(isset($customer)) echo $userSelect->	UserID_PK?>" />
                        <div class="form-group">
                            <label for="last_name" class="col-xs-3 control-label">Họ</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="last_name" name="CustomerFirstName" value="<?php if(isset($customer)) echo $customer->CustomerFirstName?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-xs-3 control-label">Tên</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="last_name" name="CustomerLastName" value="<?php if(isset($customer)) echo $customer->CustomerLastName?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-xs-3 control-label">Địa chỉ</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="last_name" name="CustomerAddress" value="<?php if(isset($customer)) echo $customer->CustomerAddress?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-xs-3 control-label">Số điện thoại</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="last_name" name="CustomerPhoneContact" value="<?php if(isset($customer)) echo $customer->CustomerPhoneContact	?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-xs-3 control-label">Email</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="last_name" name="CustomerEmail" value="<?php if(isset($customer)) echo $customer->CustomerEmail?>">
                            </div>
                        </div>

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
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($content as $row)
                                <td> {{$row->name}}</td>
                                <td>{{$row->price}}</td>
                                <td>  
                                 {{$row->qty}}
                                </td>
                                    <td><a href="/home/CartSubmit/{{$row->id}}" class="btn btn-default" >xoá</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <h3>Thanh toán</h3>
                        <div class="form-group">
                            <label for="first_name" class="col-xs-3 control-label">Tổng tiền</label>
                            <div class="col-xs-9">
                                <?php
                                $Sum=0; 
                                foreach($content as $sumprice)
                                {
                                    $Sum += $sumprice->qty*$sumprice->price;
                                }?>
                                <label type="number" class="form-control" id="last_name">{{$Sum}}</label>
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
                                <button type="submit" class="btn btn-default" name="CartSubmit">Thanh toán</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection