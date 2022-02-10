<?php 

	class register extends DController{
		
		public function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->form_register();
		}

		public function form_register(){
			$this->load->view('fe_admin/register');
            
        }

		public function regis(){
            $full_name = $_POST['full_name'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $users = "users";
            $data = array(
                'email' => $email,
                'password' => md5($password),
                'user_type' => 1,
                'name_customer' => $full_name,
                'phone_customer' => $phone,
                'address_customer' => $address
            );

            $registermodel = $this->load->model('registermodel');
            $result = $registermodel ->register($users,$data);

            if($result==1){
                $this->load->view('fe_admin/register_success');
            }
        }
	}


?>