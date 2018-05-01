<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
error_reporting(0);
class Site extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
	} 

	public function index()
	{
		$this->load->view('site');
	}

	function page($page){
		$this->load->view($page);
	}

	function d(){
		$this->db->query("alter table product add column sold int");
	}

	function doRegister(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$name = $this->input->post('name');

		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$isUser = $this->db->get('users');
		// eğer bu kullanıcı adı şifre varsa
		if($isUser->num_rows() > 0){
			$msg = "Bu kullanıcı mevcut";
		}
		else{
			$user = array('username' => $username , 'password' => $password, 'name' => $name );
			$insert = $this->db->insert('users', $user);
			if($insert)
				$msg="Kayıt başarılı!";
			else
				$msg="Kayıt esnasında hata oluştu!";
		}
		echo $msg;
	}

	function doLogin(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$isUser = $this->db->get('users');
		// eğer bu kullanıcı adı şifre varsa
		if($isUser->num_rows() > 0){
			$user = $isUser->row();
			$_SESSION['user'] = $user;
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


}
