<?php
session_start();
//error_reporting(0);
date_default_timezone_set('Europe/Istanbul');
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPanel extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
	} 
	function index()
	{
		if($_SESSION["admin"] == null){
			redirect('adminpanel/login');
		}
		else{
			$this->load->view('panel/panel');
		}
	}
	function login(){
		if($_SESSION["admin"] == null){
			$this->load->view('panel/login');
		}
		else{
			redirect('adminpanel');
		}
	} 
	 
	function page($folder, $file){
		$this->load->view('panel/'.$folder.'/'.$file);
	}

	function signup(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$isUser = $this->db->get('users');
		// eğer bu kullanıcı adı şifre varsa
		if($isUser->num_rows() > 0){
			$msg = "Bu kullanıcı mevcut";
		}
		else{
			$user = array('username' => $username , 'password' => $password );
			$insert = $this->db->insert('users', $user);
			if($insert)
				$msg="Kayıt başarılı!";
			else
				$msg="Kayıt esnasında hata oluştu!";
		}
		echo $msg;
	}

	function doLogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$isUser = $this->db->get('admin');
		// eğer bu kullanıcı adı şifre varsa
		if($isUser->num_rows() > 0){
			$admin = $isUser->row();
			$_SESSION['admin'] = $admin;
			redirect('adminpanel');
		}
		else{
			echo "Kullanıcı adı veya şifre yanlış!";
		}
	}

	function logout(){
		session_destroy();
		redirect('adminpanel/login');
	}

	function liste($table){
		print_r($this->db->get($table)->result());
	}

	function createAdmin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level'); 

		$admin = array('username' => $username , 'password' => $password, 'level' => $level);
		$insert = $this->db->insert('admin', $admin);
		if($insert)
			echo "ok";
		else
			echo "error";
	}
	function createOrder(){	
		$product_id = $this->input->post('product_id');
		$user_id = $this->input->post('user_id');
		$date = $this->input->post('date');
		$piece = $this->input->post('piece');

		$order = array('product_id' => $product_id , 'user_id' => $user_id, 'date' => $date, 'piece' => $piece);
		$insert = $this->db->insert('orders', $order);
		if($insert)
			echo "ok";
		else
			echo "error";
	}

	function createProduct(){
		$name = $this->input->post('name');
		$price = $this->input->post('price');
		$type = $this->input->post('type');

		$product = array('name' => $name , 'user_id' => $user_id, 'date' => $date, 'piece' => $piece);
		$insert = $this->db->insert('products', $order);
		if($insert)
			echo "ok";
		else
			echo "error";
	}

	function stok(){
		$product_id = $this->input->post('product_id');
		$piece = $this->input->post('piece'); 
	}

}
