<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends MY_Controller {
	public function index()
	{
		$this->data['content']='admin/home/home';
		return $this->load->view('admin/master',$this->data);
	}
}