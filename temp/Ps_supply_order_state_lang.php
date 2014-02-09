<?php

class Ps_supply_order_state_lang{


	/* fields */
	private $id_supply_order_state
	private $id_lang
	private $name

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_supply_order_state($id_supply_order_state){
		$this->id_supply_order_state = $id_supply_order_state;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setName($name){
		$this->name = $name;
	}

	/* getters */
	public function getId_supply_order_state($id_supply_order_state){
		 return $this->id_supply_order_state;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getName($name){
		 return $this->name;
	}



}