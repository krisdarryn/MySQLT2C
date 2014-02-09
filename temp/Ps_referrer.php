<?php

class Ps_referrer{


	/* fields */
	private $id_referrer
	private $name
	private $passwd
	private $http_referer_regexp
	private $http_referer_like
	private $request_uri_regexp
	private $request_uri_like
	private $http_referer_regexp_not
	private $http_referer_like_not
	private $request_uri_regexp_not
	private $request_uri_like_not
	private $base_fee
	private $percent_fee
	private $click_fee
	private $date_add

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_referrer($id_referrer){
		$this->id_referrer = $id_referrer;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setPasswd($passwd){
		$this->passwd = $passwd;
	}

	public function setHttp_referer_regexp($http_referer_regexp){
		$this->http_referer_regexp = $http_referer_regexp;
	}

	public function setHttp_referer_like($http_referer_like){
		$this->http_referer_like = $http_referer_like;
	}

	public function setRequest_uri_regexp($request_uri_regexp){
		$this->request_uri_regexp = $request_uri_regexp;
	}

	public function setRequest_uri_like($request_uri_like){
		$this->request_uri_like = $request_uri_like;
	}

	public function setHttp_referer_regexp_not($http_referer_regexp_not){
		$this->http_referer_regexp_not = $http_referer_regexp_not;
	}

	public function setHttp_referer_like_not($http_referer_like_not){
		$this->http_referer_like_not = $http_referer_like_not;
	}

	public function setRequest_uri_regexp_not($request_uri_regexp_not){
		$this->request_uri_regexp_not = $request_uri_regexp_not;
	}

	public function setRequest_uri_like_not($request_uri_like_not){
		$this->request_uri_like_not = $request_uri_like_not;
	}

	public function setBase_fee($base_fee){
		$this->base_fee = $base_fee;
	}

	public function setPercent_fee($percent_fee){
		$this->percent_fee = $percent_fee;
	}

	public function setClick_fee($click_fee){
		$this->click_fee = $click_fee;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	/* getters */
	public function getId_referrer($id_referrer){
		 return $this->id_referrer;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getPasswd($passwd){
		 return $this->passwd;
	}

	public function getHttp_referer_regexp($http_referer_regexp){
		 return $this->http_referer_regexp;
	}

	public function getHttp_referer_like($http_referer_like){
		 return $this->http_referer_like;
	}

	public function getRequest_uri_regexp($request_uri_regexp){
		 return $this->request_uri_regexp;
	}

	public function getRequest_uri_like($request_uri_like){
		 return $this->request_uri_like;
	}

	public function getHttp_referer_regexp_not($http_referer_regexp_not){
		 return $this->http_referer_regexp_not;
	}

	public function getHttp_referer_like_not($http_referer_like_not){
		 return $this->http_referer_like_not;
	}

	public function getRequest_uri_regexp_not($request_uri_regexp_not){
		 return $this->request_uri_regexp_not;
	}

	public function getRequest_uri_like_not($request_uri_like_not){
		 return $this->request_uri_like_not;
	}

	public function getBase_fee($base_fee){
		 return $this->base_fee;
	}

	public function getPercent_fee($percent_fee){
		 return $this->percent_fee;
	}

	public function getClick_fee($click_fee){
		 return $this->click_fee;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}



}