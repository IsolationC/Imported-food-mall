<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Admin_model extends CI_Model{
		//审核管理员登录
		public function check_login($name,$pass){
			$arr = array(
				'admin_name'=>$name,
				'admin_password'=>$pass,
			);
			$query = $this->db->get_where('admin',$arr);
			return $query->row();
		}
	}
?>