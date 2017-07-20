<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contacts extends MY_Controller {
    public function index()
    {
        $data=array();
        $data['content']='admin/Contacts/index';
        $this->load->view('admin/master',$data);
    }
    public function add()
    {
        $data=array();
        $data['content']='admin/Contacts/add';
        $this->load->view('admin/master',$data);
    }
}
