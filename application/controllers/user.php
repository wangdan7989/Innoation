<?php //session_start();
//if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class User extends MY_controller{
		
		
		public function index()
		{
			$data['base']=$this->config->base_url();
			$this->load->view('proj_won/won-login',$data);
		}
		public function test1(){
			//var_dump($data['base']);
			//$data['base']=$this->config->item('base_url');
			$data['base']=base_url();
			$js=$data['base'];
			//$js1=$js.'js';
			//echo base_url();
			echo $this->config->base_url();
			echo ($js.'js');
		}
		
		//登录界面
		public function login(){
			$username=$_POST['username'];
			$password=$_POST['password'];			
			$check_sql="select * from user where u_name='".$username."' and password ='".$password."'";
			$data=$this->user->getdata($check_sql);
			if(empty($data)){
				
				echo "该用户不存在！";
			}
			else{
				
				$_SESSION['username']=$username;
				$_SESSION['identity']=$data['identity'];
				$_SESSION['u_id']=$data['u_id'];
				
				
				if(strcasecmp($data['identity'],"administrator")==0){
					//echo "进入管理员界面";
					redirect('project_application/add_application/');
				}
				if(strcasecmp($data['identity'],"student")==0){
							
						//项目申报界面	
						redirect('project_application/add_application/');
							
							//echo "进入学生界面";
				}		
				if(strcasecmp($data['identity'],"company")==0){
							
					echo "进入企业界面";
				}
				
					
		
				
			}
			
		}
	
		
				
		
	
		
		
		
	
		
		
		
	//项目开始和项目结束用时间戳来控制，到开始的时间后就直接将state设置为开始，结束后就直接设置为结束
		







