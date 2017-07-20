<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends My_Contronller {

	public function index()
	{
		$this->load->view('admin/login');
	}

}
