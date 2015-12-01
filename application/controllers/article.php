<?php
	class Article extends CI_Controller{
		public function index(){
			echo 'article index function....';
		}
		public function  show($id){
			echo 'this is the article'.$id;
		}
	}

?>