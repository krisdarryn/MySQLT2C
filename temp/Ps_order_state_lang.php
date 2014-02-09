<?php

class Ps_order_state_lang{


	/* fields */
	private $id_order_state
	private $id_lang
	private $name
	private $template

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_order_state($id_order_state){
		$this->id_order_state = $id_order_state;
	}

	public function setId_lang($id_lang){
		$this->id_lang = $id_lang;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setTemplate($template){
		$this->template = $template;
	}

	/* getters */
	public function getId_order_state($id_order_state){
		 return $this->id_order_state;
	}

	public function getId_lang($id_lang){
		 return $this->id_lang;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getTemplate($template){
		 return $this->template;
	}



}