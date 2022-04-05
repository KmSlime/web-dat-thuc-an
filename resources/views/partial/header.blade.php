<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layouts.master-header')
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo asset('img/apple-icon.png') ?>">
    <link rel="icon" type="<?php echo asset('image/png') ?>" sizes="96x96" href="<?php echo asset('img/favicon.png') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link rel="stylesheet" href="<?php echo asset('css/gaia.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.css') ?>">
    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('css/fonts/pe-icon-7-stroke.css') ?>" type="text/css">
</head>

<body>

    <!--   core js files    -->
    <!--header-->
    <nav class="navbar navbar-default navbar-fixed-top" color-on-scroll="200">
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a href="#" class="navbar-brand icon">
                    FOOD HOUSE
                </a>

            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-left navbar-uppercase">
                    <li>
                        <a href="/home">Trang chủ</a>
                    </li>
                    <li>
                        <a href="/menu">Menu</a>
                    </li>
                    <li>
                        <a href="#" target="_blank">Chuỗi nhà hàng</a>
                    </li>
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">tìm kiếm</button>
                    </form>
                    <li>
                        <a id="modal_trigger" href="#modal">Đăng nhập</a>
                    </li>
                    <li>
                        <a href="#" target="_blank">giỏ hàng</a>
                    </li>
                </ul>

            </div>

            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <!--login form-->
    <div id="modal" class="popupContainer" style="display:none;">
        <header class="popupHeader">
            <span class="header_title">Login</span>
            <span class="modal_close"><i class="fa fa-times"></i></span>
        </header>
        <section class="popupBody">
            <div class="social_login">
                <div class="clearfix">
                    <a class="social_box fb" href="#"><span class="icon_title">Connect with
                            Facebook</span></a> <a class="social_box google" href="#"><span class="icon_title">Connect with Google</span></a>
                </div>

                <div class="centeredText">
                    <span>Or use your Email address</span>
                </div>

                <div class="action_btns">
                    <div class="one_half">
                        <a class="btn" href="#" id="login_form" name="login_form">Login</a>
                    </div>

                    <div class="one_half last">
                        <a class="btn" href="#" id="register_form" name="register_form">Sign up</a>
                    </div>
                </div>
            </div>
            <div class="user_login">
                <form enctype="multipart/form-data" method="post">
                    @csrf
                    <!-- {{ csrf_field() }} -->
                    <label>Email / Username</label> <input type="text" name="email"><br>
                    <label>Password</label> <input type="password" name="password"><br>

                    <div class="checkbox">
                        <input id="remember" type="checkbox"> <label for="remember">Remember me on this computer</label>
                    </div>

                    <div class="action_btns">
                        <div class="one_half">
                            <a class="btn back_btn" href="#">Back</a>
                        </div>
                        <div class="one_half last">
                            <button class="btn btn_red" type="submit" name="Login">Login</button>
                        </div>
                    </div>
                </form>

                <a class="forgot_password" href="#">Forgot password?</a>
            </div>
            <div class="user_register">
                <form action="register" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <label>Email Address</label> <input type="email" name="email"><br>
                    <label>Password</label> <input type="password" name="password"><br>
                    {{--
                    <div class="checkbox">
                        <input id="send_updates" type="checkbox"> <label for="send_updates">Send me occasional email updates</label>
                    </div> --}}

                    <div class="action_btns">
                        <div class="one_half">
                            <a class="btn back_btn" href="#">Back</a>
                        </div>

                        <div class="one_half last">
                            <button class="btn btn_red" type="submit">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</body>