<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producer extends CI_Controller {


    public function index()
    {
        $data=array();
        $data['content']='admin/producer/index';
        $this->load->view('admin/master',$data);
    }
    public function add()
    {
        $data=array();
        $data['content']='admin/producer/add';
        $this->load->view('admin/master',$data);
    }
}