<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contacts extends MY_Controller {
    function __construct() {
       parent::__construct();
       $this->load->model('Contact_model');
    }
    public function index()
    {
        $input = array();
        $list = $this->Contact_model->get_list($input);
        $this->data['list_contact'] = $list;
        $this->data['content']='admin/Contacts/index';
        $this->load->view('admin/master',$this->data);
    }
    public function add()
    {
        $data=array();
        $data['content']='admin/Contacts/add';
        $this->load->view('admin/master',$data);
    }
    function delete()
    {
        if($this->Contact_model->delete($this->input->get('id')))
        {
            $this->session->set_flashdata('flash_message', 'Xóa Thành Công');
            redirect('admin/contacts/');
        }else{
            $this->session->set_flashdata('flash_message', 'Xóa Không Thành Công');
        }
    }
}
