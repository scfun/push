<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	require APPPATH.'/libraries/XingeApp.php';
	class Main extends CI_Controller{
		
		function index($error=null){
			$this->load->model('task_model');
			$data['task_count']=$this->task_model->get_task_count();
			$data['sucess_task_count']=$this->task_model->get_success_task();
			$data['user_count'] = $this->get_index_device_count();
			$data['today_task'] = $this->get_task_today();
			$errorarr['str'] = $error;
			$this->load->view('header',$errorarr);
			$this->load->view('index',$data);
			$this->load->view('message_modal');
		}
		function get_index_device_count(){
			//获取今日数据 
			$today_date = date('Y-m-d',time());
			$device_count_today = $this->device_model->get_device_count($today_date);
				if(empty($device_count_today)){
					$this->set_device_count();
				}else{
					$data['today'] = $device_count_today[0]['total'];
				}
			//获取昨天数据
			$last_day=date("Y-m-d",strtotime("-1 days"));
			$device_count_lastday = $this->device_model->get_device_count($last_day);
				if(empty($device_count_lastday)){
					$data['lastday'] = "/";
				}else{
					$data['lastday'] = $device_count_lastday[0]['total'];
				}
			return $data;
		}
		function get_task_today(){
			$date_today = date("Y-m-d",time());
			$this->load->model('task_model');
			$res = $this->task_model->get_task_info(10,0);
			$app_info_today= array();
			$index=0;
			for($i=0;$i<count($res);$i++){
				$t = strtotime($res[$i]['createTime']);
				if(date("Y-m-d",$t)==$date_today){
					$app_info_today[$index]['task_id']= $res[$i]['task_id'];
					$app_info_today[$index]['title']= $res[$i]['title'];
					$app_info_today[$index]['returnType']= $res[$i]['returnType'];
					$index++;
				}
			}
			return $app_info_today;
		}
		function set_device_count(){
			$res = $this->app_model->get_app_info();
			$count = 0;
				for($i=0;$i<count($res);$i++){
					$params = array('accessId'=>$res[$i]['access_id'],
									'secretKey'=>$res[$i]['secret_key']);
					$push = new XingeApp($params);
					$ret = $push->QueryDeviceCount();
					if($ret['ret_code']==0){
						$count+=$ret['result']['device_num'];
					}
				}
			$boolean = $this->device_model->insert_device_count($count);
			if($boolean){
				$this->index();
			}else{
				echo "error";
			}
		}
	}