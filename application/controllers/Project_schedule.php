<?php 
	class Project_schedule extends MY_controller{
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
		
		
	}
?>