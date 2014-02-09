<?php

class Ps_shop{


	/* fields */
	private $id_shop
	private $id_shop_group
	private $name
	private $id_category
	private $id_theme
	private $active
	private $deleted

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	public function setId_shop_group($id_shop_group){
		$this->id_shop_group = $id_shop_group;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setId_category($id_category){
		$this->id_category = $id_category;
	}

	public function setId_theme($id_theme){
		$this->id_theme = $id_theme;
	}

	public function setActive($active){
		$this->active = $active;
	}

	public function setDeleted($deleted){
		$this->deleted = $deleted;
	}

	/* getters */
	public function getId_shop($id_shop){
		 return $this->id_shop;
	}

	public function getId_shop_group($id_shop_group){
		 return $this->id_shop_group;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getId_category($id_category){
		 return $this->id_category;
	}

	public function getId_theme($id_theme){
		 return $this->id_theme;
	}

	public function getActive($active){
		 return $this->active;
	}

	public function getDeleted($deleted){
		 return $this->deleted;
	}



}