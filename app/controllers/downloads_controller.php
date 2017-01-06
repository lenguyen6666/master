<?php
class DownloadsController extends AppController{
	var $name='Downloads';
	var $uses=array('Video');

	function index() {
		mysql_query("SET names utf8");		
		$this->paginate = array('conditions'=>array('Video.status'=>1),'limit' => '10','order' => 'Video.id DESC');
	    $this->set('downloads', $this->paginate('Video',array()));
	}
