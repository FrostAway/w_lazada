<div class="panel panel-default">
    <div class="panel-heading _pn_title">Thông tin đơn hàng(1 items)</div>
    <div class="panel-body">
        <table class="_co_table table">
            <thead>
                <tr class="text-left text-uppercase">
                    <th>Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                </tr>
            </thead>
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <tr>
                    <td>Đèn Led năng lượng mặt trời & sạc dự phòng LE8030</td>
                    <td>
                        <?php if (isset($delivery)) { ?>
                        <select class="_co_text">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <div class="text-center"><a href="#" class="_ssm_link">xóa</a></div>
                        <?php } else { ?>
                        1
                        <?php } ?>
                    </td>
                    <td>62.000</td>
                </tr>
            <?php } ?>
            <tfoot>
                <?php if(isset($delivery)){ ?>
                <tr>
                    <td colspan="3">
                        <div><b>Economy Delivery</b> - <a href="#" class="_sm_link">Chỉnh sửa</a></div>
                        <div>23 Tháng 11 - 30 Tháng 11</div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">Have voucher code? <a href="#" class="_sm_link">Apply here</a></td>
                </tr>
                <?php } ?>
                <tr>
                    <td>Tổng cộng</td>
                    <td colspan="2" class="text-right">62.000 VND</td>
                </tr>
                <?php if (isset($fee_line)) { ?>
                <tr class="_co_ship">
                    <td>Phí thực hiện đơn hàng</td>
                    <td colspan="2" class="text-right">10.000 VND</td>
                </tr>
                <?php } ?>
                <tr class="_co_total">
                    <td class="_co_title">Thành tiền</td>
                    <td colspan="2" class="_co_price text-right _cl_main">62.000 VND</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<div class="_ssl_secure _bg_w">
    <div class="row">
        <div class="col-xs-6 text-center">
            <a href="#"><img src="../images/icon/norton.jpg" alt=""></a>
        </div>
        <div class="col-xs-6 text-center">
            <a href="#"><img src="../images/icon/norton.jpg" alt=""></a>
        </div>
    </div>
</div>