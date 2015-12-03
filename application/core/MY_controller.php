<?php session_start();
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class 	MY_controller extends CI_Controller{
		
		function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('pagination');
			$this->load->model('User_model','user');
		}
		public function index()
		{
			//$data['base']=$this->config->item('base_url');
			$data['base']=$this->config->base_url();
			
			
		}
		
		
		
		//总的界面的分布显示
		public function show($data,$view){		
			$data['u_name']=$_SESSION['username'];
			$data['base'] = $this->config->item('base_url'); 
			
			$this->load->view('user/header',$data);
			$this->load->view('user/navbar',$data);
			$this->load->view('user/siderbar',$data);
			$this->load->view('proj_won/'.$view,$data);
			$this->load->view('user/footer',$data);		
		}	
		//项目内容页面的分布显示
		public function show_project($p_id,$data,$view){
			$data['u_name']=$_SESSION['username'];			
			$u_id=$_SESSION['u_id'];
			$data['base'] = $this->config->item('base_url'); 
		//	echo $data['base'];
		//	echo $this->config->item('base_url'); 
			$data['conbase']=base_url()."index.php/";	
			//数据库中具体查询项目详情
			$projsql="select * from project where p_id=".$p_id;
			$projdata=$this->user->getalldata($projsql);
			$data['projdata']=$projdata;
			//var_dump($projdata);
			$this->load->view('user/header',$data);
			$this->load->view('user/navbar',$data);
			$this->load->view('user/siderbar',$data);
			$this->load->view('proj_show/detail-project',$data);
			
			$this->load->view('proj_state/'.$view,$data);
			
			$this->load->view('user/footer',$data);	
		}
	}

?>