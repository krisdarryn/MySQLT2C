<?php

class Ps_manufacturer_lang{


	/* fields */
	private $id_manufacturer
	private $id_lang
	private $description
	private $short_description
	private $meta_title
	private $meta_keywords
	private $meta_description

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_manufacturer($id_manufacturer){
		$this->id_manufacturer = $id_manufacturer;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	public function setShort_description($short_description){
		$this->short_description = $short_description;
	}

	public function setMeta_title($meta_title){
		$this->meta_title = $meta_title;
	}

	public function setMeta_keywords($meta_keywords){
		$this->meta_keywords = $meta_keywords;
	}

	public function setMeta_description($meta_description){
		$this->meta_description = $meta_description;
	}

	/* getters */
	public function getId_manufacturer($id_manufacturer){
		 return $this->id_manufacturer;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getDescription($description){
		 return $this->description;
	}

	public function getShort_description($short_description){
		 return $this->short_description;
	}

	public function getMeta_title($meta_title){
		 return $this->meta_title;
	}

	public function getMeta_keywords($meta_keywords){
		 return $this->meta_keywords;
	}

	public function getMeta_description($meta_description){
		 return $this->meta_description;
	}



}