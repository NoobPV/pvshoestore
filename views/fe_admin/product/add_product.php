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
                                        <a href="<?php echo BASE_URL ?>/category/list_category" ><i class="fas fa-monument"></i>Danh mục sản phẩm</a>
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
                        <li class="active"><a href="">Thêm sản phẩm</a></li>
                    </ul>
                    <!-- END Navigation info -->
                    <form id="form-validation" action="<?php echo BASE_URL ?>/product/insert_product" method="post" class="form-horizontal form-box remove-margin" novalidate="novalidate" abineguid="BCB3BE931B734E38B58BD9979060DF74" enctype="multipart/form-data">
                        <!-- Form Header -->
                        <h4 class="form-box-header">Thêm sản phẩm</h4>

                        <!-- Form Content -->
                        <div class="form-box-content">
                            <div class="form-group">
                                <label class="control-label col-md-2" for="val_username">Tên sản phẩm</label>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                        <input type="text" id="val_username" name="name_product" class="form-control" required='1'>
                                    <div id="pwm-inline-icon-45650" class="pwm-field-icon" style="position: absolute !important; width: 18px !important; height: 18px !important; min-height: 0px !important; min-width: 0px !important; z-index: 2147483645 !important; box-shadow: none !important; box-sizing: content-box !important; background: none !important; border: none !important; padding: 0px !important; cursor: pointer !important; outline: none !important; margin-top: 8px; margin-left: 317.5px;"><svg style="display: inline-block !important; width: 16px !important; height: 16px !important; fill: rgb(230, 0, 23) !important; margin-top: 0.5px !important; position: absolute !important; top: 0px !important; left: 0px !important;" viewBox="0 0 40 64"><g><path d="m20,28.12a33.78,33.78 0 0 1 13.36,2.74a22.18,22.18 0 0 1 0.64,5.32c0,9.43 -5.66,17.81 -14,20.94c-8.34,-3.13 -14,-11.51 -14,-20.94a22.2,22.2 0 0 1 0.64,-5.32a33.78,33.78 0 0 1 13.36,-2.74m0,-28.12c-8.82,0 -14,7.36 -14,16.41l0,5.16c2,-1.2 2,-1.49 5,-2.08l0,-3.08c0,-6.21 2.9,-11.41 8.81,-11.41l0.19,0c6.6,0 9,4.77 9,11.41l0,3.08c3,0.58 3,0.88 5,2.08l0,-5.16c0,-9 -5.18,-16.41 -14,-16.41l0,0zm0,22c-6.39,0 -12.77,0.67 -18.47,4a31.6,31.6 0 0 0 -1.53,9.74c0,13.64 8.52,25 20,28.26c11.48,-3.27 20,-14.63 20,-28.26a31.66,31.66 0 0 0 -1.54,-9.77c-5.69,-3.3 -12.08,-4 -18.47,-4l0,0l0.01,0.03z"></path><path d="m21.23,39.5a2.81,2.81 0 0 0 1.77,-2.59a2.94,2.94 0 0 0 -3,-2.93a3,3 0 0 0 -3,3a2.66,2.66 0 0 0 1.77,2.48l-1.77,4.54l6,0l-1.77,-4.5z"></path></g></svg></div></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="val_email">Hình ảnh</label>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-file-image-o fa-fw"></i></span>
                                        <input type="file" id="val_email" name="image_product" class="form-control"  required='1'>
                                    <div id="pwm-inline-icon-38995" class="pwm-field-icon" style="position: absolute !important; width: 18px !important; height: 18px !important; min-height: 0px !important; min-width: 0px !important; z-index: 2147483645 !important; box-shadow: none !important; box-sizing: content-box !important; background: none !important; border: none !important; padding: 0px !important; cursor: pointer !important; outline: none !important; margin-top: 8px; margin-left: 317.5px;"><svg style="display: inline-block !important; width: 16px !important; height: 16px !important; fill: rgb(230, 0, 23) !important; margin-top: 0.5px !important; position: absolute !important; top: 0px !important; left: 0px !important;" viewBox="0 0 40 64"><g><path d="m20,28.12a33.78,33.78 0 0 1 13.36,2.74a22.18,22.18 0 0 1 0.64,5.32c0,9.43 -5.66,17.81 -14,20.94c-8.34,-3.13 -14,-11.51 -14,-20.94a22.2,22.2 0 0 1 0.64,-5.32a33.78,33.78 0 0 1 13.36,-2.74m0,-28.12c-8.82,0 -14,7.36 -14,16.41l0,5.16c2,-1.2 2,-1.49 5,-2.08l0,-3.08c0,-6.21 2.9,-11.41 8.81,-11.41l0.19,0c6.6,0 9,4.77 9,11.41l0,3.08c3,0.58 3,0.88 5,2.08l0,-5.16c0,-9 -5.18,-16.41 -14,-16.41l0,0zm0,22c-6.39,0 -12.77,0.67 -18.47,4a31.6,31.6 0 0 0 -1.53,9.74c0,13.64 8.52,25 20,28.26c11.48,-3.27 20,-14.63 20,-28.26a31.66,31.66 0 0 0 -1.54,-9.77c-5.69,-3.3 -12.08,-4 -18.47,-4l0,0l0.01,0.03z"></path><path d="m21.23,39.5a2.81,2.81 0 0 0 1.77,-2.59a2.94,2.94 0 0 0 -3,-2.93a3,3 0 0 0 -3,3a2.66,2.66 0 0 0 1.77,2.48l-1.77,4.54l6,0l-1.77,-4.5z"></path></g></svg></div></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Giá</label>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>
                                        <input type="number" name="price" class="form-control"  required='1'>
                                    <div id="pwm-inline-icon-71180" class="pwm-field-icon" style="position: absolute !important; width: 18px !important; height: 18px !important; min-height: 0px !important; min-width: 0px !important; z-index: 2147483645 !important; box-shadow: none !important; box-sizing: content-box !important; background: none !important; border: none !important; padding: 0px !important; cursor: pointer !important; outline: none !important; margin-top: 8px; margin-left: 317.5px;"><svg style="display: inline-block !important; width: 16px !important; height: 16px !important; fill: rgb(230, 0, 23) !important; margin-top: 0.5px !important;" viewBox="0 0 20 20"><g><path d="M14.9127559,5.43359723 C13.9827216,4.58951985 12.8308672,4.0225262 11.5692789,3.80232854 C7.92872888,3.16142854 4.44202888,5.60772854 3.80367888,9.25082854 C3.49342888,11.0154285 3.89037888,12.7953285 4.91887888,14.2624285 C5.94822888,15.7286785 7.48757888,16.7078785 9.25217888,17.0164285 C11.1238789,17.3453785 13.0576289,16.8591785 14.5561789,15.6836285 C14.9259289,15.3920785 15.4605789,15.4575285 15.7487289,15.8272785 C16.0394289,16.1970285 15.9748289,16.7308285 15.6059289,17.0206785 C14.1141789,18.1919785 12.2764789,18.8167285 10.4056289,18.8167285 C9.92367888,18.8167285 9.44002888,18.7750785 8.95807888,18.6917785 C6.74637888,18.3033285 4.81772888,17.0776285 3.52742888,15.2382285 C2.23797888,13.4005285 1.74072888,11.1692785 2.12832888,8.95672854 C2.92902888,4.38967854 7.29292888,1.32712854 11.8633789,2.12697854 C13.4205324,2.40009833 14.8442726,3.09412153 16.0007123,4.12545035 L16.7423789,3.23367854 C16.9905789,2.93532854 17.4691289,3.01777854 17.6034289,3.38242854 L18.9506789,7.03657854 C19.0849789,7.40122854 18.7747289,7.77352854 18.3922289,7.70807854 L14.5536289,7.04762854 C14.1711289,6.98217854 14.0036789,6.52657854 14.2518789,6.22822854 L14.9127559,5.43359723 Z M8.04092888,10.3711285 C8.04092888,11.0570785 7.48502888,11.6121285 6.79992888,11.6121285 C6.11482888,11.6121285 5.55892888,11.0570785 5.55892888,10.3711285 C5.55892888,9.68602854 6.11482888,9.13012854 6.79992888,9.13012854 C7.48502888,9.13012854 8.04092888,9.68602854 8.04092888,10.3711285 Z M11.9713289,10.3711285 C11.9713289,11.0570785 11.4154289,11.6121285 10.7303289,11.6121285 C10.0443789,11.6121285 9.48932888,11.0570785 9.48932888,10.3711285 C9.48932888,9.68602854 10.0443789,9.13012854 10.7303289,9.13012854 C11.4154289,9.13012854 11.9713289,9.68602854 11.9713289,10.3711285 Z M16.1601289,10.3711285 C16.1601289,11.0570785 15.6042289,11.6121285 14.9191289,11.6121285 C14.2331789,11.6121285 13.6781289,11.0570785 13.6781289,10.3711285 C13.6781289,9.68602854 14.2331789,9.13012854 14.9191289,9.13012854 C15.6042289,9.13012854 16.1601289,9.68602854 16.1601289,10.3711285 Z"></path></g></svg></div></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Chi tiết</label>
                                <div class="col-md-4">
                                    <textarea id="example-textarea" name="detail_product" class="form-control" rows="3"  required='1'></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="val_skill">Danh mục sản phẩm</label>
                                <div class="col-md-2">
                                    <select id="val_skill" name="id_category" class="form-control" required='1'>
                                        <option value="">Chọn danh mục</option>
                                        <?php
                                            foreach($category as $key => $cate){?>
                                            <option value="<?php echo $cate['id']?>"><?php echo $cate['name_category']?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-actions">
                                <div class="col-md-10 col-md-offset-2">
                                    <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-check"></i> Submit</button>
                                </div>
                            </div>
                        </div>
                        <!-- END Form Content -->
                    </form>
                    <!-- END Default style -->

                </div>
                <!-- END Page Content -->

                <!-- Footer -->
                <!-- END Footer -->
            </div>
            <!-- END Inner Container -->
        </div>
        <!-- END Page Container -->