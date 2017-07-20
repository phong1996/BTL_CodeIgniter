<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }
    public function index()
    {
        $input = array();
        $list = $this->User_model->get_list($input);
        $this->data['list_user'] = $list;
        $this->data['content']='admin/Users/index';
        $this->load->view('admin/master',$this->data);
    }
    public function add()
    {
        $data['content']='admin/Users/add';
        $this->load->view('admin/master',$data);
    }
    function create()
    {
        $data = array();
        $data['username'] = $this->input->get('username');
        $data['password'] = md5($this->input->get('password'));
        $data['fullname'] = $this->input->get('fullname');
        $data['email'] = $this->input->get('email');
        $data['address'] = $this->input->get('address');
        $data['phone'] = $this->input->get('sdt');
        $data['level'] = $this->input->get('level');
        if($this->input->get('status') == 'on'){
            $data['status'] = 1;
        }else{
            $data['status'] = 0;
        }
        $data['created_at'] = date("Y/m/d");

        if($this->User_model->create($data))
        {
            $this->session->set_flashdata('flash_message', 'Thêm Thành Công');
            redirect('admin/Users/');
        }else{
            $this->session->set_flashdata('flash_message', 'Thêm Không Thành Công');
        }

    }

    function update()
    {
        $id = '1';
        $data = array();
        $data['username'] = 'admin2';
        $data['password'] = 'admin1';
        $data['fullname'] = 'tientom2';
        if($this->User_model->update($id, $data)) {
            echo 'dones';
        }else{
            echo 'fail';
        }
    }

    function delete()
    {
        if($this->User_model->delete($this->input->get('id')))
        {
            $this->session->set_flashdata('flash_message', 'Xóa Thành Công');
            redirect('admin/Users/');
        }else{
            $this->session->set_flashdata('flash_message', 'Xóa Không Thành Công');
        }
    }

    function get_info()
    {
        $id= 2;
        $info = $this->User_model->get_info($id, 'username, password');
        echo '<pre>';
        print_r($info);
    }

    function get_list()
    {
        $input = array();
        $input['like'] = array('username', 'min');
        $input['limit'] = array(2, 0);
        $list = $this->User_model->get_list($input);
        echo '<pre>';
        print_r($list);
    }

}
