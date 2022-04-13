<?php

use Illuminate\Contracts\Session\Session;

    if(isset($enLogout) && session_start()==true)
    {
            $enLogout = false;
            session_destroy();
    }
   session_start();
   if(isset($loginuser))
   {
       foreach ($loginuser as $key){
            $_SESSION['Username'] =$key->Username;
            $_SESSION['IDUser'] =$key->UserID_PK;
            
        }
   }
   
   
?>
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
                <a href="/home" class="navbar-brand icon">
                     FOODHOUSE
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
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">tìm kiếm</button>
                    </form>
                    <li>
                        <?php
                         if (isset($_SESSION['Username'])) {
                            echo "<a id="."modal_trigger"." href="."/user/".$_SESSION['Username'].">".$_SESSION['Username']."</a>";
                            echo "<li><a id="."modal_trigger"." href="."/logout".">Đăng xuất</a></li>";
                        } else {
                            echo "<a id="."modal_trigger"." href="."#modal".">Đăng nhập</a>";
                        }
                        ?>
                    </li>
                    <li>
                        <?php
                        if (isset($_SESSION['Username'])) {
                            echo "<a id="."modal_trigger"." href="."/home/cart/".$_SESSION['Username'].">Giỏ hàng</a>"; //chuyển tới đường link deli
                        }
                        else {
                            echo "<a id="."modal_trigger"." href="."/home/cart".">Giỏ hàng</a>";
                        }
                        ?>
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
                <form action="login" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
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