<?php
	class Show_project extends MY_controller{

		
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
			//项目完全结束
			if(strcasecmp($state, "finish")==0){
				$this->show_project($p_id,$data,"proj-finish");

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
					$this->show_project($p_id,$data,'proj-mgr');	
					
				}
			
		}

	}
?>