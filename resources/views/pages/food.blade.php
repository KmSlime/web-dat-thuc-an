@extends('layouts.master-2')
@section('content')
    <div class="section section-item ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-4">
                    <div class="item-preview">
                        <img alt="..." class="item-image" src="{{$listFood->FoodCoverPhoto}}" />
                    </div>
                    <div class="item-decription">
                        <h2>Thể loại</h2>
                        <p>{{$category->FoodCategoryName}}</p>
                    </div>
                </div>
                <!--user content-->
                <div class="col-md-6 col-xs-6">
                    <div class="item-detail">
                        <h3>{{$listFood->FoodName}}</h3>
                        <form action="/home/food/cart/{{$listFood->FoodCode_PK}}" class="form-horizontal" method="get">
                            <div class="form-group">
                                <label for="first_name" class="col-xs-3 control-label">Giá tiền</label>
                                <div class="col-xs-9">
                                    <p>{{$listFood->FoodPrice}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="last_name" class="col-xs-3 control-label">Số lượng</label>
                                <div class="col-xs-9">
                                        <input type="number" name="" class="form-control input-number" value="1">
                                    </div>
                                </div>
                            <div class="form-group">
                                <div class="col-xs-offset-3 col-xs-9">
                                        <button type="submit" class="btn btn-default">thêm vào giỏ hàng</button>
                                    </div>
                            </div>
                        </div>          
                           
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endSection