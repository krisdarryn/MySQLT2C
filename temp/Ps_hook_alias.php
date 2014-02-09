<?php

class Ps_hook_alias{


	/* fields */
	private $id_hook_alias
	private $alias
	private $name

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_hook_alias($id_hook_alias){
		$this->id_hook_alias = $id_hook_alias;
	}

	public function setAlias($alias){
		$this->alias = $alias;
	}

	public function setName($name){
		$this->name = $name;
	}

	/* getters */
	public function getId_hook_alias($id_hook_alias){
		 return $this->id_hook_alias;
	}

	public function getAlias($alias){
		 return $this->alias;
	}

	public function getName($name){
		 return $this->name;
	}



}