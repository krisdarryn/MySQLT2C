<?php

class Ps_currency_shop{


	/* fields */
	private $id_currency
	private $id_shop
	private $conversion_rate

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_currency($id_currency){
		$this->id_currency = $id_currency;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setConversion_rate($conversion_rate){
		$this->conversion_rate = $conversion_rate;
	}

	/* getters */
	public function getId_currency($id_currency){
		 return $this->id_currency;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getConversion_rate($conversion_rate){
		 return $this->conversion_rate;
	}



}