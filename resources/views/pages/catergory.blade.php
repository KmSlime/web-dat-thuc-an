@extends('layouts.master-2')
@section('content')
<div class="section section-item ">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-xs-2">
                <nav class="nav-sidebar">
                    <ul class="nav">
                        <li class ="active">
                            <a href="/menu">Tất cả</a>
                        </li>
                        @foreach($catergory as $row)
                        <li class ="active">
                            <a href="/menu/{{$row->FoodCategoryCode_PK}}">{{$row->FoodCategoryName}}</a>
                        </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            <div class="col-md-10 col-xs-6">
                <div class="main-content">
                    <div class="row">
                        @foreach($food as $row)
                        <div class="col-md-4 col-xs-3">
                            <div class="card card-member">
                                <div class="content">
                                    <div class="avatar avatar-danger">
                                        <img alt="..." class="" src="{{$row->FoodCoverPhoto}}" />
                                    </div>
                                    <div class="description">
                                        <h3 class="title">{{$row->FoodName}}</h3>
                                    </div>
                                    <div class="description">
                                        <h3 class="title">{{$row->FoodPrice}} VNĐ</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection