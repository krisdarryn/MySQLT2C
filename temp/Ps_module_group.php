<?php

class Ps_module_group{


	/* fields */
	private $id_module
	private $id_shop
	private $id_group

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

	public function setId_group($id_group){
		$this->id_group = $id_group;
	}

	/* getters */
	public function getId_module($id_module){
		 return $this->id_module;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_group($id_group){
		 return $this->id_group;
	}



}