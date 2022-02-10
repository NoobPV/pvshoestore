<?php
    class user_show extends DController{

        public function __construct(){
            $data = array();
            parent::__construct();
        }

        public function index(){
            // $this->cart();
        }
    
        public function category_product($id){
            $category = 'category';
            $products = 'products';
            
            $categorymodel = $this->load->model('categorymodel');
            $data['category'] = $categorymodel->category_home($category);
            $data['categorybyid'] = $categorymodel->categorybyid_home($category,$products,$id);

            $this->load->view('fe_user/header',$data);
            $this->load->view('category_product',$data);
            $this->load->view('fe_user/footer');
        }

		public function product_detail($id){
            $products = 'products';
            $category = 'category';
			$cond = "$products.id_category=$category.id AND $products.id='$id'";
            $categorymodel = $this->load->model('categorymodel');
            $productmodel = $this->load->model('productmodel');
			$data['category'] = $categorymodel->category_home($category);
			$data['product_detail'] = $productmodel->product_detail($products,$category,$cond);

			// foreach($data['product_detail'] as $key => $cate){
			// 	$id_cate = $cate['id'];
			// 	$this->load->name_product = $cate['name_product'];
			// 	$this->load->image_product = $cate['image_product'];
			// 	$this->load->image_product = BASE_URL.'/public/images/product/'.$cate['image_product'];
			// }

			// $cond_related = "$products.id_category=$category.id AND $category.id = '$id_cate' AND $products.id NOT IN('$id')";
			// $data['related'] = $productmodel->related_product_home($category,$products,$cond_related);

			$this->load->view('fe_user/header',$data);
			$this->load->view('product_detail',$data);
			$this->load->view('fe_user/footer');
		}
    
    }
?>
        