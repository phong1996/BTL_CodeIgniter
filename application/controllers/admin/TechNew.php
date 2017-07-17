<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TechNew extends CI_Controller {


    public function index()
    {
        $data=array();
        $data['content']='admin/TechNew/index';
        $this->load->view('admin/master',$data);
    }
    public function add()
    {
        $data=array();
        $data['content']='admin/TechNew/add';
        $this->load->view('admin/master',$data);
    }
}
