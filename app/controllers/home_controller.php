<?php
class HomeController extends AppController {

	var $name = 'Home';
	var $uses=array('User','News','Category','Product','Catproduct');

	function index() {//list danh sach tin tuc   
        //$this->set('newsproducts', $this->Product->find('all',array('conditions'=>array('Product.status'=>1),'limit'=>8,'order' => 'Product.id DESC')));
//        $this->set('kmproducts', $this->Product->find('all',array('conditions'=>array('Product.status'=>1,'Product.display'=>1),'limit'=>8,'order' => 'Product.id DESC')));
//		$this->paginate = array('conditions'=>array('Product.status'=>1,'Product.sptieubieu'=>1),'limit' =>4,'order' => 'Product.id DESC');
//	    $this->set('products', $this->paginate('Product',array()));
//        $this->set('newshot', $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>232),'limit'=>3,'order' => 'News.id DESC')));
//        $this->set('hdsd', $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>233),'limit'=>3,'order' => 'News.id DESC')));
        
        $this->set('about', $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>234),'limit'=>1,'order' => 'News.id DESC')));
        $this->set('catsp', $this->Catproduct->find('all',array('conditions'=>array('Catproduct.status'=>1,'Catproduct.show'=>1),'limit'=>3,'order' => 'Catproduct.char ASC')));
        $this->set('catnew', $this->Category->find('all',array('conditions'=>array('Category.status'=>1,'Category.show'=>1,'Category.parent_id'=>224),'limit'=>3,'order' => 'Category.tt ASC')));
	}  
}

?>