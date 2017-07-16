<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	
	public function index()
	{
		$data=array();
		$data['content']='admin/product/index';
		$this->load->view('admin/master',$data);
	}
}
