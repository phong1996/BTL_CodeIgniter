<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
	 function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }
	public function index()
	{
		$this->load->view('admin/login/login');
	}
	 public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password = md5($password);
        if($this->Login_model->checklogin($username,$password))
        {
            $where = array('username' => $username, 'password' => $password);
            $user = $this->Login_model->get_info_rule($where);
            $this->session->set_userdata('user_login', $user);
            $this->session->set_flashdata('flash_message', 'Đăng nhập thành công');
            return redirect('admin/home');
        }
        else
        {
        	$this->session->set_flashdata('fail_login', 'Đăng nhập Thất bại');
            return redirect('admin/login');
        }
       
    }

    public function logOut()
    {
        $this->session->unset_userdata("user_login");
        redirect('admin/login');
    }
}
