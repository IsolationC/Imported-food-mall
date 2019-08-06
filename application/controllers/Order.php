<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Order extends CI_Controller{
		public function __construct(){
			parent::__construct();
		}

		public function index(){

		}

		//下单
		public function new_order(){
			$itemid=$this->uri->segment(3);
			$uid=$this->session->userdata('id');

			$this->load->model('Order_model');
			$query=$this->Order_model->new_order($uid,$itemid);
			if($query){
				echo "<script>alert('提交订单成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>"; 
			}
		}

		//确认订单 待验证
		public function confirm_order(){
			$orderid=$this->uri->segment(3);

			$this->load->model('Order_model');
			$query=$this->Order_model->confirm($orderid);
			if($query){
				echo "<script>alert('已确认该订单。');location.href='".$_SERVER["HTTP_REFERER"]."';</script>"; 
			}
		}
		
		//加载评论页面
		public function comment(){
			$orderid=$this->uri->segment(3);
			$data['id']=$orderid;
			$this->load->view('comment.php',$data);
		}

		//评论
		public function do_comment(){
			$orderid=$this->uri->segment(3);
			$comment=$this->input->post('comment');

			$this->load->model('Order_model');
			$query=$this->Order_model->save_comment($orderid,$comment);
			if($query){
				redirect('user/center');
			}
		}
		
	}
?>