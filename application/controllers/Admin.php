<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Admin extends CI_Controller{
		public function __construct(){
			parent::__construct();
		}

		public function index(){

		}

		//加载管理员登录页面
		public function admin_log(){
			$this->load->view('adminlog.php'); 
		}

		//登录审核
		public function admin_login(){
			$account=$this->input->post('name'); 
			$pass=$this->input->post('pwd');
			$this->load->model('Admin_model');
			$result=$this->Admin_model->check_login($account,$pass);
			if($result){
				//session设置
				$newdata = array(
				    'id'  => $result->admin_id,
				    'name'=> $result->admin_name,
				    'logged_in' => TRUE
				);
				$this->session->set_userdata($newdata);
				redirect('admin/show_detial');
			}else{
				echo '<script language="JavaScript">;alert("用户名或密码错误");location.href="admin_log";</script>;';
			}
		}

		//加载管理商品页面
		public function show_detial(){
			$this->load->model('Item_model');
			$result=$this->Item_model->all_item();
			$data['items']=$result;
			$this->load->view('admain.php',$data);
		}

		//通过审核
		public function pass(){
			$item_id=$this->uri->segment(3);
			$this->load->model('Item_model');
			$result=$this->Item_model->pass($item_id);
			if($result){
				redirect('admin/show_detial');
			}
		}

		//审核不通过
		public function npass(){
			$item_id=$this->uri->segment(3);
			$this->load->model('Item_model');
			$result=$this->Item_model->nopass($item_id);
			if($result){
				redirect('admin/show_detial');
			}
		}

		//删除商品
		public function delete_item(){
			$item_id=$this->uri->segment(3);
			$this->load->model('Item_model');
			$result=$this->Item_model->delete_info($item_id);
			if($result){
				redirect('admin/show_detial');
			}
		}
	}
?>