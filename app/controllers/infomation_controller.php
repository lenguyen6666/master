<?php
class InfomationController extends AppController {

	var $name = 'Infomation';
	var $uses=array('News','Category');
	function index() {
		$this->set('title_for_layout', 'Đại lý - CÔNG TY THHH PHỤ TÙNG Ô TÔ HÙNG CƯỜNG');	
		if(!$this->Session->read("user_id")){
				echo "<script>location.href='".DOMAIN."login'</script>";
		}else{
			if($this->Session->read("check")==0){
				$this->set('agents',$this->Agent->find('all'));
			}else{
				$this->set('agents',$this->Agent->find('all',array('conditions'=>array('Agent.check_id'=>$this->Session->read("check")))));
			}
		}
	   
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
