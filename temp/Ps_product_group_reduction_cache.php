<?php

class Ps_product_group_reduction_cache{


	/* fields */
	private $id_product
	private $id_group
	private $reduction

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setId_group($id_group){
		$this->id_group = $id_group;
	}

	public function setReduction($reduction){
		$this->reduction = $reduction;
	}

	/* getters */
	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getId_group($id_group){
		 return $this->id_group;
	}

	public function getReduction($reduction){
		 return $this->reduction;
	}



}