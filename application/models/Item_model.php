<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Item_model extends CI_Model{
		//插入商品信息
		public function insert_item($shopid,$itemimage,$itemname,$price,$country,$detial){
			$sql = "insert into item(item_id,shop_id,item_name,item_image,introduce,country,price,state,pass,complain) values(null,'$shopid','$itemname','$itemimage','$detial','$country','$price','0','0','0')";
			$query = $this->db->query($sql);
			return $query;
		}

		//修改商品信息
		public function update_item($itemid,$itemimage,$itemname,$price,$country,$detial){
			$sql = "update item set item_image='$itemimage',item_name='$itemname',price='$price',country='$country',detial='$detial',state='0',pass='0',complain='0' where item_id='$itemid'";
			$query = $this->db->query($sql);
			return $query;
		}

		//查询我的所有商品的所有信息
		public function all_myitem($shopid){
			$sql = "select * from item where shop_id = '$shopid'";
			$query = $this->db->query($sql);
			return $query->result();
		}

		//根据商品id查询商品的所有信息
		public function aitem($itemid){
			$sql = "select * from item where item_id = '$itemid' ";
			$query = $this->db->query($sql);
			return $query->result();
		}

		//删除商品
		public function delete_item($itemid){
			$sql = "delete from item where item_id = '$itemid'";
			$query = $this->db->query($sql);
			return $query;
		}
	
		//模糊查询商品
		public function search_item($searchname){
			$sql = "select * from item where item_name like '%$searchname%'";
			$query = $this->db->query($sql);
			return $query->result();
		}

		//改变举报商品的状态
		public function change_complain($itemid){
			$sql = "update item set complain='1' where item_id='$itemid'";
			$query = $this->db->query($sql);
			return $query;
		}


		//管理员用 未审核
		//查找出所有商品的信息（管理员用，前端判断三种状态）
		public function all_item(){
			$sql = "select * from item";
			$query = $this->db->query($sql);
			return $query->result();
		}

		//修改商品状态1：审核通过，三种状态：1，1，0
		public function pass($itemid){
			$sql = "update item set state='1',pass='1' where item_id='$itemid'";
			$query = $this->db->query($sql);
			return $query;
		}

		//修改商品状态2：审核不通过，三种状态：1，0，0
		public function nopass($itemid){
			$sql = "update item set state='1' where item_id='$itemid'";
			$query = $this->db->query($sql);
			return $query;
		}

		//删除被举报商品，目前打算将被投诉商品的complain置2
		public function delete_info($itemid){
			$sql = "update item set complain='2' where item_id='$itemid'";
			$query = $this->db->query($sql);
			return $query;
		}
	}
?>