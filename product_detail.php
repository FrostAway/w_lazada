<?php include_once 'header.php'; ?>
<div class="_prod_topbar">
    <div class="container">
        <ul class="list-inline _prod_sticky_menu">
            <li><a href="#_prod_info_box">Tổng quan sản phẩm</a></li>
            <li><a href="#_prod_description">Mô tả sản phẩm</a></li>
            <li><a href="#_prod_related_box">Sản phẩm tương tự</a></li>
            <li><a href="#_prod_preview">Đánh giá sản phẩm</a></li>
            <li><a href="#" class="btn btn-block _main_btn text-uppercase">Mua ngay</a></li>
        </ul>
    </div>
</div>

<div class="_breadcrumb">
    <div class="container">
        <ul class="_breadcrumb_list">
            <li><a href="#">Điện thoại & máy tính bảng</a></li>
            <li><a href="#">Điện thoại di động</a></li>
            <li><span>Samsung Galaxy J7 Prime White Gold - Hãng phân phối chính thức</span></li>
        </ul>
    </div>
</div>

<div class="_item_box _prod_info_box" id="_prod_info_box">
    <div class="container">
        <div class="_wrapper">
            <div class="_box_head">
                <div class="row">
                    <div class="col-md-9">
                        <h2 class="_prod_title">Samsung Galaxy J7 Prime White Gold - Hãng phân phối chính thức</h2>
                        <div class="_prod_head_votes">
                            <span class="_vote_box _vote_sm_box _vote_read_only">
                                <input type="hidden" name="" value="4" data-size="xs" class="_vote_star">
                            </span>
                            <span class="_num_vote">(10)</span>
                            <a href="#" class="_sm_link"><i class="fa fa-pencil _cl_gray"></i> Mời bạn đánh giá sản phẩm này</a>
                        </div>
                        <div class="_prod_head_cats">
                            <span>Thương hiệu: </span>
                            <a href="#" class="_sm_link">Samsung</a>
                            <a href="#" class="_sm_link">Thêm điện thoại di động từ Samsung</a>
                        </div>
                    </div>
                    <div class="col-md-3 text-right mgt-10">
                        <a href="#" class="_wishlist_btn _icon_link mgr-5">
                            <i class="fa fa-heart"></i> <span>Tôi thích sản phẩm này</span>
                        </a>
                        <a href="#" class="_share_btn _share_fb_btn _icon_link">
                            <i class="fa fa-facebook"></i> <span>Chia sẻ</span> <b class="num">0</b>
                        </a>
                    </div>
                </div>
            </div>
            <div class="_box_body">
                <div class="row">
                    <div class="col-md-4 _prod_thumb_col">
                        <div class="media _prod_images">
                            <div class="media-left pull-left">
                                <div class="_prod_thumb_images">
                                <?php for ($i = 1; $i <= 3; $i++) { ?>
                                    <a href="#_prod_full_image_<?= $i ?>" <?php echo ($i == 1) ? 'class="active"' : '' ?>>
                                        <img src="images/thumbs/thumb_icon_<?= $i ?>.jpg" alt=" ">
                                    </a>
                                <?php } ?>
                                </div>
                            </div>
                            <div class="media-body _prod_full_images">
                                <?php for ($i = 1; $i <= 4; $i++) { ?>
                                    <div class="_prod_image <?php echo ($i == 1) ? 'active' : '' ?>" id="_prod_full_image_<?= $i ?>">
                                        <img class="img-responsive" src="images/thumbs/prod_image_<?= $i ?>.jpg" data-zoom-image="images/thumbs/prod_full_<?= $i ?>.jpg" alt=" ">
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 _prod_info_col _entry_md_content">
                        <p>Bảo hành: <b>12 tháng</b> Bảo hành điện tử <a href="#">Xem thêm</a></p>
                        <ul class="_prod_attributes row">
                            <div class="col-sm-6">
                                <li><span>Kích cỡ màn hình: </span> 5.5 inches, 1080 x 1920 pixels (~403 ppi)</li>
                                <li><span>Bộ nhớ trong: </span> 32 GB</span></li>
                                <li><span>RAM: </span> 3 GB</span></li>
                                <li><span>Khe cắm thẻ nhớ: </span> microSD (TransFlash), hỗ trợ lên đến 128 GB</li>
                                <li><span>Camera chính: </span> 13 MP, f/1.9, phase detection autofocus, LED flash</li>
                            </div>
                            <div class="col-sm-6">
                                <li><span>Camera phụ: </span> 8 MP, f/1,9, autofocus, LED flash</li>
                                <li><span>Hệ điều hành: </span> Android v6.0</li>
                                <li><span>Bộ xử lý: </span> Octa-core 1.6 GHz</li>
                                <li><span>Chipset: </span> Exynos 7870, GPU: Mali-T830</li>
                                <li><span>Pin chuẩn: </span> Li-Ion 3,300 mAh (không thế tháo rời)</li>
                            </div>
                        </ul>
                        <div class="_bd_sl_1 mgb-15"></div>
                        <div class="_prod_other_selection">
                            <p>Lựa chọn khác</p>
                            <ul class="_prod_other_list list-inline">
                                <li class="active"><a href="#_prod_full_image_2"><img src="images/thumbs/thumb_icon_2.jpg"></a></li>
                                <li><a href="#_prod_full_image_4"><img src="images/thumbs/prod_other_1.jpg"></a></li>
                            </ul>
                        </div>
                        <div class="_bd_sl_1 mgb-10"></div>
                        <div class="_prod_price_box">
                            <div class="dis_price">5.540.000 VNĐ</div>
                            <div class="_md_text">Giá trước đây <del>7.200.000 VNĐ</del></div>
                        </div>
                        <div class="_md_text">Tiết kiệm 23%</div>
                        <div><a href="#" class="_sm_link">Hoặc mua trả góp 0% bằng thẻ tín dụng chỉ từ 461.667 VNĐ/tháng <i class="fa fa-angle-double-right"></i></a></div>
                        <div class="mgb-20"></div>
                        <div class="_prod_buy">
                            <form>
                                <p class="_cl_gray">Chỉ còn 4 sản phẩm</p>
                                <button class="btn _submit_btn _bg_main quick_buy_btn">Mua ngay</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 _prod_meta_col">
                        <div class="_prod_ship_options _md_text">
                            <h3 class="_box_heading">Tùy chọn giao hàng</h3>
                            <div class="_icon_media _im_success _target_contain">
                                <i class="im_icon fa fa-map-marker"></i>
                                <div class="im_body">
                                    Hiển thị vị trí của bạn: <strong>Hà Nội, Quận Cầu Giấy</strong> <br /> <a href="#_ship_location_form" class="_sm_link _btn_target_hidden">Thay đổi</a>
                                </div>
                            </div>
                            <form id="_ship_location_form" class="hidden">
                                <div class="form-group row">
                                    <label class="col-xs-4 _l_lb">Tỉnh/Thành</label>
                                    <div class="col-xs-8">
                                        <select class="_co_select form-control">
                                            <option>Hà Nội</option>
                                            <option>Đà Nẵng</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xs-4 _l_lb">Quận/Huyện</label>
                                    <div class="col-xs-8">
                                        <select class="_co_select form-control">
                                            <option>Cầu Giấy</option>
                                            <option>Từ Liêm</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="_prod_ship_payments">
                            <div class="_icon_media _im_gray">
                                <i class="im_icon fa fa-handshake-o"></i>
                                <div class="im_body">
                                    <h4 class="im_heading">Giao hàng tiêu chuẩn: miễn phí</h4>
                                    <div class="im_note">Giao hàng 29 Nov - 01 Dec 16</div>
                                </div>
                            </div>
                            <div class="_icon_media _im_gray">
                                <i class="im_icon fa fa-money"></i>
                                <div class="im_body">
                                    <h4 class="im_heading">Quý khách có thể "Thanh toán khi nhận hàng"</h4>
                                </div>
                            </div>
                        </div>
                        <div class="mgb-10"></div>
                        <div class="_buyer_protect_box">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="_box_heading">Được bán và giao hàng bởi</div>
                                    <a href="#" class="_sm_link">Hoàng My JSC (Hà Nội)</a>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <span class="_vote_box _vote_sm_box _vote_read_only">
                                        <input type="hidden" name="" value="4" data-size="xs" class="_vote_star">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="_protect_box">
                            <h4 class="_box_sm_heading text-uppercase"><img src="images/icon/protect-icon.png" alt=""> 100% Bảo vệ người mua hàng</h4>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="_box_heading">Hàng chĩnh hãng</div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="_box_heading">Thanh toán đảm bảo</div>
                                </div>
                                <div class="col-xs-4">
                                    <a href="#" class="_md_link">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="mgb-15"></div>
                        <div class="_social_list text-right">
                            <a href="#"><span class="_fb_icon"></span></a>
                            <a href="#"><span class="_gg_icon"></span></a>
                            <a href="#"><span class="_tw_icon"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end product info -->

<div class="_prod_container">
    <div class="container">
        <div class="row">
            <div class="col-md-9 _prod_content">
                <div class="_wrapper _has_border mgb-15">
                    <h3 class="_box_heading _md_heading">Giới thiệu sản phẩm Samsung Galaxy J7 Prime 32Gb (Đen) - Hãng Phân phối chính thức</h3>
                    <div class="_entry_md_content" id="_prod_description">
                        <?php include_once 'exam_prod_content.php'; ?>
                    </div>
                </div>
                <!-- end prod content -->
                <div class="_prod_attrs_box mgb-15" id="_prod_attrs">
                    <div class="_wrapper _has_border">
                        <h3 class="_box_heading _md_heading mgb-15">Thông tin sản phẩm Samsung Galaxy J7 Prime 32Gb (Đen) - Hãng Phân phối chính thức</h3>
                        <div class="_entry_sm_content">
                            <p><strong>Bộ sản phẩm bao gồm: </strong> 1 Vỏ hộp, 1 thân máy, 1 cáp, 1 sạc, 1 tai nghe, 1 sách hướng dẫn, 1 dụng cụ lấy sim.</p>
                            <p><strong>Đặc điểm chính: </strong></p>
                            <div class="table-responsive">
                                <?php include_once 'exam_prod_table.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end prod attribute -->
                <div class="_prod_histories _item_box _with_slider mgb-15">
                    <div class="_wrapper _has_border">
                        <h3 class="_box_heading _md_heading mgb-15">Sản phẩm vừa xem</h3>
                        <div class="_box_content">
                            <div class="_items _grid_items _one_row"  style="padding: 0 22px;">
                                <?php for ($i = 0; $i < 10; $i++) { ?>
                                    <div class="_item">
                                        <div class="_inner">
                                            <div class="thumb">
                                                <a href="#"><img class="img-responsive" src="images/thumbs/laptop.jpg" alt=" "></a>
                                            </div>
                                            <div class="_item_body">
                                                <h3 class="_item_title"><a href="#">Laptop Dell XPS 13 2015 13.3inch Touch (Xám) - Hàng nhập khẩu</a></h3>
                                                <div class="_price">
                                                    <div class="dis_price">21.199.000 VND</div>
                                                    <span class="org_price"><del>33.000.000</del> VND</span>
                                                </div>
                                            </div>
                                            <a href="#" class="btn _buy_now_btn quick_buy_btn">Mua ngay</a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end history box -->
                <div class="_prod_review_box mgb-15" id="_prod_preview">
                    <div class="_wrapper _has_border">
                        <div class="_box_head">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h3 class="_box_heading _md_heading mgb-15">Đánh giá & nhận xét cho sản phẩm Samsung Galaxy J7 Prime 32Gb (Đen) - Hãng Phân phối chính thức</h3>
                                </div>
                                <div class="col-sm-4">
                                    <button type="button" class="btn _main_btn _bg_main btn-block" data-toggle="collapse" data-target="#_prod_review_box">Đánh giá & Nhận xét</button>
                                </div>
                            </div>
                        </div>
                        <div class="_box_main">
                            <div id="_prod_review_box" class="collapse">
                                <div class="well well-sm _md_text">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <form>
                                                <p><strong>Xin vui lòng chia sẻ đánh giá của bạn về sản phẩm này</strong></p>
                                                <p>Nhận xét về sản phẩm này</p>
                                                <div class="_vote_box _vote_rating">
                                                    <input type="hidden" class="_vote_star" data-size="md">
                                                </div>
                                                <div class="form-group">
                                                    <label class="_l_lb">Tiêu đề đánh giá (tùy chọn)</label>
                                                    <input type="text" class="form-control _s_text" placeholder="Nhập tiêu đề đánh giá tại đây">
                                                </div>
                                                <div class="form-group">
                                                    <label class="_l_lb">Mô tả đánh giá</label>
                                                    <textarea class="form-control _s_text" placeholder="Nhập mô tả tại đây" rows="3"></textarea>
                                                </div>
                                                <p class="text-right">Nhận xét của <strong>Nguyễn Văn A</strong></p>
                                                <div class="text-right">
                                                    <button type="submit" class="btn _main_btn text-uppercase">Gửi nhận xét</button>
                                                </div>
                                            </form>
                                            <div class="mgb-10"></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="rating_rules">
                                                <p><strong>Để viết 1 đánh giá chất lượng</strong></p>
                                                <strong>Bạn nên:</strong>
                                                <ul>
                                                    <li>Chỉ đánh giá về sản phẩm và đặc tính của nó.</li>
                                                    <li>Viết đánh giá dựa trên kinh nghiệm của bản thân.</li>
                                                    <li>Cho Lazada biết "tại sao" bạn lại cảm thấy như vậy về sản phẩm.</li>
                                                </ul>
                                                <br>
                                                <strong>Bạn không nên:</strong>
                                                <ul>
                                                    <li>Chia sẻ những thông tin không liên quan đến sản phẩm.</li>
                                                    <li>Chia sẻ thông tin không xác thực, dễ gây hiểu lầm và mang tính chất lừa đảo.</li>
                                                    <li>Chửi thề, đe dọa, hay sử dụng những từ ngữ không có văn hóa, phân biệt chủng tộc.</li>
                                                    <li>Chia sẻ bất kỳ thông tin cá nhân nào.</li>
                                                    <li>Đưa ra đường link không phải của Lazada.</li>
                                                    <li>Sử dụng trái phép những thông tin liên quan đến bản quyền và thương hiệu.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mgb-15"></div>
                        <div class="_box_footer">
                            <p>Điểm đánh giá trung bình của sản phẩm</p>
                            <div class="_rating_show">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="_vote_box _vote_read_only">
                                            <input type="hidden" value="4" class="_vote_star">
                                        </div>
                                        <div class="_point"><span class="large">5</span> trên 5</div>
                                        <p class="_sm_text">Dựa vào 2 đánh giá và nhận xét</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="_rating_progress">
                                            <?php for ($i = 5; $i > 0; $i --) { ?>
                                                <p>
                                                    <span class="text"><?= $i ?> sao</span> 
                                                    <span class="_rt_bar"><span class="_rt_prg" style="width: 80%;"></span></span>
                                                    <span class="num">2</span>
                                                </p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mgb-25"></div>
                        
                        <div class="_prod_review_list_box">
                            <div class="_title_box">
                                <h3 class="_box_heading pull-left">Nhận xét về sản phẩm (tổng cộng 4)</h3>
                                <div class="_sort_review_box pull-right">
                                    <div class="">
                                        <label class="_l_lb mgr-5">Sắp xếp theo</label>
                                        <select class="_sm_select">
                                            <option>Ngày tạo</option>
                                            <option>Nhận xét tốt nhất</option>
                                            <option>Nhận xét tệ nhất</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <ul class="_prod_review_list list-unstyled">
                                <?php for($i =0; $i <4; $i ++) { ?>
                                <li class="_review_item">
                                    <div class="_review_date">04 Aug, 2016</div>
                                    <p class="_vote_box _vote_read_only">
                                        <input type="hidden" value="4" class="_vote_star" data-size="xs">
                                    </p>
                                    <p class="_review_author">Guest</p>
                                    <p class="_review_content">Great product at very reasonable price.</p>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <!-- end review box -->
                <div class="_prod_cross_box">
                    <div class="_wrapper _has_border mgb-25">
                        <div class="_box_head">
                            <div class="mgb-25"></div>
                            <h3 class="_box_heading _md_heading">Hàng tương tự Samsung Điện thoại di động</h3>
                        </div>
                        <div class="mgb-30"></div>
                        <div class="_box_body">
                            <div class="row">
                                <?php for ($i = 0; $i < 4; $i++) { ?>
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
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end cross box -->
            </div>
            <div class="col-md-3 _prod_bar">
                <div class="_prod_related_box _wrapper _has_border" id="_prod_related_box">
                    <h3 class="_box_heading _md_heading mgb-15">Sản phẩm được xem cùng</h3>
                    <div class="row _items _col_items">
                        <?php for ($i = 0; $i < 4; $i++) { ?>
                            <div class="_item col-xs-6 col-sm-4 col-md-12">
                                <div class="_inner">
                                    <div class="thumb">
                                        <a href="#"><img class="img-responsive" src="images/thumbs/product_thumb<?php echo ($i % 2) ? '_2' : '' ?>.jpg" alt=" "></a>
                                    </div>
                                    <div class="_item_body">
                                        <h3 class="_item_title"><a href="#">Apple iPhone 7 32GB (Vàng) - Hãng Phân Phối Chính Thức</a></h3>
                                        <div class="_price">
                                            <div class="dis_price">17.499.000 VND</div>
                                            <span class="org_price"><del>22.999.000 VND</del> <span>10%</span></span>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="btn _buy_now_btn quick_buy_btn">Mua ngay</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'includes/quick_buy_modal.php'; ?>

<script src="plugins/elevatezoom/jquery.elevateZoom-3.0.8.min.js"></script>
<script src="plugins/bxslider/jquery.bxslider.min.js"></script>
<?php include_once 'footer.php'; ?>


