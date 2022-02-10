<?php
    class registermodel extends Dmodel{
        public function __construct(){
            parent::__construct();
        }

        public function register($users,$data){
            return $this->db->insert($users,$data);
        }
    }
?>