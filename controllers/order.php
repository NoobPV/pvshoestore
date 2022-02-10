<?php 

	class order extends DController{

		public function __construct(){
			Session::checkSession();
			parent::__construct();
		}
		public function index(){
			$this->list_order();
		}
		public function list_order(){
			$ordermodel = $this->load->model('ordermodel');
			$orders = "orders";
			$data['order'] = $ordermodel->list_order($orders);

			$this->load->view('fe_admin/header');
			$this->load->view('fe_admin/order/list_order',$data);
			$this->load->view('fe_admin/footer');
		}
		public function order_details($order_code){
			$ordermodel = $this->load->model('ordermodel');
			$orderdetail = "orderdetail";
			$products = "products";
			$cond = "$products.id=$orderdetail.product_id AND $orderdetail.order_code = '$order_code'";

			$cond_info = "$orderdetail.order_code = '$order_code'";

			$data['order_details'] = $ordermodel->list_order_details($products,$orderdetail,$cond);
			$data['order_info'] = $ordermodel->list_info($orderdetail,$cond_info);
			$this->load->view('fe_admin/header');
			$this->load->view('fe_admin/order/order_details',$data);
			$this->load->view('fe_admin/footer');
		}
		public function order_confirm($order_code){
			$ordermodel = $this->load->model('ordermodel');
			$orders = "orders";
			$cond = "$orders.order_code='$order_code'";
			$data = array(
				'order_status' => 1
			);
			$result = $ordermodel->order_confirm($orders,$data,$cond);

			header('Location:'.BASE_URL."/order/list_order");
		}
		
		public function delete_order($id){
			$orders = 'orders';
			$cond = "order_code = '$id'";
            $ordermodel = $this->load->model('ordermodel');
            $result = $ordermodel->delete_order($orders,$cond);
			header('Location:'.BASE_URL."/order/list_order");
		}

	
	}


?>