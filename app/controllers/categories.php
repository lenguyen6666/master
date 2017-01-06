<?php
class CategoriesController extends AppController {

	var $name = 'Categories';
	function index() {
		//list danh sach tin tuc
		mysql_query("SET names utf8");
		$this->set('Categories',$this->Category->find('all',array('conditions'=>array('Product.status'=>1),'order'=>'Product.id DESC')));
	}
	function view($id=null) {
		mysql_query("SET names utf8");
		if (!$id) {
			$this->Session->setFlash(__('Không t?n t?i', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('views', $this->Product->read(null, $id));
	}


}
?>
