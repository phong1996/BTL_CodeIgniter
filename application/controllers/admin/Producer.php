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
        if($this->input->post('status') == 'on'){
            $data['status'] = 1;
        }else{
            $data['status'] = 0;
        }

         $config['upload_path'] = './images/logo';
         $config['allowed_types'] = 'jpg|jpeg|png|gif';
         $config['file_name'] = time().$_FILES['logo']['name'];
         $config['max_size'] = '10240';
         $config['max_width']  = '5000';
         $config['max_height']  = '5000';
         $this->load->library("upload", $config);
            if($this->upload->do_upload("logo"))
            {
                $data['logo'] = $config['file_name'];
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

    public function delete($id)
    {
        unlink($this->Producer_model->get_info($id,'logo')->logo);
        if($this->Producer_model->delete($id))
        {
            return redirect('admin/producer');
        }
        else
        {

        }   
    }

    public function checkname()
    {
        if($this->input->post('id')&&($this->Producer_model->get_info($this->input->post('id'),'name')->name)==$this->input->post('name'))
        {
            echo "true";
            return;
        }
        $result = $this->Producer_model->get_total(['name' => $this->input->post('name')]);
        if($result)
        {
            echo "false";
        }else{
            echo "true";
        }
    }

    public function edit($id)
    {
        $this->data['producer']=$this->Producer_model->get_info($id,'*');
        $this->data['content']='admin/producer/edit';
        $this->load->view('admin/master',$this->data);
    }

    public function postEdit()
    {
        $data=[];
         $data['name'] = $this->input->post('name');
        if($this->input->post('status') == 'on'){
            $data['status'] = 1;
        }else{
            $data['status'] = 0;
        }

        if (empty($_FILES['logo']['name']))
        {
            $data['logo']=$this->Producer_model->get_info($this->input->post('id'),'logo')->logo;
        }
        else
        {

            unlink($this->Producer_model->get_info($this->input->post('id'),'logo')->logo);

            $config['upload_path'] = './images/logo';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = time().$_FILES['logo']['name'];
            $config['max_size'] = '10240';
            $config['max_width']  = '3500';
            $config['max_height']  = '3500';
            $this->load->library("upload", $config);
            if($this->upload->do_upload("logo"))
            {
                $data['logo'] ='images/logo/'. $config['file_name'];
            }
            else{
                pre('die');
            }
        }

        if($this->Producer_model->update($this->input->post('id'),$data))
        {
            $this->session->set_flashdata('flash_message', 'Sửa Thành Công');
            redirect('admin/producer');
        }else{
            $this->session->set_flashdata('flash_message', 'Sửa Không Thành Công');
            redirect('admin/producer');
        }




    }



}
