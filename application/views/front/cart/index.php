<div class="col-md-12">
	<div class="product-bit-title text-center">
		<h2 style="color: black">Shopping Cart</h2>
	</div>
</div>
<div class="single-product-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<?php $this->load->view('front/layout/search') ?>

				<div class="single-sidebar">
					<h2 class="sidebar-title">Sản phẩm bán chạy	</h2>
					<div class="thubmnail-recent">
						<img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
						<h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
						<div class="product-sidebar-price">
							<ins>$700.00</ins> <del>$800.00</del>
						</div>                             
					</div>
					<div class="thubmnail-recent">
						<img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
						<h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
						<div class="product-sidebar-price">
							<ins>$700.00</ins> <del>$800.00</del>
						</div>                             
					</div>
					<div class="thubmnail-recent">
						<img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
						<h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
						<div class="product-sidebar-price">
							<ins>$700.00</ins> <del>$800.00</del>
						</div>                             
					</div>
					<div class="thubmnail-recent">
						<img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
						<h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
						<div class="product-sidebar-price">
							<ins>$700.00</ins> <del>$800.00</del>
						</div>                             
					</div>
				</div>
			</div>

			<div class="col-md-8">
				<div class="product-content-right">
					<div class="woocommerce">
						<form method="post" action="<?php echo base_url().'cart/update' ?>">
							<table cellspacing="0" class="shop_table cart">
								<thead>
									<tr>
										<th class="product-remove">&nbsp;</th>
										<th class="product-thumbnail">Ảnh sản phẩm</th>
										<th class="product-name">Sản phẩm</th>
										<th class="product-price">Giá</th>
										<th class="product-quantity">Số lượg</th>
										<th class="product-subtotal">Tổng số</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($cart as $key => $value): ?>	
									<tr class="cart_item">
										<td class="product-remove">
											<a title="Remove this item" class="remove" href="<?php echo base_url().'cart/deleteItem/'.$value['rowid'] ?>">×</a> 
										</td>
										<td class="product-thumbnail">
											<a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="<?php echo base_url().'images/products/'.$value['avatar'] ?>"></a>
										</td>

										<td class="product-name">
											<a href="single-product.html"><?php echo $value['name'] ?></a> 
										</td>

										<td class="product-price">
											<span class="amount"><?php echo number_format($value['price']) ?> vnd</span> 
										</td>

										<td class="product-quantity">
											<div class="quantity buttons_added">
												<input type="button" class="minus" value="-">
												<input type="number" name="qty_<?php echo $value['rowid'] ?>" size="4" class="input-text qty text" id="qty" title="Qty" value="<?php echo $value['qty'] ?>" min="0" step="1">
												<input type="button" class="plus" value="+">
											</div>
										</td>

										<td class="product-subtotal">
											<span class="amount"><?php echo number_format($value['subtotal']) ?> vnd</span> 
										</td>
									</tr>
									<?php endforeach ?>
									<tr>
										<td class="actions" colspan="6">
											<input type="submit" value="Thanh toán" name="pay" class="checkout-button button alt wc-forward pull-right">
											<input type="submit" value="Cập nhập" name="update" class="button pull-right" style="margin-right: 10px">
											<input type="submit" value="Xóa giỏ hàng" name="delete" class="button pull-right" style="margin-right: 10px">
											<input type="submit" value="Tiếp tục mua hàng" name="home" class="button pull-right" style="margin-right: 10px">
										</td>
									</tr>
								</tbody>
							</table>
						</form>
						<div class="cart-collaterals">
							<div class="cart_totals ">
								<h2>Tông số</h2>
								<table cellspacing="0">
									<tbody>
										<tr class="cart-subtotal">
											<th>Tổng tiền</th>
											<td><span class="amount"><?php echo number_format($this->cart->total()) ?> vnd</span></td>
										</tr>

										<tr class="shipping">
											<th>Giao hàng</th>
											<td>Miên phí giao hàng</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>                        
				</div>                    
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('.plus').click(function(event) {
			$('#qty').val(parseInt($('#qty').val())+1);
		});
		$('.minus').click(function(event) {
			if($('#qty').val()>0)
			{
				$('#qty').val(parseInt($('#qty').val())-1);
			}
		});
	});
</script>