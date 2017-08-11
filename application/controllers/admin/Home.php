<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Bill_model');
		$this->load->model('User_model');
		$this->load->model('Products_model');
	}
	public function index()
	{
		$this->data['today_orders']=$this->Bill_model->getTodayOrders();
		$this->data['today_user']=$this->User_model->getTodayUser();
		$this->data['total_product']=$this->Products_model->getTotalProduct();
		$this->data['revenue']=$this->Bill_model->Revenue();
		$this->data['content']='admin/home/home';
		return $this->load->view('admin/master',$this->data);
	}
}