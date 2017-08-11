<?php
Class BillInfo_model extends MY_Model
{
    protected $table = 'bill_info';
    public function product_selling()
    {
    	$this->db->select('id_product, COUNT(id_product) as total');
    	$this->db->group_by('id_product'); 
    	$this->db->order_by('total', 'desc'); 
    	return $this->db->get($this->table, 5)->result();
    }
}