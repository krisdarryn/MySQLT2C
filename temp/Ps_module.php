<?php

class Ps_module{


	/* fields */
	private $id_module
	private $name
	private $active
	private $version

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_module($id_module){
		$this->id_module = $id_module;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setActive($active){
		$this->active = $active;
	}

	public function setVersion($version){
		$this->version = $version;
	}

	/* getters */
	public function getId_module($id_module){
		 return $this->id_module;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getActive($active){
		 return $this->active;
	}

	public function getVersion($version){
		 return $this->version;
	}



}