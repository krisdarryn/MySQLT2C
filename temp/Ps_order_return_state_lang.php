<?php

class Ps_order_return_state_lang{


	/* fields */
	private $id_order_return_state
	private $id_lang
	private $name

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_order_return_state($id_order_return_state){
		$this->id_order_return_state = $id_order_return_state;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setName($name){
		$this->name = $name;
	}

	/* getters */
	public function getId_order_return_state($id_order_return_state){
		 return $this->id_order_return_state;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getName($name){
		 return $this->name;
	}



}