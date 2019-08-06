<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class User_model extends CI_Model{
		
		//向用户表插入新用户信息
		public function insert_user($name, $pass,$address,$tel){

			$sql = "insert into user(user_id,user_name,user_password,image,address,tel,shopkeeper) values(null,'$name','$pass','http://tvax1.sinaimg.cn/crop.0.0.750.750.1024/eac9d4d5ly8fzu0fxce9lj20ku0ku0ss.jpg','$address','$tel','0')";
			$query = $this->db->query($sql);
			return $query;
		}

		//审核登录信息
		public function get_name_by_pass($name,$pass){
			$arr = array(				//SQL查找的另一种写法
				'user_name'=>$name,
				'user_password'=>$pass,
			);
			$query = $this->db->get_where('user',$arr);
			return $query->row();
		}

		//根据ID查询用户所有信息
		public function show_info($id){
			$sql = "select * from user where user_id = '$id'";
			$query = $this->db->query($sql);
			return $query->result();
		}

		//修改成为店主用户的'是否为店主'状态
		public function change($uid){
			$sql = "update `user` set shopkeeper='1' where user_id='$uid'";
			$query = $this->db->query($sql);
			return $query;
		}
	}
?>