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
		$this->load->view('front/login/login');
	}
	 public function login()
    {
        $username = $this->input->post('username');
        $passwords = $this->input->post('password');

        $password = md5($passwords);

        if($this->Login_model->checkLoginCustomer($username,$password))
        {

           /* if($this->input->post('remember') != '')
            {
                $this->load->helper('cookie');
                $cookie['user'] = array(
                    'name'   => 'user',
                    'value'  => $username,
                    'expire' => 60 * 60 * 24,
                    'domain' => 'localhost',
                    'path'   => '/',
                );
                $cookie['pass'] = array(
                    'name'   => 'pass',
                    'value'  => $passwords,
                    'expire' => 60 * 60 * 24,
                    'domain' => 'localhost',
                    'path'   => '/',
                );
                $this->input->set_cookie($cookie['user']);
                $this->input->set_cookie($cookie['pass']);
            }*/


            $where = array('username' => $username, 'password' => $password);
            $user = $this->Login_model->get_info_rule($where);
            $this->session->set_userdata('customer_login', $user);
            $this->session->set_flashdata('flash_message', 'Đăng nhập thành công');
            return redirect('home');
        }
        else
        {
        	$this->session->set_flashdata('fail_login', 'Đăng nhập Thất bại');
            return redirect('login');
        }
       
    }

    public function logOut()
    {
        $this->session->unset_userdata("user_login");
        redirect('login');
    }
}
