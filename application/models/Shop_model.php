<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Shop_model extends CI_Model{
		//插入店铺信息
		public function insert_shop($uid,$name,$shopimage){
			$sql = "insert into shop(shop_id,shop_name,shop_image,shopmanager_id) values(null,'$name','$shopimage','$uid')";
			$query = $this->db->query($sql);
			return $query;
		}

		//根据用户ID搜索店铺ID
		public function search_shopid($id){
			$sql = "select shop_id from shop where shopmanager_id = '$id'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		//查询所有店铺信息
		public function myshop_info($id){
			$sql = "select * from shop where shopmanager_id = '$id'";
			$query = $this->db->query($sql);
			return $query->result();
		}

		//根据商品ID找出shopID
		public function search_shopid_byitem($itemid){
			$sql = "select shop_id from item where item_id = '$itemid'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		//根据店铺ID找出店铺信息
		public function shop_info($id){
			$sql = "select * from shop where shop_id = '$id'";
			$query = $this->db->query($sql);
			return $query->result();
		}
	}
?>