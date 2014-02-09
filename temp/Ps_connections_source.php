<?php

class Ps_connections_source{


	/* fields */
	private $id_connections_source
	private $id_connections
	private $http_referer
	private $request_uri
	private $keywords
	private $date_add

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_connections_source($id_connections_source){
		$this->id_connections_source = $id_connections_source;
	}

	public function setId_connections($id_connections){
		$this->id_connections = $id_connections;
	}

	public function setHttp_referer($http_referer){
		$this->http_referer = $http_referer;
	}

	public function setRequest_uri($request_uri){
		$this->request_uri = $request_uri;
	}

	public function setKeywords($keywords){
		$this->keywords = $keywords;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	/* getters */
	public function getId_connections_source($id_connections_source){
		 return $this->id_connections_source;
	}

	public function getId_connections($id_connections){
		 return $this->id_connections;
	}

	public function getHttp_referer($http_referer){
		 return $this->http_referer;
	}

	public function getRequest_uri($request_uri){
		 return $this->request_uri;
	}

	public function getKeywords($keywords){
		 return $this->keywords;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}



}