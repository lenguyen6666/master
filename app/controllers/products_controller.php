<?php
class ProductsController extends AppController {

	var $name = 'Products';
	var $uses=array('Product','Catproduct');
	var $helpers = array('Html','Ajax','Javascript');
	var $components = array( 'RequestHandler' );
	function index() {
		//list danh sach tin tuc
		mysql_query("SET names utf8");
		$this->paginate = array('conditions'=>array('Product.status'=>1),'order'=>'Product.char ASC','limit'=>18);
	    $this->set('products', $this->paginate('Product',array()));	
        
	}
    function dssanpham($id=null) {
		//list danh sach tin tuc
		mysql_query("SET names utf8");
        $check=$this->Catproduct->find('list',array('conditions'=>array('Catproduct.parent_id'=>$id),'fields' => array('Catproduct.id')));		
        //var_dump($check); exit();
	    if($check!=null){
	       $this->paginate = array('conditions'=>array('Catproduct.status'=>1,'Catproduct.parent_id'=>$id),'order'=>'Catproduct.id ASC','limit'=>12);
	       $this->set('catproduct', $this->paginate('Catproduct',array()));	
            $this->set('cat',$this->Catproduct->read(null,$id));
            }else{
                $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$id),'order'=>'Product.id DESC','limit'=>12);
        	      $this->set('products', $this->paginate('Product',array()));	
        		  $this->set('cat',$this->Catproduct->read(null,$id));
            }            
	}
	function vpp() {
		//list danh sach tin tuc
		mysql_query("SET names utf8");
        $dem=$this->Catproduct->find('list',array('conditions'=>array('Catproduct.parent_id'=>'21'),'fields' => array('Catproduct.id')));
		$this->paginate = array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$dem),'order'=>'Product.id DESC','limit'=>12);
	    $this->set('products', $this->paginate('Product',array()));	
        $this->set('newsproducts', $this->Product->find('all',array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$dem,'Product.sptieubieu'=>'1'),'limit'=>16,'order' => 'Product.id DESC')));
        
	}
    function thietbivp() {
		//list danh sach tin tuc
		mysql_query("SET names utf8");
        $dem=$this->Catproduct->find('list',array('conditions'=>array('Catproduct.parent_id'=>'22'),'fields' => array('Catproduct.id')));
		$this->paginate = array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$dem),'order'=>'Product.id DESC','limit'=>12);
	    $this->set('products', $this->paginate('Product',array()));	
        $this->set('newsproducts', $this->Product->find('all',array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$dem,'Product.sptieubieu'=>'1'),'limit'=>16,'order' => 'Product.id DESC')));
	}
    function thietbicntt() {
		//list danh sach tin tuc
		mysql_query("SET names utf8");
        $dem=$this->Catproduct->find('list',array('conditions'=>array('Catproduct.parent_id'=>'23'),'fields' => array('Catproduct.id')));
		$this->paginate = array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$dem),'order'=>'Product.id DESC','limit'=>12);
	    $this->set('products', $this->paginate('Product',array()));	
        $this->set('newsproducts', $this->Product->find('all',array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$dem,'Product.sptieubieu'=>'1'),'limit'=>16,'order' => 'Product.id DESC')));
	}
	function listproduct($id=null) {
			//list danh sach tin tuc
		mysql_query("SET names utf8");
        $cat =$this->Catproduct->read(null,$id);
        $this->set('cat',$cat);        
        $check = $this->Catproduct->find('list',array('conditions'=>array('Catproduct.lft >='=>$cat['Catproduct']['lft'],'Catproduct.rght <='=>$cat['Catproduct']['rght']),'fields'=>array('Catproduct.id')));
        //$check=$this->Catproduct->find('list',array('conditions'=>array('Catproduct.parent_id'=>$id),'fields' => array('Catproduct.id')));		
        //var_dump($check); exit();
	    if($check!=null){
	       $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$check),'order'=>'Product.char ASC','limit'=>9);
            $this->set('products', $this->paginate('Product',array()));
            }else{
                $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$id),'order'=>'Product.char ASC','limit'=>9);
        	      $this->set('products', $this->paginate('Product',array()));	
            }            
	}
	function listsp1($id=null) {
		//list danh sach tin tuc
		mysql_query("SET names utf8");
		 $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$id),'order'=>'Product.id DESC','limit'=>9);
	      $this->set('products', $this->paginate('Product',array()));	
		  $this->set('cat',$this->Catproduct->read(null,$id));	
	}
	function listsp12($id=null) {
		//list danh sach tin tuc
		mysql_query("SET names utf8");
		 $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$id),'order'=>'Product.id DESC','limit'=>10);
	      $this->set('products', $this->paginate('Product',array()));	
		  $this->set('cat',$this->Catproduct->read(null,$id));	
	}
	function listsp2($id=null) {
		//list danh sach tin tuc
		mysql_query("SET names utf8");
		 $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$id),'order'=>'Product.id DESC','limit'=>10);
	      $this->set('products', $this->paginate('Product',array()));	
		  $this->set('cat',$this->Catproduct->read(null,$id));	
	}	
	function search($name_search=null){
	//$id = $this->Session->read('id');
    if(isset($_POST['name_search'])){
	$name_search = $_POST['name_search'];
    		
	$this->paginate = array('conditions'=>array('Product.status'=>1,'Product.title like'=>'%'.$name_search.'%'),'limit'=>9);		
    $this->set('products', $this->paginate('Product',array()));
    	}else{
    	 $this->paginate = array('conditions'=>array('Product.status'=>1),'limit'=>9);		
        $this->set('products', $this->paginate('Product',array()));  
    	}	
	}		
	
	function view($id=null) {
		mysql_query("SET names utf8");
		if (!$id) {
			$this->Session->setFlash(__('Không tồn tại', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('views', $this->Product->read(null, $id));
		
		$name=$this->Product->read(null, $id);
       
  		$this->set('views',$name);		
        $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$name['Product']['catproduct_id'],'Product.id <>'=>$name['Product']['id']),'order'=>'Product.id DESC','limit'=>3);
	    $this->set('sanphamkhac', $this->paginate('Product',array()));	
        $this->set('catpro', $this->Catproduct->read(null, $name['Product']['catproduct_id']));
	}
	
//shopping	
function addshopingcart($id=null){
		$product=$this->Product->read(null,$id);	
//	
	if(!isset($_SESSION['shopingcart'])){  $_SESSION['shopingcart']=array();};
	 		
	 if(isset($_SESSION['shopingcart']))	 
	 {   
	 	 
	 	 $shopingcart=$_SESSION['shopingcart'];
	 	 if(isset($shopingcart[$id]))
		 {		 	
			 $shopingcart[$id]['sl']= $shopingcart[$id]['sl']+1;
			 $shopingcart[$id]['total']= $shopingcart[$id]['price']*$shopingcart[$id]['sl'];			
			 $_SESSION['shopingcart']=$shopingcart;			 
			echo '<script language="javascript"> alert("Thêm thành công"); window.location.replace("'.DOMAIN.'/products/viewshopingcart"); </script>';
		 }
	     else
		 {			
		 		$shopingcart[$id]['pid'] = $id;		
				$shopingcart[$id]['name']=$product['Product']['title'];	
				$shopingcart[$id]['images']=$product['Product']['images'];	
				$shopingcart[$id]['sl']=1;
				$shopingcart[$id]['price'] = $product['Product']['price'];				
				$shopingcart[$id]['total']= $product['Product']['price']*$shopingcart[$id]['sl'];
				$_SESSION['shopingcart']=$shopingcart;				
				echo '<script language="javascript" type="text/javascript"> alert("Thêm giỏ hàng thành công"); window.location.replace("'.DOMAIN.'products/viewshopingcart"); </script>';
	         }
	 	}	
	}

	function deleteshopingcart($id=null){

			if(isset($_SESSION['shopingcart']))
		 {   
			 $shopingcart=$_SESSION['shopingcart'];			 
			  if(isset($shopingcart[$id]))
			  unset($shopingcart[$id]);
              $idd = "images";
    		  if(isset($shopingcart[$idd]))
    		  unset($shopingcart[$idd]);
			  $_SESSION['shopingcart']=$shopingcart;              			  
              $sl=count($_SESSION['shopingcart']);
              if($sl==0){unset($_SESSION['shopingcart']);echo '<script language="javascript" type="text/javascript"> alert("San pham trong gio hang da bi xoa het!"); window.location.replace("'.DOMAIN.'home"); </script>';}
              $this->redirect('viewshopingcart');
		 }

		

	}

	

	function order($id=null){

		mysql_query("SET names utf8");

		if (!$id) {

			$this->Session->setFlash(__('Không tồn tại', true));

			$this->redirect(array('action' => 'index'));

		}

		$this->set('buy', $this->News->read(null, $id));

		}

	

function viewshopingcart(){

        //unset($_SESSION['shopingcart']);
        //var_dump($_SESSION['shopingcart']); exit();
        if(isset($_SESSION['shopingcart']))
		 {
		  $shopingcart=$_SESSION['shopingcart'];	
		  $idd = "images";
		  if(isset($shopingcart[$idd])){
		  unset($shopingcart[$idd]);
		  $_SESSION['shopingcart']=$shopingcart; 
          }
          $shopingcart=$_SESSION['shopingcart'];		 
		 $this->set(compact('shopingcart'));
		 }
		 else
		 {
			 echo '<script language="javascript"> alert("Chua co san pham nao trong gio hang"); window.location.replace("'.DOMAIN.'home"); </script>';
		 }

	}



	function updateshopingcart($id=null){

		

		if(isset($_SESSION['shopingcart']))

		 {   

			 $shopingcart=$_SESSION['shopingcart'];			 

			  if(isset($shopingcart[$id]))

			  {

				  $shopingcart[$id]['sl']=$_POST['soluong'];			

				  $shopingcart[$id]['total']= $shopingcart[$id]['sl']*$shopingcart[$id]['price'];

			  }

			  $_SESSION['shopingcart']=$shopingcart;

			 

			  $this->redirect('viewshopingcart');

		 }

	}

	function buy(){

		if(isset($_SESSION['shopingcart']))

		 {  

		 	 $shopingcart=$_SESSION['shopingcart'];			 

			 $this->set(compact('shopingcart'));

		 }

		 else

		 {

			 echo '<script language="javascript"> alert("Không có sản phẩm nào trong giỏ hàng của bạn"); window.location.replace("'.DOMAIN.'"); </script>';

		 }

	}
  function category($id=null) {
		mysql_query("SET names utf8");
		if (!$id) {
			$this->Session->setFlash(__('Không tồn tại', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('products',$this->Product->find('all',array('conditions'=>array('Product.status'=>1,'category_id'=>$id),'order'=>'Product.id DESC')));
	}
	
	function getproduct($id=null)
	{
		return  $this->Product->read(null, $id);
	}
}
?>
