<?php

class Ps_configuration{


	/* fields */
	private $id_configuration
	private $id_shop_group
	private $id_shop
	private $name
	private $value
	private $date_add
	private $date_upd

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_configuration($id_configuration){
		$this->id_configuration = $id_configuration;
	}

	public function setId_shop_group($id_shop_group){
		$this->id_shop_group = $id_shop_group;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setValue($value){
		$this->value = $value;
	}

	public function setDate_add($date_add){
		$this->date_add = $date_add;
	}

	public function setDate_upd($date_upd){
		$this->date_upd = $date_upd;
	}

	/* getters */
	public function getId_configuration($id_configuration){
		 return $this->id_configuration;
	}

	public function getId_shop_group($id_shop_group){
		 return $this->id_shop_group;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getValue($value){
		 return $this->value;
	}

	public function getDate_add($date_add){
		 return $this->date_add;
	}

	public function getDate_upd($date_upd){
		 return $this->date_upd;
	}



}