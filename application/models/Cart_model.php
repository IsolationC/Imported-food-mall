<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Cart_model extends CI_Model{

		//查询该用户的所有购物车商品信息
		public function all_cart($uid){
			$sql = "select * from cart,item where cart.item_id = item.item_id and user_id = '$uid'";
			$query = $this->db->query($sql);
			return $query->result();
		}

		//删除购物车商品
		public function delete_info($uid,$itemid){
			$sql = "delete from cart where item_id = '$itemid' and user_id = '$uid' ";
			$query = $this->db->query($sql);
			return $query;
		}

		//添加购物车
		public function add($uid,$itemid){
			$sql = "insert into cart(item_id,user_id) values('$itemid','$uid') ";
			$query = $this->db->query($sql);
			return $query;
		}
	}
?>