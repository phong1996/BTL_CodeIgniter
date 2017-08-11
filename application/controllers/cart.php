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
			$this->load->model('BillInfo_model');
		}
		public function index()
		{
			$this->data['product_selling']=$this->BillInfo_model->product_selling();
			$this->data['cart']=$this->cart->contents();
			$this->data['content']='front/cart/index';
			return $this->load->view('front/layout/master',$this->data);
		}
		public function add()
		{ 
			$product=$this->Products_model->get_info($this->input->post('id_product'));
			$data=array(
				'id'=>$product->id,
				'qty'=>$this->input->post('quantity'),
				'price'=>$product->price,
				'avatar'=>$product->avatar,
				 'name'=>$product->name,
				);
			$this->cart->insert($data);
			return redirect('cart');
		}
		public function addOne($id)
		{ 
			$product=$this->Products_model->get_info($id);
			$data=array(
				'id'=>$product->id,
				'qty'=>1,
				'price'=>$product->price,
				'avatar'=>$product->avatar,
				 'name'=>$product->name,
				);
			$this->cart->insert($data);
			return redirect('cart');
		}
		public function update()
		{
			if($this->input->post('delete'))
			{
				$this->cart->destroy();
				return redirect('cart');
			}
			if($this->input->post('update'))
			{
				$cart=$this->cart->contents();
				foreach ($cart as $key => $value) {
					$qty=$this->input->post('qty_'.$value['rowid']);
					$data=array();
					$data['qty']=$qty;
					$data['rowid']=$key;
					$this->cart->update($data);
				}
				return redirect('cart');
			}
			if($this->input->post('pay'))
			{
				if(count($this->cart->contents()))
					return redirect('pay');
				else
				{
					return redirect('home');
				}
			}
			else
			{
				return redirect('home');
			}
		}

		public function deleteItem($id)
		{
			$cart=$this->cart->contents();
			foreach ($cart as $key => $value) {
				if($value['rowid']==$id)
				{
					$data=array();
					$data['qty']=0;
					$data['rowid']=$key;
					$this->cart->update($data);
				}
			}
			return redirect('cart');
		}
	}
 ?>