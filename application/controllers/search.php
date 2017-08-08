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
        echo $this->input->post('pr_name');
        $input = array();
        $list_pr = $this->products_model->get_list_if([], ['id_producer' => $id]);
    }
}