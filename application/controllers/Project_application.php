<?php
	class Project_application extends MY_controller{
		//申请项目待审核
		
		public function add_application(){
			$data=array();
			$this->show($data,'won-addproj');
		}

		//项目申报页面
		public function project_post(){
			
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
				echo "<script> alert('项目申请成功!');window.location.href='".site_url()."/Project_application/add_application/".$username."';</script>";
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
		
	}
?>