<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Order_model extends CI_Model{
		//根据用户ID查询用户所有信息
		public function all_order($id){
			$sql = "select * from item,`order` where order.item_id = item.item_id and user_id = '$id'";
			$query = $this->db->query($sql);
			return $query->result();
		}

		//新订单
		public function new_order($uid,$itemid){
			$sql = "insert into `order`(order_id,item_id,user_id,order_condition,comment) values(null,'$itemid','$uid','0',null) ";
			$query = $this->db->query($sql);
			return $query;
		}

		//将评论信息保存
		public function save_comment($orderid,$comment){
			$sql = "update `order` set comment='$comment' where order_id='$orderid'";
			$query = $this->db->query($sql);
			return $query;
		}

		//查询我的店铺的所有订单
		public function all_shoporder($shopid){
			$sql = "select * from item,`order`,user where order.item_id = item.item_id and order.user_id = user.user_id and order.item_id in (select item_id from item where shop_id = '$shopid')";
			$query = $this->db->query($sql);
			return $query->result();
		}

		//确认订单
		public function confirm($orderid){
			$sql = "update `order` set order_condition='1' where order_id='$orderid'";
			$query = $this->db->query($sql);
			return $query;
		}

		//根据商品ID查找出该商品所有评价
		public function all_comment($itemid){
			$sql = "select * from `order`,user where item_id='$itemid' and order.user_id = user.user_id";
			$query = $this->db->query($sql);
			return $query->result();
		}
	}
?>