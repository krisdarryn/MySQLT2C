<?php

class Ps_theme_specific{


	/* fields */
	private $id_theme
	private $id_shop
	private $entity
	private $id_object

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_theme($id_theme){
		$this->id_theme = $id_theme;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setEntity($entity){
		$this->entity = $entity;
	}

	public function setId_object($id_object){
		$this->id_object = $id_object;
	}

	/* getters */
	public function getId_theme($id_theme){
		 return $this->id_theme;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getEntity($entity){
		 return $this->entity;
	}

	public function getId_object($id_object){
		 return $this->id_object;
	}



}