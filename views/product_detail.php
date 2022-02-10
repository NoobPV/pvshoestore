
<div class="clear"></div>
  <section id="main">
    <div class="container_12">
		<?php 
			foreach($product_detail as $key =>$detail){?>
		<form action="<?php echo BASE_URL ?>/cart/addtocart" method='post'>

			<input type="hidden" value="<?php echo $detail['id'] ?>" name="product_id">
            <input type="hidden" value="<?php echo $detail['name_product'] ?>" name="product_name">
            <input type="hidden" value="<?php echo $detail['image_product'] ?>" name="product_image">
            <input type="hidden" value="<?php echo $detail['price'] ?>" name="product_price">
            <input type="hidden" value="1" name="product_quantity">

       <div id="content" class="grid_10">
	      <h1 class="page_title"><?php echo $detail['name_product']; ?></h1>
		<div class="product_page">
			<div class="grid_4 img_slid" id="products">
				<div class="preview slides_container">
					<div class="prev_bg">
							<img src="<?php echo BASE_URL?>/public/images/product/<?php echo $detail['image_product']; ?>"  style="width: 70%" title="" alt=""/>
					</div>
				</div><!-- .prev -->
			</div><!-- .grid_4 -->

			<div class="grid_5">
				<div class="entry_content">
					<div class="review">
						<a class="plus" href="#"></a>
						<a class="plus" href="#"></a>
						<a class="plus" href="#"></a>
						<a href="#"></a>
						<a href="#"></a>
					</div>
					<p><?php echo $detail['detail_product']; ?></p>
					<div class="ava_price">
						<div class="price">
							<div class="price_new">Giá: <?php echo number_format($detail['price'],0,',','.').' VNĐ'?></div>
						</div><!-- .price -->
					</div><!-- .ava_price -->

					<div class="block_cart">
						<div class="cart">
						<input type="submit" class="bay" value="Thêm vào giỏ">
						</div>
						<div class="clear"></div>
					</div><!-- .block_cart -->
					<div class="soc">
						<img src="<?php echo BASE_URL?>/public/images/soc.png" alt="Soc"/>
					</div><!-- .soc -->
				</div><!-- .entry_content -->
		</form>
		<?php }?>
			</div><!-- .grid_5 -->

			<div class="clear"></div>

		</div><!-- .product_page -->
		<div class="clear"></div>

       </div><!-- #content -->
       
     <div class="clear"></div>
	
	<div class="clear"></div>

    </div><!-- .container_12 -->
	
  </section><!-- #main -->

  <div class="clear"></div>