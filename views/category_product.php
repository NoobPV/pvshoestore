<div class="clear"></div>
  <div class="container_12">
    <div class="grid_12">
    </div><!-- .grid_12 -->
  </div><!-- .container_12 -->
  
  <div class="clear"></div>
  
  <section id="main">
    <div class="container_12">      
       <div id="content" class="grid_12">
			<h1 class="page_title">Sản phẩm</h1>
				<div class="grid_product">
		  <?php
                foreach($categorybyid as $key => $prod){?>
			<form action="<?php echo BASE_URL ?>/cart/addtocart" method='post'>
          
				<input type="hidden" value="<?php echo $prod['id'] ?>" name="product_id">
				<input type="hidden" value="<?php echo $prod['name_product'] ?>" name="product_name">
				<input type="hidden" value="<?php echo $prod['image_product'] ?>" name="product_image">
				<input type="hidden" value="<?php echo $prod['price'] ?>" name="product_price">
				<input type="hidden" value="1" name="product_quantity">

		     <div class="grid_3 product">
			    <div class="prev">
				   <a href="<?php echo BASE_URL?>/user_show/product_detail/<?php echo $prod['id']?>"><img src="<?php echo BASE_URL?>/public/images/product/<?php echo $prod['image_product']?>" alt="" title="" /></a>
			    </div><!-- .prev -->
			    <h3 class="title"><?php echo $prod['name_product']?></h3>
			    <div class="cart">
				   <div class="price">
					  <div class="vert">
						 <div class="price_new"><?php echo '$ '.number_format($prod['price'],0,',','.')?></div>
					  </div>
				   </div>
				   <a href="<?php echo BASE_URL?>/user_show/product_detail/<?php echo $prod['id']?>" class="obn"></a>
				   <a href="#" class="like"></a>
				   <input type="submit" class="bay" value="">
			    </div><!-- .cart -->
		     </div><!-- .grid_3 -->
			</form>
			 <?php }?>
		     
	      <div class="clear"></div>
	      </div><!-- .grid_product -->
	      
	      <div class="clear"></div>
	      
	      
       </div><!-- #content -->
    </div><!-- .container_12 -->
  </section><!-- #main -->
  
  <div class="clear"></div>