<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Cart extends CI_Controller{
		public function __construct(){
			parent::__construct();
		}

		public function index(){

		}

		//加载购物车页面
		public function show_cart(){
			$uid=$this->session->userdata('id');

			$this->load->model('Cart_model');
			$result = $this->Cart_model->all_cart($uid);
			$data['cart_info']=$result;
			$this->load->view('cart.php',$data); 
		}

		//删除购物车商品
		public function deleteitem(){
			$uid=$this->session->userdata('id');
			$itemid=$this->uri->segment(3);

			$this->load->model('Cart_model');
			$result = $this->Cart_model->delete_info($uid,$itemid);
			if($result){
				redirect('cart/show_cart');
			}
		}

		//将商品加入购物车
		public function addcart(){
			$uid=$this->session->userdata('id');
			$itemid=$this->uri->segment(3);
			$this->load->model('Cart_model');
			$result = $this->Cart_model->add($uid,$itemid);
			if($result){
				redirect('cart/show_cart');
			}
		}

	}
?>