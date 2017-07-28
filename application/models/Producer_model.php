<?php 
	class Producer_model extends MY_Model
	{
		protected $table='producer';

		public function list_menu()
		{
			return 	$this->get_list('*');
		}
	}
 ?>