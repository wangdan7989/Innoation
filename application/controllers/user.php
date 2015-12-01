<?php session_start();
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class User extends CI_Controller{
		
		function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			//$this->load->library('pagination');
			$this->load->model('User_model','user');
		}
		public function index()
		{
			//$data['base']=$this->config->item('base_url');
			$data['base']=$this->config->base_url();
			$data['conbase']=base_url()."index.php/user/";
			$this->load->view('user/won-login',$data);
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
					redirect('user/add_application/');
				}
				if(strcasecmp($data['identity'],"student")==0){
							
						//项目申报界面	
						redirect('user/add_application/');
							
							//echo "进入学生界面";
				}		
				if(strcasecmp($data['identity'],"company")==0){
							
					echo "进入企业界面";
				}
				
					
		
				
			}
			
		}
		//总的界面的分布显示
		public function show($data,$view){		
			$data['u_name']=$_SESSION['username'];
			$data['base'] = $this->config->item('base_url'); 
			$data['conbase']=base_url()."index.php/user/";
			$this->load->view('user/header',$data);
			$this->load->view('user/navbar',$data);
			$this->load->view('user/siderbar',$data);
			$this->load->view('user/'.$view,$data);
			$this->load->view('user/footer',$data);		
		}	
		//项目内容页面的分布显示
		public function show_project($p_id,$data,$view){
			$data['u_name']=$_SESSION['username'];			
			$u_id=$_SESSION['u_id'];
			$data['base'] = $this->config->item('base_url'); 
		//	echo $data['base'];
		//	echo $this->config->item('base_url'); 
			$data['conbase']=base_url()."index.php/user/";	
			//数据库中具体查询项目详情
			$projsql="select * from project where p_id=".$p_id;
			$projdata=$this->user->getalldata($projsql);
			$data['projdata']=$projdata;
			//var_dump($projdata);
			$this->load->view('user/header',$data);
			$this->load->view('user/navbar',$data);
			$this->load->view('user/siderbar',$data);
			$this->load->view('user/detail-project',$data);
			
			$this->load->view('user/'.$view,$data);
			
			$this->load->view('user/footer',$data);	
		}
		//申请项目待审核
		
		public function add_application(){
			$data=array();
			$this->show($data,'won-addproj');
		}
		//项目申报页面
		public function project_application(){
			
			$username=$_SESSION['username'];		
			$project_message['created_by']=$username;
			$project_message['p_name']=$_POST['p_name'];
			$project_message['type']=$_POST['type'];
			$project_message['property']=$_POST['property'];
			$project_message['fund']=$_POST['fund'];
			$project_message['reward_method']=$_POST['reward_method'];
			$project_message['project_deadline']=$_POST['project_deadline'];
			
			$project_message['contact_way']=$_POST['contact_way'];
			$project_message['max_member']=$_POST['max_member'];
			$project_message['have_member']=0;
			//$project_message['picture']=$_POST[];
			//$project_message['address']=$_POST[];
			//$project_message['team_name']=$_POST[];
			$project_message['description']=$_POST['description'];		
			$project_message['state']='checking';
			$project_message['rate']='checking';
			//分割拼接post传过来的时间以便存数据库
			$time=$_POST['time'];
			list($start_time,$finish_time)=explode('-',$time,2);
			list($month,$day,$year)=explode('/',$start_time,3);
			list($fmonth,$fday,$fyear)=explode('/',$finish_time,3);
			$project_message['start_time']=str_replace(" ","",$year."-".$month."-".$day);
			$project_message['finish_time']=str_replace(" ","",$fyear."-".$fmonth."-".$fday);
			$table='project';
			$bool=$this->user->insert($table,$project_message);
			//echo $this->db->last_query();
			if($bool==1){
				//echo $username;
				echo "<script> alert('项目申请成功!');window.location.href='".base_url()."/index.php/user/add_application/".$username."';</script>";
				//echo "<script> alert(\'项目申请成功！\');window.location.href='".base_url()."/index.php/user/login?username=".$username.",password=".$password."';</script>";  
				//redirect('/user/login?username='.$_SESSION['username']',password='.$_SESSION['password']);
				
				
			}
			else echo "insert failed";
		}
		
		
		
	
		//待审核的界面
		public function postcheck(){
				$noau_sql="select * from project where state='checking'";
				$postdata=$this->user->getalldata($noau_sql);
				$pro_sql="select * from project where state='projchecking'";
				$prodata=$this->user->getalldata($pro_sql);
				$data['post_data']=$postdata;
				$data['pro_data']=$prodata;
				$this->show($data,'won-checkpost');
				
		}
		
		//待报名
		public function signup(){
			$sql="select * from project where state='checked'";
			$signdata=$this->user->getalldata($sql);
			$data['data']=$signdata;
			$this->show($data,'won-signup');
			
		}
		
		
		//一般看到的不同状态的项目显示
		public function show_projectstate($p_id){
			$u_id=$_SESSION['u_id'];
			//$p_id=2;
			$statesql="select state from project where p_id=".$p_id;
			$statedata=$this->user->getalldata($statesql);
			$state=$statedata[0]['state'];
			//var_dump($state);
			
			$data=array();
			//待审核中
			if(strcasecmp($state,"checking")==0){
				$this->show_project($p_id,$data,"projdetail-checking");
			}				
			//审核通过，开始报名
			if(strcasecmp($state,"checked")==0){
				$createdsql="select * from created_project a where a.p_id=".$p_id." and a.u_id=".$u_id;
				$createdata=$this->user->getdata($createdsql);
				$sql="select * from signup a,user b where a.p_id=".$p_id." and a.u_id=b.u_id";
				$signdata=$this->user->getalldata($sql);
				$data['signdata']=$signdata;
				if(empty($createdata)){

					$this->show_project($p_id,$data,"projdetail-signup");	
				}
				else{
					$this->show_project($p_id,$data,"projdetail-checked");
				}
			}
			//审核未通过
			if(strcasecmp($state,"checkfailed")==0){			
				$sql="select * from project where p_id=".$p_id;
				$reasondata=$this->user->getalldata($sql);
				$data['reasondata']=$reasondata;
				$this->show_project($p_id,$data,"projdetail-checkfailed");			
			}
			//立项待审核中
			if(strcasecmp($state,"projchecking")==0){
				$this->show_project($p_id,$data,"proj-checking");
			}
			//立项审核未通过
			if(strcasecmp($state,"projcheckfailed")==0){
				$sql="select * from project where p_id=".$p_id;
				$reasondata=$this->user->getalldata($sql);
				$data['reasondata']=$reasondata;
				$this->show_project($p_id,$data,"proj-checkfailed");
			}
			//立项审核通过
			if(strcasecmp($state,"projchecked")==0){
				$this->show_project($p_id,$data,"proj-checked");
			}	
				
		}
	
		//管理员看到的不同状态的项目界面
			public function administrator_show_projectstate($p_id){
				$statesql="select state from project where p_id=".$p_id;
				$statedata=$this->user->getalldata($statesql);
				$state=$statedata[0]['state'];
				$data=array();
				//待审核的项目
				if(strcasecmp($state,"checking")==0){
					$this->show_project($p_id,$data,'projdetail-mgr');	
				}
				//立项待审核项目
				if(strcasecmp($state,"projchecking")==0){
					$this->show_project($p_id,$data,'checked-perfectproj');	
					
				}
			
		}
		//管理员审核发布项目auditing：审核
		public function checked($au,$sure,$p_id){
			//sure=1:表示通过
			//sure=0:表示没有通过
			//au=1:项目申请通过
			//au=2:立项申请通过
			
			$condition['p_id']=$p_id;
			if(strcasecmp($sure,"ok")==0){
				if(strcasecmp($au,"checked")){
					//项目申请通过
					$data['state']='checked';
					$bool=$this->user->update('project',$data,$condition);
					if($bool){
						echo 1;
					}
					else{
						echo 0;
					}
				}
				else if(strcasecmp($au,"projchecked")==0){
					//立项申请通过
					$data['state']='projchecked';
					$bool=$this->user->update('project',$data,$condition);
					if($bool){
						echo "1";
						
					}
					else{
						echo "0";
					}
				}
			}
			elseif(strcasecmp($sure,"no")==0){
				$reason['reason']=$_POST['reason'];				
				$bool=$this->user->update('project',$reason,$condition);
					if($bool){
						echo 1;
						
					}
					else{
						echo 0;
					}
				
				
				}
		}
		
		//个人主页
		public function personal_center(){
			$u_id=$_SESSION['u_id'];
			//创建项目
			$createdsql="select * from created_project a,project b where u_id=".$u_id." and a.p_id=b.p_id";
			$createdata=$this->user->getalldata($createdsql);
			//参与项目
			$takepartsql="select * from takepart_project a,project b where u_id=".$u_id." and a.p_id=b.p_id";
			$takepartdata=$this->user->getalldata($takepartsql);
			//立项请求
			$data['createdata']=$createdata;
			$data['takepartdata']=$takepartdata;
			$this->show($data,'won-personal');

		}
		//项目进度
		public function project_rate(){
			//$page=0:这是第一个页面，刚开始项目进度的页面
			//$page=1:这是第二个页面，显示三个部分的页面，项目内容，项目排期，团队信息
			$u_id=$_SESSION['username'];
			$ratesql="select * from created_project a,project b,user c where a.u_id=".$u_id." and a.p_id=b.p_id and a.u_id=c.u_id";
			//echo $ratesql;
			$ratedata=$this->user->getalldata($ratesql);
			$data['data']=$ratedata;
			$this->show($data,'won-projprogress');
			
		}
		//显示上传排期的界面
		public function show_schedule(){
			$data=array();
			$this->show($data,'postschedule');
			
		}
		//负责人上传项目排期，同时修改项目的进度：rate
		public function schdule($u_id,$rstate,$p_id){
			//$state:该参数为访问时任务的状态以及管理员需要做什么
			//$state=0:表示初始状态，$schdule['state']="未完成";
			//$state=1：表示该任务的负责人已经完成，是负责人进入页面修改状态
			//$state=2:表示负责人已经完成项目，但是未通过确认，管理员进行确认
			
			//$u_id=$_SESSION['u_id'];
			//$u_id=$_POST['u_id'];
			//$state=$_POST['state'];
			if($rstate==0){
				$schdule['p_id']=$_POST['p_id'];
				$schdule['task']=$_POST['task'];
				$schdule['finish_time']=$_POST['finish_time'];
				//任务的初始化状态为为完成
				$schdule['state']=0;
				$schdule['work_by']=$_POST['work_by'];
				$table='schdule';
				$bool=$this->user->insert($table,$schdule);
				if($boole){
					echo "insert ok!";
					
				}
				else echo "insert failed!";
			}
			else{
				//$p_id=$_SESSION['p_id'];
				//$condition['p_id']=$_POST['p_id'];
				$condition['p_id']=$p_id;
				$condition['u_id']=$u_id;
				if($rstate==1){
					$data['state']=1;
					$table='schdule';
					$bool=$this->user->update($table,$data,$condition);
					if($bool){
						echo "update ok!<br>";
						
					}
					else echo "update failed!";
				}
				
				if($rstate==2){
					$data['state']=2;
					$table='schdule';
					$bool=$this->user->update($table,$data,$condition);
					//echo $this->db->last_query();
					if($bool){
						echo "update state ok!<br>";
						//确认已完成后，还需要修改项目的进度条，rate：完成task的个数/总的个数 ，的百分比
						$alltask_sql="select count('task') from schdule where p_id=".$p_id;
					//	echo "<br>";
					//	echo $alltask_sql;
						$finishtask_sql="select count('task') from schdule where p_id=".$p_id." and state=2";
					//	echo $finishtask_sql;
					//	echo "<br>";
						$alldata=$this->user->getdata($alltask_sql);
						$total=$alldata["count('task')"];
					//	echo "total:".$total;
					//	var_dump($total);
						$finishdata=$this->user->getdata($finishtask_sql);
						$finish=$finishdata["count('task')"];
						
						
						
					//	echo "finish:".$finish;
						if($total!=0){
							$rate['rate']=$finish/$total;
						}
						else $rate['rate']=0;
						
						$ratecondition['p_id']=$p_id;
						
						$bool=$this->user->update('project',$rate,$ratecondition);
						if($bool){
							echo "update rate ok<br>";
							//var_dump($rate);
							
						}
						else echo "update rate failed";
						
					}
					else echo "update state failed!";
				}	
			}
			
			
			
		}
		
		
	//报名参加
		public function registration($u_id,$p_id){
			
				$sql="select max_member,have_member from project where p_id=".$p_id;
				//echo $sql;
				$mdata=$this->user->getdata($sql);
				
				echo $mdata['max_member'];
				echo '<br>';
				echo $mdata['have_member'];
				var_dump((INT)$mdata['max_member']>(INT)$mdata['have_member']);
				$mdata['max_member']=(INT)$mdata['max_member'];
				$mdata['have_member']=(INT)$mdata['have_member'];
				if($mdata['max_member']==$mdata['have_member']){
					echo 0;
				}
				
				elseif($mdata['max_member']>$mdata['have_member']){
					//echo "<br>  iii";
					
					$mdata['have_member']=$mdata['have_member']+1;
					$condition['p_id']=$p_id;
					$bool=$this->user->update('project',$mdata,$condition);
					$signupdata['u_id']=$u_id;
					$signupdata['p_id']=$p_id;
					$signupdata['state']='passing';
					$insbool=$this->user->insert('signup',$signupdata);
					if($bool && $insbool){
						echo "1";
						//$this->load->view();
					}
					else echo "0";
				}
				else{
					echo 0;
				}
				
				
			
		}
		
		
	//项目开始和项目结束用时间戳来控制，到开始的时间后就直接将state设置为开始，结束后就直接设置为结束
		







	
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