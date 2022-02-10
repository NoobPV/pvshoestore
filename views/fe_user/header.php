<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">

  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width">

  <title>Home</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="shortcut icon" href="favicon.ico">
  <link href="<?php echo BASE_URL?>/public/css/style.css" media="screen" rel="stylesheet" type="text/css">
  <script src="<?php echo BASE_URL?>/public/js/jquery-1.7.2.min.js"></script> 
  <script src="<?php echo BASE_URL?>/public/js/html5.js"></script>
  <script src="<?php echo BASE_URL?>/public/js/main.js"></script>
  <script src="<?php echo BASE_URL?>/public/js/jquery.carouFredSel-6.2.0-packed.js"></script>
  <script src="<?php echo BASE_URL?>/public/js/jquery.touchSwipe.min.js"></script>
  <script src="<?php echo BASE_URL?>/public/js/checkbox.js"></script>
  <script src="<?php echo BASE_URL?>/public/js/radio.js"></script>
  <script src="<?php echo BASE_URL?>/public/js/selectBox.js"></script>
  <script src="<?php echo BASE_URL?>/public/js/jquery.jqzoom-core.js"></script>
</head>
<body>
  <div class="container_12">
    <div id="top">
      <div class="grid_6 ">
        <div class="phone_top">
          <span>Hãy gọi chúng tôi +84 969696969</span>
        </div><!-- .phone_top -->
      </div><!-- .grid_3 -->

      <div class="grid_6">
        <div class="welcome">
         Xin chào, bạn có thể <a href="<?php echo BASE_URL?>/login">đăng nhập</a> hoặc <a href="<?php echo BASE_URL?>/register/form_register">đăng ký</a> tại đây.
        </div><!-- .welcome -->
      </div><!-- .grid_6 -->
    </div><!-- #top -->

    <div class="clear"></div>

    <header id="branding">
      <div class="grid_3">
        <hgroup>
          <h1 id="site_logo" ><a href="<?php echo BASE_URL?>/index" title=""><img src="<?php echo BASE_URL?>/public/images/logo.png" alt="Online Store Theme Logo"/></a></h1>
        </hgroup>
      </div><!-- .grid_3 -->

      <div class="grid_3">
        <form class="search">
          <input type="text" name="search" class="entry_form" value="" placeholder="Nhập tên sản phẩm..."/>
	</form>
      </div><!-- .grid_3 -->

      <div class="grid_6">
	    <ul id="cart_nav">
          <li>
            <a class="cart_li" href="<?php echo BASE_URL?>/cart">Giỏ hàng <span></span></a>
          </li>
      </ul>
        
      

        <nav class="private">
          <ul>
            <li><a href="<?php echo BASE_URL?>/login">Tài khoản của tôi</a></li>
		<li class="separator">|</li>
            <li><a href="<?php echo BASE_URL?>/login/logout">Đăng xuất</a></li>
          </ul>
        </nav><!-- .private -->
      </div><!-- .grid_6 -->
    </header><!-- #branding -->
  </div><!-- .container_12 -->

  <div class="clear"></div>
  
  <div id="block_nav_primary">
    <div class="container_12">
      <div class="grid_12">
        <nav class="primary">
          <a class="menu-select" href="#">Catalog</a>
          <ul>
            <li class="parent">
              <a href="#">Danh mục sản phẩm</a>
              <ul class="sub">
                <?php
                  foreach($category as $key => $cate){?>
                    <li><a href="<?php echo BASE_URL?>/user_show/category_product/<?php echo $cate['id']?>"><?php echo $cate['name_category'] ?></a></li>
                <?php }?>
                <li><a href="">Converse</a></li>
                <li><a href="">New Balance</a></li>
                <li><a href="">Balenciaga</a></li>
                <li><a href="">Puma</a></li>
                <li><a href="">REEBOK</a></li>
                <li><a href="">Under Armor</a></li>
                <li><a href="">VANS</a></li>  
              </ul>
            </li>
            <?php
              foreach($category as $key => $cate){?>  
                <li><a href="<?php echo BASE_URL?>/user_show/category_product/<?php echo $cate['id']?>"><?php echo $cate['name_category'] ?></a></li>
            <?php }?>
            <li><a href="">CONVERSE</a></li>
            <li><a href="">NEW BALANCE</a></li>
            <li><a href="">BALENCIAGA</a></li>
            <li><a href="">PUMA</a></li>
            <li><a href="">REEBOK</a></li>
          </ul>
        </nav><!-- .primary -->
      </div><!-- .grid_12 -->
    </div><!-- .container_12 -->
  </div><!-- .block_nav_primary -->