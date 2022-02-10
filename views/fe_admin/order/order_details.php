<!-- Inner Container -->
<div id="inner-container">
                <!-- Sidebar -->
                <aside id="page-sidebar" class="collapse navbar-collapse navbar-main-collapse">
                    <!-- Sidebar search -->
                    <form id="sidebar-search" action="page_search_results.html" method="post">
                        <div class="input-group">
                            <input type="text" id="sidebar-search-term" name="sidebar-search-term" placeholder="Search..">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                    <!-- END Sidebar search -->

                    <!-- Primary Navigation -->
                    <nav id="primary-nav">
                        <ul>
                            <li>
                                <a href="<?php echo BASE_URL ?>/login/dashboard"><i class="fas fa-chart-line"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-store"></i>Quản lý sản phẩm</a>
                                <ul>
                                    <li>
                                        <a href="<?php echo BASE_URL ?>/category/list_category"><i class="fas fa-monument"></i>Danh mục sản phẩm</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo BASE_URL ?>/product/list_product"><i class="fas fa-boxes"></i>Sản phẩm</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL ?>/order/list_order" class="active"><i class="fas fa-clipboard-list"></i>Đơn hàng</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL ?>"><i class="fas fa-home"></i>Trở về trang chủ</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- END Primary Navigation -->
                </aside>
                <!-- END Sidebar -->

                <!-- Page Content -->
                <div id="page-content">
                    <!-- Navigation info -->
                    <ul id="nav-info" class="clearfix">
                        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a href="">Chi tiết Đơn hàng</a></li>
                    </ul>
                    <!-- END Navigation info -->
                    <h2 class="text-center">THÔNG TIN KHÁCH HÀNG</h2>
                    <table id="example-datatables" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="cell-large text-center">Tên khách hàng</th>
                                <th class="text-center cell-large hidden-xs hidden-sm">Địa chỉ</th>
                                <th class="cell-small text-center hidden-xs hidden-sm">Email</th>
                                <th class="text-center hidden-xs hidden-sm hidden-md">Số điện thoại</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach($order_info as $key => $ord){ ?>
                            <tr>
                                <td class="text-center"><?php echo $ord['name_customer']?></td>
                                <td  class="text-center cell-large hidden-xs hidden-sm hidden-md"><a href="javascript:void(0)"></a><?php echo $ord['address_customer']?></td>
                                <td class="hidden-xs hidden-xs hidden-sm hidden-md"><?php echo $ord['email_customer']?></td>
                                <td class="text-center hidden-xs hidden-sm hidden-md"><?php echo $ord['phone_customer']?></td>
                            </tr>
                            <?php }?>
                        </tbody>    
                    </table>
                    <!-- Datatables -->
                    <h2 class="text-center">CHI TIẾT ĐƠN</h2>
                    <table id="example-datatables" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Mã đơn hàng</th>
                                <th class="text-center">ảnh sản phẩm</th>
                                <th class="text-center hidden-xs hidden-sm hidden-md">Tên sản phẩm</th>
                                <th class="text-center hidden-xs hidden-sm hidden-md">Giá</th>
                                <th class="text-center">Số lượng hàng</th>
                                <th class="text-center">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $total = 0;
                            foreach($order_details as $key => $ord){
                            $total+=$ord['product_quantity']*$ord['price']; 
                        ?>
                            <tr>
                                <td class="text-center"><?php echo $ord['order_code']?></td>
                                <td class="text-center"><img src="<?php echo BASE_URL ?>/public/images/product/<?php echo $ord['image_product'] ?>" width="100px" height="100px"></td>
                                <td class="text-center hidden-xs hidden-sm hidden-md"><?php echo $ord['name_product']?></td>
                                <td class="text-center hidden-xs hidden-sm hidden-md"><?php echo number_format($ord['price'],0,',','.').'VND'?></td>
                                <td class="text-center"><?php echo $ord['product_quantity'] ?></td>
                                <td class="text-center"><?php echo number_format($ord['product_quantity']*$ord['price'],0,',','.').'VND'?></td>
                            </tr>
                            <?php }?>
                            <form action="<?php echo BASE_URL?>/order/order_confirm/<?php echo $ord['order_code']?>" method="POST">
                                <td class="text-center"><input type="submit"  class="btn btn-xs btn-info" value="Cập nhật đơn hàng" style="padding:10px; margin:10px"></td>
                                <td colspan="10" class="text-center" style="font-size:20px; padding:20px">Tổng cộng: <?php echo number_format($total,0,',','.').'VND'?></td>
                            </form>
                            
                        </tbody>    
                    </table>
                    <!-- END Datatables -->
                </div>
                <!-- END Page Content -->
            </div>
            <!-- END Inner Container -->
        </div>
        <!-- END Page Container -->
