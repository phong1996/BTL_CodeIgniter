<?php
defined('BASEPATH') OR exit('No direct script access allowed');

<<<<<<< HEAD
class Home extends My_Contronller {
=======
class Home extends MY_Controller {
>>>>>>> origin/master

	
	public function index()
	{
		$data=array();
		$data['content']='admin/home/home';
		$this->load->view('admin/master',$data);
	}


}