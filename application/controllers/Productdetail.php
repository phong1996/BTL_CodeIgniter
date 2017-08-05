<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productdetail extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		 $this->load->model('images_model');
		 $this->load->model('products_model');
		 $this->load->model('products_info_model');
	}
	public function index()
	{
	}
	public function detail($id)
	{
		$this->data['same_product']=$this->products_model->get_same_product($id);
		$this->data['product_info']=$this->products_info_model->get_info_rule(['id_products'=>$id],"*");
		$this->data['product']=$this->products_model->get_info($id,"*");
		$this->data['Images']=$this->images_model->get_list_if(['id_products'=>$id]);
		$this->data['content']='front/layout/productdetail';
		return $this->load->view('front/layout/master',$this->data);
	}

}