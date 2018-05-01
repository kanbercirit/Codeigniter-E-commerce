<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
error_reporting(0);
class Site extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('site_model');
	} 

	public function index()
	{
		$data['categories'] = $this->site_model->categories();
		$data['brand_items'] = $this->site_model->brand_items();
		$data['category_brands'] = $this->site_model->category_brands();
		$data['types'] = $this->site_model->types();
		$data['products'] = $this->site_model->select_table('product');
		$data['content'] = "En çok Satılan Ürünler";
		$this->load->view('site', $data);
		//print_r($data);
	}

	function page($page){
		$data['categories'] = $this->site_model->categories();
		$data['brand_items'] = $this->site_model->brand_items();
		$data['category_brands'] = $this->site_model->category_brands();
		$data['types'] = $this->site_model->types();
		$data['products'] = $this->site_model->select_table('product');
		$this->load->view($page, $data);
	}

	function d(){
		$this->db->query("alter table baskets add column quantity int");
	}

	function doRegister(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$name = $this->input->post('name');

		$result = $this->site_model->doRegister($username, $password, $name);
		echo $result;
	}

	function doLogin(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->site_model->doLogin($email, $password);
		// eğer bu kullanıcı adı şifre varsa
		if($user){ 
			redirect('site');
		}
		else{
			echo "Kullanıcı adı veya şifre yanlış!";
		}
	}

	function logout(){
		session_destroy();
		redirect('site');
	}

	function product_detail($id){
		$data['categories'] = $this->site_model->categories();
		$data['brand_items'] = $this->site_model->brand_items();
		$data['category_brands'] = $this->site_model->category_brands();
		$data['types'] = $this->site_model->types();
		$data['products'] = $this->site_model->select_table('product');
		$data['product'] = $this->site_model->detail('product', $id);
		$data['comments'] = $this->site_model->comments( $id);
		$this->load->view('product-detail', $data);
	}

	function add_baskets($product_id, $quantity){
		$user_id = $_SESSION['user']->id;
		$state = $this->site_model->add_baskets($user_id, $product_id, $quantity);
		if($state)
			echo "ok";
		else
			echo "error";
	}

	function search(){
		$searchkey = $this->input->post('searchkey');
		$data['categories'] = $this->site_model->categories();
		$data['brand_items'] = $this->site_model->brand_items();
		$data['category_brands'] = $this->site_model->category_brands();
		$data['types'] = $this->site_model->types();
		$data['products'] = $this->site_model->select_table('product');
		$data['products'] = $this->site_model->search($searchkey);
		$this->load->view('search', $data);
	}

	function filter($part, $name){
		$data['categories'] = $this->site_model->categories();
		$data['brand_items'] = $this->site_model->brand_items();
		$data['category_brands'] = $this->site_model->category_brands();
		$data['types'] = $this->site_model->types();
		$data['products'] = $this->site_model->filter($part, $name);
		$data['content'] = strtoupper($name);
		
		$this->load->view('search', $data);
	}

	function baskets(){
		$user_id = $_SESSION['user']->id;
		$data['baskets']=$this->site_model->baskets($user_id);
		$this->load->view('cart',$data);
	}

	function add_comment($product_id){

	}

}
