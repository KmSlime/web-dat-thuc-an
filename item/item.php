<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>web</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/gaia.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top" color-on-scroll="200">
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#example">
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
                        <a href="#" target="_blank">Trang chủ</a>
                    </li>
                    <li>
                        <a href="#" target="_blank">Menu</a>
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
                            <a href="#" target="_blank">Đăng nhập</a>                         
                    </li>  
                    <li>
                        <a href="#" target="_blank">giỏ hàng</a>
                    </li>                                  
                </ul>
                
            </div>

            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- section list -->
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
                        <div class="item-form__info-list">
                            <div class="item-form__info-item">
                                <p class="item-form__info-title">Giá tiền</p>
                                <div class="item-form__info-content">
                                    <h4> 43.000 đ</h4>
                                </div>
                            </div>
                            <div class="item-form__info-item item-option">
                                <h4 class="item-form__info-title">Kích Thước</h4>
                                    <span data-option-value> lớn </span>
                                    <span data-option-value> nhỏ </span>
                                    <span data-option-value> trung bình</span>
                                </div>
                                
                            </div>
                            <div class="item-form__info-item item-option">
                                <h4 class="item-form__info-title">Topping</h4>
                                <div class=" ">
                                    <span data-option-value="">thêm rau </span>
                                    <span data-option-value="">thêm canh </span>
                                    <span data-option-value="">thêm trứng </span>
                                    <span data-option-value="">thêm rau </span>
                                    <span data-option-value="">thêm canh </span>
                                    <span data-option-value="">thêm trứng </span>
                                </div>
                            </div>
                            <div class="item-form__info-item ">
                                <h4 class="item-form__info-title">Số Lượng</h4>
                                <div class="item-form__info-content">
                                    <div class="quantity-selector quantity-selector--item">
                                        <button type="button" class="quantity-selector__button"
                                            data-action="decrease-picker-quantity" aria-label="Giảm số lượng xuống 1"
                                            title="Giảm số lượng xuống 1" value="1">
                                            <svg focusable="false" class="icon icon--minus" viewBox="0 0 10 2"
                                                role="presentation">
                                                <path d="M10 0v2H0V0z" fill="currentColor"></path>
                                            </svg></button>
                                        <input name="quantity" aria-label="Số lượng" class="quantity-selector__value"
                                            inputmode="numeric" value="1" size="3">
                                        <button type="button" class="quantity-selector__button"
                                            data-action="increase-picker-quantity" aria-label="Tăng số lượng lên 1"
                                            title="Tăng số lượng lên 1">
                                            <svg focusable="false" class="icon icon--plus" viewBox="0 0 10 10"
                                                role="presentation">
                                                <path d="M6 4h4v2H6v4H4V6H0V4h4V0h2v4z" fill="currentColor"
                                                    fill-rule="evenodd"></path>
                                            </svg></button>
                                    </div>
                                </div>
                            </div>
                            <div class="item-buy ">
                                <button  class=" btn btn-default">mua</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <footer class="footer footer-big footer-color-black" data-color="black">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-3">
                    <div class="info">
                        <h5 class="title">Company</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">Đặt Hàng</a>
                                </li>
                                <li>
                                    <a href="#">Về chúng tôi</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1 col-sm-3">
                    <div class="info">
                        <h5 class="title"> Help and Support</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#">How it works</a>
                                </li>
                                <li>
                                    <a href="#">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a href="#">Company Policy</a>
                                </li>
                                <li>
                                    <a href="#">Money Back</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="info">
                        <h5 class="title">Latest News</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i> <b>Get Shit Done</b> The best kit in the market is
                                        here, just give it a try and let us...
                                        <hr class="hr-small">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i> We've just been featured on <b> Awwwards
                                            Website</b>! Thank you everybody for...
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-1 col-sm-3">
                    <div class="info">
                        <h5 class="title">Follow us on</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#" class="btn btn-social btn-facebook btn-simple">
                                        <i class="fa fa-facebook-square"></i> Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-reddit btn-simple">
                                        <i class="fa fa-google-plus-square"></i> Google+
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <hr>
            <div class="copyright">
                ©
                <script> document.write(new Date().getFullYear()) </script> Creation Of Ryuu
            </div>
        </div>
    </footer>

</body>

<!--   core js files    -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.js" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="assets/js/modernizr.js"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="assets/js/gaia.js"></script>


</html>