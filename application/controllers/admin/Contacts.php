<?php
defined('BASEPATH') OR exit('No direct script access allowed');

<<<<<<< HEAD
class Contacts extends My_Contronller {
=======
class Contacts extends MY_Controller {
>>>>>>> origin/master


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
