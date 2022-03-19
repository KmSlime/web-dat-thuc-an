<?php include_once("header.php"); ?>
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
                        <form action="" class="form-horizontal">
                            <div class="form-group">
                                <label for="first_name" class="col-xs-3 control-label">Giá tiền</label>
                                <div class="col-xs-9">
                                    <p>12.000đ</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="last_name" class="col-xs-3 control-label">Gmail</label>
                                <div class="col-xs-9">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                <span class="glyphicon glyphicon-minus"></span>
                                            </button>
                                        </span>
                                        <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </button>
                                        </span>
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
    <?php include_once("footer.php"); ?>