<?php include_once 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 st_left_col">
            <div class="panel panel-default">
                <div class="panel-heading _pn_title">Your shipping address</div>
                <div class="panel-body">

                    <form class="_co_delivery_form">
                        <div class="form-group row has-error">
                            <label class="_co_lb col-sm-3 text-right">Họ tên</label>
                            <div class="col-sm-5">
                                <input type="text" name="name" class="form-control _co_text" placeholder="Full name">
                                <div class="_t_error">Vui lòng nhập họ tên</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="_co_lb col-sm-3 text-right">Địa chỉ</label>
                            <div class="col-sm-5">
                                <textarea name="address" style="resize: none;" class="form-control _co_text" rows="2" placeholder="Địa chỉ"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="_co_lb col-sm-3 text-right">Tỉnh/Thành phố</label>
                            <div class="col-sm-5">
                                <select class="form-control _co_text">
                                    <option>Hà Nội</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="_co_lb col-sm-3 text-right">Quận/Huyện</label>
                            <div class="col-sm-5">
                                <select class="form-control _co_text">
                                    <option>Quận Cầu Giấy</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="_co_lb col-sm-3 text-right">Phường/Xã</label>
                            <div class="col-sm-5">
                                <select class="form-control _co_text">
                                    <option>Lựa chọn</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="_co_lb col-sm-3 text-right">Số điện thoại</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control _co_text" placeholder="Phone number">
                            </div>
                            <div class="col-sm-4">
                                <label class="_sm_text">Lz sẽ liên hệ số điện thoại này</label>
                            </div>
                        </div>

                        <div class="mgb-20"></div>

                        <div class="billing_box">
                            <label class="panel-heading _lb_title" data-toggle="collapse" data-target="#_billing_box"><input type="checkbox"> Thông tin người đặt hàng (chỉ dành cho đơn hàng thanh toán qua thẻ)</label>
                            <div class="collapse" id="_billing_box">
                                <div class="well">
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right">Địa chỉ thanh toán</label>
                                        <div class="col-sm-5">
                                            <ul class="nav nav-tabs addr-tabs">
                                                <li class="active"><a href="#_inside" data-toggle="tab">Việt Nam</a></li>
                                                <li><a href="#_outside" data-toggle="tab">Quốc tế</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="_inside">
                                            <div class="form-group row has-error">
                                                <label class="_co_lb col-sm-3 text-right">Họ tên</label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="name" class="form-control _co_text" placeholder="Full name">
                                                    <div class="_t_error">Vui lòng nhập họ tên</div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="_co_lb col-sm-3 text-right">Địa chỉ</label>
                                                <div class="col-sm-5">
                                                    <textarea name="address" style="resize: none;" class="form-control _co_text" rows="2" placeholder="Địa chỉ"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="_co_lb col-sm-3 text-right">Tỉnh/Thành phố</label>
                                                <div class="col-sm-5">
                                                    <select class="form-control _co_text">
                                                        <option>Hà Nội</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="_co_lb col-sm-3 text-right">Quận/Huyện</label>
                                                <div class="col-sm-5">
                                                    <select class="form-control _co_text">
                                                        <option>Quận Cầu Giấy</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="_co_lb col-sm-3 text-right">Phường/Xã</label>
                                                <div class="col-sm-5">
                                                    <select class="form-control _co_text">
                                                        <option>Lựa chọn</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="_co_lb col-sm-3 text-right">Số điện thoại</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control _co_text" placeholder="Phone number">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="_sm_text">Lz sẽ liên hệ số điện thoại này</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="_co_lb col-sm-3 text-right">Mã số thuế</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control _co_text" placeholder="Mã số thuế">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="_outside">
                                            <div class="form-group row">
                                                <label class="_co_lb col-sm-3 text-right">Họ tên</label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="name" class="form-control _co_text" placeholder="Full name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="_co_lb col-sm-3 text-right">Địa chỉ</label>
                                                <div class="col-sm-5">
                                                    <textarea name="address" style="resize: none;" class="form-control _co_text" rows="2" placeholder="Địa chỉ"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="_co_lb col-sm-3 text-right">Tỉnh/Thành phố</label>
                                                <div class="col-sm-5">
                                                    <select class="form-control _co_text">
                                                        <option>Hà Nội</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="_co_lb col-sm-3 text-right">Quận/Huyện</label>
                                                <div class="col-sm-5">
                                                    <select class="form-control _co_text">
                                                        <option>Quận Cầu Giấy</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="_co_lb col-sm-3 text-right">Phường/Xã</label>
                                                <div class="col-sm-5">
                                                    <select class="form-control _co_text">
                                                        <option>Lựa chọn</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="_co_lb col-sm-3 text-right">Số điện thoại</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control _co_text" placeholder="Phone number">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="_sm_text">Lz sẽ liên hệ số điện thoại này</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="_co_lb col-sm-3 text-right">Mã số thuế</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control _co_text" placeholder="Mã số thuế">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mgb-20"></div>
                        
                        <div class="shipping_options mgb-30">
                            <div class="_pn_title mgb-10">Thông tin giao hàng</div>
                            <div class="form-group">
                                <label class="_lb_media"><input type="radio" name="ship_option"> Economy Delivery: Miễn phí <br />Get it 23 - 30 Nov 16</label>
                                <label class="_lb_media"><input type="radio" name="ship_option"> Giao hàng tiêu chuẩn: 10.000 VND <br />Get it 22 - 24 Nov 16</label>
                            </div>
                        </div>
                        
                        <div class="">
                            <button class="btn _l_btn _bg_main _co_btn_40">Tiếp tục <i class="fa fa-angle-double-right"></i></button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-4 st_right_col">
            <?php
            $fee_line = true;
            include_once 'sidebar.php';
            ?>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>
