<?php
class IntroductionsController extends AppController {

	var $name = 'Introductions';
	var $uses=array('News');
	var $helpers=array('Help');
	function index123() {
    mysql_query("SET names utf8");
		$this->set('gioithieu',$this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>146),'order'=>'News.id DESC','limit'=>1)));
	}

	function admission() {
    mysql_query("SET names utf8");
		$this->set('gioithieu',$this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>149),'order'=>'News.id DESC','limit'=>1)));
	}
	function index3333() {
		//list danh sach gioi thieu
		mysql_query("SET names utf8");		
		$this->paginate = array('conditions'=>array('News.status'=>1,'News.category_id'=>146),'limit' => '6','order' => 'News.id DESC');
	    $this->set('news', $this->paginate('News',array()));
	}
  function index() {
     mysql_query("SET names utf8");
		$this->set('about',$this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>146),'order'=>'News.id DESC','limit'=>1)));
	}
	function view($id=null) {
		mysql_query("SET names utf8");
		if (!$id) {
			$this->Session->setFlash(__('Không tồn tại', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('views', $this->News->read(null, $id));
	}

}
?>
