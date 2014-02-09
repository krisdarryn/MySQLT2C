<?php

class Ps_product_lang{


	/* fields */
	private $id_product
	private $id_shop
	private $id_lang
	private $description
	private $description_short
	private $link_rewrite
	private $meta_description
	private $meta_keywords
	private $meta_title
	private $name
	private $available_now
	private $available_later

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	public function setDescription_short($description_short){
		$this->description_short = $description_short;
	}

	public function setLink_rewrite($link_rewrite){
		$this->link_rewrite = $link_rewrite;
	}

	public function setMeta_description($meta_description){
		$this->meta_description = $meta_description;
	}

	public function setMeta_keywords($meta_keywords){
		$this->meta_keywords = $meta_keywords;
	}

	public function setMeta_title($meta_title){
		$this->meta_title = $meta_title;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setAvailable_now($available_now){
		$this->available_now = $available_now;
	}

	public function setAvailable_later($available_later){
		$this->available_later = $available_later;
	}

	/* getters */
	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getDescription($description){
		 return $this->description;
	}

	public function getDescription_short($description_short){
		 return $this->description_short;
	}

	public function getLink_rewrite($link_rewrite){
		 return $this->link_rewrite;
	}

	public function getMeta_description($meta_description){
		 return $this->meta_description;
	}

	public function getMeta_keywords($meta_keywords){
		 return $this->meta_keywords;
	}

	public function getMeta_title($meta_title){
		 return $this->meta_title;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getAvailable_now($available_now){
		 return $this->available_now;
	}

	public function getAvailable_later($available_later){
		 return $this->available_later;
	}



}