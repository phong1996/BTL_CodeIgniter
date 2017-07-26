<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Products_model');
		$this->load->model('Producer_model');
		$this->load->model('Images_model');
		$this->load->model('Products_info_model');
	}

	public function index()
	{
		$data=array();
		$data['list_products'] = $this->Products_model->join();;
		$data['content']='admin/products/index';
		$this->load->view('admin/master',$data);
	}
	public function add()
	{
		$data=array();
		$data['list_producer'] = $this->Producer_model->get_list($data);
 		$data['content']='admin/products/add';
		$this->load->view('admin/master',$data);
	}

	public function addPost()
	{
		/*upload images*/
		$img = array();
		$config = array();
		$config['upload_path']   = './images/products';
		$config['allowed_types'] = 'jpg|png|gif|jpeg';
		$config['max_size'] = '10240';
		$config['max_width']  = '4000';
		$config['max_height']  = '4000';
		$file  = $_FILES['images'];
		$count = count($file['name']);//lấy tổng số file được upload
		for($i=0; $i<=$count-1; $i++) {
			$_FILES['userfile']['name']     = $file['name'][$i];  //khai báo tên của file thứ i
			$_FILES['userfile']['type']     = $file['type'][$i]; //khai báo kiểu của file thứ i
			$_FILES['userfile']['tmp_name'] = $file['tmp_name'][$i]; //khai báo đường dẫn tạm của file thứ i
			$_FILES['userfile']['error']    = $file['error'][$i]; //khai báo lỗi của file thứ i
			$_FILES['userfile']['size']     = $file['size'][$i]; //khai báo kích cỡ của file thứ i
			$this->load->library('upload', $config);
			if($this->upload->do_upload())
			{

			}
		}
		/*insert products*/
		$data['id_producer'] = $this->input->post('producer');
		$data['name'] = $this->input->post('name');
		$data['price'] = $this->input->post('price');
		$data['quantyti'] = $this->input->post('quantyti');
		$data['avatar'] = $file['name'][0];
		$data['sale_off'] = $this->input->post('sale_off');
		$data['views'] = 0;
		$data['description'] = $this->input->post('description');
		$data['status'] = 1;
		if($this->Products_model->create($data))
		{
			$last_id = $this->db->insert_id();
			/*insert list image of Products*/
			for($i = 0; $i <= $count - 1; $i++)
			{
				$img['id_products'] = $last_id;
				$img['name'] = $file['name'][$i];
				$img['status'] = 1;
				$this->Images_model->create($img);
			}
			/*insert products_info*/
			$info['id_products'] = $last_id;
			$info['display'] = $this->input->post('display');
			$info['camera'] = $this->input->post('camera');
			$info['operating'] = $this->input->post('operating');
			$info['storage'] = $this->input->post('storage');
			$info['network'] = $this->input->post('network');
			$info['design'] = $this->input->post('design');
			$info['battery_charge'] = $this->input->post('battery');
			$info['utilities'] = $this->input->post('utilities');
			$this->Products_info_model->create($info);

			$this->session->set_flashdata('flash_message', 'Thêm Thành Công');
			redirect('admin/products');
		}else{
			$this->session->set_flashdata('flash_message', 'Thêm Không Thành Công');
			redirect('admin/products');
		}
	}

	public function delete($id)
	{
		$count = $this->Images_model->get_total(['id_products' => $id]);
		$data = $this->Images_model->get_list($id);
		echo($data[2]->name);
		for($i = 0; $i <= $count-1; $i++)
		{
			unlink($_SERVER['DOCUMENT_ROOT'].'/BTL_CodeIgniter/images/products/'.$data[$i]->name);
		}
		$this->Products_model->delete_pr($id);
		return redirect('admin/products');
	}

	public function edit($id)
	{
		$data = array();
		$this->data['products']=$this->Products_model->get_info($id,'*');
		$this->data['products_info']=$this->Products_info_model->get_info_rule(['id_products' => $id]);
		$this->data['list_producer'] = $this->Producer_model->get_list($data);
		$this->data['content']='admin/products/edit';
		$this->load->view('admin/master',$this->data);
	}

	public function postEdit()
	{
		$data = [];
		$data['id_producer'] = $this->input->post('producer');
		$data['name'] = $this->input->post('name');
		$data['price'] = $this->input->post('price');
		$data['quantyti'] = $this->input->post('quantyti');
		$data['sale_off'] = $this->input->post('sale_off');
		$data['description'] = $this->input->post('description');
		$info = [];
		$info['display'] = $this->input->post('display');
		$info['camera'] = $this->input->post('camera');
		$info['operating'] = $this->input->post('operating');
		$info['storage'] = $this->input->post('storage');
		$info['network'] = $this->input->post('network');
		$info['design'] = $this->input->post('design');
		$info['battery_charge'] = $this->input->post('battery');
		$info['utilities'] = $this->input->post('utilities');

		if($this->Products_model->update($this->input->post('id'),$data))
		{
			if($this->Products_info_model->update_rule(['id_products'=>$this->input->post('id')],$info)) {

				$this->session->set_flashdata('flash_message', 'Sửa Thành Công');
				redirect('admin/products');
			}
			else{
			}
		}else{
			$this->session->set_flashdata('flash_message', 'Sửa Không Thành Công');
			redirect('admin/products');
		}
	}

}
