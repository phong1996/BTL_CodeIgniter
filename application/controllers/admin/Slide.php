<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Slide extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Slide_model');
    }

    public function index()
    {
        $input = array();
        $list = $this->Slide_model->get_list($input);
        $this->data['list_slide'] = $list;
        $this->data['content'] = 'admin/slide/index';
        $this->load->view('admin/master', $this->data);

    }

    public function add()
    {
        $data['content']='admin/slide/add';
        $this->load->view('admin/master',$data);
    }
    public function postAdd()
    {
        $data = array();
        $config['upload_path'] = './images/slide';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = time().$_FILES['image']['name'];
        $config['max_size'] = '102400';
        $config['max_width']  = '10000';
        $config['max_height']  = '10000';
        $this->load->library("upload", $config);
        if($this->upload->do_upload("image"))
        {
            $data['images'] = $config['file_name'];
        }
        else{
            pre('die');
        }

        $data['link'] = $this->input->post('link');
        if($this->input->post('status') == 'on')
        {
            $data['status'] = 1;
        }else
        {
            $data['status'] = 0;
        }

        if($this->Slide_model->create($data))
        {
            $this->session->set_flashdata('flash_message', 'Thêm Thành Công');
            redirect('admin/slide');
        }else{
            $this->session->set_flashdata('flash_message', 'Thêm Không Thành Công');
            redirect('admin/slide');
        }
    }

    public function delete($id)
    {
        unlink($_SERVER['DOCUMENT_ROOT'].'/BTL_CodeIgniter/images/slide/'.$this->Slide_model->get_info($id,'images')->images);
        if($this->Slide_model->delete($id))
        {
            return redirect('admin/slide');
        }
    }

    public function edit($id)
    {
        $this->data['slide']=$this->Slide_model->get_info($id,'*');
        $this->data['content']='admin/slide/edit';
        $this->load->view('admin/master',$this->data);
    }

    public function postEdit()
    {
            $data=[];
            $data['link'] = $this->input->post('link');
            if($this->input->post('status') == 'on'){
                $data['status'] = 1;
            }else{
                $data['status'] = 0;
            }

            if (empty($_FILES['file_edit']['name']))
            {

            }else
            {
                unlink($_SERVER['DOCUMENT_ROOT'].'/BTL_CodeIgniter/images/slide/'.$this->Slide_model->get_info($this->input->post('id'),'images')->images);

                $config['upload_path'] = './images/slide';
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

            if($this->Slide_model->update($this->input->post('id'),$data))
            {
                $this->session->set_flashdata('flash_message', 'Sửa Thành Công');
                redirect('admin/slide');
            }else{
                $this->session->set_flashdata('flash_message', 'Sửa Không Thành Công');
                redirect('admin/slide');
            }
    }

    function ajaxUpdateSlideStatus()
    {
        $result = $this->Slide_model->update($this->input->post('slideId'),  ['status' => $this->input->post('slide_status')]);

        if($result)
        {
            echo 123;
        }else{
            echo 456;
        }
    }
}