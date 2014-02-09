<?php

class Ps_webservice_account_shop{


	/* fields */
	private $id_webservice_account
	private $id_shop

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_webservice_account($id_webservice_account){
		$this->id_webservice_account = $id_webservice_account;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	/* getters */
	public function getId_webservice_account($id_webservice_account){
		 return $this->id_webservice_account;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}



}