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
                        <li class="active"><a href="">Đơn hàng</a></li>
                    </ul>
                    <!-- END Navigation info -->

                    <!-- Datatables -->
                    <table id="example-datatables" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="cell-small"></th>
                                <th class="cell-small text-center">id</th>
                                <th class="text-center cell-large">Mã đơn hàng</th>
                                <th class="text-center hidden-xs hidden-sm hidden-md">Ngày đặt</th>
                                <th class="text-center"><i class="fa fa-bolt"></i>Tình trạng đơn hàng</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach($order as $key => $ord){?>
                            
                            <tr>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="<?php echo BASE_URL?>/order/order_details/<?php echo $ord ['order_code']?>" data-toggle="tooltip" title="Xem đơn hàng" class="btn btn-xs btn-info"><i class="fa fa-info-circle"></i></a>
                                        <a  onclick="return confirm('Bạn có chắc chắn muốn xóa không')" href="<?php echo BASE_URL?>/order/delete_order/<?php echo $ord['order_code']?>" data-toggle="tooltip" title="Xóa" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                                <td class="text-center"><?php echo $ord['order_id']?></td>
                                <td class="text-center"><a href="javascript:void(0)"></a><?php echo $ord['order_code']?></td>
                                <td class="text-center hidden-xs hidden-sm hidden-md"><?php echo $ord['order_date']?></td>
                                <td class="text-center"><span><?php if($ord['order_status']==0){echo '<span class="label label-warning">'.'Đang xử lý'.'</span>';}else{echo '<span class="label label-info">'.'Giao hàng thành công'.'</span>';}?></span></td>
                            </tr>
                            
                        <?php }?>
                        </tbody>
                    </table>
                    <!-- END Datatables -->
                </div>
                <!-- END Page Content -->
            </div>
            <!-- END Inner Container -->
        </div>
        <!-- END Page Container -->
