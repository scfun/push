<?php
	class device_model extends CI_Model{
		var $tbName = 'push_device_total';
		function __construct(){
			parent::__construct();
		}
		function insert_device_count($total){
			$data = array(
				'total'=>$total,
				'createTime'=>date('Y-m-d',time())
				);
			$boolean = $this->db->insert($this->tbName,$data);
			return $boolean;
		}
		function get_device_count($date){
			$res = $this->db->select('total,createTime')->where('createTime',$date)
					->get($this->tbName)->result_array();
			return $res;
		}
	}