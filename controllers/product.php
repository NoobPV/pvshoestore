<?php 

	class product extends DController{

		public function __construct(){
			Session::checkSession();
			$data = array();
			parent::__construct();
		}

		public function index(){
			$this->list_product();
			
		}
	
		public function add_product(){
			$this->load->view('fe_admin/header');
			
			$category = "category";
			$categorymodel = $this->load->model('categorymodel');
			$data['category'] = $categorymodel->category($category);

			$this->load->view('fe_admin/product/add_product',$data);        
            
			$this->load->view('fe_admin/footer');	
		}

		public function insert_product(){
			$name_product = $_POST['name_product'];
			$detail_product = $_POST['detail_product'];
			$price = $_POST['price'];

			$image_product = $_FILES['image_product']['name'];
			$tmp_image = $_FILES['image_product']['tmp_name'];
		
			$div = explode('.', $image_product);
			$file_ext = strtolower(end($div));
			$unique_image = $div[0].time().'.'.$file_ext;

			$path_uploads = "public/images/product/".$unique_image;

			$id_category = $_POST['id_category'];
			$products = "products";

			$data = array(
				'name_product' => $name_product,
				'image_product' => $unique_image,
				'detail_product' => $detail_product,
				'id_category' => $id_category,
				'price' => $price			
			);

			$productmodel = $this->load->model('productmodel');
			$result = $productmodel->insertProduct($products,$data);

			if($result==1){
				move_uploaded_file($tmp_image, $path_uploads);
				header('Location:'.BASE_URL."/product/list_product");
			}
		}

		public function list_product(){
			$this->load->view('fe_admin/header');

			$products = "products";
			$category = "category";

			$productmodel = $this->load->model('productmodel');
			$data['products'] = $productmodel->product($products,$category);

			$this->load->view('fe_admin/product/list_product',$data);
			$this->load->view('fe_admin/footer');	
		}
		
		public function delete_product($id){
			$products = "products";
			$cond = "id='$id'";
			$productmodel = $this->load->model('productmodel');
			$result = $productmodel->deleteProduct($products,$cond);
				header('Location:'.BASE_URL."/product/list_product");
		}
		
		public function edit_product($id){
			$products = "products";
			$category = "category";
			$cond = "id='$id'";

			$categorymodel = $this->load->model('categorymodel');
			$productmodel = $this->load->model('productmodel');

			$data['productbyid'] = $productmodel->productbyid($products,$cond);
			$data['category'] = $categorymodel->category($category);

			$this->load->view('fe_admin/header');
			$this->load->view('fe_admin/product/edit_product',$data);
			$this->load->view('fe_admin/footer');	
		}
		
		public function update_product($id){
			$products = "products";
			$cond = "id='$id'";
			$productmodel = $this->load->model('productmodel');

			$name_product = $_POST['name_product'];
			$detail_product = $_POST['detail_product'];
			$price = $_POST['price'];
			$id_category = $_POST['id_category'];

			$image_product = $_FILES['image_product']['name'];
			$tmp_image = $_FILES['image_product']['tmp_name'];
			$div = explode('.', $image_product);
			$file_ext = strtolower(end($div));
			$unique_image = $div[0].time().'.'.$file_ext;
			$path_uploads = "public/images/product/".$unique_image;
			if($image_product){
				$data['productbyid'] = $productmodel->productbyid($products,$cond);
				foreach ($data['productbyid'] as $key => $value) {
					$path_unlink = "public/images/product/";
					unlink($path_unlink.$value['image_product']);
				}
				$data = array(
				'name_product' => $name_product,
				'image_product' => $image_product,
				'detail_product' => $detail_product,
				'id_category' => $id_category,
				'price' => $price
				);
				move_uploaded_file($tmp_image, $path_uploads);
			}else{
				$data = array(
				'name_product' => $name_product,
				'detail_product' => $detail_product,
				'id_category' => $id_category,
				'price' => $price
				);
			}
			$result = $productmodel->updateProduct($products,$data,$cond);
			header('Location:'.BASE_URL."/product/list_product");
		}
	
	}


?>