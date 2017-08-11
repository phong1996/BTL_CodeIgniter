<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <?php if(count($list_pro)){
                echo "<h1>Kết quả tìm kiếm cho ".$this->input->post('pr_name').': <h1> <br>';
                foreach($list_pro as $key => $value)
                {
                    ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="<?php echo base_url().'images/products/'.$value['avatar']?>" alt="">
                            </div>
                            <h2><a href="<?php echo base_url().'productdetail/detail/'.$value['id']; ?>"><b><?php echo $value['name']?></b></a></h2>
                            <div class="product-carousel-price">
                                <ins style="color: red"><?php echo $sale = number_format($value['price'] - ($value['price'] * $value['sale_off'])/100)?>(VND)</ins> <del><?php echo number_format($value['price'])?>(VND)</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" href="<?php echo base_url().'cart/addOne/'.$value['id']; ?>" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Thêm vào giỏ hàng</a>

                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            else {
                 echo "Không tìm thấy kết quả cho <b>".$this->input->post('pr_name').'</b>';
             } 
            ?>
        </div>

       <!--  <div class="row">
            <div class="col-md-12">
                <div class="product-pagination text-center">
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div> -->
    </div>
</div>