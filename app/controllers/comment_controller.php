<?php
class CommentController extends AppController {

	var $name = 'Comment';
	var $uses=array('Menu','Category','News','Infomation','Gallery','Album','Banner','Helps','Setting','Video','Slideshow','Partner','Advertisement','Catproduct','Product');
	
  function getOrder(){
		mysql_query("SET names utf8");      	
		return $this->Infomation->find('all',array('order' => 'Infomation.id DESC'));
	}
  function getAlbum(){
		mysql_query("SET names utf8");      	
		return $this->Album->find('all',array('conditions'=>array('Album.status'=>1),'limit' => '3','order' => 'Album.id ASC'));
	}
    function menu(){
		mysql_query("SET names utf8");
		return $this->Menu->find('all',array('conditions'=>array('Menu.status'=>1,'Menu.parent_id'=>null),'order'=>'Menu.order ASC'));
	}
    function menuleft(){
		mysql_query("SET names utf8");
		return $this->Menu->find('all',array('conditions'=>array('Menu.status'=>1,'Menu.parent_id'=>null),'limit'=>3,'order'=>'Menu.order ASC'));
	}
    function rootmenu($id=null){
		mysql_query("SET names utf8");
		return $this->Menu->find('all',array('conditions'=>array('Menu.status'=>1,'Menu.parent_id'=>$id),'order'=>'Menu.order ASC'));
	}
	//tin tuc
	//tin tuc
    function category(){
		mysql_query("SET names utf8");
		return $this->Category->find('all',array('conditions'=>array('Category.status'=>1,'Category.parent_id'=>null,'NOT'=>array('Category.id'=>146)),'order'=>'Category.tt ASC'));
	}
    function categoryid($id=null){
		mysql_query("SET names utf8");
		return $this->Category->find('all',array('conditions'=>array('Category.status'=>1,'Category.parent_id'=>$id),'order'=>'Category.tt ASC'));
	}
	function menunews1(){
		mysql_query("SET names utf8");
		return $this->Category->find('all',array('conditions'=>array('Category.status'=>1,'Category.parent_id'=>'156'),'order'=>'Category.tt DESC'));
	}
    
	// gioi thieu
	function menuintroduct(){
		mysql_query("SET names utf8");
		return $this->Category->find('all',array('conditions'=>array('Category.status'=>1,'Category.parent_id'=>'146'),'order'=>'Category.tt ASC'));
	}
	function banner(){
		return $this->Banner->find('all',array('conditions'=>array('Banner.status'=>1),'order'=>'Banner.id DESC'));
	}
	
