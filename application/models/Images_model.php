<?php
Class Images_model extends MY_Model
{
    protected $table='images';

    public function get_info_image($id)
    {
       $this->db->query('select * from `images` WHERE id_products = "'.$id.'"');
    }

    public function get_info_image_name($id)
    {
        $query = $this->db->query('select * from `images` WHERE id = "'.$id.'"');
        return $query->row();
        /*$query = $this->db->get_where('images', array('id' => $id));return $query->row();*/
    }


}