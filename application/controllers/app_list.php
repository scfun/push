<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH.'/libraries/XingeApp.php';
	class App_list extends CI_Controller{
		/**
		 * 应用管理首页
		 */
		function index($error=null){
// 			$params = array('accessId'=>'2100091608',
// 					'secretKey'=>'5a42d792779f1ed162198bb429ac7c81');
// 			$this->load->library('xingeapp',$params);
// 			$res = $this->xingeapp->QueryDeviceCount();
// 			print_r($res);
			$errorarr['str'] = $error;
			$data['app_info'] = $this->get_app_list();
			$this->load->view('header',$errorarr);
			$this->load->view('app_list',$data);
			$this->load->view('message_modal');
		}
		/*
		 * 添加应用
		 */
		function add_app(){
			$app_info = $this->input->post();
			if($this->app_model->insert_app_info($app_info)){
				$this->index(2);
			}
		}
		function get_app_list(){
			$res = $this->app_model->get_app_info();
			return $res;
		}
		function del_app_info($id){
			$booleam = $this->app_model->del_app_info($id);
			if($booleam){
				$this->index(3);
			}
		}
	}
	