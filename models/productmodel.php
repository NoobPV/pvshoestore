<?php
    class productmodel extends DModel{

        public function __construct(){
            parent::__construct();
        }
    
        public function product($products){
            $sql = "SELECT * FROM products";
            return $this->db->select($sql);
        }
        
        public function home_product($products){
            $sql = "SELECT * FROM $products ORDER BY $products.id DESC";
            return $this->db->select($sql);
        }
        
        public function product_detail($products,$category,$cond){
            $sql = "SELECT * FROM $products,$category WHERE $cond";
			return $this->db->select($sql);
        }

        public function related_product_home($category,$products,$cond_related){
            $sql = "SELECT * FROM $category,$products WHERE $cond_related";
			return $this->db->select($sql);
        }

        public function productbyid($products,$cond){
            $sql = "SELECT * FROM products WHERE $cond";
            return $this->db->select($sql);
        }

        public function insertProduct($products,$data){
           return $this->db->insert($products,$data);
        }

        public function updateProduct($products,$data,$cond){
            return $this->db->update($products,$data,$cond);
        }

        public function deleteProduct($products,$cond){
            return $this->db->delete($products,$cond);
        }
    }   
?>