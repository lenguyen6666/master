<?php
class AgentController extends AppController {

	var $name = 'Agent';
	var $uses=array('News','Category');
	function index() {
		$this->set('title_for_layout', 'Đại lý - CÔNG TY THHH PHỤ TÙNG Ô TÔ HÙNG CƯỜNG');	
		 $category=$this->Category->find('list',array('conditions'=>array('Category.parent_id'=>145),'fields' => array('Category.id')));
		//$news=$this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>$category)));
		//$this->set('students',$news);
		$this->paginate = array('conditions'=>array('News.status'=>1,'News.category_id'=>$category),'limit' => '6','order' => 'News.id DESC');
	     $this->set('students', $this->paginate('News',array()));
	   
	}

function view($id=null) {
		mysql_query("SET names utf8");
		$this->set('title_for_layout', 'Hỏi đáp - VIỆN KHOA HỌC VÀ CÔNG NGHỆ XÂY DỰNG GIAO THÔNG');
		if (!$id) {
			$this->Session->setFlash(__('Không tồn tại', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('views', $this->News->read(null, $id));
		$conditions=array('News.status'=>1,'News.category_id'=>149,'News.id <>'=>$id);
		$this->set('list_other',$this->News->find('all',array('conditions'=>$conditions,'order'=>'News.id DESC','limit'=>7)));
	}

}
?>
