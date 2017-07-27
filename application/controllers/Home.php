<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	
	public function index()
	{
		$this->data['content'] = 'front/home';
		return $this->load->view('front/master', $this->data);
	}
}
