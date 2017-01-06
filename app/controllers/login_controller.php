<?php
class LoginController extends AppController {

	var $name = 'Login';
	var $uses =array('User');
	function index() {
		if(isset($_SESSION['id'])){
			echo "<script>location.href='".DOMAIN."'</script>";
		}	
	}
	function check_login() {	
		if(!empty($_POST['email']) && !empty($_POST['password'])){
			$check=$this->User->findByEmail($_POST['email']);
			if($check){
				if($check['User']['password']==md5($_POST['password']) && $check['User']['status']==0){
					$this->Session->write('id',$check['User']['id']);
					$this->Session->write('email',$check['User']['email']);
					$this->Session->write('name',$check['User']['name']);
					$this->Session->write('sex',$check['User']['sex']);
					$this->Session->write('phone',$check['User']['phone']);
					echo "<script>alert('".json_encode('Chúc mừng bạn đã đăng nhập thành công !')."');</script>";
					echo "<script>location.href='".DOMAIN."'</script>";
				}
				else {
						echo "<script>alert('".json_encode('Mật khẩu không đúng!')."');</script>";
						echo "<script>location.href='".DOMAIN."/login'</script>";
				}
			}else{
				echo "<script>alert('".json_encode('Email không đúng !')."');</script>";
				echo "<script>location.href='".DOMAIN."/login'</script>";
			}
			
		}
	}
	function logout() {
		  unset($_SESSION['shopingcart']);
		$this->Session->delete('User');
		$this->Session->delete('id');
		$this->Session->delete('email');
		$this->Session->delete('name');
		$this->Session->delete('phone');
		$this->Session->delete('phone');
		$this->Session->delete('sex');
		$this->Session->delete('birth_date');
		$this->redirect('/');
	}


}
?>
