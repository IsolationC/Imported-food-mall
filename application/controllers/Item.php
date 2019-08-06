<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Item extends CI_Controller{
		public function __construct(){
			parent::__construct();
		}

		public function index(){

		}

		//加载新增商品页面
		public function show_newitem(){
			$this->load->view('additem.php'); 
		}

		//新增商品
		public function newitem(){
			$itemimage=$this->input->post('item_image');
			$itemname=$this->input->post('item_name');
			$price=$this->input->post('price');
			$country=$this->input->post('country');
			$detial=$this->input->post('detial');
			$uid=$this->session->userdata('id');

			// $flag=true;
			// if(strlen($item_name)<=1){
			// 	$flag=false;
			// }

			// if($flag==false){
			// 	echo "<script>alert('商品名非法');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
			// }

			$this->load->model('Shop_model');				
			$result=$this->Shop_model->search_shopid($uid);
			$shopid=$result->shop_id;
			$this->load->model('Item_model');				
			$query=$this->Item_model->insert_item($shopid,$itemimage,$itemname,$price,$country,$detial);

			if($query){  //返回上个页面
				echo "<script>alert('提交成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>"; 
			}
		}

		//修改商品
		public function updateitem(){
			$itemimage=$this->input->post('item_image');
			$itemname=$this->input->post('item_name');
			$price=$this->input->post('price');
			$country=$this->input->post('country');
			$detial=$this->input->post('detial');
			$itemid=$this->uri->segment(3);

			$this->load->model('Item_model');				
			$query=$this->Item_model->update_item($itemid,$itemimage,$itemname,$price,$country,$detial);

			if($query){  //返回上个页面
				echo "<script>alert('提交成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>"; 
			}
		}

		//加载修改商品信息页
		public function changeitem(){
			$itemid=$this->uri->segment(3);

			$this->load->model('Item_model');				
			$result=$this->Item_model->aitem($itemid);
			$data['info']=$result;

			$this->load->view('changeitem.php',$data);
		}

		//删除商品
		public function deletei(){
			$itemid=$this->uri->segment(3);

			$this->load->model('Item_model');				
			$result=$this->Item_model->delete_item($itemid);
			if($result){
				redirect('shop/myshop');
			}
		}

		//显示商品审核及订单消息
		public function message(){
			$uid=$this->session->userdata('id');

			$this->load->model('Shop_model');				
			$result=$this->Shop_model->search_shopid($uid);
			$shopid=$result->shop_id;

			$this->load->model('Item_model');				
			$result2=$this->Item_model->all_myitem($shopid);
			$data['item_messages']=$result2; //商品审核消息

			$this->load->model('Order_model');				
			$result3=$this->Order_model->all_shoporder($shopid);
			$data['order_messages']=$result3; //订单消息

			$this->load->view('message.php',$data);
		}

		//加载查询商品页面
		public function search(){
			$itemname=$this->input->post('item_name');
			$this->load->model('Item_model');				
			$result=$this->Item_model->search_item($itemname);
			$data['search_result']=$result;

			$this->load->view('search.php',$data);
		}

		//加载商品详情,需要查询出评论，店铺信息
		public function item_info(){
			$itemid=$this->uri->segment(3);

			$this->load->model('Item_model');				
			$result=$this->Item_model->aitem($itemid);
			$data['item_info']=$result; //商品所有信息

			//根据商品ID找出shopID，再找出店铺信息
			$this->load->model('Shop_model');				
			$result1=$this->Shop_model->search_shopid_byitem($itemid);
			$shopid=$result1->shop_id;
			$result2 = $this->Shop_model->shop_info($shopid);
			$data['shop_info']=$result2; 

			$this->load->model('Order_model');				
			$result3=$this->Order_model->all_comment($itemid);
			$data['comments']=$result3; //该商品所有评论及评论用户的信息

			$this->load->view('detial.php',$data);
		}

		//举报商品
		public function complain(){
			$itemid=$this->uri->segment(3);
			$this->load->model('Item_model');				
			$result=$this->Item_model->change_complain($itemid);
			if($result){
				redirect('shop/home');
			}
		}
	}
?>