<?php
class HelpsController extends AppController {

	var $name = 'Helps';
	function index(){
		$this->account();
		$this->paginate=array('limit'=>'5','order'=>'Help.id DESC');
		$this->set('Helps',$this->paginate('Help',array()));
	}
	function add(){
		$this->account();
		if(!empty($this->data)){
			$this->Help->create();
			$data['Help']=$this->data['Help'];			
			if($this->Help->save($data['Help'])){
				$this->Session->setFlash(__('Thêm mới thành công',true));
				$this->redirect(array('action'=>'index'));
			}
			else{
				$this->Session->setFlash(__('Thêm mới thất bại'));
			}
		}
	}
	
	function delete($id = null) {	
		$this->account();	
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại danh mục này', true));
			//$this->redirect(array('action'=>'index'));
		}
		if ($this->Help->delete($id)) {
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
			if ($this->Help->save($this->data)) {
				$this->Session->setFlash(__('Sửa thành công', true));
				$this->redirect(array('action' => 'edit'));
			} else {
				$this->Session->setFlash(__('Sủa không thành công. Vui long thử lại', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Help->read(null, $id);
		}
		
	}
	function close($id=null) {	
		//$this->account();	
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại ', true));
			$this->redirect(array('action'=>'index'));
		}
		$data['Help'] = $this->data['Help'];
		$data['Help']['status']=0;
		if ($this->Help->save($data['Help'])) {
			$this->Session->setFlash(__('Hình ảnh không được hiển thị', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Hình ảnh không close được', true));
		$this->redirect(array('action' => 'index'));

	}
	
	function active($id=null) {	
		//$this->account();	
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại ', true));
			$this->redirect(array('action'=>'index'));
		}
		$data['Help'] = $this->data['Help'];
		$data['Help']['status']=1;
		if ($this->Help->save($data['Help'])) {
			$this->Session->setFlash(__('Hình ảnh được hiển thị', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Hình ảnh không active được', true));
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
				$help=($this->Help->find('all'));
				foreach($help as $help) {
					$help['Help']['status']=1;
					$this->Help->save($help['Help']);					
				}
				//vong lap active
				break;
				case 'notactive':	
				//vong lap huy
				$help=($this->Help->find('all'));
				foreach($help as $help) {
					$help['Help']['status']=0;
					$this->Help->save($help['Help']);					
				}
				break;
				case 'delete':
				$help=($this->Help->find('all'));
				foreach($help as $help) {
					$this->News->delete($help['Help']['id']);					
				}
				if($this->Help->find('count')<1)
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
				$help=($this->Help->find('all'));
				foreach($help as $help) {
					if(isset($_POST[$help['Help']['id']]))
					{
						$help['Help']['status']=1;
						$this->Help->save($help['Help']);						
					}
                    
				}$this->redirect(array('action'=>'index'));
				//vong lap active
				break;
				case 'notactive':	
				//vong lap huy
				$help=($this->Help->find('all'));
				foreach($help as $help) {
					if(isset($_POST[$help['Help']['id']]))
					{
						$help['Help']['status']=0;
						$this->Help->save($help['Help']);						
					}
                    
				}$this->redirect(array('action'=>'index'));
				break;
				case 'delete':
				$help=($this->Help->find('all'));
				foreach($help as $help) {
					if(isset($_POST[$help['Help']['id']]))
					{
					    $this->Help->delete($help['Help']['id']);						
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
	//check ton tai tai khoan
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