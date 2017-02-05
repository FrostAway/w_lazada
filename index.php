<?php include_once 'header.php'; ?>

<div class="main_banner hidden-xs hidden-sm pdb-30">
    <div class="container">
        <?php for ($i = 0; $i < 2; $i++) { ?>
            <div class="row _items _grid_items _banner_items">
                <?php for ($j = 0; $j < 4; $j++) { ?>
                    <div class="col-sm-3 _item">
                        <div class="_inner">
                            <div class="thumb">
                                <a href="#"><img class="img-responsive" src="images/banners/banner_item.jpg" alt=" "></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div> <!-- end section -->

<div class="main_slider _with_dots hidden-lg hidden-md">
    <div class="container">
        <ul class="list_slides list-unstyled">
            <li><a href="#"><img class="img-responsive" src="images/slider/slide1.jpg"></a></li>
            <li><a href="#"><img class="img-responsive" src="images/slider/slide2.jpg"></a></li>
        </ul>
    </div>
</div>

<?php for ($t = 0; $t < 4; $t++) { ?>
    <div class="_item_box _with_banner _with_slider <?php echo!($t % 2) ? '_b_left' : '_b_right' ?>">
        <div class="container">
            <h2 class="_box_title">iPhone 7 - Giá không tưởng <a href="#" class="pull-right"><span>Xem tất cả</span> <i class="fa fa-angle-right"></i></a></h2>
            <div class="_box_content">
                <div class="row">
                    <div class="col-md-2 _b__col">
                        <div class="_item_banner">
                            <div class="thumb">
                                <a href="#"><img class="img-responsive" src="images/thumbs/thumb_banner<?php echo ($t % 2) ? '_2' : '' ?>.jpg" alt=" "></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 _p__col">
                        <div class=" _items _grid_items _one_row">
                            <?php for ($i = 0; $i < 8; $i++) { ?>
                                <div class="_item">
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
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end section -->
<?php } ?>

<div class="_item_box _slider_5 _relate_box">
    <div class="container">
        <h2 class="_box_title">Sản phẩm tương tự</h2>
        <div class="_box_content">
            <div class="_items _grid_items _one_row">
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
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="_item_box _partner_box">
    <div class="container">
        <h2 class="_box_title">Thương hiệu tiêu biểu</h2>
        <div class="_box_content">
            <ul class="nav nav-tabs tabs-partner">
                <?php for ($i = 0; $i < 16; $i++) { ?>
                    <li role="presentation" class="<?= $i == 0 ? 'active' : '' ?>">
                        <a href="#partner-tab-<?php echo $i ?>" role="tab" data-toggle="tab">
                            <img src="images/thumbs/partner.svg" alt=" ">
                            <span>Thời trang nam <?= $i ?></span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
            <div class="tab-content">
                <?php for ($t = 0; $t < 16; $t++) { ?>
                    <div role="tabpanel" class="tab-pane <?= $t == 0 ? 'active' : '' ?>" id="partner-tab-<?= $t ?>">
                        <div class="row _items _grid_items _banner_items">
                            <div class="col-xs-6 col-sm-4 col-md-2 _item">
                                <div class="_inner">
                                    <div class="thumb">
                                        <a href="#">Tab <?= $t ?></a>
                                    </div>
                                </div>
                            </div>
                            <?php for ($i = 0; $i < 5; $i++) { ?>
                                <div class="col-xs-6 col-sm-4 col-md-2 _item">
                                    <div class="_inner">
                                        <div class="thumb">
                                            <a href="#"><img src="images/banners/partner_bn.jpg" class="img-responsive" alt=" "></a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="text-center _more_box">
                            <a href="#" class="_btn_more text-uppercase">Xem thêm</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>

