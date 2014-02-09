<?php

class Ps_alias{


	/* fields */
	private $id_alias
	private $alias
	private $search
	private $active

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_alias($id_alias){
		$this->id_alias = $id_alias;
	}

	public function setAlias($alias){
		$this->alias = $alias;
	}

	public function setSearch($search){
		$this->search = $search;
	}

	public function setActive($active){
		$this->active = $active;
	}

	/* getters */
	public function getId_alias($id_alias){
		 return $this->id_alias;
	}

	public function getAlias($alias){
		 return $this->alias;
	}

	public function getSearch($search){
		 return $this->search;
	}

	public function getActive($active){
		 return $this->active;
	}



}