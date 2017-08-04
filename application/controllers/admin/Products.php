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
		$count = $this->Products_model->get_total();
		$data['list_products'] = $this->Products_model->join();
		/*pre($data);*/
		for($i = 0; $i <= $count-1; $i++)
		{
			$data['img'][$data['list_products'][$i]->id] = $this->Images_model->get_info_rule( ['id_products' => $data['list_products'][$i]->id]);
		}
		$data['content']='admin/products/index';
		$this->load->view('admin/master',$data);
	}

	public function selectImage()
	{
		$avatar_aj = $this->Images_model->get_list_if('*', ['id_products' => $this->input->post('avatar_id')]);
		$this->load->view('admin/products/ajax/ajaxAvatar',['avatar'=>$avatar_aj,'pr_id'=>$this->input->post('avatar_id')]);
	}

	public function choiceAvatar()
	{
		$this->Products_model->update($this->input->post('pr_id'),['avatar'=>$this->input->post('image_name')]);
		echo 'true';
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
		$list_image=$this->session->userdata('list_image');
		pre($this->session->userdata('list_image'));
		$img = array();
		$config = array();
		$config['upload_path']   = './images/products';
		$config['allowed_types'] = 'jpg|png|gif|jpeg';
		$config['max_size'] = '10240';
		$config['max_width']  = '4000';
		$config['max_height']  = '4000';
		$data['id_producer'] = $this->input->post('producer');
		$data['name'] = $this->input->post('name');
		$data['price'] = $this->input->post('price');
		$data['quantyti'] = $this->input->post('quantyti');
		$data['avatar'] = $list_image[0];
		$data['sale_off'] = $this->input->post('sale_off');
		$data['views'] = 0;
		$data['description'] = $this->input->post('description');
		$data['status'] = 1;
		if($this->Products_model->create($data))
		{
			$last_id = $this->db->insert_id();
			/*insert list image of Products*/
			foreach($list_image as $value)
			{
				$img['id_products'] = $last_id;
				$img['name'] =  $value;
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
		$this->data['list_images'] = $this->Images_model->get_list_if( $id,['id_products' => $id]);
		$this->data['count_images'] = $this->Images_model->get_list_total( $id,['id_products' => $id]);
		$this->data['content']='admin/products/edit';
		$this->load->view('admin/master',$this->data);
	}

	public function ajaxDeleteImage()
	{
		$img_name = $this->Images_model->get_info_image_name($this->input->post('imgId'));
		unlink($_SERVER['DOCUMENT_ROOT'].'/BTL_CodeIgniter/images/products/'.$img_name->name);
		$result = $this->Images_model->delete($this->input->post('imgId'));
		if($result){
			echo 1;
		}else {
			echo 2;
		}
	}

	public function postEdit()
	{
		$avatar='';
		if(!empty($_FILES['images']['name'][0])) {

			$config = array();
			$config['upload_path'] = './images/products';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';
			$config['max_size'] = '10240';
			$config['max_width'] = '4000';
			$config['max_height'] = '4000';
			$file = $_FILES['images'];

			$image=[];
			$count = count($file['name']);//lấy tổng số file được upload
			for ($i = 0; $i <= $count - 1; $i++) {
				$avatar=random_string('alnum', 16).str_replace([" "],'',$file['name'][$i]);
				$_FILES['userfile']['name']     = $avatar;  //khai báo tên của file thứ i
				$image[]=$avatar;
				$_FILES['userfile']['type'] = $file['type'][$i]; //khai báo kiểu của file thứ i
				$_FILES['userfile']['tmp_name'] = $file['tmp_name'][$i]; //khai báo đường dẫn tạm của file thứ i
				$_FILES['userfile']['error'] = $file['error'][$i]; //khai báo lỗi của file thứ i
				$_FILES['userfile']['size'] = $file['size'][$i]; //khai báo kích cỡ của file thứ i
				$this->load->library('upload', $config);
				if ($this->upload->do_upload()) {

				}
			}

			if ($count != 0) {
				foreach($image as $value)
				{
					$img['id_products'] = $this->input->post('id');
					$img['name'] =  $value;
					$img['status'] = 1;
					$this->Images_model->create($img);
				}
			}
		}

		$data = [];
		$data['id_producer'] = $this->input->post('producer');
		$data['name'] = $this->input->post('name');
		$data['price'] = $this->input->post('price');
		$data['quantyti'] = $this->input->post('quantyti');
		$data['sale_off'] = $this->input->post('sale_off');
		$data['description'] = $this->input->post('description');
		$data['avatar'] = $avatar;
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
	public function ajaxPostImage()
	{
		$config['upload_path'] = './images/products';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['file_name'] = time().$_FILES['file']['name'];
		$config['max_size'] = '10240';
		$config['max_width']  = '5000';
		$config['max_height']  = '5000';
		$this->load->library("upload", $config);
		if($this->upload->do_upload("file"))
		{
			if($this->session->userdata(list_image)) {
				$list_image=array();
				$list_image[]=$this->session->userdata('list_image');
				$this->session->set_userdata('list_image',$list_image);
			}
			else
			{
				$this->session->set_userdata('list_image',$config['file_name']);
			}
		}
		else{
			pre('die');
		}
		return true;
	}

}
