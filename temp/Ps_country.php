<?php

class Ps_country{


	/* fields */
	private $id_country
	private $id_zone
	private $id_currency
	private $iso_code
	private $call_prefix
	private $active
	private $contains_states
	private $need_identification_number
	private $need_zip_code
	private $zip_code_format
	private $display_tax_label

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_country($id_country){
		$this->id_country = $id_country;
	}

	public function setId_zone($id_zone){
		$this->id_zone = $id_zone;
	}

	public function setId_currency($id_currency){
		$this->id_currency = $id_currency;
	}

	public function setIso_code($iso_code){
		$this->iso_code = $iso_code;
	}

	public function setCall_prefix($call_prefix){
		$this->call_prefix = $call_prefix;
	}

	public function setActive($active){
		$this->active = $active;
	}

	public function setContains_states($contains_states){
		$this->contains_states = $contains_states;
	}

	public function setNeed_identification_number($need_identification_number){
		$this->need_identification_number = $need_identification_number;
	}

	public function setNeed_zip_code($need_zip_code){
		$this->need_zip_code = $need_zip_code;
	}

	public function setZip_code_format($zip_code_format){
		$this->zip_code_format = $zip_code_format;
	}

	public function setDisplay_tax_label($display_tax_label){
		$this->display_tax_label = $display_tax_label;
	}

	/* getters */
	public function getId_country($id_country){
		 return $this->id_country;
	}

	public function getId_zone($id_zone){
		 return $this->id_zone;
	}

	public function getId_currency($id_currency){
		 return $this->id_currency;
	}

	public function getIso_code($iso_code){
		 return $this->iso_code;
	}

	public function getCall_prefix($call_prefix){
		 return $this->call_prefix;
	}

	public function getActive($active){
		 return $this->active;
	}

	public function getContains_states($contains_states){
		 return $this->contains_states;
	}

	public function getNeed_identification_number($need_identification_number){
		 return $this->need_identification_number;
	}

	public function getNeed_zip_code($need_zip_code){
		 return $this->need_zip_code;
	}

	public function getZip_code_format($zip_code_format){
		 return $this->zip_code_format;
	}

	public function getDisplay_tax_label($display_tax_label){
		 return $this->display_tax_label;
	}



}