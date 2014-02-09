<?php

class Ps_meta_lang{


	/* fields */
	private $id_meta
	private $id_shop
	private $id_lang
	private $title
	private $description
	private $keywords
	private $url_rewrite

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_meta($id_meta){
		$this->id_meta = $id_meta;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setTitle($title){
		$this->title = $title;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	public function setKeywords($keywords){
		$this->keywords = $keywords;
	}

	public function setUrl_rewrite($url_rewrite){
		$this->url_rewrite = $url_rewrite;
	}

	/* getters */
	public function getId_meta($id_meta){
		 return $this->id_meta;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getTitle($title){
		 return $this->title;
	}

	public function getDescription($description){
		 return $this->description;
	}

	public function getKeywords($keywords){
		 return $this->keywords;
	}

	public function getUrl_rewrite($url_rewrite){
		 return $this->url_rewrite;
	}



}