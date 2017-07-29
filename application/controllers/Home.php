<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Slide_model');
		$this->load->model('Products_model');

	}

	public function index()
	{
		$input = array();
		$list_slide = $this->Slide_model->get_list($input);
		$this->data['list_slide'] = $list_slide;
		$list_last_produts = $this->Products_model->get_image_limit();
		$this->data['list_last_products'] = $list_last_produts;
		pre($this->data['list_last_products']);
		$this->data['content'] = 'front/layout/home';
		$this->data['menu'] = 'front/layout/menu';
		$this->data['slide'] = 'front/layout/slide';
		return $this->load->view('front/layout/master', $this->data);
	}

}
