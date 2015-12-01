<?php
	class User_model extends CI_Model{
		public function getdata($sql){
			//$this->load->database();
			$res=$this->db->query($sql);
			$data=$res->row_array();
			return $data;
		}
		public function getalldata($sql){
			//$this->load->database();
			$res=$this->db->query($sql);
			$i=0;
			$data=array();
			foreach ($res->result_array() as $row)
			{
				$data[$i]=$row;
				$i++;
			}
			return $data;
		}
		public function insert($table,$data){
			//$bool=$this->db->insert("'".$table."'",$data);
			$bool=$this->db->insert($table,$data);
			if($bool){
				return 1;
			}
			else return 0;
		}
		public function update($table,$data,$condition){
			$bool=$this->db->update($table,$data,$condition);
			if($bool){
				return 1;
			}
			else return 0;
		}
		public function sdelete($table,$condition){
			$bool=$this->db->delete("'".$table."'",$condition);
			if($bool){
				return 1;
			}
			else return 0;
			
		}
			
	}
?>