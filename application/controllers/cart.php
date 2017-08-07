<?php 
	/**
	* 
	*/
	class Cart extends MY_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Products_model');
		}
		public function index()
		{
			$this->data['cart']=$this->cart->contents();
			//pre($this->data['cart']);
			$this->data['content']='front/cart/index';
			return $this->load->view('front/layout/master',$this->data);
		}
		public function add()
		{ 
			$cart= (array) $this->Products_model->get_info($this->input->post('id_product'),'*');
			$cart['count']=$this->input->post('quantity');
			$this->cart->insert($cart);
			return redirect('cart');
		}
	}
 ?>