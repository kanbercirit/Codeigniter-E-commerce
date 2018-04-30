<?php
session_start();
error_reporting(0);
date_default_timezone_set('Europe/Istanbul');
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPanel extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
	} 
	function index()
	{
		if($_SESSION["user"] == null){
			redirect('adminpanel/login');
		}
		else{
			$this->load->view('panel/panel');
		}
	}
	function login(){
		if($_SESSION["user"] == null){
			$this->load->view('panel/login');
		}
		else{
			redirect('adminpanel');
		}
	} 
	 
	function page($folder, $file){
		$this->load->view($folder.'/'.$file);
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
		$isUser = $this->db->get('users');
		// eğer bu kullanıcı adı şifre varsa
		if($isUser->num_rows() > 0){
			$data['user'] = $isUser->row();
			$_SESSION['user'] = $data['user'];
			redirect('adminpanel');
		}
		else{
			echo "Kullanıcı adı veya şifre yanlış!";
		}
	}

	function logout(){
		session_destroy();
		redirect('adminpanel');
	}

	function liste($taeble){
		print_r($this->db->get($table)->result());
	}

}
