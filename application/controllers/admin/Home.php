<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$data=array();
		$data['content']='admin/home/home';
		$this->load->view('admin/master',$data);
	}
}