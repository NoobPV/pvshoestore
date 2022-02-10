<?php
    class cart extends DController{

        public function __construct(){
            $data = array();
			$message = array();
            parent::__construct();
        }

        public function index(){
            $this->cart();
        }

        public function cart(){
            Session::init();
            $category = 'category';
            $categorymodel = $this->load->model('categorymodel');
            $data['category'] = $categorymodel->category_home($category);

            $this->load->view('fe_user/header',$data);
            $this->load->view('cart');
            $this->load->view('fe_user/footer');
        }
        public function addtocart(){
            Session::init();
			// Session::destroy();
			if(isset($_SESSION["shopping_cart"])){
				$avaiable = 0;
				foreach($_SESSION["shopping_cart"] as $key => $value){
					if($_SESSION["shopping_cart"][$key]['product_id'] == $_POST['product_id']){
						$avaiable++;
						$_SESSION["shopping_cart"][$key]['product_quantity'] = $_SESSION["shopping_cart"][$key]['product_quantity'] + $_POST['product_quantity'];
					}
				}
				if($avaiable == 0){
					$item = array(
						'product_id' => $_POST["product_id"],
						'product_name' => $_POST["product_name"],
						'product_price' => $_POST["product_price"],
						'product_image' => $_POST["product_image"],
						'product_quantity' => $_POST["product_quantity"]
					);
					$_SESSION["shopping_cart"][] = $item;
				}
			}else{
				$item = array(
					'product_id' => $_POST["product_id"],
					'product_name' => $_POST["product_name"],
					'product_price' => $_POST["product_price"],
					'product_image' => $_POST["product_image"],
					'product_quantity' => $_POST["product_quantity"]
				);
				$_SESSION["shopping_cart"][] = $item;
			}
			header("Location:".BASE_URL.'/cart');
        }

        public function updatecart(){
			Session::init();
			if(isset($_POST['delete_cart'])){
				if(isset($_SESSION["shopping_cart"])){
				foreach($_SESSION["shopping_cart"] as $key => $values){

					if($_SESSION["shopping_cart"][$key]['product_id'] == $_POST['delete_cart']){
						unset($_SESSION["shopping_cart"][$key]);
					}	
				}
				header('Location:'.BASE_URL.'/cart');
				}else{
				header('Location:'.BASE_URL);
				}
			}else{
				foreach($_POST['qty'] as $key => $qty){
					foreach($_SESSION["shopping_cart"] as $session => $values){
						if($values['product_id'] == $key && $qty >= 1){
							$_SESSION["shopping_cart"][$session]['product_quantity'] = $qty;
						}elseif($values['product_id'] == $key && $qty <= 0){
							unset($_SESSION["shopping_cart"][$session]);
						}
					}
				}
				header('Location:'.BASE_URL.'/cart');
			}
			
		}

		public function checkout(){
			Session::init();
			$orders = "orders";
			$orderdetail = "orderdetail";
			$ordermodel = $this->load->model('ordermodel');
			$name_customer = $_POST['name_customer'];
			$address_customer = $_POST['address_customer'];
			$email_customer = $_POST['email_customer'];
			$phone_customer = $_POST['phone_customer'];
			$order_code = rand(0,9999);

			date_default_timezone_set('asia/ho_chi_minh');
			$date = date("d/m/Y");
			$hour = date("h:i:sa");
			$order_date = $date.$hour;
			$data_order = array(
				'order_status' => 0,
				'order_code' => $order_code,
				'order_date' => $date.' '.$hour
			);
			$result_order = $ordermodel->insert_order($orders,$data_order);
			if(Session::get("shopping_cart")==true){
				foreach(Session::get("shopping_cart") as $key => $value){

					$data_details = array(
						'order_code' => $order_code,
						'product_id' => $value['product_id'],
						'product_quantity' => $value['product_quantity'],
						'name_customer' => $name_customer,
						'address_customer' => $address_customer,
						'email_customer' => $email_customer,
						'phone_customer' => $phone_customer
					);
					$result_order_details = $ordermodel->insert_order_details($orderdetail,$data_details);

				}
				unset($_SESSION["shopping_cart"]);
			}
			if($result_order_details){
				$message = "Đặt hàng thành công";
				header('Location:'.BASE_URL."/cart");
			}
		}
    }
?>

