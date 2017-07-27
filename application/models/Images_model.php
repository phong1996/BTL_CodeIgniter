<?php
Class Images_model extends MY_Model
{
    protected $table='images';

    public function get_info_image($id)
    {
       $this->db->query('select * from `images` WHERE id_products = "'.$id.'"');
    }
}