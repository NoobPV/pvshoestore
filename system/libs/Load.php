<?php
    class Load{
        
        public function view($fileName, $data = false){
            if($data == true){
                extract($data);
            }
            include 'views/'.$fileName.'.php';
        }

        public function model($fileName){
            include 'models/'.$fileName.'.php';
            return new $fileName();
        }

    }
?>