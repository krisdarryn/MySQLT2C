<?php

class Ps_category_group{


	/* fields */
	private $id_category
	private $id_group

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_category($id_category){
		$this->id_category = $id_category;
	}

	public function setId_group($id_group){
		$this->id_group = $id_group;
	}

	/* getters */
	public function getId_category($id_category){
		 return $this->id_category;
	}

	public function getId_group($id_group){
		 return $this->id_group;
	}



}