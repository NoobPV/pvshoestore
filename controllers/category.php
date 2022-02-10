<?php
    class category extends DController{

        public function __construct(){
            Session::checkSession();
            $data = array();
            parent::__construct();
        }
        public function index(){
            $this->list_category();
        }

        public function list_category(){
            $this->load->view('fe_admin/header');

            $categorymodel = $this->load->model('categorymodel');
            $category = 'category';
            $data['category'] = $categorymodel->category($category);

            $this->load->view('fe_admin/category/list_category',$data);
            $this->load->view('fe_admin/footer');
        }

        public function add_category(){
            $this->load->view('fe_admin/header');
            $this->load->view('fe_admin/category/add_category');
            $this->load->view('fe_admin/footer');
        } 

        public function insert_category(){
            $name_category = $_POST['name_category'];
            $category = 'category';
            $data = array(
                'name_category' => $name_category
            );
            $categorymodel = $this->load->model('categorymodel');
            $result = $categorymodel->insertCategory($category,$data);
            header('Location:'.BASE_URL."/category/list_category");
        }
 
        public function delete_category($id){
            $category = 'category';
            $cond = "id = '$id'";
            $categorymodel = $this->load->model('categorymodel');
            $result = $categorymodel->deleteCategory($category,$cond);
			header('Location:'.BASE_URL."/category/list_category");

        }
        public function edit_category($id){ 
            $category = 'category';
            $cond = "id = '$id'";
            $categorymodel = $this->load->model('categorymodel');
            $data['categorybyid'] = $categorymodel->categorybyid($category,$cond);
            
            $this->load->view('fe_admin/header');
            $this->load->view('fe_admin/category/edit_category',$data);
            $this->load->view('fe_admin/footer');
        }

        public function update_category($id){

			$category = "category";
			$cond = "id='$id'";

			$name_category = $_POST['name_category'];

			$data = array(
				'name_category' => $name_category
			);
			$categorymodel = $this->load->model('categorymodel');

			$result = $categorymodel->updateCategory($category,$data,$cond);
			header('Location:'.BASE_URL."/category/list_category");
		}
    }
?>