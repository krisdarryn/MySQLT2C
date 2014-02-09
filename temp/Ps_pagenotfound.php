<?php

class Ps_pagenotfound{


	/* fields */
	private $id_pagenotfound
	private $id_shop
	private $id_shop_group
	private $request_uri
	private $http_referer
	private $date_add

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_pagenotfound($id_pagenotfound){
		$this->id_pagenotfound = $id_pagenotfound;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setId_shop_group($id_shop_group){
		$this->id_shop_group = $id_shop_group;
	}

	public function setRequest_uri($request_uri){
		$this->request_uri = $request_uri;
	}

	public function setHttp_referer($http_referer){
		$this->http_referer = $http_referer;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	/* getters */
	public function getId_pagenotfound($id_pagenotfound){
		 return $this->id_pagenotfound;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_shop_group($id_shop_group){
		 return $this->id_shop_group;
	}

	public function getRequest_uri($request_uri){
		 return $this->request_uri;
	}

	public function getHttp_referer($http_referer){
		 return $this->http_referer;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}



}