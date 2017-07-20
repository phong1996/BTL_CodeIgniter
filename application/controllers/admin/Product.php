<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {

	
	public function index()
	{
		$data=array();
		$data['content']='admin/product/index';
		$this->load->view('admin/master',$data);
	}
	public function add()
	{
		$data=array();
		$data['content']='admin/product/add';
		$this->load->view('admin/master',$data);
	}
}
