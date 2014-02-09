<?php

class Ps_group_reduction{


	/* fields */
	private $id_group_reduction
	private $id_group
	private $id_category
	private $reduction

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_group_reduction($id_group_reduction){
		$this->id_group_reduction = $id_group_reduction;
	}

	public function setId_group($id_group){
		$this->id_group = $id_group;
	}

	public function setId_category($id_category){
		$this->id_category = $id_category;
	}

	public function setReduction($reduction){
		$this->reduction = $reduction;
	}

	/* getters */
	public function getId_group_reduction($id_group_reduction){
		 return $this->id_group_reduction;
	}

	public function getId_group($id_group){
		 return $this->id_group;
	}

	public function getId_category($id_category){
		 return $this->id_category;
	}

	public function getReduction($reduction){
		 return $this->reduction;
	}



}