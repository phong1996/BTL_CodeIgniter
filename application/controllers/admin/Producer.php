<?php
defined('BASEPATH') OR exit('No direct script access allowed');

<<<<<<< HEAD
class Producer extends My_Contronller {
=======
class Producer extends MY_Controller {
>>>>>>> origin/master


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
