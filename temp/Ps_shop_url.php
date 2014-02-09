<?php

class Ps_shop_url{


	/* fields */
	private $id_shop_url
	private $id_shop
	private $domain
	private $domain_ssl
	private $physical_uri
	private $virtual_uri
	private $main
	private $active

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_shop_url($id_shop_url){
		$this->id_shop_url = $id_shop_url;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setDomain($domain){
		$this->domain = $domain;
	}

	public function setDomain_ssl($domain_ssl){
		$this->domain_ssl = $domain_ssl;
	}

	public function setPhysical_uri($physical_uri){
		$this->physical_uri = $physical_uri;
	}

	public function setVirtual_uri($virtual_uri){
		$this->virtual_uri = $virtual_uri;
	}

	public function setMain($main){
		$this->main = $main;
	}

	public function setActive($active){
		$this->active = $active;
	}

	/* getters */
	public function getId_shop_url($id_shop_url){
		 return $this->id_shop_url;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getDomain($domain){
		 return $this->domain;
	}

	public function getDomain_ssl($domain_ssl){
		 return $this->domain_ssl;
	}

	public function getPhysical_uri($physical_uri){
		 return $this->physical_uri;
	}

	public function getVirtual_uri($virtual_uri){
		 return $this->virtual_uri;
	}

	public function getMain($main){
		 return $this->main;
	}

	public function getActive($active){
		 return $this->active;
	}



}