<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Contronller extends CI_Controller {

	public $data=array();

	public function __construct()
	{
		parent::__construct();
		$controller=$this->uri->segment(1);
		switch ($controller) {
			case 'admin':
				$this->check_login();
				break;
			
			default:
				# code...
				break;
		}
	}

	private function check_login()
	{
		//$this->load->view('admin/login');
	}

}
