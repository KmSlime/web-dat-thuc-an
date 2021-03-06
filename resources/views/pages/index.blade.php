@extends('layouts.master')
@section('content')
@if($message = Session::get('fail'))
    <script language="javascript">alert("{{$message}}");</script>
 @endif
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
                    <div class="image" style="background-image: url('{{asset('img/test slide.jpg')}}')">
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
                    <div class="image" style="background-image: url('{{ asset('img/test slide.jpg')}}">
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
                                            <td><a href="/home/food/{{$row->FoodCode_PK}}">
                                                <img alt="" class="" src="{{$row->FoodCoverPhoto}}"/>
                                            </a></td>
                                        </div>
                                        <div class="description">
                                            <td><h3 class="title">
                                            <a href="/home/food/{{$row->FoodCode_PK}}">{{$row->FoodName}}</a></h3></td>
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
@endsection
