<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpanel extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
	} 

	public function index()
	{
		$this->load->view('panel/panel');
	}

	function login(){
		$this->load->view('panel/login');
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
			$user = $isUser->row();
			$msg = "Başarılı!";
		}
		else{
			$msg = "Kullanıcı adı veya şifre yanlış";
		}

		echo $msg;
	}

	function liste($taeble){
		print_r($this->db->get($table)->result());
	}
}
