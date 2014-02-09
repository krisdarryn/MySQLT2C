<?php

class Ps_attribute{


	/* fields */
	private $id_attribute
	private $id_attribute_group
	private $color
	private $position

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_attribute($id_attribute){
		$this->id_attribute = $id_attribute;
	}

	public function setId_attribute_group($id_attribute_group){
		$this->id_attribute_group = $id_attribute_group;
	}

	public function setColor($color){
		$this->color = $color;
	}

	public function setPosition($position){
		$this->position = $position;
	}

	/* getters */
	public function getId_attribute($id_attribute){
		 return $this->id_attribute;
	}

	public function getId_attribute_group($id_attribute_group){
		 return $this->id_attribute_group;
	}

	public function getColor($color){
		 return $this->color;
	}

	public function getPosition($position){
		 return $this->position;
	}



}