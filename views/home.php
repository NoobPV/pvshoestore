
  <div class="clear"></div>
  <div class="container_12">
    <div class="grid_12">
        <div class="slidprev"><span>Prev</span></div>
        <div class="slidnext"><span>Next</span></div>
              
        <div id="slider">
         <div class="slide">
            <img src="<?php echo BASE_URL?>/public/images/slider/slider1.jpg" alt="" title="" />
            <div class="slid_text">
            </div>
          </div>
         <div class="slide">
            <img src="<?php echo BASE_URL?>/public/images/slider/slider2.jpg" alt="" title="" />
            <div class="slid_text">
              <h3 class="slid_title">
            </div>
          </div>
          <div class="slide">
            <img src="<?php echo BASE_URL?>/public/images/slider/slider3.jpg" alt="" title="" />
            <div class="slid_text">
              <h3 class="slid_title">
            </div>
          </div>
          <div class="slide">
            <img src="<?php echo BASE_URL?>/public/images/slider/slider4.jpg" alt="" title="" />
            <div class="slid_text">
              <h3 class="slid_title">
            </div>
          </div>
        </div><!-- .slider -->
        <div class="clear"></div>
        
        <div id="myController">
          <div class="control"><span>1</span></div>
          <div class="control"><span>2</span></div>
          <div class="control"><span>3</span></div>
        </div>
        
    </div><!-- .grid_12 -->
  </div><!-- .container_12 -->

  <div class="clear"></div>

  <section id="main" class="home">
    <div class="container_12">
      <div class="clear"></div>
        <?php
          foreach($home_product as $key => $products){?>
          <form action="<?php echo BASE_URL ?>/cart/addtocart" method='post'>
          
              <input type="hidden" value="<?php echo $products['id'] ?>" name="product_id">
              <input type="hidden" value="<?php echo $products['name_product'] ?>" name="product_name">
              <input type="hidden" value="<?php echo $products['image_product'] ?>" name="product_image">
              <input type="hidden" value="<?php echo $products['price'] ?>" name="product_price">
              <input type="hidden" value="1" name="product_quantity">
            
              <div class="grid_3 product">
                <div class="prev">
                    <a href="<?php echo BASE_URL?>/user_show/product_detail/<?php echo $products['id']?>"><img src="<?php echo BASE_URL?>/public/images/product/<?php echo $products['image_product']?>" alt="" title="" /></a>
                  </div><!-- .prev -->
                  <h3 class="title"><?php echo $products['name_product']?></h3>
                  <div class="cart">
                    <div class="price">
                    <div class="vert">
                      <div class="price_new"><?php echo '$ '.number_format($products['price'],0,',','.')?></div>
                    </div>
                    </div>
                      <a href="<?php echo BASE_URL?>/user_show/product_detail/<?php echo $products['id']?>" class="obn"></a>
                      <a href="#" class="like"></a>
                      <input type="submit" class="bay" value="">
                     

                  </div><!-- .cart -->
              </div><!-- .grid_3 -->
          </form>
          <?php }?>
      <div class="clear"></div>
    </div><!-- .container_12 -->
  </section><!-- #main -->

  <div class="clear"></div>
