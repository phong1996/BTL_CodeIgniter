<?php
class User_model extends MY_Model
{
    protected $table = 'users';
    public function getTodayUser()
    {
    	return $this->get_total(['created_at'=>date("Y-m-d")]);
    	
    }
}