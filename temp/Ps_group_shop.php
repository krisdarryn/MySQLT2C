<?php

class Ps_group_shop{


	/* fields */
	private $id_group
	private $id_shop

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_group($id_group){
		$this->id_group = $id_group;
	}

	public function setId_shop($id_shop){
		$this->id_shop = $id_shop;
	}

	/* getters */
	public function getId_group($id_group){
		 return $this->id_group;
	}

	public function getId_shop($id_shop){
		 return $this->id_shop;
	}



}