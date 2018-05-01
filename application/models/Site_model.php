<?php

/**
* 
*/
class Site_model extends ci_model
{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	} 

	function categories(){
		return $this->db->query("select count(category_id) as total_brand, categories.name as category_name from brands inner join categories on categories.id = brands.category_id group by brands.category_id")->result();
	}

	function brand_items(){
		return $this->db->query("SELECT count(brand_id) AS total, brands.name FROM product inner join brands on brands.id = product.brand_id GROUP BY product.brand_id;")->result();
	}

	function category_brands(){
		return $this->db->query("select brands.id as brand_id,categories.name as category_name, brands.name as brand_name from brands inner join categories on brands.category_id = categories.id")->result();
	}

	function types(){
		return $this->db->query("select * from product group by type limit 10")->result();
	}

	function select_table($table){
		return $this->db->query("select * from $table")->result();
	}

	function doRegister($username, $password, $name){ 

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
		return $msg;
	}

	function doLogin($email, $password){ 
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$isUser = $this->db->get('users');
		// eğer bu kullanıcı adı şifre varsa
		if($isUser->num_rows() > 0){
			$user = $isUser->row();
			$_SESSION['user'] = $user;
			return 1;
		}
		else{
			return 0;
		}
	}

	function detail($table, $id){
		return $this->db->query("select * from $table where id = $id")->row();
	}

	function add_cart($user_id, $product_id){
		return $this->db->query("insert into baskets (product_id,user_id) values ('$product_id', '$user_id'");
	}

	function search($key){
		return $this->db->query("select * from product where name like '%$key%'")->result();
	}

	function filter($part, $name){
		return $this->db->query("select * from $part where name='$name'")->result();
	}

	function baskets($user_id){
		return $this->db->query("SELECT product.name as product_name, quantity,product.image, product.price as price FROM `baskets` inner join product on product.id = baskets.product_id inner join users on users.id=baskets.user_id")->result();
	} 

	function comments($id, $user_id){
		return $this->db->query("select * from comments inner join users on users.id=comments.user_id where product_id=$id")->result();
	}

	function add_comment($comment, $user_id, $product_id){
		return $this->db->query("insert into comments (user_id,product_id, comment) values ('$user_id','$product_id', '$comment'");
	}

}