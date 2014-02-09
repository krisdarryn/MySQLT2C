<?php

class Ps_hook_module{


	/* fields */
	private $id_module
	private $id_shop
	private $id_hook
	private $position

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_module($id_module){
		$this->id_module = $id_module;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setId_hook($id_hook){
		$this->id_hook = $id_hook;
	}

	public function setPosition($position){
		$this->position = $position;
	}

	/* getters */
	public function getId_module($id_module){
		 return $this->id_module;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_hook($id_hook){
		 return $this->id_hook;
	}

	public function getPosition($position){
		 return $this->position;
	}



}