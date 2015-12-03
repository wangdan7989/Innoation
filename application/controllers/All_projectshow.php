<?php
	class All_projectshow extends MY_controller{
		//历届项目概览
		public function show_allproj(){
			$data=array();
			$allsql="select * from project where state='finish'";
			$allprojdata=$this->user->getalldata($allsql);
			$data['allprojdata']=$allprojdata;
			$this->show($data,"won-showproj");
		}
	}
?>