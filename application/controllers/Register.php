<?php
/**
 * Created by PhpStorm.
 * User: LeTien
 * Date: 07/08/2017
 * Time: 9:23 CH
 */
class Register extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    function index()
    {
        $this->load->view('front/login/register');
    }

    function regis()
    {
        $data = array();
        $data['username'] = $this->input->post('username');
        $data['password'] = md5($this->input->post('password'));
        $data['fullname'] = $this->input->post('fullname');
        $data['email'] = $this->input->post('email');
        $data['address'] = $this->input->post('address');
        $data['phone'] = $this->input->post('phone');
        $data['level'] = 0;
        $data['status'] = 1;
        $data['created_at'] = date("Y/m/d");
        if($this->User_model->create($data))
        {
            $this->session->set_flashdata('flash_message', 'Thêm Thành Công');
            redirect('register/delay');
        }else{
            $this->session->set_flashdata('flash_message', 'Thêm Không Thành Công');
            redirect('register');
        }
    }

    function delay()
    {
        $this->load->view('front/login/delay');
    }
}