<?php 
	/**
	* 
	*/
	class Pay extends MY_controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Bill_model');
			$this->load->model('BillInfo_model');
		}
		public function index()
		{
			$this->data['content']='front/pay/index';
			$this->load->view('front/layout/master',$this->data);
		}
		public function order()
		{
			$cart=$this->cart->contents(); 
			$this->Bill_model->create([
				'cus_name'=>$this->input->post('name'),
				'cus_phone'=>$this->input->post('phone'),
				'cus_email'=>$this->input->post('email'),
				'cus_adress'=>$this->input->post('address'),
				'total_price'=>$this->cart->total(),
				'created_at'=>date("Y-m-d"),
				'status'=>'0',
				'payment'=>$this->input->post('payment'),
				'note'=>$this->input->post('note')
				]);
			$bill_id=$this->db->insert_id();
			if($this->input->post('payment')=='offline')
			{
				foreach ($cart as $key => $value) {
					$this->BillInfo_model->create([
						'id_bill'=>$bill_id,
						'id_product'=>$value['id'],
						'quatyti'=>$value['qty'],
					]);
				}
				$this->cart->destroy();
				return redirect('pay/success');
			}
			if($this->input->post('payment')=='baokim')
			{
				$this->cart->destroy();
			}
		}
		public function success()
		{
			$this->data['content']='front/success/index';
			$this->load->view('front/layout/master',$this->data);
		}
	}
 ?>