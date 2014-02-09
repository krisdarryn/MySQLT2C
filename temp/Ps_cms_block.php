<?php

class Ps_cms_block{


	/* fields */
	private $id_cms_block
	private $id_cms_category
	private $location
	private $position
	private $display_store

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_cms_block($id_cms_block){
		$this->id_cms_block = $id_cms_block;
	}

	public function setId_cms_category($id_cms_category){
		$this->id_cms_category = $id_cms_category;
	}

	public function setLocation($location){
		$this->location = $location;
	}

	public function setPosition($position){
		$this->position = $position;
	}

	public function setDisplay_store($display_store){
		$this->display_store = $display_store;
	}

	/* getters */
	public function getId_cms_block($id_cms_block){
		 return $this->id_cms_block;
	}

	public function getId_cms_category($id_cms_category){
		 return $this->id_cms_category;
	}

	public function getLocation($location){
		 return $this->location;
	}

	public function getPosition($position){
		 return $this->position;
	}

	public function getDisplay_store($display_store){
		 return $this->display_store;
	}



}