	function setting(){
		return $this->Setting->find('all',array('conditions'=>array(),'order'=>'Setting.id DESC'));
	}
	function adv(){
		//return $this->Gallery->find('all',array('conditions'=>array('Gallery.status'=>1),'order'=>'Gallery.id DESC','limit'=>2));
		return $this->Banner->find('all',array('conditions'=>array('Banner.status'=>1),'order'=>'Banner.id DESC','limit'=>2));
	}
    function adv1(){
		//return $this->Gallery->find('all',array('conditions'=>array('Gallery.status'=>1),'order'=>'Gallery.id DESC','limit'=>2));
		return $this->Advertisement->find('all',array('conditions'=>array('Advertisement.status'=>1,'Advertisement.display'=>0),'order'=>'Advertisement.id DESC','limit'=>1));
	}
    function adv2(){
		//return $this->Gallery->find('all',array('conditions'=>array('Gallery.status'=>1),'order'=>'Gallery.id DESC','limit'=>2));
		return $this->Advertisement->find('all',array('conditions'=>array('Advertisement.status'=>1,'Advertisement.display'=>1),'order'=>'Advertisement.id DESC','limit'=>1));
	}
    function adv3(){
		//return $this->Gallery->find('all',array('conditions'=>array('Gallery.status'=>1),'order'=>'Gallery.id DESC','limit'=>2));
		return $this->Advertisement->find('all',array('conditions'=>array('Advertisement.status'=>1,'Advertisement.display'=>2),'order'=>'Advertisement.id ASC','limit'=>5));
	}
	function doitac(){
		//return $this->Gallery->find('all',array('conditions'=>array('Gallery.status'=>1),'order'=>'Gallery.id DESC','limit'=>2));
		return $this->Partner->find('all',array('conditions'=>array('Partner.status'=>1),'order'=>'Partner.id DESC'));
	}
	function menu_active(){
		return $this->Category2->find('all',array('conditions'=>array('Category2.parent_id'=>145),'order'=>'Category2.id ASC'));
	}
	function helpsonline(){
	return $this->Helps->find('all',array('conditions'=>array('Helps.status'=>1),'order'=>'Helps.id DESC'));
	}
	function id_product($id){
	return $this->Product->read(null,$id);
	//pr($this->Product->read(null,$id));die;
	}
    function hot(){
	return $this->News->find('all',array('conditions'=>array('News.status'=>1),'order'=>'News.id DESC','limit'=>2));	
	}
    function hotnew(){
	return $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>156),'order'=>'News.id DESC','limit'=>5));	
	}
	function getinfo($cat=null){
	return $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>$cat),'order'=>'News.id DESC','limit'=>3));	
	}
	function videos(){
		mysql_query("SET names utf8");
		return $this->Video->find('all',array('conditions'=>array('Video.status'=>1),'order'=>'Video.id DESC','limit'=>5));
	}
	function tintuc(){
		return $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>156),'order'=>'News.id DESC','limit'=>5));
	}
	
	function slideshow(){
		mysql_query("SET names utf8");
		return $this->Slideshow->find('all',array('conditions'=>array('Slideshow.status'=>1),'order'=>'Slideshow.id DESC'));
	}
	function library_image(){
		return $this->Gallery->find('all',array('conditions'=>array('Gallery.status'=>1),'order'=>'Gallery.id DESC','limit'=>10));
	}
	function shows(){
	mysql_query("SET names utf8");
	 return $this->Category->find('all',array('conditions'=>array('Category.parent_id'=>'201'),'order'=>'Category.id ASC'));
	}
	// SẢN PHẨM
	function menuproduct(){
	mysql_query("SET names utf8");
	 return $this->Catproduct->find('all',array('conditions'=>array('Catproduct.parent_id'=>'3'),'order'=>'Catproduct.id ASC'));
	}
	
	function submenuproduct($id=null){
		return $this->Catproduct-> find('all',array('conditions'=>array('Catproduct.parent_id '=>$id),'order'=>'Catproduct.id ASC'));
	}
    
    function showsmenu(){
	mysql_query("SET names utf8");
	 return $this->Catproduct->find('all',array('conditions'=>array('Catproduct.parent_id'=>'12'),'order'=>'Catproduct.id ASC'));
	}
	
	function showsmenu1($id=null){
		return $this->Catproduct-> find('all',array('conditions'=>array('Catproduct.parent_id '=>$id),'order'=>'Catproduct.id ASC'));
	}
	function showsmenu2($id=null){
		return $this->Catproduct-> find('all',array('conditions'=>array('Catproduct.parent_id '=>$id),'order'=>'Catproduct.id ASC'));
	}
	
	function danhmuc(){
 	 	return $this->Catproduct->find('all',array('conditions'=>array('Catproduct.parent_id'=>null)));
 	}
	function typical(){
		return $this->Product->find('all',array('conditions'=>array('Product.status'=>1,'Product.sptieubieu'=>'1'),'order'=>'Product.id DESC','limit'=>9));
	}
    function productnew(){
		return $this->Product->find('all',array('conditions'=>array('Product.status'=>1),'order'=>'Product.id DESC','limit'=>10));
	}
    function khuyenmai(){
		return $this->Product->find('all',array('conditions'=>array('Product.status'=>1,'Product.display'=>'1'),'order'=>'Product.id DESC','limit'=>10));
	}
	function business(){
		return $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>218),'order'=>'News.id DESC','limit'=>5));
	}
	function customers(){
		return $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>219),'order'=>'News.id DESC','limit'=>5));
	}
	function science(){
		return $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>220),'order'=>'News.id DESC','limit'=>5));
	}
    function help(){
		return $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>226),'order'=>'News.id DESC','limit'=>2));
	}
    function tinkhuyenmai(){
		return $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>227),'order'=>'News.id DESC','limit'=>2));
	}
    function tinkhuyenmaile(){
		return $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>228),'order'=>'News.id DESC','limit'=>2));
	}
    
    function gp(){
        $category_id=$this->Category->find('list',array('conditions'=>array('Category.status'=>1,'Category.parent_id'=>242),'fields' => array('Category.id')));
        $category_id[242] =242;
		return $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>$category_id),'order'=>'News.id DESC','limit'=>2));
	}
    function vh(){
        $category_id=$this->Category->find('list',array('conditions'=>array('Category.status'=>1,'Category.parent_id'=>243),'fields' => array('Category.id')));
        $category_id[243] =243;
		return $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>$category_id),'order'=>'News.id DESC','limit'=>2));
	}
    function dl(){

        $category_id=$this->Category->find('list',array('conditions'=>array('Category.status'=>1,'Category.parent_id'=>225),'fields' => array('Category.id')));
        $category_id[225] =225;
        //print_r($category_id);die;
		return $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>$category_id),'order'=>'News.id DESC','limit'=>2));
	}
}

?>
