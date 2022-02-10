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
                            <li class="active">
                                <a href="#"><i class="fas fa-store"></i>Quản lý sản phẩm</a>
                                <ul>
                                    <li>
                                        <a href="<?php echo BASE_URL ?>/category/list_category" class="active"><i class="fas fa-monument"></i>Danh mục sản phẩm</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo BASE_URL ?>/product/list_product"><i class="fas fa-boxes"></i></i>Sản phẩm</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL ?>/order/list_order"><i class="fas fa-clipboard-list"></i>Đơn hàng</a>
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
                        <li><a href="javascript:void(0)">Quản lý sản phẩm</a></li>
                        <li class="active"><a href="">Danh mục sản phẩm</a></li>
                    </ul>
                    <!-- END Navigation info -->
                    <a href="<?php echo BASE_URL ?>/category/add_category" id="addRow" class="btn btn-primary"><i class="fa fa-plus"></i> Thêm danh mục</a>
                    <!-- Default style -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">id</th>
                                <th>Tên danh mục</th>
                                <th class="text-center"><i class="fa fa-bolt"></i> Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($category as $key => $cate){?>
                                    <tr>
                                        <td class="text-center"><?php echo $cate['id']?></td>
                                        <td><a href="javascript:void(0)"><?php echo $cate['name_category']?></a></td>
                                        <td class="text-center">
                                                <a onclick="return confirm('Bạn có chắc chắn muốn sửa không')" href="<?php echo BASE_URL ?>/category/edit_category/<?php echo $cate['id']; ?>" data-toggle="tooltip" title="Cập nhật" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa không')" href="<?php echo BASE_URL ?>/category/delete_category/<?php echo $cate['id']; ?>" data-toggle="tooltip" title="Xóa" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                            <?php }?>
                        </tbody>
                    </table>
                    <!-- END Default style -->

                </div>
                <!-- END Page Content -->

                <!-- Footer -->
                <!-- END Footer -->
            </div>
            <!-- END Inner Container -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, check main.js - scrollToTop() -->
        <a href="javascript:void(0)" id="to-top"><i class="fa fa-chevron-up"></i></a>
        <!-- Excanvas for canvas support on IE8 -->
        <!--[if lte IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->