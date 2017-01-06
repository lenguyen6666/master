<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.ctp)...cach-thanh-toan
 */  
	Router::connect('/', array('controller' => 'home', 'action' => 'index'));    
    Router::connect('/tin-tuc', array('controller' => 'news', 'action' => 'index'));    
    Router::connect('/tin-tuc-noi-bat/*', array('controller' => 'news', 'action' => 'tintucnoibat')); 
    Router::connect('/danh-sach-bai-viet/*', array('controller' => 'news', 'action' => 'listnews'));      	
	Router::connect('/tin-tuc/chi-tiet-tin/*', array('controller' => 'news', 'action' => 'view'));
    Router::connect('/chi-tiet-bai-viet/*', array('controller' => 'news', 'action' => 'view'));
	Router::connect('/tin-khuyen-mai', array('controller' => 'news', 'action' => 'promotion'));	
	Router::connect('/tuyen-dung', array('controller' => 'news', 'action' => 'recruitment'));
	Router::connect('/tuyen-dung/chi-tiet-tin/*', array('controller' => 'news', 'action' => 'view'));
	Router::connect('/gioi-thieu', array('controller' => 'introductions', 'action' => 'index'));
	Router::connect('/lop-hoc-khieu-vu', array('controller' => 'news', 'action' => 'danceclass'));
	Router::connect('/san-pham.html', array('controller' => 'products', 'action' => 'index'));
	Router::connect('/danh-sach-san-pham/*', array('controller' => 'products', 'action' => 'listproduct'));
    Router::connect('/danh-muc-san-pham/*', array('controller' => 'products', 'action' => 'dssanpham'));
    Router::connect('/van-phong-pham/*', array('controller' => 'products', 'action' => 'vpp'));
    Router::connect('/thiet-bi-van-phong/*', array('controller' => 'products', 'action' => 'thietbivp'));
    Router::connect('/thiet-bi-cntt-vl/*', array('controller' => 'products', 'action' => 'thietbicntt'));
	Router::connect('/chi-tiet-san-pham/*', array('controller' => 'products', 'action' => 'view'));	
	Router::connect('/mua-hang/*', array('controller' => 'products', 'action' => 'addshopingcart'));
	Router::connect('/don-hang', array('controller' => 'infomations', 'action' => 'index'));
	Router::connect('/don-hang/*', array('controller' => 'news', 'action' => 'order'));
	Router::connect('/thanh-toan', array('controller' => 'infomations', 'action' => 'add'));
	Router::connect('/xem-gio-hang', array('controller' => 'products', 'action' => 'viewshopingcart'));	
	Router::connect('/lien-he-mua-hang', array('controller' => 'products', 'action' => 'buy'));
	Router::connect('/khuyen-mai', array('controller' => 'news', 'action' => 'services'));	
    Router::connect('/dich-vu', array('controller' => 'news', 'action' => 'dichvu'));	
    Router::connect('/search/*', array('controller' => 'products', 'action' => 'search'));
    Router::connect('/dang-ky', array('controller' => 'user', 'action' => 'index'));
    Router::connect('/thoat', array('controller' => 'login', 'action' => 'logout'));
	Router::connect('/dang-nhap', array('controller' => 'login', 'action' => 'index'));
    Router::connect('/lien-he', array('controller' => 'contacts', 'action' => 'send'));
    Router::connect('/lien-he.html', array('controller' => 'contacts', 'action' => 'send'));
    Router::connect('/thu-vien-anh', array('controller' => 'gallery', 'action' => 'index'));
    Router::connect('/thu-vien-anh.html', array('controller' => 'gallery', 'action' => 'index'));
    Router::connect('/gallery/*', array('controller' => 'gallery', 'action' => 'gallery'));
    Router::connect('/ve-may-bay', array('controller' => 'news', 'action' => 'ticket'));
    Router::connect('/ve-may-bay/chi-tiet/*', array('controller' => 'news', 'action' => 'view'));
    Router::connect('/khach-san', array('controller' => 'news', 'action' => 'hotel'));
    Router::connect('/khach-san/chi-tiet/*', array('controller' => 'news', 'action' => 'view'));
    Router::connect('/xe-du-lich', array('controller' => 'news', 'action' => 'car'));
    Router::connect('/xe-du-lich/chi-tiet/*', array('controller' => 'news', 'action' => 'view'));
    Router::connect('/ho-chieu', array('controller' => 'news', 'action' => 'visa'));
    Router::connect('/ho-chieu/chi-tiet/*', array('controller' => 'news', 'action' => 'view'));       
    Router::connect('/tour-trong-nuoc/danh-sach-tour/*', array('controller' => 'news', 'action' => 'listtour'));
	Router::connect('/chi-tiet-tour/*', array('controller' => 'products', 'news' => 'view'));
    Router::connect('/bao-gia.html', array('controller' => 'news', 'action' => 'download'));
    
/**products/viewshopingcart

 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
