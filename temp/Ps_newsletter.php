<?php

class Ps_newsletter{


	/* fields */
	private $id
	private $id_shop
	private $id_shop_group
	private $email
	private $newsletter_date_add
	private $ip_registration_newsletter
	private $http_referer
	private $active

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId($id){
		$this->id = $id;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setId_shop_group($id_shop_group){
		$this->id_shop_group = $id_shop_group;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setNewsletter_date_add($newsletter_date_add){
		$this->newsletter_date_add = $newsletter_date_add;
	}

	public function setIp_registration_newsletter($ip_registration_newsletter){
		$this->ip_registration_newsletter = $ip_registration_newsletter;
	}

	public function setHttp_referer($http_referer){
		$this->http_referer = $http_referer;
	}

	public function setActive($active){
		$this->active = $active;
	}

	/* getters */
	public function getId($id){
		 return $this->id;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_shop_group($id_shop_group){
		 return $this->id_shop_group;
	}

	public function getEmail($email){
		 return $this->email;
	}

	public function getNewsletter_date_add($newsletter_date_add){
		 return $this->newsletter_date_add;
	}

	public function getIp_registration_newsletter($ip_registration_newsletter){
		 return $this->ip_registration_newsletter;
	}

	public function getHttp_referer($http_referer){
		 return $this->http_referer;
	}

	public function getActive($active){
		 return $this->active;
	}



}