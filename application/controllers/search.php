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
        pre($list_pr);
    }
}