<?php

class Ps_search_index{


	/* fields */
	private $id_product
	private $id_word
	private $weight

	/* class constructor */
	public function __construct(){
	}

	/* settter */
	public function setId_product($id_product){
		$this->id_product = $id_product;
	}

	public function setId_word($id_word){
		$this->id_word = $id_word;
	}

	public function setWeight($weight){
		$this->weight = $weight;
	}

	/* getters */
	public function getId_product($id_product){
		 return $this->id_product;
	}

	public function getId_word($id_word){
		 return $this->id_word;
	}

	public function getWeight($weight){
		 return $this->weight;
	}



}