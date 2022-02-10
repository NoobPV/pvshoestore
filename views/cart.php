<section id="main" class="entire_width">
    <div class="container_12">
       <div class="grid_12">
       <h1 class="page_title">Giỏ hàng</h1>
		
			<table class="cart_product">
						
			<tbody>
					<?php
						if(isset($_SESSION['shopping_cart'])){
					?>
					<tr>
						<th class="images">Hình sản phẩm</th>
						<th class="bg name">Tên sản phẩm</th>
						<th class="bg price">Giá</th>
						<th class="qty">Số lượng</th>
						<th class="bg subtotal">Tổng cộng</th>
						<th class="close">Xóa</th>
					</tr>
				<form action="<?php echo BASE_URL?>/cart/updatecart" method="post">
					<?php
						$total = 0;
						foreach($_SESSION['shopping_cart'] as $key =>$value){
						$subtotal = $value['product_quantity']*$value['product_price'];
						$total+=$subtotal;
					?>
					<tr>
						<td class="images"><img src="<?php echo BASE_URL?>/public/images/product/<?php echo $value['product_image']?>"  alt="<?php echo $value['product_name'] ?>"></a></td>
						<td class="bg name"><?php echo $value['product_name']?></td>
						<td class="bg price"><?php echo number_format($value['product_price'],0,',','.').' VND'?></td>
						<td class="qty"><input type="text" min="1" name="qty[<?php echo $value['product_id'] ?>]" value="<?php echo $value['product_quantity']?>"></td>
						<td class="bg subtotal"><?php echo number_format($subtotal,0,',','.').' VND' ?></td>
						<td class="close"><button type="submit" value="<?php echo $value['product_id']?>" class="close" name="delete_cart">x</button></td>
					</tr>
					<?php }?>
					<tr class="subtotals">
						<td colspan="3"></td>
						<td colspan="4" class="subs">Tổng cộng: <?php echo number_format($total,0,',','.').' VND'?></td>
					</tr>
					<tr>
						<td colspan="7" class="cart_but">
							<button class="continue" formaction="<?php echo BASE_URL?>"><span>icon</span>Tiếp tục mua hàng</button>
							<button type="submit" value="<?php echo $value['product_id']?>" name="update_cart" class="update"><span>icon</span>Cập nhật giỏ hàng</button>
						</td>
					</tr>
					<?php }?>
					
					
				</tbody>
			</table>
				</form>
       </div><!-- .grid_12 -->
       <div class="clear"></div>
       <div id="content_bottom" class="shopping_box">
	   <div class="grid_4">
          <div class="bottom_block discount">
            <h3>Mã giảm giá</h3>
	    <form>
	      <p>
		     <input type="text" name="" value="" placeholder="Nhập mã giảm giá">
	      </p>
	      <input type="submit" id="apply_coupon" value="Áp dụng">
	    </form>
          </div><!-- .discount -->
        </div><!-- .grid_4 -->
		<form action="<?php echo BASE_URL?>/cart/checkout" method="POST">
			<div class="grid_4">
			<div class="bottom_block estimate">
				<h3>Thông tin giao hàng</h3>
				<p>
				<strong>Họ tên:</strong><sup class="surely">*</sup><br>
				<input type="text" id="name_customer" name="name_customer" placeholder="nhập họ và tên" required>
			</p>
			<p>
				<strong>Địa chỉ:</strong><sup class="surely">*</sup><br>
				<input type="text" id="address_customer" name="address_customer" placeholder="nhập địa chỉ nhà" required>
			</p>
			<p>
			<strong>Email:</strong><sup class="surely">*</sup><br>
			<input type="text" id="email_customer" name="email_customer" placeholder="nhập email" required>
			</p>
			<p>
				<strong>Số điện thoại</strong><br>
				<input type="text" id="phone_customer" name="phone_customer" placeholder="Nhập số điện thoại" required>
			</p>

			</div><!-- .estimate -->
			</div><!-- .grid_4 -->
			<div class="grid_4">
			<div class="bottom_block total">
				<button type="submit" id="checkout" class="checkout">Thanh toán</button>
				</div><!-- .total -->
			</div><!-- .grid_4 -->
		</form>	
        <div class="clear"></div>
      </div><!-- #content_bottom -->
      <div class="clear"></div>
    </div><!-- .container_12 -->
  </section>