<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends My_Contronller {


    public function index()
    {
        $data=array();
        $data['content']='admin/Users/index';
        $this->load->view('admin/master',$data);
    }
    public function add()
    {
        $data=array();
        $data['content']='admin/Users/add';
        $this->load->view('admin/master',$data);
    }
}
