<?php

class Ps_tab{


	/* fields */
	private $id_tab
	private $id_parent
	private $class_name
	private $module
	private $position
	private $active

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_tab($id_tab){
		$this->id_tab = $id_tab;
	}

	public function setId_parent($id_parent){
		$this->id_parent = $id_parent;
	}

	public function setClass_name($class_name){
		$this->class_name = $class_name;
	}

	public function setModule($module){
		$this->module = $module;
	}

	public function setPosition($position){
		$this->position = $position;
	}

	public function setActive($active){
		$this->active = $active;
	}

	/* getters */
	public function getId_tab($id_tab){
		 return $this->id_tab;
	}

	public function getId_parent($id_parent){
		 return $this->id_parent;
	}

	public function getClass_name($class_name){
		 return $this->class_name;
	}

	public function getModule($module){
		 return $this->module;
	}

	public function getPosition($position){
		 return $this->position;
	}

	public function getActive($active){
		 return $this->active;
	}



}