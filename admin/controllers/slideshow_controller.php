<?php
class SlideshowController extends AppController {

	var $name = 'Slideshow';
	function index() {
		  $this->account();
		  $this->paginate = array('limit' => '15','order' => 'Slideshow.id DESC');
	      $this->set('slideshow', $this->paginate('Slideshow',array()));

	}
	
	function add(){
		$this->account();
		if (!empty($this->data)) {
			$this->Slideshow->create();
			$data['Slideshow'] = $this->data['Slideshow'];
            $data['Slideshow']['images'] =$_POST['userfile'];
			if ($this->Slideshow->save($data['Slideshow'])) {
				$this->Session->setFlash(__('Thêm mới danh mục thành công', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Thêm mơi danh mục thất bại. Vui long thử lại', true));
			}
		}
	}
	
	function close($id=null) {
		$this->account();
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại ', true));
			$this->redirect(array('action'=>'index'));
		}
		$data['Slideshow'] = $this->data['Slideshow'];
		$data['Slideshow']['status']=0;
		if ($this->Slideshow->save($data['Slideshow'])) {
			$this->Session->setFlash(__('Hình ảnh không được hiển thị', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Hình ảnh không close được', true));
		$this->redirect(array('action' => 'index'));

	}
	
	function active($id=null) {
		$this->account();
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại ', true));
			$this->redirect(array('action'=>'index'));
		}
		$data['Slideshow'] = $this->data['Slideshow'];
		$data['Slideshow']['status']=1;
		if ($this->Slideshow->save($data['Slideshow'])) {
			$this->Session->setFlash(__('Hình ảnh được hiển thị', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Hình ảnh không active được', true));
		$this->redirect(array('action' => 'index'));

	}

	function edit($id = null) {
		$this->account();
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Không tồn tại ', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$data['Slideshow'] = $this->data['Slideshow'];
            $data['Slideshow']['images'] =$_POST['userfile'];
			if ($this->Slideshow->save($data['Slideshow'])) {
				$this->Session->setFlash(__('Bài viết sửa thành công', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Bài viết này không sửa được vui lòng thử lại.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Slideshow->read(null, $id);
		}
		
		$this->set('edit',$this->Slideshow->findById($id));
	}
	// Xoa hinh anh
	function delete($id = null) {
		$this->account();		
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại hình ảnh này', true));
			//$this->redirect(array('action'=>'index'));
		}
		if ($this->Slideshow->delete($id)) {
			$this->Session->setFlash(__('Xóa  thành công', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Không xóa được', true));
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
				$slideshow=($this->Slideshow->find('all'));
				foreach($slideshow as $slideshow) {
					$slideshow['Slideshow']['status']=1;
					$this->Slideshow->save($slideshow['Slideshow']);					
				}
				//vong lap active
				break;
				case 'notactive':	
				//vong lap huy
				$slideshow=($this->Slideshow->find('all'));
				foreach($slideshow as $slideshow) {
					$slideshow['Slideshow']['status']=0;
					$this->Slideshow->save($slideshow['Slideshow']);					
				}
				break;
				case 'delete':
				$slideshow=($this->Slideshow->find('all'));
				foreach($slideshow as $slideshow) {
					$this->News->delete($slideshow['Slideshow']['id']);					
				}
				if($this->Slideshow->find('count')<1)
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
				$slideshow=($this->Slideshow->find('all'));
				foreach($slideshow as $slideshow) {
					if(isset($_POST[$slideshow['Slideshow']['id']]))
					{
						$slideshow['Slideshow']['status']=1;
						$this->Slideshow->save($slideshow['Slideshow']);						
					}
                    
				}$this->redirect(array('action'=>'index'));
				//vong lap active
				break;
				case 'notactive':	
				//vong lap huy
				$slideshow=($this->Slideshow->find('all'));
				foreach($slideshow as $slideshow) {
					if(isset($_POST[$slideshow['Slideshow']['id']]))
					{
						$slideshow['Slideshow']['status']=0;
						$this->Slideshow->save($slideshow['Slideshow']);						
					}
                    
				}$this->redirect(array('action'=>'index'));
				break;
				case 'delete':
				$slideshow=($this->Slideshow->find('all'));
				foreach($slideshow as $slideshow) {
					if(isset($_POST[$slideshow['Slideshow']['id']]))
					{
					    $this->Slideshow->delete($slideshow['Slideshow']['id']);						
					}										
				}
				$this->redirect(array('action'=>'index'));
				
				//vong lap xoa
				break;
				
			}
			
		}
		$this->redirect(array('action' => 'index'));
		
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
