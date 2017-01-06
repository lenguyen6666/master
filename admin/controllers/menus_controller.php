<?php
class MenusController extends AppController {
	var $name = 'Menus';
	var $uses=array('Menu');
	var $helpers = array('Html', 'Form', 'Javascript', 'TvFck');
	//list danh sach cac danh muc
	function index() {	
	   $this->account();
	  // $conditions=array('Menu.status'=>1);	
	   $this->paginate = array('limit' => '15','order' => 'Menu.id DESC');
	   $this->paginate = array('conditions'=>array(),'limit' => '15','order' => 'Menu.id DESC');
	   $this->set('menu', $this->paginate('Menu',array()));
	   
	   // thung rac   
	   $this->loadModel("Menu");
       $list_cat = $this->Menu->generatetreelist(null,null,null," _ ");
	   $this->set(compact('list_cat'));
	}
	//tim kiem
	function search($id=null) {
		$data['Menu']=$this->data['Menu'];
		$Menu=$data['Menu']['parent_id'];
		$this->paginate = array('conditions'=>array('Menu.id'=>$menu),'limit' => '15','order' => 'Menu.id DESC');
	    $this->set('search', $this->paginate('Menu',array()));
		
		$this->loadModel("Menu");
        $list_cat = $this->Menu->generatetreelist(null,null,null," _ ");
	    $this->set(compact('list_cat'));
		
	}
	//them danh muc moi
	function add() {
		$this->account();
		if (!empty($this->data)) {
			$this->Menu->create();
            if(isset($_POST['radio'])){
            $data['Menu'] = $this->data['Menu'];
            //var_dump($_POST['radio']); exit();
            $data['Menu']['radio'] = $_POST['radio'];	
           // $data['Catproduct']['icon'] = $_POST['userfile1'];	
			if ($this->Menu->save($data['Menu'])){           
				$this->Session->setFlash(__('Thêm mới danh mục thành công', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Thêm mơi danh mục thất bại. Vui long thử lại', true));
			}}else{
			 echo '
             <script language="javascript" type="text/javascript"> alert("Bạn chưa chọn liên kết");window.history.go(-1); </script>';
			 $this->Session->setFlash(__('Thêm mơi danh mục thất bại. Vui long thử lại', true));
			}
		}
        $this->loadModel("Catproduct");
        $catproductlist = $this->Catproduct->generatetreelist(array('Catproduct.status'=>1),null,null," _ ");
        $this->set(compact('catproductlist'));
        $menulist = $this->Menu->generatetreelist(array('Menu.status'=>1),null,null," _ ");
        $this->set(compact('menulist'));
        
        $this->loadModel("Category");
        $category = $this->Category->generatetreelist(array('Category.status'=>1),null,null," _ ");
        $this->set(compact('category'));
	}
	//Sua danh muc
	function edit($id = null) {
		$this->account();
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Không tồn tại danh mục này', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$data['Menu'] = $this->data['Menu'];
            $data['Menu']['radio'] = $_POST['radio'];		
			if ($this->Menu->save($data['Menu'])){ 
				$this->Session->setFlash(__('Sửa thành công', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Sủa không thành công. Vui long thử lại', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Menu->read(null, $id);
             $edit=$this->Menu->read(null,$id);
		      //var_dump($edit['Menu']['radio']); exit(); 
            $this->set('edit',$edit['Menu']['radio']);
		}
		$this->loadModel("Catproduct");
        $catproductlist = $this->Catproduct->generatetreelist(array('Catproduct.status'=>1),null,null," _ ");
        $this->set(compact('catproductlist'));
        $menulist = $this->Menu->generatetreelist(array('Menu.status'=>1),null,null," _ ");
        $this->set(compact('menulist'));
        
        $this->loadModel("Category");
        $category = $this->Category->generatetreelist(array('Category.status'=>1),null,null," _ ");
        $this->set(compact('category'));
        
	}
	function active($id=null) {
		$this->account();
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại danh mục này', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Menu->id = $id; // This avoids the query performed by read()
        $this->Menu->saveField('status',1);
		$this->Session->setFlash(__('Danh mục không active được', true));
		$this->redirect(array('action' => 'index'));

	}
   //dong danh muc
	function close($id=null) {
	   mysql_query("SET names utf8");
		$this->account();
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại danh mục này', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Menu->id = $id; // This avoids the query performed by read()
        $this->Menu->saveField('status',0);
		$this->Session->setFlash(__('Danh mục không close được', true));
		$this->redirect(array('action' => 'index'));

	}

	//Xoa danh muc
	function delete($id = null) {	
		$this->account();	
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại danh mục này', true));
			//$this->redirect(array('action'=>'index'));
		}
		if ($this->Menu->delete($id)) {
			$this->Session->setFlash(__('Xóa danh mục thành công', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Danh mục không xóa được', true));
		$this->redirect(array('action' => 'index'));
	}
	function processing() {
		$this->account();
		if(isset($_POST['dropdown']))
			$select=$_POST['dropdown'];		
			switch ($select){
				case 'active':
				$Menu=($this->Menu->find('all'));
				foreach($Menu as $Menu) {
					if(isset($_POST[$Menu['Menu']['id']]))
					{
						$Menu['Menu']['status']=1;
						$this->Menu->save($Menu['Menu']);
						
					}
				}
                $this->redirect(array('action'=>'index'));
				//vong lap active
				break;
				case 'notactive':	
				//vong lap huy
				$Menu=($this->Menu->find('all'));
				foreach($Menu as $Menu) {
					if(isset($_POST[$Menu['Menu']['id']]))
					{
						$Menu['Menu']['status']=0;
						$this->Menu->save($Menu['Menu']);
						
					}
				}
                $this->redirect(array('action'=>'index'));
				break;
				case 'delete':
				$Menu=($this->Menu->find('all'));
				foreach($Menu as $Menu) {
					if(isset($_POST[$Menu['Menu']['id']]))
					{
					    $this->Menu->delete($Menu['Menu']['id']);
						
					}
										
				}
				
				$this->redirect(array('action'=>'index'));
				//vong lap xoa
				break;
				
			}
	
		
	}
	//list danh sach cac danh muc
	function _find_list() {
		return $this->Menu->generatetreelist(null, null, null, '__');
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
