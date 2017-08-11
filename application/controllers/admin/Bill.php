<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Bill extends My_Controller{

 function __construct() {
       parent::__construct();
       $this->load->model('Bill_model');
        $this->load->model('BillInfo_model');
        $this->load->model('Products_model');
    }

    public function index()
    {
        $input=array();
        $list = $this->Bill_model->get_list($input);
        $this->data['list_bill'] = $list;
        $this->data['content'] = "admin/Bill/index";
        $this->load->view('admin/master',$this->data);

    }
    function delete()
    {
        if($this->Bill_model->delete($this->input->get('id')))
        {
            $this->session->set_flashdata('flash_message', 'Xóa Thành Công');
            redirect('admin/Bill/');
        }else{
            $this->session->set_flashdata('flash_message', 'Xóa Không Thành Công');
        }
    }
    function updateLoad()
    {
        $list = $this->Bill_model->get_info($this->input->get('id'));
        $this->data['bill_info']=$this->BillInfo_model->get_list_if('',['id_bill'=>$this->input->get('id')],'*');
        $this->data['bill']=$list;
        $this->data['content']='admin/Bill/edit';
        $this->load->view('admin/master',$this->data);
    }
    function update()
    {
        $data = array();
        $data['id_users']=$this->input->post('id_users');
        $data['cus_name']=$this->input->post('cus_name');
        $data['cus_phone']=$this->input->post('cus_phone');
        $data['cus_email']=$this->input->post('cus_email');
        $data['cus_adress']=$this->input->post('cus_adress');
        $data['total_price']=$this->input->post('total_price');
        $data['created_at']=date("Y/m/d");
        $id = $this->input->post('id');
         if($this->Bill_model->update($id, $data))
        {
            $this->session->set_flashdata('flash_message', 'Sửa Thành Công');
            redirect('admin/Bill/');
        }else{
            $this->session->set_flashdata('flash_message', 'Sửa Không Thành Công');
        }

    }
    public function ship($id)
    {
        $this->Bill_model->update($id,['status'=>1]);
       return redirect('admin/Bill');
    }



}
