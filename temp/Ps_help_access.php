<?php

class Ps_help_access{


	/* fields */
	private $id_help_access
	private $label
	private $version

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_help_access($id_help_access){
		$this->id_help_access = $id_help_access;
	}

	public function setLabel($label){
		$this->label = $label;
	}

	public function setVersion($version){
		$this->version = $version;
	}

	/* getters */
	public function getId_help_access($id_help_access){
		 return $this->id_help_access;
	}

	public function getLabel($label){
		 return $this->label;
	}

	public function getVersion($version){
		 return $this->version;
	}



}