//以下非	
		public function showusers(){
			/*//装载数据库操作类
			$this->load->database();
			//操作成功后，会放入超级对象的属性中，默认属性名是db
			//var_dump($this->db);
			$sql='select * from user ';
			$result=$this->db->query($sql);
			//var_dump($result);//返回值是一个对象
			$users=$result->result();
			//echo '<pre>';
			//var_dump($users);
			$data['user_list']=$users;
			$this->load->view('header');
			$this->load->view('user/showusers',$data);
			*/
			
			//AR
			$this->load->model('User_model','user');
			$sql='select * from user';
			$data=$this->user->getdata($sql);
			$this->load->view('user/showusers',$data);
			/*$res=$this->db->get('user');
			foreach($data as $item){
				echo $item->name;
				echo '<br>';
			}
			*/
			/*
			//insert
			$data=array(
				'name'=>'mary',
				'email'=>'mary@gmail.com'
			);
			$bool=$this->db->insert('user',$data);
			var_dump($bool);
			*/
			
			//updata
			/*$data=array(
				'email'=>'mary@gmail.com'
			);
			$bool=$this->db->update('user',$data,array('id'=>3));
			var_dump($bool);
			*/
			
			//delete
			/*$bool=$this->db->delete('user',array('id'=>1));
			var_dump($bool);
			*/
			
			/*//连贯操作
			//select id,name from user where ... limit...order by...
			$res=$this->db ->select('id','name')
					  ->from('user')
					  ->where('id >=',1)
					  ->limit(2,3)//跳过2条取出3条数据
					  ->order_by('id desc')
					  ->get();
			var_dump($res->result());
			echo $this->db->last_query();
			*/
			
			//关于where的一些使用
			$res=$this->db->where('name','mary')->get('user');
			$res=$this->db->where('name !=','mary')->get('user');
			$res=$this->db->where(array('name'=>'mary'))->get('user');
			$res=$this->db->where(array('name'=>'mary','id >'=>2))->get('user');
			//echo $this->db->last_query();
		}
		public function getusers(){
			//加载模型，加载后将自动成为超级对象的属性
			/*	$this->load->model('User_model');
			//调用模型获取数据
			$list=$this->User_model->getAll();
			*/
			//取个别名
			$this->load->model('User_model','user');
			$list=$this->user->getAll();
			
			//加载视图
			$this->load->view('user/index',array('list'=>$list));
		}
		
	/*	public function add(){
			$this->load->database();
			$sql="insert into user(name,email) values('zizi','zizi@gmail.com')";
			$bool=$this->db->query($sql);
			if($bool){
				echo '受影响函数'.$this->db->affected_rows();
				echo '自增id '.$this->db->insert_id();
			}
		}
	*/
		public function add(){
			$this->load->helper('url');
			$this->load->view('user/add');
		}
		public function insert(){
			//var_dump($this->input->post('name'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('name','用户名','required');
			$this->form_validation->set_rules('email','邮箱','valid_email');
			$bool=$this->form_validation->run();
			//var_dump($bool);
			if($bool){
				//调用模型保存到数据库
			}
			else{
				//显示错误信息
				
				$this->load->view('user/add');
			}
		}
		//public function update
	/*	public function index(){
			//分配变量
			$list=array(
				array('id'=>1,'name'=>'jack','email'=>'jack@gmail.com'),
				array('id'=>2,'name'=>'mary','email'=>'mary@gmail.com'),
				array('id'=>3,'name'=>'lili','email'=>'lili@gmail.com'),
			);
			$data['title']='this is title';
			$data['list']=$list;
			$this->load->view('header');
			$this->load->vars($data);
			
			$this->load->view('user/index');
			//echo "this is the usercontroller's index function";
			//include'./application/models/UserModel.php';
			//$usermodel=new UserModel();
			//$list=$usermodel->getAllUsers();
			//include'./application/views/User/index.php'; 
			
			
		}
		*/
		//分页测试
		public function test(){
			//装载类文件
			$this->load->helper('url');
			$this->load->library('pagination');
			//每页显示10条数据
			$config['base_url']=site_url('user/test');
			$page_size=10;
			//一共有多少条数据
			$config['total_rows']=100;
			//每页显示多少条
			$config['per_page']=$page_size;
			//配置首页和尾页，上一页，下一页
			$config['first_link']='首页';
			$config['last_link']='尾页';
			$config['next_link']='下一页';
		//	$config['pre_link']='上一页';
			$config['uri_segment']=3;
			
			$this->pagination->initialize($config);
			//intval确保$offset是安全的，所以当没有传值时，默认为0
			$offset=intval($this->uri->segment(3));//分页数据查询偏移量在哪一段上，与$config['uri_segment']=3;对应
			$sql='select * from user limit '.$offset.",".$page_size;
			echo $sql;
			
			$data['link']= $this->pagination->create_links();
			$this->load->view('user/test',$data);
		}
		public function file(){
			$this->load->helper('url');
			$this->load->view('user/file');
			
			
		}
		/*
		public function upload(){
			//上传目录需要手动创建
			$config['upload_path']='./uploads/';
			//允许
			$config['allowed_types']='gif|png|jpg|jpeg';
			$config['max_size']='10000';
			//新文件名生成
			$config['file_name']=uniqid();
			//装载文件上传类
			$this->load->library('upload',$config);
			
			//$bool=$this->upload->do_upload('pic');
			
			
			if ( !$this->upload->do_upload('pic')){
				$error = array('error' => $this->upload->display_errors());

				$this->load->view('upload_form', $error);
				}
			else{
				echo "upload succeed!";
			}
			//var_dump($bool);
			//获取上传之后的数据
			var_dump($this->upload->data());
			$data=$this->upload->data();
			echo $data['file_name'];
			
		}
		*/
	/*	public function login(){
			//生成一个随机不重复的字符串作为加密用的key
			//保存到application/config/confid.php
			//$config['encryption_key'] = 'd5e8b9b52480e880405fac20fa593952';
			//echo md5(uniqid());exit();
			$this->load->library('session');
			$user=array('id'=>3,'name'=>'jack');
			//$this->session->set_userdata();
			
			//session_start();
			//$_SESSION['user']=$user;
			
			$this->session->set_userdata('user',$user);
			//不要在这获取刚放入的数据
			//只有在从新加载活跳转到别的url中，才能获取
			
			//一次性数据，只能读取一次
			$this->session->set_flashdata('test','aaaaaa');
		}
		*/
		public function show_session(){
			$this->load->library('session');
			//取CI_session中的数据
			$user=$this->session->userdata('user');
			var_dump($user);
			
			//下次刷新就没有了
			$test=$this->session->flashdata('test');;
			echo $test;
		
		
		}
		public function cap_test(){
			$this->load->helper('url');
			$this->load->helper('captcha');
			
			$vals = array(
			//	'word'      => 'Random word',//php的随机字符串，使用自己生成的数据，如果需要生成中文，
				'img_path'  => './captcha/',//此目录需要手动创建 
				'img_url'   => base_url().'/captcha/',
				'expiration'    => 5,//保留验证码的时间，过了5秒后再刷新，则之前的就清空
			/*	'font_path' => './path/to/fonts/texb.ttf',//验证码需要生成中文，则需要上传字体
				'img_width' => '150',
				'img_height'    => 30,
				'expiration'    => 7200,
				'word_length'   => 8,
				'font_size' => 16,
				'img_id'    => 'Imageid',
				'pool'      => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

				// White background and border, black text and red grid
				'colors'    => array(
					'background' => array(255, 255, 255),
					'border' => array(255, 255, 255),
					'text' => array(0, 0, 0),
					'grid' => array(255, 40, 40)
				)
				*/
			);

			$cap = create_captcha($vals);
			//var_dump($cap);
			$this->load->view('user/cap_test',array('cap'=>$cap['image']));
			//保存到session中，验证时，直接对比$_SESSION['cap'];
			session_start();
			$_SESSION['cap']=$cap['word'];
			
			
		}
	}

?>