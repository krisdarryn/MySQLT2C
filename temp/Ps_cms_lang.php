<?php

class Ps_cms_lang{


	/* fields */
	private $id_cms
	private $id_lang
	private $meta_title
	private $meta_description
	private $meta_keywords
	private $content
	private $link_rewrite

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_cms($id_cms){
		$this->id_cms = $id_cms;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setMeta_title($meta_title){
		$this->meta_title = $meta_title;
	}

	public function setMeta_description($meta_description){
		$this->meta_description = $meta_description;
	}

	public function setMeta_keywords($meta_keywords){
		$this->meta_keywords = $meta_keywords;
	}

	public function setContent($content){
		$this->content = $content;
	}

	public function setLink_rewrite($link_rewrite){
		$this->link_rewrite = $link_rewrite;
	}

	/* getters */
	public function getId_cms($id_cms){
		 return $this->id_cms;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getMeta_title($meta_title){
		 return $this->meta_title;
	}

	public function getMeta_description($meta_description){
		 return $this->meta_description;
	}

	public function getMeta_keywords($meta_keywords){
		 return $this->meta_keywords;
	}

	public function getContent($content){
		 return $this->content;
	}

	public function getLink_rewrite($link_rewrite){
		 return $this->link_rewrite;
	}



}