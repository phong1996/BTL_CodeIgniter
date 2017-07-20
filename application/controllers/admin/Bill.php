<?php
defined('BASEPATH') OR exit('No direct script access allowed');

<<<<<<< HEAD
class Bill extends My_Contronller {
=======
class Bill extends MY_Controller {
>>>>>>> origin/master


    public function index()
    {
        $data=array();
        $data['content']='admin/Bill/index';
        $this->load->view('admin/master',$data);
    }
    public function add()
    {
        $data=array();
        $data['content']='admin/Bill/add';
        $this->load->view('admin/master',$data);
    }
}
