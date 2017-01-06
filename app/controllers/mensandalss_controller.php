<?php
class MensandalssController extends AppController {
	var $name = 'Mensandalss';
	var $uses =array('Product','Category','Category2');
	function index() {
		$this->set('title_for_layout', 'Dép nam - Thành Trung');
		 $id_cate=$this->Category->find('list',array('conditions'=>array('Category.status'=>1,'Category.parent_id'=>142),'fields'=>array('Category.id')));
		$this->paginate = array('conditions'=>array('Product.status'=>1,'Product.Category_id'=>$id_cate),'limit' =>'16','order' =>'Product.id DESC');//limit =2 này thể hiện chỗ xem tất cả của 1 danh mục
	    $this->set('productshoes', $this->paginate('Product',array()));	
	}
	function list_sevice($id=null) {
		$this->set('title_for_layout', 'Dép nam - Thành Trung');
		$this->paginate = array('conditions'=>array('Product.status'=>1,'Product.category_id'=>$id),'limit' => '16','order' => 'Product.id DESC');//limit =2 này thể hiện chỗ xem tất cả của 1 danh mục
	    $this->set('services', $this->paginate('Product',array()));	
	}
	function view($id=null) {
	$detailproduct=$this->Product->findById($id);
	 $this->set('views',$detailproduct);
	 $this->set('nameparent',$this->Category2->findById($detailproduct['Product']['category_id']));
	}
}
?>

