<?php

class Ps_cart{


	/* fields */
	private $id_cart
	private $id_shop_group
	private $id_shop
	private $id_carrier
	private $delivery_option
	private $id_lang
	private $id_address_delivery
	private $id_address_invoice
	private $id_currency
	private $id_customer
	private $id_guest
	private $secure_key
	private $recyclable
	private $gift
	private $gift_message
	private $mobile_theme
	private $allow_seperated_package
	private $date_add
	private $date_upd

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_cart($id_cart){
		$this->id_cart = $id_cart;
	}

	public function setId_shop_group($id_shop_group){
		$this->id_shop_group = $id_shop_group;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setId_carrier($id_carrier){
		$this->id_carrier = $id_carrier;
	}

	public function setDelivery_option($delivery_option){
		$this->delivery_option = $delivery_option;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setId_address_delivery($id_address_delivery){
		$this->id_address_delivery = $id_address_delivery;
	}

	public function setId_address_invoice($id_address_invoice){
		$this->id_address_invoice = $id_address_invoice;
	}

	public function setId_currency($id_currency){
		$this->id_currency = $id_currency;
	}

	public function setId_customer($id_customer){
		$this->id_customer = $id_customer;
	}

	public function setId_guest($id_guest){
		$this->id_guest = $id_guest;
	}

	public function setSecure_key($secure_key){
		$this->secure_key = $secure_key;
	}

	public function setRecyclable($recyclable){
		$this->recyclable = $recyclable;
	}

	public function setGift($gift){
		$this->gift = $gift;
	}

	public function setGift_message($gift_message){
		$this->gift_message = $gift_message;
	}

	public function setMobile_theme($mobile_theme){
		$this->mobile_theme = $mobile_theme;
	}

	public function setAllow_seperated_package($allow_seperated_package){
		$this->allow_seperated_package = $allow_seperated_package;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	public function setDate_upd($date_upd){
		$this->date_upd = $date_upd;
	}

	/* getters */
	public function getId_cart($id_cart){
		 return $this->id_cart;
	}

	public function getId_shop_group($id_shop_group){
		 return $this->id_shop_group;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_carrier($id_carrier){
		 return $this->id_carrier;
	}

	public function getDelivery_option($delivery_option){
		 return $this->delivery_option;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getId_address_delivery($id_address_delivery){
		 return $this->id_address_delivery;
	}

	public function getId_address_invoice($id_address_invoice){
		 return $this->id_address_invoice;
	}

	public function getId_currency($id_currency){
		 return $this->id_currency;
	}

	public function getId_customer($id_customer){
		 return $this->id_customer;
	}

	public function getId_guest($id_guest){
		 return $this->id_guest;
	}

	public function getSecure_key($secure_key){
		 return $this->secure_key;
	}

	public function getRecyclable($recyclable){
		 return $this->recyclable;
	}

	public function getGift($gift){
		 return $this->gift;
	}

	public function getGift_message($gift_message){
		 return $this->gift_message;
	}

	public function getMobile_theme($mobile_theme){
		 return $this->mobile_theme;
	}

	public function getAllow_seperated_package($allow_seperated_package){
		 return $this->allow_seperated_package;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}

	public function getDate_upd($date_upd){
		 return $this->date_upd;
	}



}