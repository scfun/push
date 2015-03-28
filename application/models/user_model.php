<?php
	class User_model extends CI_Model{
		var $tbName = 'push_admin_user';
		function __construct(){
			parent::__construct();
		}
		function check_is_user($userName){
			$res = $this->db->select('username,password')->where('username',$userName)->get($this->tbName)->result_array();
			if(empty($res)){
				return false;
			}else{
				return $res;
			}
		}
	}