<?php
class News extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('News_model');
    }

    function index(){
        $list_news = $this->News_model->get_list('*');
        $this->data['list_news'] = $list_news;
        $this->data['content'] = 'front/news/index';
        $this->load->view('front/layout/master', $this->data);
    }
    function detail($id)
    {
        $list_news = $this->News_model->get_list('*', ['id' => $id]);
        $this->data['detail'] = $list_news;
        $this->data['content'] = 'front/news/news_detail';
        $this->load->view('front/layout/master', $this->data);
    }
}