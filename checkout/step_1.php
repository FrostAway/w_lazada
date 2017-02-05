<?php include_once 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 st_left_col">
            <div class="panel panel-default">
                <div class="panel-heading _pn_title">Login or Checkout as guest</div>
                <div class="panel-body">
                    <form class="_co_login_form">
                        <div class="form-group row has-error">
                            <label class="_co_lb col-sm-3 text-right">Nhập địa chỉ email</label>
                            <div class="col-sm-5">
                                <input type="email" name="email" class="form-control _co_text" placeholder="Enter your email address">
                                <div class="_t_error">Vui lòng nhập địa chỉ email</div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-5 col-sm-offset-3">
                                <div class="_co_cb_login">
                                    <label class="_co_smlb mgb-10"><input value="0" type="radio" name="co_option"> Đặt hàng mà không cần đăng ký</label>
                                    <label class="_co_smlb mgb-10"><input value="1" type="radio" name="co_option"> Tôi đã có tài khoản</label>
                                </div>
                                <input type="password" class="form-control hidden _co_text _co_cb_password" placeholder="Type your pasword">
                                <div class="mgb-20"></div>

                                <div class="text-right mgb-10">
                                    <a href="#" class="_sm_link">Quên mật khẩu ?</a>
                                </div>
                                <button type="submit" class="btn btn-default btn-block _l_btn _bg_main mgb-30">Tiếp tục <i class="fa fa-angle-double-right"></i></button>

                                <div class="_social_login">
                                    <a href="#" class="_sc_group _fb_group"><i class="fa fa-facebook"></i> <span>Hoặc đăng nhập bằng Facebook</span></a>
                                    <a href="#" class="_sc_group _gg_group"><i class="fa fa-google-plus"></i> <span>Sign in with Google</span></a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 st_right_col">
            <?php include_once 'sidebar.php'; ?>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>