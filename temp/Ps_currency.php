<?php

class Ps_currency{


	/* fields */
	private $id_currency
	private $name
	private $iso_code
	private $iso_code_num
	private $sign
	private $blank
	private $format
	private $decimals
	private $conversion_rate
	private $deleted
	private $active

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_currency($id_currency){
		$this->id_currency = $id_currency;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setIso_code($iso_code){
		$this->iso_code = $iso_code;
	}

	public function setIso_code_num($iso_code_num){
		$this->iso_code_num = $iso_code_num;
	}

	public function setSign($sign){
		$this->sign = $sign;
	}

	public function setBlank($blank){
		$this->blank = $blank;
	}

	public function setFormat($format){
		$this->format = $format;
	}

	public function setDecimals($decimals){
		$this->decimals = $decimals;
	}

	public function setConversion_rate($conversion_rate){
		$this->conversion_rate = $conversion_rate;
	}

	public function setDeleted($deleted){
		$this->deleted = $deleted;
	}

	public function setActive($active){
		$this->active = $active;
	}

	/* getters */
	public function getId_currency($id_currency){
		 return $this->id_currency;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getIso_code($iso_code){
		 return $this->iso_code;
	}

	public function getIso_code_num($iso_code_num){
		 return $this->iso_code_num;
	}

	public function getSign($sign){
		 return $this->sign;
	}

	public function getBlank($blank){
		 return $this->blank;
	}

	public function getFormat($format){
		 return $this->format;
	}

	public function getDecimals($decimals){
		 return $this->decimals;
	}

	public function getConversion_rate($conversion_rate){
		 return $this->conversion_rate;
	}

	public function getDeleted($deleted){
		 return $this->deleted;
	}

	public function getActive($active){
		 return $this->active;
	}



}