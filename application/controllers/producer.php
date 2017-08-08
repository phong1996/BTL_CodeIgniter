<?php
class Producer extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('producer_model');
        $this->load->model('images_model');
        $this->load->model('products_model');
        $this->load->model('products_info_model');
    }

    function index($id)
    {
        $list = $this->products_model->get_list_if([], ['id_producer' => $id]);
        $this->data['list_pro'] = $list;
        $this->data['content'] = 'front/layout/producer';
        $this->load->view('front/layout/master', $this->data);
    }


}