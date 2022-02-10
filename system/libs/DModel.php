<?php
    class DModel{

        protected $db = array();

        public function __construct(){
            $connect ='mysql:dbname=pvshoestore; host=localhost';
            $user = 'root';
            $pass = ''; 
            $this->db = new Database($connect,$user,$pass);
        }
    }
?>