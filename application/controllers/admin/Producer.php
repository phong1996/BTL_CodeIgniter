<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Producer extends MY_Controller {
    function __construct()
    {
       parent::__construct();
       $this->load->model('Producer_model');
    }
    public function index()
    {
        $list=$this->Producer_model->get_list();
        $this->data['list_producer']=$list;
        $this->data['content']='admin/producer/index';
        $this->load->view('admin/master',$this->data);
    }
    public function add()
    {
        $data=array();
        $data['content']='admin/producer/add';
        $this->load->view('admin/master',$data);
    }
    public function postAdd()
    {
        $data = array();
        $data['name'] = $this->input->post('name');
        if($this->input->get('status') == 'on'){
            $data['status'] = 1;
        }else{
            $data['status'] = 0;
        }

         $config['upload_path'] = public_url().'/images';
         $config['allowed_types'] = 'jpg|jpeg|png|gif';
         $config['file_name'] = $_FILES['logo']['name'];
         $config['max_size'] = '2000';
         $config['max_width']  = '1224';
         $config['max_height']  = '768';
         $this->load->library("upload", $config);
            if($this->upload->do_upload("logo"))
            {

                
                $data['logo'] ='';
            }
            else{
                pre('die');
            }
            
        if($this->Producer_model->create($data))
        {
            $this->session->set_flashdata('flash_message', 'Thêm Thành Công');
            redirect('admin/producer');
        }else{
            $this->session->set_flashdata('flash_message', 'Thêm Không Thành Công');
            redirect('admin/producer');
        }
    }
}
