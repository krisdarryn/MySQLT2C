<?php

class Ps_supplier_lang{


	/* fields */
	private $id_supplier
	private $id_lang
	private $description
	private $meta_title
	private $meta_keywords
	private $meta_description

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_supplier($id_supplier){
		$this->id_supplier = $id_supplier;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setDescription($description){
		$this->description = $description;
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
	public function getId_supplier($id_supplier){
		 return $this->id_supplier;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getDescription($description){
		 return $this->description;
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