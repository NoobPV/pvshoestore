<?php
    class index extends DController{

        public function __construct(){
            $data = array();
            parent::__construct();
        }
        public function index(){
            $this->homepage();
        }

        public function homepage(){
            $category = 'category';
            $products = 'products';
            $categorymodel = $this->load->model('categorymodel');
            $productmodel = $this->load->model('productmodel');
			$data['category'] = $categorymodel->category_home($category);
			$data['home_product'] = $productmodel->home_product($products);
            $this->load->view('fe_user/header',$data);
            $this->load->view('home',$data);
            $this->load->view('fe_user/footer');
        }

        public function pagenotfound(){
            $this->load->view('404');
        }

    }
?>