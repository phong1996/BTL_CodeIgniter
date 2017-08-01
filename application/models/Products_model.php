<?php
Class Products_model extends MY_Model
{
    protected $table='products';



    public function delete_pr($id)
    {
        $query = array();
        $query['pi'] = $this->db->query('delete  from products_info where id_products =  "'.$id.'" ');
        $query['img'] = $this->db->query('delete  from images where id_products =  "'.$id.'" ');
        $query['pr'] = $this->db->query('delete  from products where id =  "'.$id.'" ');
    }

    public function get_info_image($id)
    {
       $query = $this->db->query('select * from `images` WHERE id_products = "'.$id.'"');
        return $query;
    }

    public function get_image_limit()
    {
        $query = $this->db->query('select * from `products` ORDER BY id DESC LIMIT 5');
        return $query->row();
    }
    
}