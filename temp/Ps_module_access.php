<?php

class Ps_module_access{


	/* fields */
	private $id_profile
	private $id_module
	private $view
	private $configure

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_profile($id_profile){
		$this->id_profile = $id_profile;
	}

	public function setId_module($id_module){
		$this->id_module = $id_module;
	}

	public function setView($view){
		$this->view = $view;
	}

	public function setConfigure($configure){
		$this->configure = $configure;
	}

	/* getters */
	public function getId_profile($id_profile){
		 return $this->id_profile;
	}

	public function getId_module($id_module){
		 return $this->id_module;
	}

	public function getView($view){
		 return $this->view;
	}

	public function getConfigure($configure){
		 return $this->configure;
	}



}