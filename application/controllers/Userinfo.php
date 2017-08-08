<?php
class Userinfo extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Login_model');
    }

    function index($id)
    {
        $list = $this->User_model->get_list_if([], ['id' => $id]);
        $this->data['list_user'] = $list;
        $this->data['content']='front/user/details';
        $this->load->view('front/layout/master',$this->data);
    }
    function update()
    {
        $data = array();
        $data['username'] = $this->input->post('username');
        $data['fullname'] = $this->input->post('fullname');
        $data['email'] = $this->input->post('email');
        $data['address'] = $this->input->post('address');
        $data['phone'] = $this->input->post('phone');
        $id = $this->input->post('id');
        if($this->User_model->update($id, $data))
        {
            $this->session->set_flashdata('flash_message', 'Sửa Thành Công');
            $where = array('id' => $id);
            $user = $this->Login_model->get_info_rule($where);
            $this->session->set_userdata('customer_login', $user);
            redirect('home');
        }else{
            $this->session->set_flashdata('flash_message', 'Sửa Không Thành Công');
        }
    }
}