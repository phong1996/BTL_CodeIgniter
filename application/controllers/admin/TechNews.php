<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Technews extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Technews_model');
    }

    public function index()
    {
        $data=array();
        $list = $this->Technews_model->get_list($data);
        $this->data['list_news'] = $list;
        $this->data['content']='admin/TechNew/index';
        $this->load->view('admin/master',$this->data);
    }
    public function add()
    {
        $data=array();
        $data['content']='admin/TechNew/add';
        $this->load->view('admin/master',$data);
    }

    public function postAdd()
    {
        $data = array();
        $data['title'] = $this->input->post('title');
        $data['intro'] = $this->input->post('intro');
        $data['content'] = $this->input->post('content');
        $config['upload_path'] = './images/news';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = time().$_FILES['images']['name'];
        $config['max_size'] = '10240';
        $config['max_width']  = '4000';
        $config['max_height']  = '4000';
        $this->load->library("upload", $config);
        if($this->upload->do_upload("images"))
        {
            $data['images'] = $config['file_name'];
        }
        else{
            pre('die');
        }


        if($this->input->post('status') == 'on')
        {
            $data['status'] = 1;
        }else
        {
            $data['status'] = 0;
        }



        if($this->Technews_model->create($data))
        {
            $this->session->set_flashdata('flash_message', 'Thêm Thành Công');
            redirect('admin/Technews');
        }else{
            $this->session->set_flashdata('flash_message', 'Thêm Không Thành Công');
            redirect('admin/Technews');
        }
    }

    public function delete($id)
    {
        unlink($_SERVER['DOCUMENT_ROOT'].'/BTL_CodeIgniter/images/news/'.$this->Technews_model->get_info($id,'images')->images);
        if($this->Technews_model->delete($id))
        {
            return redirect('admin/Technews');
        }
    }

    public function edit($id)
    {
        $this->data['Technews'] = $this->Technews_model->get_info($id,'*');
        $this->data['content']='admin/technew/edit';
        $this->load->view('admin/master',$this->data);
    }

    public function postEdit()
    {
        $data=[];
        $data['title'] = $this->input->post('title');
        $data['intro'] = $this->input->post('intro');
        $data['content'] = $this->input->post('content');
        if (empty($_FILES['file_edit']['name']))
        {

        }else
        {

            unlink($_SERVER['DOCUMENT_ROOT'].'/BTL_CodeIgniter/images/news/'.$this->Technews_model->get_info($this->input->post('id'),'images')->images);
            $config['upload_path'] = './images/news';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = time().$_FILES['file_edit']['name'];
            $config['max_size'] = '10240';
            $config['max_width']  = '3000';
            $config['max_height']  = '3000';
            $this->load->library("upload", $config);
            if($this->upload->do_upload("file_edit"))
            {
                $data['images'] = $config['file_name'];
            }
            else{

                pre('die');
            }
        }


        if($this->input->post('status') == 'on'){
            $data['status'] = 1;
        }else{
            $data['status'] = 0;
        }
        if($this->Technews_model->update($this->input->post('id'),$data))
        {
            $this->session->set_flashdata('flash_message', 'Sửa Thành Công');
            redirect('admin/Technews');
        }else{
            $this->session->set_flashdata('flash_message', 'Sửa Không Thành Công');
            redirect('admin/Technews');
        }
    }

    function ajaxUpdateNewsStatus()
    {
        $result = $this->Technews_model->update($this->input->post('newsId'),  ['status' => $this->input->post('news_status')]);

        if($result)
        {
            echo 123;
        }else{
            echo 456;
        }
    }
}
