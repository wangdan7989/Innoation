<?php
	class Project_implement extends MY_controller{
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
	}
?>