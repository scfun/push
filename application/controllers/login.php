<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    function Index($error = null)
    {
        $data['error'] = $error;
        $this->load->view('login', $data);
    }

    function check_user()
    {
        $post = $this->input->post();
        $user_res = $this->user_model->check_is_user($post['username']);
        //判定是否有该用户
        if ($user_res) {
            if ($user_res[0]['password'] == md5($post['password'])) {
                header("Location:" . base_url("index.php/main"));
            } else {
                $this->index(1);
            }
        } else {
            $this->index(0);
        }
    }
}