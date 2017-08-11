<?php
Class Bill_model extends MY_Model
{
    protected $table = 'bill';
    public function getTodayOrders()
    {
    	return $this->get_total(['created_at'=>date("Y-m-d")]);
    }
    public function Revenue()
    {
    	return $this->get_sum('total_price',['created_at'=>date('Y-m-d')]);
    }
}