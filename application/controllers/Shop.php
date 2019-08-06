<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Shop extends CI_Controller{
		public function __construct(){
			parent::__construct();
		}

		public function index(){

		}

		//加载home页面（可能会放到别的控制器里）
		public function home(){
			$this->load->view('home.php'); 
		}

		//加载我的店铺页面
		public function myshop(){
			$this->load->model('Shop_model');
			$uid=$this->session->userdata('id');
			$result1 = $this->Shop_model->myshop_info($uid);
			$data['shop_info']=$result1;

			$this->load->model('Shop_model');				
			$result=$this->Shop_model->search_shopid($uid);
			$shopid=$result->shop_id;

			$this->load->model('Item_model');
			$result2 = $this->Item_model->all_myitem($shopid);
			$data['items']=$result2; 
			
			// var_dump($result);
			$this->load->view('myshop.php',$data);
		}

		
	}
?>