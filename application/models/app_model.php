<?php

	class App_model extends CI_Model{
		var $tbName = 'push_apps_info';
		public function __construct(){
			parent::__construct();
		}
		public function insert_app_info($app_info){
			$data = array(
					'appName' => $app_info['app_name'],
					'packageName'=> $app_info['package_name'],
					'access_id'=> $app_info['access_id'],
					'access_key'=> $app_info['access_key'],
					'secret_key'=> $app_info['secret_key'],
					'createTime'=>date('Y-m-d H:i:s',time()),
					);
			$boolean = $this->db->insert($this->tbName,$data);
			return $boolean;
		}
		public function get_app_info($limit=null,$offset=null){
			$res = $this->db->get($this->tbName,$limit,$offset)->result_array();
			return $res;
		}
		public function del_app_info($id){
			$res = $this->db->where('id',$id)->delete($this->tbName);
			return $res;
		}
	}