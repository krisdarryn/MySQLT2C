<?php

class Ps_attribute_group{


	/* fields */
	private $id_attribute_group
	private $is_color_group
	private $group_type
	private $position

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_attribute_group($id_attribute_group){
		$this->id_attribute_group = $id_attribute_group;
	}

	public function setIs_color_group($is_color_group){
		$this->is_color_group = $is_color_group;
	}

	public function setGroup_type($group_type){
		$this->group_type = $group_type;
	}

	public function setPosition($position){
		$this->position = $position;
	}

	/* getters */
	public function getId_attribute_group($id_attribute_group){
		 return $this->id_attribute_group;
	}

	public function getIs_color_group($is_color_group){
		 return $this->is_color_group;
	}

	public function getGroup_type($group_type){
		 return $this->group_type;
	}

	public function getPosition($position){
		 return $this->position;
	}



}