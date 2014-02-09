<?php

class Ps_connections{


	/* fields */
	private $id_connections
	private $id_shop_group
	private $id_shop
	private $id_guest
	private $id_page
	private $ip_address
	private $date_add
	private $http_referer

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_connections($id_connections){
		$this->id_connections = $id_connections;
	}

	public function setId_shop_group($id_shop_group){
		$this->id_shop_group = $id_shop_group;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setId_guest($id_guest){
		$this->id_guest = $id_guest;
	}

	public function setId_page($id_page){
		$this->id_page = $id_page;
	}

	public function setIp_address($ip_address){
		$this->ip_address = $ip_address;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	public function setHttp_referer($http_referer){
		$this->http_referer = $http_referer;
	}

	/* getters */
	public function getId_connections($id_connections){
		 return $this->id_connections;
	}

	public function getId_shop_group($id_shop_group){
		 return $this->id_shop_group;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_guest($id_guest){
		 return $this->id_guest;
	}

	public function getId_page($id_page){
		 return $this->id_page;
	}

	public function getIp_address($ip_address){
		 return $this->ip_address;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}

	public function getHttp_referer($http_referer){
		 return $this->http_referer;
	}



}