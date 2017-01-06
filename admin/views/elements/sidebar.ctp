    <div id="sidebar">
       <div id="sidebar-wrapper"> 
        
        <h1 id="sidebar-title"><a href="#"></a></h1>
        <a href="#"><img id="logo" src="<?php echo DOMAINAD?>images/logo.png" width="240px" alt="Design by Quảng cáo vip" /></a>
      
        <div id="profile-links">
             Xin chào, <a href="#" title="Edit your profile"><?php echo $this->Session->read('name'); ?></a><br />
            <br />
            <a href="<?php echo DOMAIN;?>" title="View the Site" target="_blank">Xem trang chủ</a> | <a href="<?php echo DOMAINAD?>login/logout" title="Sign Out">Thoát</a>
        </div>        
        <div id="list">
          <ul id="main-nav">             
            <li id="arrayorder_1">
                <a href="<?php echo DOMAINAD?>home" class="nav-top-item no-submenu">
                    Trang chủ
                </a>       
            </li>
<!--             <li id="arrayorder_2">-->
<!--                <a href="#" class="nav-top-item"> -->
<!--                  Menu-->
<!--                </a>-->
<!--                <ul>-->
<!--                    <li><a href="<?php echo DOMAINAD?>menu/index">Danh sách menu</a></li>-->
<!--                    <li><a href="<?php echo DOMAINAD?>menu/add">Thêm mới menu</a></li>-->
<!--                </ul>-->
<!--            </li>-->
            <li id="arrayorder_2">
                <a href="#" class="nav-top-item"> 
                  Sản phẩm
                </a>
                <ul>
                    <li><a class="current" href="<?php echo DOMAINAD?>catproducts/index">Danh mục sản phẩm</a></li>
                    <li><a href="<?php echo DOMAINAD?>catproducts/add">Thêm mới danh mục</a></li>
                    <li><a href="<?php echo DOMAINAD?>products/index">Danh sách sản phẩm</a></li>
                    <li><a href="<?php echo DOMAINAD?>products/add">Thêm mới sản phẩm</a></li>
                </ul>
            </li>
            <!--<li id="arrayorder_7">
                <a href="<?php echo DOMAINAD?>infomations" class="nav-top-item no-submenu">Đơn hàng</a>
            </li>--> 
            <li id="arrayorder_3">
                <a href="#" class="nav-top-item"> 
                  Quản lý bài viết
                </a>
                <ul>
                    <li><a class="current" href="<?php echo DOMAINAD?>category/index">Danh mục bài viết</a></li>
                    <li><a href="<?php echo DOMAINAD?>category/add">Thêm mới danh mục</a></li>
                    <li><a href="<?php echo DOMAINAD?>news/index">Danh sách bài viết</a></li>
                    <li><a href="<?php echo DOMAINAD?>news/add">Thêm mới </a></li>
                </ul>
            </li>
            <li id="arrayorder_12">
                <a href="<?php echo DOMAINAD?>menus/index" class="nav-top-item no-submenu">Quản lý menu</a>
            </li> 
            <li id="arrayorder_4">
                <a href="#" class="nav-top-item">
                    Slideshow
                </a>
                <ul>
                    <li><a href="<?php echo DOMAINAD?>slideshow">Ảnh slide</a></li>
                    <li><a href="<?php echo DOMAINAD?>slideshow/add">Thêm mới</a></li>
                </ul>
            </li>
<!--            <li id="arrayorder_3">-->
<!--                <a href="#" class="nav-top-item">-->
<!--                    Thư viện ảnh-->
<!--                </a>-->
<!--                <ul>-->
<!--                    <li><a href="<?php echo DOMAINAD?>album">Danh sách Album</a></li>-->
<!--                    <li><a href="<?php echo DOMAINAD?>album/add">Thêm Album</a></li>-->
<!--                    <li><a href="<?php echo DOMAINAD?>gallery/index">Danh sách ảnh Ablum</a></li>-->
<!--                    <li><a href="<?php echo DOMAINAD?>gallery/add">Thêm ảnh vào Ablum</a></li>-->
<!--                </ul>-->
<!--            </li>-->
             
            <!-- 
           <li id="arrayorder_8">
                <a href="#" class="nav-top-item">Video</a>
                <ul>
                    <li><a href="<?php echo DOMAINAD?>videos">Quản lý video</a></li>
                    <li><a href="<?php echo DOMAINAD?>videos/add">Thêm video</a></li>
                </ul>
            </li>   
             
             <li id="arrayorder_10">
                <a href="#" class="nav-top-item">Đối tác</a>
                <ul>
                    <li><a href="<?php echo DOMAINAD?>partners">Danh sách đối tác</a></li>
                    <li><a href="<?php echo DOMAINAD?>partners/add">Thêm mới</a></li>
                </ul>
            </li> --> 
            <li id="arrayorder_8">
                <a href="#" class="nav-top-item">Quảng cáo</a>
                <ul>
                    <li><a href="<?php echo DOMAINAD?>advertisements">Quản lý quảng cáo</a></li>
                    <li><a href="<?php echo DOMAINAD?>advertisements/add">Thêm quảng cáo</a></li>
                </ul>
            </li> 
            <li id="arrayorder_9">
                <a href="#" class="nav-top-item">Hot line</a>
                <ul>
                    <li><a href="<?php echo DOMAINAD?>helps">Danh sách Hotline</a></li>
                    <li><a href="<?php echo DOMAINAD?>helps/add">Thêm Hotline</a></li>
                </ul>
            </li>
            <li id="arrayorder_12">
                <a href="<?php echo DOMAINAD?>banners/edit/1" class="nav-top-item no-submenu">Thay đổi Banner</a>
            </li> 
            <li id="arrayorder_8">
                <a href="#" class="nav-top-item">Tài khoản</a>
                <ul>
                    <li><a href="<?php echo DOMAINAD?>accounts">Tài khoản</a></li>
                    <li><a href="<?php echo DOMAINAD?>accounts/add">Tạo tài khoản</a></li>
                </ul>
            </li>  
            <li id="arrayorder_7">
                <a href="<?php echo DOMAINAD?>settings/edit/1" class="nav-top-item no-submenu">Cấu hình Website</a>
            </li>  
        </ul> 
        </div>
    </div>
    </div>
