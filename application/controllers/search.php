<?php
class Search extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('producer_model');
        $this->load->model('images_model');
        $this->load->model('products_model');
        $this->load->model('products_info_model');
    }

    function index(){
        $string = $this->input->post('pr_name');
        $list_pr = $this->products_model->search_pr($string);
        $this->data['content']='front/search/index';
        $this->data['list_pro']=$list_pr;
        $this->load->view('front/layout/master',$this->data);
    }
}