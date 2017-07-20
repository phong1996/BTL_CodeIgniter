<?php
class Login_model extends MY_Model
{
    protected $table = 'users';
    public function checkLogin($username,$password)
    {
    	$this->db->where(['username'=>$username,'password'=>$password,'level'=>1]);
    	$query = $this->db->get($this->table);
        if($query->num_rows() > 0)
        {
            return true;
        }
        return false;
    }
    public function get_user_info($where = array())
    {
        $this->db->where($where);
        $result = $this->db->get($this->table);
        return $result->row();
    }
}