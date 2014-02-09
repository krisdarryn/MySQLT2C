<?php

class Ps_carrier_lang{


	/* fields */
	private $id_carrier
	private $id_shop
	private $id_lang
	private $delay

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_carrier($id_carrier){
		$this->id_carrier = $id_carrier;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setDelay($delay){
		$this->delay = $delay;
	}

	/* getters */
	public function getId_carrier($id_carrier){
		 return $this->id_carrier;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getDelay($delay){
		 return $this->delay;
	}



}