<?php
class MenshoessController extends AppController {
	var $name = 'Menshoess';
	var $uses =array('Product','Category3','Category2','Category');
	function index() {
		$this->set('title_for_layout', 'Giày nam - Thành Trung');
		 $id_cate=$this->Category->find('list',array('conditions'=>array('Category.status'=>1,'Category.parent_id'=>143),'fields'=>array('Category.id')));
		$this->paginate = array('conditions'=>array('Product.status'=>1,'Product.Category_id'=>$id_cate),'limit' =>'16','order' =>'Product.id DESC');//limit =2 này thể hiện chỗ xem tất cả của 1 danh mục
	    $this->set('productshoes', $this->paginate('Product',array()));	
	}
	function list_sevice($id=null) {
		$service2=$this->Category3->findById($id);
		$this->set('service2',   $service2);
		$this->set('title_for_layout', 'Sản phẩm - Thành Trung');
		//$this->paginate = array('conditions'=>array('Category3.status'=>1,'Category3.id'=>$id),'limit' => '12','order' => 'Category3.id DESC');	
		//$this->set('services', $this->paginate('Category3',array()));	
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

