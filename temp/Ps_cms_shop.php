<?php

class Ps_cms_shop{


	/* fields */
	private $id_cms
	private $id_shop

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_cms($id_cms){
		$this->id_cms = $id_cms;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	/* getters */
	public function getId_cms($id_cms){
		 return $this->id_cms;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}



}