<?php

class Ps_lang{


	/* fields */
	private $id_lang
	private $name
	private $active
	private $iso_code
	private $language_code
	private $date_format_lite
	private $date_format_full
	private $is_rtl

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setActive($active){
		$this->active = $active;
	}

	public function setIso_code($iso_code){
		$this->iso_code = $iso_code;
	}

	public function setLanguage_code($language_code){
		$this->language_code = $language_code;
	}

	public function setDate_format_lite($date_format_lite){
		$this->date_format_lite = $date_format_lite;
	}

	public function setDate_format_full($date_format_full){
		$this->date_format_full = $date_format_full;
	}

	public function setIs_rtl($is_rtl){
		$this->is_rtl = $is_rtl;
	}

	/* getters */
	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getActive($active){
		 return $this->active;
	}

	public function getIso_code($iso_code){
		 return $this->iso_code;
	}

	public function getLanguage_code($language_code){
		 return $this->language_code;
	}

	public function getDate_format_lite($date_format_lite){
		 return $this->date_format_lite;
	}

	public function getDate_format_full($date_format_full){
		 return $this->date_format_full;
	}

	public function getIs_rtl($is_rtl){
		 return $this->is_rtl;
	}



}