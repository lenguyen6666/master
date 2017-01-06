<?php
class AdvertisementsController extends AppController {

	var $name = 'Advertisements';
	function index(){
		$this->account();
		$this->paginate=array('limit'=>'15','order'=>'Advertisement.id DESC');
		$this->set('Advertisements',$this->paginate('Advertisement',array()));
		
	}

	function add() {
		$this->account();
		if (!empty($this->data)) {
			$this->Advertisement->create();
			$data['Advertisement'] = $this->data['Advertisement'];
            $data['Advertisement']['images']=$_POST['userfile'];
			if ($this->Advertisement->save($data['Advertisement'])) {
				$this->Session->setFlash(__('Thêm mới danh mục thành công', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Thêm mơi danh mục thất bại. Vui long thử lại', true));
			}
		}
	}
	//close tin tuc
	function close($id=null) {
		$this->account();
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại bài viết này', true));
			$this->redirect(array('action'=>'index'));
		}
		$data['Advertisement'] = $this->data['Advertisement'];
		$data['Advertisement']['status']=0;
		if ($this->Advertisement->save($data['Advertisement'])) {
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
		$data['Advertisement'] = $this->data['Advertisement'];
		$data['Advertisement']['status']=1;
		if ($this->Advertisement->save($data['Advertisement'])) {
			$this->Session->setFlash(__('Bài viết được hiển thị', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Bài viết không hiển được bài viết', true));
		$this->redirect(array('action' => 'index'));
	}
	//check ton tai tai khoan
	function delete($id = null) {	
		$this->account();	
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại danh mục này', true));
			//$this->redirect(array('action'=>'index'));
		}
		if ($this->Advertisement->delete($id)) {
			$this->Session->setFlash(__('Xóa danh mục thành công', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Danh mục không xóa được', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function edit($id = null) {
		$this->account();
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Không tồn tại danh mục này', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$data['Advertisement'] = $this->data['Advertisement'];	
            $data['Advertisement']['images']=$_POST['userfile'];		
			if ($this->Advertisement->save($data['Advertisement'])) {
				$this->Session->setFlash(__('Sửa thành công', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Sủa không thành công. Vui long thử lại', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Advertisement->read(null, $id);
			$this->set('edit',$this->Advertisement->read(null, $id));
		}
		
	}
	function processing() {
		$this->account();
		if(isset($_POST['dropdown']))
			$select=$_POST['dropdown'];
			
		if(isset($_POST['checkall']))
				{
			
			switch ($select){
				case 'active':
				$advertisement=($this->Advertisement->find('all'));
				foreach($advertisement as $advertisement) {
					$advertisement['Advertisement']['status']=1;
					$this->Advertisement->save($advertisement['Advertisement']);					
				}
				//vong lap active
				break;
				case 'notactive':	
				//vong lap huy
				$advertisement=($this->Advertisement->find('all'));
				foreach($advertisement as $advertisement) {
					$advertisement['Advertisement']['status']=0;
					$this->Advertisement->save($advertisement['Advertisement']);					
				}
				break;
				case 'delete':
				$advertisement=($this->Advertisement->find('all'));
				foreach($advertisement as $advertisement) {
					$this->News->delete($advertisement['Advertisement']['id']);					
				}
				if($this->Advertisement->find('count')<1)
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
				$advertisement=($this->Advertisement->find('all'));
				foreach($advertisement as $advertisement) {
					if(isset($_POST[$advertisement['Advertisement']['id']]))
					{
						$advertisement['Advertisement']['status']=1;
						$this->Advertisement->save($advertisement['Advertisement']);						
					}
                    
				}$this->redirect(array('action'=>'index'));
				//vong lap active
				break;
				case 'notactive':	
				//vong lap huy
				$advertisement=($this->Advertisement->find('all'));
				foreach($advertisement as $advertisement) {
					if(isset($_POST[$advertisement['Advertisement']['id']]))
					{
						$advertisement['Advertisement']['status']=0;
						$this->Advertisement->save($advertisement['Advertisement']);						
					}
                    
				}$this->redirect(array('action'=>'index'));
				break;
				case 'delete':
				$advertisement=($this->Advertisement->find('all'));
				foreach($advertisement as $advertisement) {
					if(isset($_POST[$advertisement['Advertisement']['id']]))
					{
					    $this->Advertisement->delete($advertisement['Advertisement']['id']);						
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
		return $this->Portfolio->generatetreelist(null, null, null, '__');
	}
	
	function account(){
		if(!$this->Session->read("id") || !$this->Session->read("name")){
			$this->redirect('/');
		}
	}
	function beforeFilter(){
		$this->layout='admin';
	}

}
?>