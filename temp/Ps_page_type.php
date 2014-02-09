<?php

class Ps_page_type{


	/* fields */
	private $id_page_type
	private $name

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_page_type($id_page_type){
		$this->id_page_type = $id_page_type;
	}

	public function setName($name){
		$this->name = $name;
	}

	/* getters */
	public function getId_page_type($id_page_type){
		 return $this->id_page_type;
	}

	public function getName($name){
		 return $this->name;
	}



}