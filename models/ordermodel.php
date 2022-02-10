<?php
    class ordermodel extends DModel{

        public function __construct(){
            parent::__construct();
        }

        public function insert_order($orders,$data_order){
            return $this->db->insert($orders,$data_order);
        }

        public function insert_order_details($orderdetail,$data_details){
            return $this->db->insert($orderdetail,$data_details);
        }

        public function list_order($orders){
            $sql = "SELECT * FROM $orders ORDER BY order_id DESC";
            return $this->db->select($sql);
        }

        public function list_order_details($products,$orderdetail,$cond){
			$sql = "SELECT * FROM $orderdetail,$products WHERE $cond";
			return $this->db->select($sql);
		}

		public function list_info($orderdetail,$cond_info){
			$sql = "SELECT * FROM $orderdetail WHERE $cond_info LIMIT 1";
			return $this->db->select($sql);
		}

		public function order_confirm($orders,$data,$cond){
			return $this->db->update($orders,$data,$cond);
		}

        public function delete_order($orders,$cond){
            return $this->db->delete($orders,$cond);
        }
    }
?>