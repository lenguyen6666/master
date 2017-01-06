<?php
class CommentsController extends AppController {

	var $name = 'Comments';
	var $uses=array('Comments');
	var $helpers = array('Html', 'Form', 'Javascript');
	//list danh sach cac danh muc
	function index() {	
	   $this->account();
	   $this->paginate = array('limit' => '15','order' => 'Category.id DESC');
	   $this->set('category', $this->paginate('Category',array()));
	}
	//them danh muc moi
	function add() {		
		if (!empty($this->data)) {
			//pr($this->data); die;
			$this->Comments->create();
			if ($this->Comments->save($this->data['Comment'])) {
				$this->Session->setFlash(__('Thêm mới danh mục thành công', true));
				$this->redirect(array('action' => 'view','controller'=>'news',$this->data['Comment']['id_news']));
			} else {
				$this->Session->setFlash(__('Thêm mơi danh mục thất bại. Vui long thử lại', true));
			}
		}
		
	}
	
	

}
?>
