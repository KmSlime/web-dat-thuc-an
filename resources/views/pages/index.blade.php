@extends('layouts.master')
<?php
if (isset($loginuser)){
    ob_start();
    session_start();
    foreach ($loginuser as $key) {
        $_SESSION['id_login'] = $key ->UserID_PK;
        echo $_SESSION['id_login'];
    }
}
?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="section section-small section-get-started">
                <div class="parallax filter">
                    <div class="image" style="background-image: url('assets/img/test slide.jpg')">
                    </div>
                    <div class="container">
                        <div class="title-area">
                            <h2 class="text-white">Thực phẩm chất lượng cao</h2>
                            <div class="separator line-separator">♦</div>
                            <p class="description"> Món ngon mỗi ngày</p>
                        </div>

                        <div class="button-get-started">
                            <a href="#" class="btn btn-danger btn-fill btn-lg">Đặt ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="section section-small section-get-started">
                <div class="parallax filter">
                    <div class="image" style="background-image: url('assets/img/test slide.jpg')">
                    </div>
                    <div class="container">
                        <div class="title-area">
                            <h2 class="text-white">Thực phẩm chất lượng cao</h2>
                            <div class="separator line-separator">♦</div>
                            <p class="description"> Món ngon mỗi ngày </p>
                        </div>
                        <div class="button-get-started">
                            <a href="#" class="btn btn-danger btn-fill btn-lg">Đặt ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ...
    </div>


    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>



<div class="section section-our-team-freebie">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="title-area">
                    <h2>Món bán chạy nhất</h2>
                    <div class="separator separator-danger">✻</div>
                </div>
                <div class="team">
                    <div class="row">
                        @foreach($listFood as $row)
                        <tr>
                            <div class="col-md-3 col-xs-3">
                                <div class="card card-member">
                                    <div class="content">
                                        <div class="avatar avatar-danger">
                                            <td><img alt="" class="" src="{{$row->FoodCoverPhoto}}" /></td>
                                        </div>
                                        <div class="description">
                                            <td><h3 class="title">{{$row->FoodName}}</h3></td>
                                        </div>
                                        <div class="description">
                                            <td><h3 class="title">{{$row->FoodPrice}} VNĐ</h3></td>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

