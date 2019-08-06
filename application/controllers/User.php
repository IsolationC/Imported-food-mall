<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class User extends CI_Controller{
		//构造函数
		public function __construct(){
			parent::__construct();
		}

		public function index(){

		}

		// public function unlogin(){
		// 	$array_items = array('id','name','logged_in');

		// 	$this->session->unset_userdata($array_items);
		// 	redirect('blog/index');
		// }

		//加载login页面
		public function login(){
			//加载页面 $this->load->view('视图名'，传输数据array); 注：在ci里传的一切数值都是数组
			$this->load->view('login.php'); 
		}

		//登录
		public function do_login(){     //post里写的是name
			$account=$this->input->post('name'); 
			$pass=$this->input->post('pwd');
			$this->load->model('User_model');
			$result=$this->User_model->get_name_by_pass($account,$pass);
			if($result){
				//session设置
				$newdata = array(
				    'id'  => $result->user_id,
				    'name'=> $result->user_name,
				    'shopkeeper' => $result->shopkeeper,
				    'logged_in' => TRUE
				);
				$this->session->set_userdata($newdata);
				redirect('shop/home');
			}else{
				echo '<script language="JavaScript">;alert("用户名或密码错误");location.href="login";</script>;';
			}
		}

		//加载注册页面
		public function reg(){
			$this->load->view('regist.php');
		}

		//注册
		public function do_reg(){
			$account=$this->input->post('name');
			$pass=$this->input->post('pwd');
			$address=$this->input->post('add');
			$tel=$this->input->post('phone');

			//验证输入字段是不是合法
			$arr=array('*','/','=',' ');
			$flag=true;
			if(strlen($account)<=1||strlen($account)>8){
				$flag=false;
			}else{
				for($i=0;$i<strlen($account);$i++){
					for($j=0;$j<count($arr);$j++){
						if($account[$i]==$arr[$j]){
							$flag=false;
						}
					}
				}
			}
						if($flag==false){
				echo '<script language="JavaScript">;alert("注册用户名或密码非法");location.href="reg";</script>;';
			}else{
				$this->load->model('User_model');
				$query=$this->User_model->insert_user($account,$pass,$address,$tel);
				if($query){
					redirect('user/login');
				}
			}
		}

		//获取用户所有基本信息
		public function center(){
			$uid=$this->session->userdata('id');
			$this->load->model('User_model');
			$result = $this->User_model->show_info($uid);
			$data['info']=$result;

			$this->load->model('Order_model');
			$result2 = $this->Order_model->all_order($uid);
			$data['orders']=$result2;
			
			// var_dump($result);
			$this->load->view('center.php',$data);
		}

		//加载成为店主页面
		public function shopkeeper(){
			$this->load->view('newshop.php');
		}

		//申请成为店主
		public function become_shopkeeper(){
			$name=$this->input->post('name');
			$shopimage=$this->input->post('image');
			$itemimage=$this->input->post('item_image');
			$itemname=$this->input->post('item_name');
			$price=$this->input->post('price');
			$country=$this->input->post('country');
			$detial=$this->input->post('detial');
			$uid=$this->session->userdata('id');

			$this->load->model('Shop_model');				
			$query1=$this->Shop_model->insert_shop($uid,$name,$shopimage);
			$result=$this->Shop_model->search_shopid($uid);
			$shopid=$result->shop_id;
			$this->load->model('Item_model');				
			$query2=$this->Item_model->insert_item($shopid,$itemimage,$itemname,$price,$country,$detial);
			$this->load->model('User_model');				
			$query3=$this->User_model->change($uid);

			if($query1||$query2||$query3){
				// var_dump($shopid);
				echo '<script language="JavaScript">;alert("商品信息已提交审核，请重新登录。");location.href="login";</script>;';
			}
		}
	}

?>