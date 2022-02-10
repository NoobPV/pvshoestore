<?php
    class categorymodel extends DModel{

        public function __construct(){
            parent::__construct();
        }
    
        public function category($category){
            $sql = "SELECT * FROM category";
            return $this->db->select($sql);
        }

        public function category_home($category){
            $sql = "SELECT * FROM category";
            return $this->db->select($sql);
        }

        public function categorybyid_home($category,$products,$id){
			$sql = "SELECT * FROM $category,$products WHERE $category.id=$products.id_category AND $products.id_category='$id' ORDER BY $products.id DESC";
			return $this->db->select($sql);
		}

        public function categorybyid($category,$cond){
            $sql = "SELECT * FROM category WHERE $cond";
            return $this->db->select($sql);
        }

        public function insertCategory($category,$data){
           return $this->db->insert($category,$data);
        }

        public function updateCategory($category,$data,$cond){
            return $this->db->update($category,$data,$cond);
        }

        public function deleteCategory($category,$cond){
            return $this->db->delete($category,$cond);
        }
    }   
?>