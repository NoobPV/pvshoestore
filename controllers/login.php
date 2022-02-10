<?php 

	class login extends DController{
		
		public function __construct(){
			$data = array();
			$message = array();
			parent::__construct();
		}
		public function index(){
			$this->login();
		}
		public function login(){
			Session::init();
			if(Session::get("login")==true){
				header("Location:".BASE_URL."/login/dashboard");
			}
			$this->load->view('fe_admin/login'); 
			

		}
		public function dashboard(){
			Session::checkSession();
			$this->load->view('fe_admin/header');
			$this->load->view('fe_admin/dashboard');
			$this->load->view('fe_admin/footer');
		}
		public function authentication_login(){
			$email = $_POST['email'];
			$password = md5($_POST['password']);
			
			$users = 'users';
			$loginmodel = $this->load->model('loginmodel');

			$count = $loginmodel->login($users,$email,$password);

			if($count==0){
				$message['msg'] = "Email hoặc mật khẩu sai,xin kiểm tra lại";
				header("Location:".BASE_URL."/login");
			}else{
				$result = $loginmodel->getLogin($users,$email,$password);
				Session::init();
				Session::set('login',true);
				Session::set('email',$result[0]['email']);
				Session::set('user_type',$result[0]['user_type']);
				header("Location:".BASE_URL."/login/dashboard");
			}

		}
		public function logout(){
			Session::init();
			Session::destroy(); 
			header("Location:".BASE_URL."/login");
		}
		
		

	}


?>