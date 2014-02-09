<?php

class Ps_webservice_permission{


	/* fields */
	private $id_webservice_permission
	private $resource
	private $method
	private $id_webservice_account

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_webservice_permission($id_webservice_permission){
		$this->id_webservice_permission = $id_webservice_permission;
	}

	public function setResource($resource){
		$this->resource = $resource;
	}

	public function setMethod($method){
		$this->method = $method;
	}

	public function setId_webservice_account($id_webservice_account){
		$this->id_webservice_account = $id_webservice_account;
	}

	/* getters */
	public function getId_webservice_permission($id_webservice_permission){
		 return $this->id_webservice_permission;
	}

	public function getResource($resource){
		 return $this->resource;
	}

	public function getMethod($method){
		 return $this->method;
	}

	public function getId_webservice_account($id_webservice_account){
		 return $this->id_webservice_account;
	}



}