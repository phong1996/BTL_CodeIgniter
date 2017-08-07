<div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php  $this->load->view('front/layout/search')?>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Sản phẩm liên quan</h2>
                        <?php foreach ($same_product as $key => $value): ?>
                        <div class="thubmnail-recent">
                            <img src="<?php echo base_url().'images/products/'.$value->avatar ?>" class="recent-thumb" alt="">
                            <h2><a href=""><?php echo $value->name; ?></a></h2>
                            <div class="product-sidebar-price">
                                <ins><?php echo number_format($product->price) ?> VND</ins></ins> <del>$100.00</del>
                            </div>                             
                        </div>
                        <?php endforeach ?>
                    </div>
                  
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">  
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="<?php echo base_url().'images/products/'.$product->avatar; ?>" alt="">
                                    </div>
                                    
                                    <div class="product-gallery">

                                       <?php foreach ($Images as $key => $value){
                                       	?>
                                        	<img src="<?php echo base_url().'images/products/'.$value->name ?>" alt="">
                                    	<?php } ?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php echo $product->name ?></h2>
                                    <div class="product-inner-price">
                                        <ins><?php echo number_format($product->price) ?> VND</ins> <del>$100.00</del>
                                    </div>    
                                    
                                    <form method="post" action="<?php echo base_url().'cart/add' ?>" class="cart">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                            <input type="hidden" name="id_product" value="<?php echo $product->id ?>">
                                        </div>
                                        <button class="add_to_cart_button" type="submit">Add to cart</button>
                                    </form>   
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Product Description</h2>  
                                                <?php echo $product->description ?>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                               	<p><label>Display : <?php echo $product_info->display ?></label></p>
                                               	<p><label>Camera : <?php echo $product_info->camera ?></label></p>
                                               	<p><label>Operating : <?php echo $product_info->operating ?></label></p>
                                               	<p><label>Storage : <?php echo $product_info->storage ?></label></p>
                                               	<p><label>Network : <?php echo $product_info->network ?></label></p>
                                               	<p><label>Design : <?php echo $product_info->design ?></label></p>
                                               	<p><label>Battery_charge : <?php echo $product_info->battery_charge ?></label></p>
                                               	<p><label>Utilities : <?php echo $product_info->utilities ?></label></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="related-products-wrapper">
                            <div class="fb-comments" data-href="<?php echo "http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];?>" data-width="730px" data-numposts="5"></div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
