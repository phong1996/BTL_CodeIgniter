<?php
class Userinfo extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    function index($id)
    {
        $list = $this->User_model->get_list_if([], ['id' => $id]);
        $this->data['list_user'] = $list;
        $this->data['content']='front/user/details';
        $this->load->view('front/layout/master',$this->data);
    }
}