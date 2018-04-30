<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
	} 

	public function index()
	{
		print_r($this->db->query("select * from admin")->result());
	}
}
