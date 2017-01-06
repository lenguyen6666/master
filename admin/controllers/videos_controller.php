<?php
class VideosController extends AppController {
	var $name = 'Videos';
	var $helpers = array('Html', 'Form', 'Javascript', 'TvFck');
	function index() {
		  $this->account();
		 // $conditions=array('News.status'=>1);
		  $this->paginate = array('limit' => '15','order' => 'Video.id DESC');
	      $this->set('videos', $this->paginate('Video',array()));
	}
	//Them bai viet
	function add() {
		$this->account();
		if (!empty($this->data)) {
			$this->Video->create();
			$data['Video'] = $this->data['Video'];
			//$data['Video']['video']=$_POST['video'];
			if ($this->Video->save($data['Video'])) {
				$this->Session->setFlash(__('Thêm mới danh mục thành công', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Thêm mơi danh mục thất bại. Vui long thử lại', true));
			}
		}
	}
	//view mot tin 
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Không tồn tại', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('views', $this->Video->read(null, $id));
	}
	//close tin tuc
	function close($id=null) {
		$this->account();
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại bài viết này', true));
			$this->redirect(array('action'=>'index'));
		}
		$data['Video'] = $this->data['Video'];
		$data['Video']['status']=0;
		if ($this->Video->save($data['Video'])) {
			$this->Session->setFlash(__('Bài viết không được hiển thị', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Bài viết không close được', true));
		$this->redirect(array('action' => 'index'));

	}
	// active tin bai viêt
	function active($id=null) {
		$this->account();
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại bài viết này', true));
			$this->redirect(array('action'=>'index'));
		}
		$data['Video'] = $this->data['Video'];
		$data['Video']['status']=1;
		if ($this->Video->save($data['Video'])) {
			$this->Session->setFlash(__('Bài viết được hiển thị', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Bài viết không hiển được bài viết', true));
		$this->redirect(array('action' => 'index'));
	}
	// sua tin da dang
	function edit($id = null) {
		$this->account();
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Không tồn tại ', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$data['Video'] = $this->data['Video'];
			//$data['Video']['video']=$_POST['video'];
			if ($this->Video->save($data['Video'])) {
				$this->Session->setFlash(__('Bài viết sửa thành công', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Bài viết này không sửa được vui lòng thử lại.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Video->read(null, $id);
		}
		$this->set('edit',$this->Video->findById($id));
	}
	// Xoa cac dang
	function delete($id = null) {
		$this->account();		
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại bài viết này', true));
			//$this->redirect(array('action'=>'index'));
		}
		if ($this->Video->delete($id)) {
			$this->Session->setFlash(__('Xóa bài viết thành công', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Bài viết không xóa được', true));
		$this->redirect(array('action' => 'index'));
	}
    
function processing() {
		$this->account();
		if(isset($_POST['dropdown']))
			$select=$_POST['dropdown'];
			
		if(isset($_POST['checkall']))
				{
			
			switch ($select){
				case 'active':
				$video=($this->Video->find('all'));
				foreach($video as $video) {
					$video['Video']['status']=1;
					$this->Video->save($video['Video']);					
				}
				//vong lap active
				break;
				case 'notactive':	
				//vong lap huy
				$video=($this->Video->find('all'));
				foreach($video as $video) {
					$video['Video']['status']=0;
					$this->Video->save($video['Video']);					
				}
				break;
				case 'delete':
				$video=($this->Video->find('all'));
				foreach($video as $video) {
					$this->News->delete($video['Video']['id']);					
				}
				if($this->Video->find('count')<1)
				$this->redirect(array('action' => 'index'));
				 else
				 {
					$this->Session->setFlash(__('Danh mục không close được', true));
					$this->redirect(array('action' => 'index'));
				 }
				//vong lap xoa
				break;
				
			}
		}
		else{
			
			switch ($select){
				case 'active':
				$video=($this->Video->find('all'));
				foreach($video as $video) {
					if(isset($_POST[$video['Video']['id']]))
					{
						$video['Video']['status']=1;
						$this->Video->save($video['Video']);						
					}
                    
				}$this->redirect(array('action'=>'index'));
				//vong lap active
				break;
				case 'notactive':	
				//vong lap huy
				$video=($this->Video->find('all'));
				foreach($video as $video) {
					if(isset($_POST[$video['Video']['id']]))
					{
						$video['Video']['status']=0;
						$this->Video->save($video['Video']);						
					}
                    
				}$this->redirect(array('action'=>'index'));
				break;
				case 'delete':
				$video=($this->Video->find('all'));
				foreach($video as $video) {
					if(isset($_POST[$video['Video']['id']]))
					{
					    $this->Video->delete($video['Video']['id']);						
					}										
				}
				$this->redirect(array('action'=>'index'));
				
				//vong lap xoa
				break;
				
			}
			
		}
		$this->redirect(array('action' => 'index'));
		
	}
	function _find_list() {
		return $this->Category->generatetreelist(null, null, null, '__');
	}
	//check ton tai tai khoan
	function account(){
		if(!$this->Session->read("id") || !$this->Session->read("name")){
			$this->redirect('/');
		}
	}
	// chon layout
	function beforeFilter(){
		$this->layout='admin';
	}

}
?>
