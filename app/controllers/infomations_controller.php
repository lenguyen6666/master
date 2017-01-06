<?php
class InfomationsController extends AppController {
	
	var $name = 'Infomations';
	var $uses=array('Infomation','Order','Infomationdetail');
	
	function index() {	
	
		if(!$this->Session->read("email")){
				echo "<script>location.href='".DOMAIN."login'</script>";
		}else{
			
				 $this->set('infomations', $this->Infomation->find('all',array('conditions'=>array('Infomation.user_id'=>$this->Session->read("id")),'limit'=>10)));
		}
	   
	
	  
	}
	function add() {
		
		    $uid = "id".rand(1, 1000000);
			$data['Infomation']['user_id'] =($this->Session->read("id")!=''?$this->Session->read("id"):$uid);
			$data['Infomation']['mobile'] = $_POST['phone'];
			$data['Infomation']['address']=$_POST['address'];		
			$data['Infomation']['email']=$_POST['email'];
			$data['Infomation']['name']=$_POST['name'];			
			$data['Infomation']['phone']=$_POST['phone'];
			$data['Infomation']['total']=$_POST['total'];
			$this->Infomation->save($data['Infomation']);	
			
			$info_id = $this->Infomation->getLastInsertId();
			
			$shopingcart = $_SESSION['shopingcart'];
		//	print_r($shopingcart);exit;
			$i =0;
			foreach($shopingcart as $key) {
				$this->Infomationdetail->create();
				$data['Infomationdetail']['infomations_id'] = $info_id;
				$data['Infomationdetail']['product_id'] = $key['pid'];
				$data['Infomationdetail']['name'] = $key['name'];
				$data['Infomationdetail']['images'] = $key['images'];
				$data['Infomationdetail']['quantity'] = $key['sl'];
				$data['Infomationdetail']['price'] = $key['price'];
				$this->Infomationdetail->save($data['Infomationdetail']);	
				$i++;
			}
			
		
			
			
			unset($_SESSION['shopingcart']);
				 	    echo '<script language="javascript">alert("cảm ơn bạn đã đặt hàng tại sieuthicuoihoi.com chúng tôi sẽ liên hệ với bạn trong vòng 24h"); location.href="'.DOMAIN.'";</script>';
			
	}

	function delete($id = null) {	
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại danh mục này', true));
			//$this->redirect(array('action'=>'index'));
		}
		if ($this->Infomations->delete($id)) {
			$this->Session->setFlash(__('Xóa danh mục thành công', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Danh mục không xóa được', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>
