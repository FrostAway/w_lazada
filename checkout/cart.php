<?php
$cart_page = true;
include_once 'header.php';
?>

<div class="container cart_container">
    <div class="cart_header">
        <a href="#" class="_nm_link"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
    </div>

    <div class="_message_box message_notice hidden">
        <div class="_mess_title">
            <i class="fa fa-info"></i> Notice
        </div>
        <div>Bạn đã xóa <strong class="set_text">Sản phẩm</strong> từ giỏ hàng của bạn. <a href="#" class="_nm_link">Hủy bỏ</a></div>
    </div>

    <h2 class="cart_title">Giỏ hàng của tôi</h2>
    <div class="row">
        <div class="col-md-8 st_left_col">
            <div class="table-responsive">
                <table class="table table-hover cart_table">
                    <thead>
                        <tr>
                            <th colspan="2">6 sản phẩm</th>
                            <th width="170">Giá</th>
                            <th colspan="2">Số lượng</th>
                        </tr>
                    </thead>
                    <?php for ($i = 0; $i < 5; $i++) { ?>
                        <tr class="_popup_item">
                            <td class="_ci_image"><a href="#"><img class="img-responsive" alt="thumbnail" src="../images/thumbs/prod_image_2.jpg"></a></td>
                            <td class="_ci_info">
                                <h5 class="_ci_title">Apple iPhone 7 32GB (Vàng) - Hãng Phân Phối Chính Thức</h5>
                                <ul class="_popup_vars">
                                    <li><span>Kích thước: </span> <span>EU:42</span></li>
                                    <li><span>Zapas</span></li>
                                </ul>
                                <div class="_stock_status mgb-10">
                                    <span class="instock"><i class="fa fa-check"></i> còn hàng</span>
                                </div>
                                <a href="#" class="_md_link add_favorite_btn"><i class="fa fa-heart-o"></i> Thêm vào danh sách yêu thích</a>
                            </td>
                            <td class="_ci_price">
                                <div class="_popup_price _price">
                                    <div class="dis_price">21.199.000 VND</div>
                                    <span class="org_price"><del>33.000.000 VND</del> <span class="text-uppercase">40% giảm giá</span></span>
                                </div>
                            </td>
                            <td class="_ci_quantity">
                                <div class="up-down-select">
                                    <span class="btn-up-down down">
                                        <i class="fa fa-minus"></i>
                                    </span>
                                    <select>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <span class="btn-up-down up">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                </div>
                            </td>
                            <td class="_ci_action">
                                <a href="#" class="_ci_remove">×</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <div class="col-md-4 st_right_col">

            <div class="_pn_title _tt_border mgb-10 pdb-15">Thông tin đơn hàng</div>
            <ul class="sumary_list _table_list mgb-20">
                <li><span class="_table_col">Tạm tính: </span> <span class="_table_col text-right">1.615.000 VNĐ</span></li>
                <li><span class="_table_col">Phí vận chuyển: </span> <span class="_table_col text-right">109.000 VNĐ</span></li>
                <li class="_tbl_border"><span class="_table_col"></span><span class="_table_col"></span></li>
                <li class="sumary_total">
                    <span class="_table_col"><strong>Thành tiền</strong> (tổng số tiền thanh toán):</span>
                    <strong class="table_col text-right">1.724.000 VNĐ</strong>
                </li>
            </ul>
            <a href="step_1.php" class="_pu_checkout_btn btn btn-block">Tiến hành thanh toán</a>

        </div>
    </div>


    <div class="_no_ci_item text-center mgb-30">
        <h3 class="_dr_title">Không có sản phẩm nào trong giỏ hàng</h3>
        <a href="#" class="_more_btn btn btn-default">Tiếp tục mua hàng</a>
    </div>


    <div class="row mgb-15">
        <div class="col-sm-4">
            <p><strong>Khi nào tôi nhận được hàng?</strong></p> 
            <p>Thời gian giao hàng dự kiến là thời gian được tính từ lúc đơn hàng được tạo đến lúc giao đến địa chỉ của quý khách.
                Thời gian này bao gồm thời gian duyệt đơn hàng, thực hiện đơn hàng, cộng với thời gian giao hàng sau khi chuyển đơn hàng qua đơn hàng vận chuyển</p>
        </div>
        <div class="col-sm-4">
            <p><strong>Lazada có những hình thức thanh toán nào?</strong></p> 
            <p>Nhằm mang đến trải nghiệm mua sắm tuyệt vời nhất cho khách hàng, Lazada cung cấp nhiều hình thức thanh toán đa dạng sau: Thanh toán khi nhận hàng; Thanh toán qua thẻ tín dụng, thẻ ghi nợ; Thanh toán qua cổng Smartlink/ 123PAY; Thanh toán trả góp qua thẻ tín dụng.</p>
        </div>
        <div class="col-sm-4">
            <p><strong>Quyền lợi của tôi được Lazada bảo vệ như thế nào?</strong></p> 
            <p>Lazada cam kết tất cả sản phẩm bán ra là mới 100%, chính hãng, không hư hỏng kỹ thuật hay vật lý.
                Trong trường hợp sản phẩm không đáp ứng được 1 trong các điều kiện trên, quý khách có thể hoàn trả sản phẩm trong vòng 7 ngày để được hoàn tiền 100%.</p>
        </div>
    </div>

    <section class="_s_footer_2 hidden-xs hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 _ft_space_col">
                    <h3 class="_ft_title">CÁCH THỨC THANH TOÁN</h3>
                    <ul class="_pay_list list-inline">
                        <li><a><img src="../images/icon/Visa-icon.png"></a></li>
                        <li><a><img src="../images/icon/mastercard-icon.png"></a></li>
                        <li><a><img src="../images/icon/Cash-icon.png"></a></li>
                    </ul>
                </div>
                <div class="col-sm-3 _ft_space_col">
                    <h3 class="_ft_title">DỊCH VỤ GIAO HÀNG</h3>
                    <ul class="_ship_list list-inline">
                        <li><img src="../images/icon/vietnampost.jpg" alt=" " ></li>
                        <li><img src="../images/icon/ghn.jpg" alt=" " ></li>
                        <li><img src="../images/icon/logo-247.png" alt=" " ></li>
                    </ul>
                </div>
                <div class="col-sm-3 _ft_space_col">
                    <h3 class="_ft_title">CHỨNG NHẬN</h3>
                    <div class="_verified_list">
                        <div class="row">
                            <div class="col-xs-4 vr_item">
                                <img src="../images/icon/seal_80_mar2016.png">
                            </div>
                            <div class="col-xs-8">
                                <div class="vr_item"><img src="../images/icon/registered.png"></div>
                                <div class="vr_item"><img src="../images/icon/announced.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end section 2 -->

</div>

<?php include_once 'footer.php'; ?>

