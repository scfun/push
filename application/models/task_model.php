<?php
	class Task_model extends CI_Model{
		var $tbName = 'push_task';
		function __construct(){
			parent::__construct();
		}
		function insert_task($task_info){
			$data = array(
					    'task_id'=>$task_info['push_id'],
						'title'=>$task_info['title'],
						'content'=>$task_info['content'].",".$task_info['url'],
						'returnType'=>$task_info['ret_code'],
						'createTime'=>date('Y-m-d H:i:s',time()),
						);
			$booleam = $this->db->insert($this->tbName,$data);
			return $booleam;
		}
		public function get_task_info($limit=null,$offset=null){
			$res = $this->db->order_by('createTime','DESC')->get($this->tbName,$limit,$offset)->result_array();
			return $res;
		}
		public function get_task_count(){
			$res=$this->db->select('count(*)')->from($this->tbName)->get()->result_array();
			return $res;
		}
		public function get_success_task(){
			$res=$this->db->select('count(*)')->from($this->tbName)->where('returnType',0)->get()->result_array();
			return $res;
		}
		public function del_task($task_id){
			$res=$res=$this->db->where('task_id',$task_id)->delete($this->tbName);
			return $res;
		}
	}