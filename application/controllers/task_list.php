<?php
require APPPATH . '/libraries/XingeApp.php';

class Task_list extends CI_Controller
{
    function index($error = null)
    {
        $this->load->model('task_model');
        $data['task_info'] = $this->task_model->get_task_info(20, 0);
        $errorarr['str'] = $error;
        $this->load->view('header', $errorarr);
        $this->load->view('task_list', $data);
        $this->load->view('message_modal');
    }

    function add_task()
    {
        $res = $this->input->post();
        if (!empty($res)) {
            $ret = XingeApp::PushSafeMode($this->set_task(), $res['title'], $res['content'], $res['url']);
            // $mess = $this->set_task_mess(1, $res['title'], $res['content'],$res['url'],null);
            // $ret = $push->PushTags(0, array('debug'),'OR', $mess);
            //$ret = $push->PushSafeMode($res['title'], $res['content']);
            $res['ret_code'] = $ret['ret_code'];
            $res['push_id'] = $ret['result']['push_id'];
            $this->load->model('task_model');
            $booleam = $this->task_model->insert_task($res);
            if ($booleam) {
                $this->index(1);
            } else {
                $this->index(0);
            }

        } else {
            $this->index(0);
        }
    }

    /*
     * 创建任务message
     */
    function set_task_mess($task_type, $title, $content, $url, $setSendTime)
    {
        $mess = new Message();
        if ($task_type = 1) {
            $mess->setType(Message::TYPE_NOTIFICATION);
        } elseif ($task_type = 2) {
            $mess->setType(Message::TYPE_MESSAGE);
        }
        $style = new style(0, 1, 1, 0, 0);
        $style->setIconRes("xg_icon");
        $mess->setStyle($style);
        $mess->setTitle($title);
        $mess->setContent($content);
        $custom = array('url' => $url);
        $mess->setCustom($custom);
        $mess->setSendTime($setSendTime = null);
        return $mess;
    }

    /*
     * 创建task
     */
    function set_task()
    {
        $res = $this->app_model->get_app_info();
        $params = array('accessId' => $res[0]['access_id'],
            'secretKey' => $res[0]['secret_key']);
        return $params;
    }

    /*
     *查询任务状态
     */
    function query_status($push_id_list)
    {
        $push = $this->set_task();
        $ret = $push->QueryPushStatus(array('30737721'));
        print_r($ret);
    }

    /*
     *删除任务
     */
    function del_task($task_id)
    {
        $this->load->model('task_model');
        $res = $this->task_model->del_task($task_id);
        if ($res) {
            $this->index(3);
        } else {
            echo "Error";
        }
    }
}

?>