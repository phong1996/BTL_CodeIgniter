<section class="content">
    <?php $this->load->view('front/layout/slide'); ?>
</section>
<div class="promo-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row" style="font-family: 'Open Sans Condensed', sans-serif">
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo1">
                    <i class="fa fa-refresh"></i>
                    <p>30 Ngày Đổi Trả</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo2">
                    <i class="fa fa-truck"></i>
                    <p>Miễn Phí Giao Hàng</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo3">
                    <i class="fa fa-lock"></i>
                    <p>Bảo Mật Thông Tin</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo4">
                    <i class="fa fa-gift"></i>
                    <p>Nhiều Ưu Đãi</p>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End promo area -->

<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">New Products</h2>
                    <div class="product-carousel">
                        <?php
                        if(isset($list_last_products)){
                            foreach($list_last_products as $key => $value)
                            {
                                ?>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="<?php echo base_url().'images/products/'.$value['avatar']?>" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="<?php echo base_url().'productdetail/detail/'.$value['id']; ?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>
                                    <div class="product-wid-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h2><a href="single-product.html"><b><?php echo $value['name']?></b></a></h2>

                                    <div class="product-carousel-price">
                                        <ins style="color: red"><?php echo $sale = number_format($value['price'] - ($value['price'] * $value['sale_off'])/100)?>(VND)</ins> <del><?php echo number_format($value['price'])?>(VND)</del>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->
<!--
  [id] => 52
            [id_producer] => 8
            [name] => User name
            [price] => 4500000
            [quantyti] => 54
            [avatar] => zeaik62QsOl1nGxB5s2(Copy).jpg
            [sale_off] => 3
            [views] => 0
            [description] => sdfsdfsdfsdfsdf
            [status] => 1
-->
<div class="brands-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="brand-wrapper">
                    <div class="brand-list">
                        <?php
                        foreach($this->session->userdata('menu') as $value)
                        {
                            ?>
                            <img src="<?php echo 'images/logo/'.$value->logo ?>" alt="">

                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End brands area -->

<div class="product-widget-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Hot Products</h2>
                    <a href="" class="wid-view-more">View All</a>
                 <!--   --><?php /*if(isset($_SESSION['products_all'])){
                        foreach($_SESSION['products_all'] as $key => $value)
                        {
                            */?>
                            <div class="single-wid-product col-md-4">
                                <a href=""><img src="" alt="" class="product-thumb"></a>
                                <h2><a href=""></a></h2>
                                <div class="product-wid-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-wid-price">
                                    <ins>234</ins> <del>444222</del>
                                </div>
                            </div>
                    <div class="single-wid-product col-md-4">
                        <a href=""><img src="" alt="" class="product-thumb"></a>
                        <h2><a href=""></a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>234</ins> <del>444222</del>
                        </div>
                    </div>
                    <div class="single-wid-product col-md-4">
                        <a href=""><img src="" alt="" class="product-thumb"></a>
                        <h2><a href=""></a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>234</ins> <del>444222</del>
                        </div>
                    </div>
                    <div class="single-wid-product col-md-4">
                        <a href=""><img src="" alt="" class="product-thumb"></a>
                        <h2><a href=""></a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>234</ins> <del>444222</del>
                        </div>
                    </div>
                    <div class="single-wid-product col-md-4">
                        <a href=""><img src="" alt="" class="product-thumb"></a>
                        <h2><a href=""></a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>234</ins> <del>444222</del>
                        </div>
                    </div>
                    <div class="single-wid-product col-md-4">
                        <a href=""><img src="" alt="" class="product-thumb"></a>
                        <h2><a href=""></a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>234</ins> <del>444222</del>
                        </div>
                    </div>
                    <div class="single-wid-product col-md-4">
                        <a href=""><img src="" alt="" class="product-thumb"></a>
                        <h2><a href=""></a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>234</ins> <del>444222</del>
                        </div>
                    </div>
                    <div class="single-wid-product col-md-4">
                        <a href=""><img src="" alt="" class="product-thumb"></a>
                        <h2><a href=""></a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>234</ins> <del>444222</del>
                        </div>
                    </div>
                    <div class="single-wid-product col-md-4">
                        <a href=""><img src="" alt="" class="product-thumb"></a>
                        <h2><a href=""></a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>234</ins> <del>444222</del>
                        </div>
                    </div>

                            <?php
/*                        }
                    } */?>
                </div>
            </div>

        </div>
    </div>
</div> <!-- End product widget area -->