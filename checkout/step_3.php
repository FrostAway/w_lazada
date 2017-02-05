<?php include_once 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 st_left_col">
            <div class="panel panel-default">
                <div class="panel-heading _pn_title">Chọn phương thức thanh toán</div>
                <div class="panel-body">

                    <form class="_co_payment_form">

                        <div class="payment_box">
                            <ul class="nav nav-tabs payment-tabs">
                                <li class="active">
                                    <a href="#cash_tab" data-toggle="tab">
                                        <span>Thanh toán khi nhận hàng</span>
                                        <strong><i class="fa fa-truck"></i></strong>
                                        <input type="radio" id="_pay_1" name="payment_type">
                                    </a>
                                </li>
                                <li>
                                    <a href="#visa_tab" data-toggle="tab">
                                        <span>Thẻ tín dụng/thẻ ghi nợ</span>
                                        <strong><i class="fa fa-cc-visa"></i></strong>
                                        <input type="radio" name="payment_type">
                                    </a>
                                </li>
                                <li>
                                    <a href="#atm_tab" data-toggle="tab">
                                        <span>Thẻ ATM nội địa</span>
                                        <strong><i class="fa fa-credit-card"></i></strong>
                                        <input type="radio" name="payment_type">
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content _md_text">
                                <div class="tab-pane active" id="cash_tab">
                                    <p>Bạn sẽ thanh toán bằng tiền mặt khi nhận hàng</p>
                                    <div>Lưu ý: Vui lòng kiểm tra kỹ thông tin đơn hàng bên tay phải về: </div>
                                    <div>- Phí thực hiện đơn hàng</div>
                                    <div>- Phí giao hàng (nếu có)</div>
                                </div>
                                <div class="tab-pane" id="visa_tab">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="_md_text">Số thẻ</label>
                                                <input type="text" class="form-control _co_text">
                                            </div>
                                            <div class="form-group">
                                                <label class="_md_text">Tên in trên thẻ</label>
                                                <input type="text" class="form-control _co_text">
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-xs-6">
                                                    <label class="_md_text">Số thẻ</label>
                                                    <div>
                                                        <input type="text" class="form-control _co_text _w_50">
                                                        <input type="text" class="form-control _co_text _w_50">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <label class="_md_text">CCV/CVV</label>
                                                    <input type="text" class="form-control _co_text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="atm_tab">
                                    <div><label class="_co_lb mgb-30">Để thực hiện việc thanh toán, bắt buộc thẻ ATM của bạn đã có đăng ký sử dụng dịch vụ Internet Banking.</label></div>
                                    <p>
                                        Lazada hiện đã hỗ trợ thanh toán qua 25 ngân hàng tại Việt Nam. Thẻ ATM của bạn cần phải được đăng ký sử dụng Internet Banking để sử dụng tính năng này.
                                        <br /> <a href="#">Xem thêm thông tin</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="mgb-25"></div>
                            <p class="_md_text _cl_main">
                                Hiện tại Lazada chỉ xuất hóa đơn cho sản phẩm được bán bởi Lazada. <br />
                                Chúng tôi chưa hỗ trợ cho các sản phẩm phân phối bởi đối tác bán hàng
                            </p>
                            <button class="btn _l_btn _bg_main _co_btn_40"><i class="fa fa-lock"></i> Đặt hàng</button>
                            <div class="mgb-10"></div>
                            <label class="_lb_media">
                                <input type="checkbox">
                                Đăng ký nhận thông tin từ Lz để biết các khuyễn mãi hấp dẫn
                            </label>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-4 st_right_col">

            <div class="panel panel-default">
                <div class="panel-heading _pn_title">Shipping and Billing address <a href="#" class="_sm_link">Chỉnh sửa</a></div>
                <div class="panel-body _md_text">
                    <div class="mgb-10"></div>
                    <p class="mgb-10">Nguyễn Văn A</p>
                    <p>số 15 ngõ 32 cầu giấy hà nội <br />
                    Hà Nội, Quận Cầu Giấy, Phường Dịch Vọng <br />
                    Số điện thoại: 01234567894 </p>
                </div>
            </div>

            <?php
            $fee_line = true;
            $delivery = true;
            include_once 'sidebar.php';
            ?>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>
