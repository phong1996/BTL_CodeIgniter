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
            redirect('admin/users/');
        }else{
            $this->session->set_flashdata('flash_message', 'Thêm Không Thành Công');
        }
    }


    function updatePages()
    {
        $list = $this->User_model->get_info($this->input->get('id'));
        $this->data['user_info'] = $list;
        $this->data['content']='admin/Users/edit';
        $this->load->view('admin/master',$this->data);
    }

    function update()
    {
        $data = array();
        $data['username'] = $this->input->get('id');
        $data['password'] = md5($this->input->post('password'));
        $data['fullname'] = $this->input->post('fullname');
        $data['email'] = $this->input->post('email');
        $data['address'] = $this->input->post('address');
        $data['phone'] = $this->input->post('sdt');
        $data['level'] = $this->input->post('level');
        if($this->input->post('status') == 'on'){
            $data['status'] = 1;
        }else{
            $data['status'] = 0;
        }
        $id = $this->input->post('id');
        pre($id);

        if($this->User_model->update($this->input->post('id'), $data))
        {
            echo 456;
            $this->session->set_flashdata('flash_message', 'Sửa Thành Công');
            redirect('admin/Users/');
        }else{
            echo 123;die;
            $this->session->set_flashdata('flash_message', 'Sửa Không Thành Công');
        }
    }

    function delete()
    {
        if($this->User_model->delete($this->input->get('id')))
        {
            $this->session->set_flashdata('flash_message', 'Xóa Thành Công');
            redirect('admin/users/');
        }else{
            $this->session->set_flashdata('flash_message', 'Xóa Không Thành Công');
        }
    }


    function ajaxUpdateUserStatus()
    {

        $result = $this->User_model->update($this->input->post('userId'),  ['status' => $this->input->post('user_status')]);

        if($result)
        {
            echo 123;
        }else{
            echo 456;
        }
    }

    function checkuser()
    {
        if(($this->User_model->get_info($this->input->post('id'),'username')->username)==$this->input->post('username'))
        {
            echo "true";
            return;
        }
        $result = $this->User_model->get_total(['username' => $this->input->post('username')]);
        if($result)
        {
            echo "false";
        }else{
            echo "true";
        }
    }

    function checkemail()
    {
        if(($this->User_model->get_info($this->input->post('id'),'email')->email)==$this->input->post('email'))
        {
            echo "true";
            return;
        }
        $result = $this->User_model->get_total(['email' => $this->input->post('email')]);
        if($result)
        {
            echo "false";
        }else{
            echo "true";
        }
    }

}
