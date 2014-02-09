<?php

class Ps_customer_thread{


	/* fields */
	private $id_customer_thread
	private $id_shop
	private $id_lang
	private $id_contact
	private $id_customer
	private $id_order
	private $id_product
	private $status
	private $email
	private $token
	private $date_add
	private $date_upd

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_customer_thread($id_customer_thread){
		$this->id_customer_thread = $id_customer_thread;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setId_contact($id_contact){
		$this->id_contact = $id_contact;
	}

	public function setId_customer($id_customer){
		$this->id_customer = $id_customer;
	}

	public function setId_order($id_order){
		$this->id_order = $id_order;
	}

	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setStatus($status){
		$this->status = $status;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setToken($token){
		$this->token = $token;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	public function setDate_upd($date_upd){
		$this->date_upd = $date_upd;
	}

	/* getters */
	public function getId_customer_thread($id_customer_thread){
		 return $this->id_customer_thread;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getId_contact($id_contact){
		 return $this->id_contact;
	}

	public function getId_customer($id_customer){
		 return $this->id_customer;
	}

	public function getId_order($id_order){
		 return $this->id_order;
	}

	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getStatus($status){
		 return $this->status;
	}

	public function getEmail($email){
		 return $this->email;
	}

	public function getToken($token){
		 return $this->token;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}

	public function getDate_upd($date_upd){
		 return $this->date_upd;
	}



}