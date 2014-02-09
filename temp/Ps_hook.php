<?php

class Ps_hook{


	/* fields */
	private $id_hook
	private $name
	private $title
	private $description
	private $position
	private $live_edit

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_hook($id_hook){
		$this->id_hook = $id_hook;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setTitle($title){
		$this->title = $title;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	public function setPosition($position){
		$this->position = $position;
	}

	public function setLive_edit($live_edit){
		$this->live_edit = $live_edit;
	}

	/* getters */
	public function getId_hook($id_hook){
		 return $this->id_hook;
	}

	public function getName($name){
		 return $this->name;
	}

	public function getTitle($title){
		 return $this->title;
	}

	public function getDescription($description){
		 return $this->description;
	}

	public function getPosition($position){
		 return $this->position;
	}

	public function getLive_edit($live_edit){
		 return $this->live_edit;
	}



}