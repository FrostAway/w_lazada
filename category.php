<?php include_once 'header.php'; ?>

<div class="_breadcrumb">
    <div class="container">
        <ul class="_breadcrumb_list">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Thời gian  & Du lịch</a></li>
            <li><span>Thời trang nam</span></li>
        </ul>
    </div>
</div>

<div class="_banner_box mgb-15">
    <div class="container">
        <div class="_banner_bg">
            <a href="#"><img class="img-responsive" src="images/banners/cat_banner.jpg" alt=" "></a>
        </div>
    </div>
</div>

<div class="_cat_container">
    <div class="container">
        <div class="_wrapper mgb-15">
            <div class="row">
                <div class="col-md-3 col-lg-2 _cat_left_col hidden-xs hidden-sm">
                    <div class="_filter_box _filter_cat_box">
                        <h3 class="_fl_title">Lọc theo ngành hàng</h3>
                        <ul class="list-unstyled _cat_list">
                            <li><a href="#">Thời trang nữ</a> <span>(89125)</span></li>
                            <li class="active">
                                <a href="#">Thời trang nam</a> <span>(89125)</span>
                                <ul class="_sub_cat">
                                    <li><a href="#">Trang phục nam</a> <span>(89125)</span></li>
                                    <li><a href="#">Ví nam & phụ kiện</a> <span>(89125)</span></li>
                                    <li><a href="#">Túi nam</a> <span>(89125)</span></li>
                                    <li><a href="#">Giày nam</a> <span>(89125)</span></li>
                                    <li><a href="#">Phụ kiện nam</a> <span>(89125)</span></li>
                                </ul>
                            </li>
                            <li><a href="#">Thời trang bé gái</a> <span>(89125)</span></li>
                            <li><a href="#">Thời trang bé trai</a> <span>(89125)</span></li>
                        </ul>
                    </div>

                    <form id="_filter_form">
                        <div class="_filter_box _filter_sale_box">
                            <h3 class="_fl_title _fl_high">Khuyễn mãi tại LZ</h3>
                            <ul class="list-unstyled _fl_checkbox_list">
                                <li><label><input type="checkbox"> Hàng đông mới về (237)</label></li>
                            </ul>
                        </div>

                        <div class="_filter_box _filter_mark_box">
                            <h3 class="_fl_title">Thương hiệu</h3>
                            <div class="_search_group form-group has-feedback">
                                <input type="text" class="form-control">
                                <span class="form-control-feedback"><i class="fa fa-search"></i></span>
                            </div>
                            <ul class="list-unstyled _fl_checkbox_list">
                                <?php for ($i = 0; $i < 2; $i++) { ?>
                                    <li><label><input type="checkbox"> OEM (13345)</label></li>
                                    <li><label><input type="checkbox"> Anh tuan shop (13345)</label></li>
                                    <li><label><input type="checkbox"> None (13345)</label></li>
                                    <li><label><input type="checkbox"> SoYoung (13345)</label></li>
                                    <li><label><input type="checkbox"> VNL (13345)</label></li>
                                    <li><label><input type="checkbox"> TitiShop (13345)</label></li>
                                    <li><label><input type="checkbox"> Prazenta (13345)</label></li>
                                <?php } ?>
                            </ul>
                            <div class="text-right"><a href="#" class="_load_more_btn _sm_link">load more</a></div>
                        </div>

                        <div class="_filter_box _filter_price_box">
                            <h3 class="_fl_title">Giá (Trong VNĐ)</h3>
                            <div class="_filter_range _range_hoz">
                                <div class="_range_bar mgb-20">
                                    <div class="_range_ui_bar" data-min="0" data-max="10000000"></div>
                                </div>
                                <div class="_range_input">
                                    <span class="_range_from">
                                        <input type="number" value="0" min="0" step="1">
                                    </span>
                                    <span class="_range_divide">–</span>
                                    <span class="_range_to">
                                        <input type="number" value="10000000" min="0" step="1">
                                    </span>
                                    <button type="submit"><i class="fa fa-caret-right"></i></button>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="_filter_box _filter_review_box">
                            <h3 class="_fl_title">Đánh giá</h3>
                            <div class="_filter_range _range_ver">
                                <div class="_range_bar mgb-20">
                                    <div class="_range_ui_bar" data-min="1" data-max="5"></div>
                                </div>
                                <div class="_range_ver_input">
                                    <div class="_vote_star_ver">
                                        <?php for ($i = 5; $i > 0; $i--) { ?>
                                            <label <?= ($i == 1) ? 'class="active"' : ''; ?>>
                                                <input type="radio" name="_vote_ver" value="<?= $i ?>">
                                                <span class="_stars">
                                                    <?php for ($j = 0; $j < $i; $j++) { ?>
                                                        <i class="fa fa-star"></i>
                                                    <?php } ?>
                                                </span>
                                            </label>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="_filter_box _filter_size_box">
                            <h3 class="_fl_title">Kích thước</h3>
                            <div class="mgb-15">
                                <select class="form-control _select_2_js">
                                    <option>Chest</option>
                                    <option>EU</option>
                                    <option>Int</option>
                                    <option>UK</option>
                                    <option>US</option>
                                </select>
                                <span class="form-control-feedback"><i class="fa fa-caret-down"></i></span>
                            </div>
                        </div>

                        <div class="_filter_box _filter_color_box">
                            <h3 class="_fl_title">Màu sắc</h3>
                            <?php
                            $colors = ['#00ACCF' => 'Aqua (6)', '#D4BE8D' => 'Beige (10)', '#333' => 'Black (751)', '#345AFF' => 'Blue (222)'];
                            ?>
                            <div class="_color_checkbox_list">
                                <?php for ($i = 0; $i < 4; $i++) { ?>
                                    <?php foreach ($colors as $color => $label) { ?>
                                        <label class="_color_item">
                                            <b class="_color_inner" style="background: <?= $color ?>"></b>
                                            <span><?= $label ?></span>
                                            <input type="checkbox">
                                        </label>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </form>
                </div> 
                <!-- end filter col -->
                <div class="col-md-9 col-lg-10 _cat_content_col">
                    <div class="_page_head">
                        <div class="row">
                            <div class="_head_title col-sm-5">
                                <h2 class="_page_title">Thời trang nam</h2>
                                <p class="_head_desc _md_text">44183 sản phẩm được tìm thấy</p>
                            </div>
                            <div class="_head_filter col-sm-7 text-right">
                                <div class="_form_inline _sort_group">
                                    <label class="_l_lb">Sắp xếp theo</label>
                                    <select class="_l_text _select_2_js">
                                        <option>Recommendation</option>
                                        <option>Price: Hight to low</option>
                                        <option>Price: Low to hight</option>
                                        <option>Discount</option>
                                    </select>
                                </div>
                                <div class="_view_group">
                                    <label class="_l_lb">Xem</label>
                                    <a class="active" href="#"><i class="fa fa-th-large"></i></a>
                                    <a href="#"><i class="fa fa-th-list"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end head box -->
                    <div class="_page_content">
                        <div class="_box_content">
                            <div class="_items _grid_items row">
                                <?php for ($i = 0; $i < 16; $i++) { ?>
                                    <div class="_item col-xs-6 col-md-4 col-lg-3">
                                        <div class="_inner">
                                            <div class="thumb">
                                                <a href="#"><img class="img-responsive" src="images/thumbs/product_thumb.jpg" alt=" "></a>
                                            </div>
                                            <div class="_item_body">
                                                <h3 class="_item_title"><a href="#">Apple iPhone 7 32GB (Vàng) - Hãng Phân Phối Chính Thức</a></h3>
                                                <div class="_price">
                                                    <div class="dis_price">21.199.000 VND</div>
                                                    <span class="org_price"><del>33.000.000</del> VND</span>
                                                </div>
                                                <div class="_item_vote">
                                                    <span class="_vote_box _vote_sm_box _vote_read_only">
                                                        <input type="hidden" name="" value="4" data-size="xs" class="_vote_star">
                                                    </span>
                                                    <span class="_num_vote">(10 nhận xét)</span>
                                                </div>
                                                
                                                <div class="_quick_buy_vars">
                                                    <div class="_vars_title">Select size</div>
                                                    <div class="_vars_list">
                                                        <?php for($v = 40; $v<45; $v++) { ?>
                                                        <a href="#"><?php echo $v ?></a>
                                                        <?php } ?>
                                                    </div>
                                                    <button type="button" class="_vars_close">×</button>
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-block _buy_bottom_btn">Mua ngay</a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <!-- end page content -->
                    <div class="_banner_box mgb-15 mgt-10">
                        <div class="_banner_bg">
                            <a href="#"><img class="img-responsive" src="images/banners/cat_foot_banner.jpg" alt=" "></a>
                        </div>
                    </div>

                    <div class="_paginate_box text-right">
                        <div class="_page_select _inline">
                            <label class="_l_lb">Số sản phẩm trên trang</label>
                            <select class="_sq_text">
                                <option>10</option>
                                <option>20</option>
                                <option>50</option>
                            </select>
                        </div>
                        <div class="_page_numbers _inline">
                            <a href="#" class="_prev_btn"></a>
                            <ul class="_page_num_list">
                                <li><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><span class="space">...</span></li>
                                <li><a href="#">100</a></li>
                            </ul>
                            <a href="#" class="_next_btn"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end main content -->

        <div class="_prod_cross_box mgb-15">
            <div class="_wrapper _has_border mgb-25">
                <div class="_box_head">
                    <div class="mgb-25"></div>
                    <h3 class="_box_heading _md_heading">Hàng tương tự Samsung Điện thoại di động</h3>
                </div>
                <div class="mgb-30"></div>
                <div class="_box_body">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <h3 class="_box_heading text-uppercase">Hàng mới về</h3>
                            <ul class="_cross_links list-unstyled">
                                <li><a href="#">Samsung Samsung Galaxy Nexus Điện thoại di động</a></li>
                                <li><a href="#">Samsung Samsung Galaxy Nexus Điện thoại di động</a></li>
                                <li><a href="#">Samsung Samsung Galaxy Nexus Điện thoại di động</a></li>
                                <li><a href="#">Samsung Samsung Galaxy Nexus Điện thoại di động</a></li>
                                <li><a href="#">Samsung Samsung Galaxy Nexus Điện thoại di động</a></li>
                                <li><a href="#">Samsung Samsung Galaxy Nexus Điện thoại di động</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h3 class="_box_heading text-uppercase">Hàng mới về</h3>
                            <ul class="_cross_links list-unstyled">
                                <li><a href="#">Samsung Samsung Galaxy Nexus Điện thoại di động</a></li>
                                <li><a href="#">Samsung Samsung Galaxy Nexus Điện thoại di động</a></li>
                                <li><a href="#">Samsung Samsung Galaxy Nexus Điện thoại di động</a></li>
                                <li><a href="#">Samsung Samsung Galaxy Nexus Điện thoại di động</a></li>
                                <li><a href="#">Samsung Samsung Galaxy Nexus Điện thoại di động</a></li>
                                <li><a href="#">Samsung Samsung Galaxy Nexus Điện thoại di động</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h3 class="_box_heading text-uppercase">Hàng mới về</h3>
                            <ul class="_cross_links list-unstyled">
                                <li><a href="#">Samsung Samsung Galaxy Nexus Điện thoại di động</a></li>
                                <li><a href="#">Samsung Samsung Galaxy Nexus Điện thoại di động</a></li>
                                <li><a href="#">Samsung Samsung Galaxy Nexus Điện thoại di động</a></li>
                                <li><a href="#">Samsung Samsung Galaxy Nexus Điện thoại di động</a></li>
                                <li><a href="#">Samsung Samsung Galaxy Nexus Điện thoại di động</a></li>
                                <li><a href="#">Samsung Samsung Galaxy Nexus Điện thoại di động</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h3 class="_box_heading text-uppercase">Hàng mới về</h3>
                            <ul class="_cross_links list-unstyled">
                                <li><a href="#">Samsung Samsung Galaxy Nexus Điện thoại di động</a></li>
                                <li><a href="#">Samsung Samsung Galaxy Nexus Điện thoại di động</a></li>
                                <li><a href="#">Samsung Samsung Galaxy Nexus Điện thoại di động</a></li>
                                <li><a href="#">Samsung Samsung Galaxy Nexus Điện thoại di động</a></li>
                                <li><a href="#">Samsung Samsung Galaxy Nexus Điện thoại di động</a></li>
                                <li><a href="#">Samsung Samsung Galaxy Nexus Điện thoại di động</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mgb-20"></div>
                <div class="_cat_foot_box">
                    <div class="row">
                        <div class="col-md-7">
                            <h3 class="_box_heading _tt_border">Thời trang nam - Thời trang quý ông</h3>
                            <div class="_entry_md_content mgb-20">
                                Bạn sẽ mô tả những người đàn ông hiện đại như thế nào? Họ có thể chọn ăn mặc bình thường hay sang trọng, hợp thời trang khi họ muốn. Các mặt hàng thời trang dành cho nam giới thì dễ dàng được tìm thấy ở bất cứ đâu. Chọn ra các sản phẩm hoàn hảo thực sự làm cho bạn trở nên khác biệt, nó bao gồm áo sơ mi, quần tây, giày dép, và các phụ kiện khác. Tìm những chiếc quần jean hoàn hảo cho bạn vì chúng cần phải có cho tất cả mọi người. Chắc chắn là chúng sẽ thoải mái và phù hợp với bạn. Khi mua chúng, cần chú ý đến những trang phục bạn có thể kết hợp và nơi mà bạn sẽ mặc chúng. Giống vậy, khi bạn đang tìm kiếm một chiếc áo thì có rất nhiều loại, ví dụ như một chiếc áo thun có cổ, một chiếc áo sơ mi dạng suông, hoặc chỉ là một áo thun đơn giản cho một ngày bạn cảm thấy thoải mái. Mặt hàng thời trang nam giới thường dễ dàng kết hợp với nhau, đừng lo lắng về điều đó!
                            </div>
                            <h3 class="_box_heading _tt_border">Thời trang bền và hợp túi tiền cho nam</h3>
                            <div class="_entry_md_content mgb-20">
                                Với áo sơ mi và quần jeans tuyệt vời, bạn cũng cần có một đôi giày hoàn hảo. Chọn một đôi giày trang trọng hay đơn giản sẽ tùy theo ngày, tâm trạng của bạn, và quan trọng hơn là cách ăn mặc của bạn! Có rất nhiều thương hiệu để bạn có thể chon một đôi giày phù hợp. Nếu bạn là vận động viên thể thao và bạn đang tìm một đôi giày thích hợp cho hoạt động thể thao của bạn, Nike có rất nhiều loại giày cao su để bạn có thể luyện tập, để chạy, và để chơi bóng rổ,... Nhưng đó không phải là thương hiệu duy nhất mà bạn có thể lựa chọn. Có những thương hiệu khác như K-Swiss, Mizuno, Outland, và Sperry cung cấp các loại giày thể thao và giày đơn giản. Ngoài những đôi giày đi cùng những trang phục thoải mái, còn có những đôi giày để đi tiệc. Và TNT là một trong những lựa chọn phù hợp với túi tiền của ban. Có nhiều phụ kiện hoàn hảo để kết hợp với trang phục của bạn như kính mát Ray-Ban, thắt lưng da, và ví, chúng được làm từ các vật liệu khác nhau như ví làm bằng da hoặc giấy, thắt lưng da, thắt lưng được dệt đơn giản,...! Sau một thời gian có thể bạn sẽ cần thay thế những sản phẩm yêu thích của mình. Vì vậy, có rất nhiều thương hiệu cung cấp cho bạn các mặt hàng lâu bền nhưng giá cả phải chăng.
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="mgb-20"></div>
                            <div class="_banner_bg mgb-15">
                                <img class="img-responsive" src="images/banners/foot_thumb.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="_cat_foot_box mgb-15">
                    <div class="_banner_bg mgb-15">
                        <img class="img-responsive" src="images/banners/foot_thumb_1.jpg" alt="">
                    </div>
                    <div class="row _cat_bn_list">
                        <?php for($i=0; $i<4; $i++) { ?>
                        <div class="col-sm-6 col-md-3 _cat_bn_item">
                            <div class="_inner">
                                <div class="_cat_bn_body">
                                    <h4 class="_box_heading _tt_border _cl_blue">Giày Nam</h4>
                                    <ul class="_desc_list">
                                        <li>
                                            <i>Các tính năng: </i>
                                            Tìm kiếm một đôi giày để mang vào các sự kiện đặc biệt? Có nhiều loại khác nhau có sẵn được cung cấp bởi rất nhiều thương hiệu mà bạn có thể lựa chọn như giày đế thấp, giày đế cao su mềm dạng thể thao, giày Boots, giày tây.
                                        </li>
                                        <li>
                                            <i>Sử dụng: </i>
                                            Những đôi giày thích hợp cho mang hàng ngày, cho đi bộ bình thường, mang đi làm và cho các sự kiện đặc biệt, chơi thể thao. 
                                        </li>
                                        <li>
                                            <i>Thương hiệu</i>
                                            các nhãn hiệu như US Team, Vertigo, Grosby, Brogue and Derby Dan, EasySoft, Sperry, Vertigo, Asics, và Nike là một trong những lựa chọn tốt nhất. 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                
                <div class="_cat_foot_box mgb-10">
                    <h3 class="_box_heading _tt_border">Mua online thời trang nam tại Lazada nhận nhiều ưu đãi</h3>
                    <div class="_entry_md_content">
                        Thời trang nam giới ngày càng được chú trọng hơn. Phong cách ăn mặc ảnh hưởng không nhỏ đến cái nhìn của người đối diện về bạn. Biết kết hợp những món đồ một cách hợp lý sẽ tôn vinh thêm vẻ đẹp vốn có của bạn. Hãy đến với Lazada để có thể lựa chọn thật nhiều sản phẩm và tạo nên những phong cách hợp thời trang cho mình nhé! Bên cạnh cung cấp những sản phẩm chất luợng, Lazada còn có dịch vụ giao hàng tận nơi cũng như thanh tóan trực tuyến bằng hệ thống thẻ ngân hàng. Hãy đến với Lazada.vn để tận huởng dịch vụ mua sắm trực tuyến hàng đầu Việt Nam.
                    </div>
                </div>
            </div>
        </div>
        <!-- end prod_cross -->



    </div>
</div>

<?php include_once 'includes/quick_buy_modal.php'; ?>

<?php include_once 'footer.php'; ?>

